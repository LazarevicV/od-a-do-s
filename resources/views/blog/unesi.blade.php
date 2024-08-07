@extends('layouts.public')
@section('content')

<div class="container pt-4 pb-4">
    <h1>{{$title}}</h1>
    <form action="{{ route('blog.unesiSubmit') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="naslov" class="form-label">Наслов:</label>
            <input type="text" class="form-control" name="naslov" required>
        </div>

        <div class="mb-3">
            <label for="sadrzaj" class="form-label">Садржај:</label>
            <textarea id="editor" name="sadrzaj" required></textarea>
        </div>

        <div class="mb-3">
            <label for="kategorija" class="form-label">Категорија:</label>
            {{-- <input type="text" class="form-control" name="kategorija" required> --}}
            <select name="kategorija" class="form-control">
                @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->naziv}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="slika" class="form-label">Слика:</label>
            <input type="file" class="form-control" name="slika" required>
        </div>

        <div class="mb-3">
            <label for="objavljen" class="form-label">Објављен:</label>
            <select class="form-select" name="objavljen">
                <option value="0">Не</option>
                <option value="1">Да</option>
            </select>
        </div>

        <div class="container">
            <div class="mb-3">
                <label for="istaknut" class="form-label">Истакнути:</label>
                <select class="form-select" name="istaknut">
                    <option value="0">Не</option>
                    <option value="1">Да</option>
                </select>
            </div>

            <div class="mb-3">
                <div class="row justify-content-center">
                    <button type="submit" class="col-2 mx-1 btn btn-primary prosiri_dugme">Унеси</button>
                    <a href="{{route('blog.list')}}" class="col-2 mx-1 btn btn-link prosiri_dugme"
                        style="border: 1px solid #214252;">Откажи</a>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    tinymce.init({
        selector: '#editor',
        setup: function (editor) {
            editor.on('change', function () {
                editor.save();
            });
        },
        plugins: 'code powerpaste casechange importcss searchreplace autolink advcode visualblocks visualchars fullscreen image link media mediaembed template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists checklist wordcount tinymcespellchecker a11ychecker imagetools textpattern noneditable help formatpainter permanentpen pageembed charmap mentions quickbars linkchecker advtable',
        menubar: 'edit view insert format tools table tc',
        toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent | numlist bullist checklist | forecolor backcolor casechange permanentpen formatpainter removeformat | charmap | fullscreen code | insertfile image media pageembed link anchor'
    });
</script>

<style>
    @media only screen and (max-width: 750px) {
        .prosiri_dugme {
            width: 45%;
            margin: 0 auto;
        }
    }
</style>

@endsection
