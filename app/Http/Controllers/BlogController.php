<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BlogController extends Controller
{
    public function blogovi(Request $request)
    {
        $categories = BlogCategory::all();

        if ($request->has('kategorija')) {
            $kategorija = $request->input('kategorija');
            if ($kategorija) {
                $blogovi = Blog::whereHas('blogCategory', function ($query) use ($kategorija) {
                    $query->where('naziv', $kategorija);
                })->where('objavljen', 1)->get();
            } else {
                $blogovi = Blog::all()->where('objavljen', 1);
            }
        } else {
            $blogovi = Blog::all()->where('objavljen', 1);
        }

        $istaknuti_blogovi = BlogController::istaknuti();

        return view('blog.blogovi', [
            'blogovi' => $blogovi,
            'istaknuti_blogovi' => $istaknuti_blogovi,
            'title' => 'Блогови',
            'categories' => $categories,
        ]);
    }

    public function blog($id)
    {
        $blog = Blog::find($id);
        if (!$blog) {
            return abort(404);
        }

        return view('blog.blog', [
            'blog' => $blog,
            'title' => $blog->naslov,
        ]);
    }

    public static function istaknuti()
    {
        $blogovi = Blog::where('istaknut', 1)->where('objavljen', 1)->get();
        return $blogovi;
    }

    public function uputstva()
    {
        $blogovi = Blog::where('blog_category_id', 1)->where('objavljen', 1)->get();
        $title = 'Упутства';

        return view('blog.blogovi', [
            'blogovi' => $blogovi,
            'title' => $title,
            'categories' => BlogCategory::all(),
        ]);
    }

    //crud metode
    public function list()
    {
        $blogovi = Blog::all();

        return view('blog.list', [
            'blogovi' => $blogovi,
            'title' => 'Листа блогова',
        ]);
    }

    public function unesi()
    {
        return view('blog.unesi', [
            'title' => 'Унеси блог',
            'categories' => BlogCategory::all(),
        ]);
    }

    public function unesiSubmit(Request $request)
    {
        // Validate the request data
        $request->validate([
            'naslov' => 'required|string|max:255',
            'sadrzaj' => 'required',
            'kategorija' => 'required',
            'slika' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'objavljen' => 'required|boolean',
            'istaknut' => 'required|boolean',
        ]);

        // Debug output to check if the file is detected
        if ($request->hasFile('slika')) {
            $image = $request->file('slika');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/img');
            $image->move($destinationPath, $name);

            // Debug output to confirm file upload
            Log::info("File uploaded successfully: " . $name);
        } else {
            // Debug output to indicate no file was detected
            Log::info("No file uploaded.");
        }

        // Create a new blog entry
        $blog = new Blog();
        $blog->naslov = $request->input('naslov');
        $blog->sadrzaj = $request->input('sadrzaj');
        $blog->blog_category_id = $request->input('kategorija');
        $blog->slika = $name;
        $blog->objavljen = $request->input('objavljen');
        $blog->istaknut = $request->input('istaknut');
        $blog->save();

        return redirect(route('blog.list'))->with('info', 'Запис је унет.');
    }

    public function izmeni($id)
    {
        $blog = Blog::find($id);
        if (!$blog) {
            return abort(404);
        }

        return view('blog.izmeni', [
            'blog' => $blog,
            'title' => $blog->naslov,
            'categories' => BlogCategory::all(),
        ]);
    }

    public function izmeniSubmit(Request $request, $id)
    {
        $blog = Blog::find($id);
        if (!$blog) {
            return abort(404);
        }

        // Validate the request data
        $request->validate([
            'naslov' => 'required|string|max:255',
            'sadrzaj' => 'required',
            'kategorija' => 'required',
            'slika' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle the file upload
        if ($request->hasFile('slika')) {
            $image = $request->file('slika');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/img');
            $image->move($destinationPath, $name);

            // Delete the old image if a new one is uploaded
            if ($blog->slika) {
                $oldImagePath = public_path('/img/' . $blog->slika);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $blog->slika = $name;
        }

        $blog->naslov = $request->input('naslov');
        $blog->sadrzaj = $request->input('sadrzaj');
        $blog->blog_category_id = $request->input('kategorija');
        $blog->objavljen = $request->input('objavljen');
        $blog->istaknut = $request->input('istaknut');
        $blog->save();

        return redirect(route('blog.list'))->with('info', 'Запис је измењен.');
    }

    public function publish($id)
    {
        $blog = Blog::find($id);
        if (!$blog) {
            return abort(404);
        }
        $blog->objavljen = 1;
        $blog->save();

        return redirect(route('blog.list'));
    }

    public function unpublish($id)
    {
        $blog = Blog::find($id);
        if (!$blog) {
            return abort(404);
        }
        $blog->objavljen = 0;
        $blog->save();

        return redirect(route('blog.list'));
    }

    public function istakni($id)
    {
        $blog = Blog::find($id);
        if (!$blog) {
            return abort(404);
        }
        $blog->istaknut = 1;
        $blog->save();

        return redirect(route('blog.list'));
    }

    public function obrisi_istakni($id)
    {
        $blog = Blog::find($id);
        if (!$blog) {
            return abort(404);
        }
        $blog->istaknut = 0;
        $blog->save();

        return redirect(route('blog.list'));
    }

    public function obrisi($id)
    {
        $blog = Blog::find($id);
        if (!$blog) {
            return abort(404);
        }
        $blog->komentari()->delete();
        $blog->delete();

        return redirect(route('blog.list'));
    }
}
