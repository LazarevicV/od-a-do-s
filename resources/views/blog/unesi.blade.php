@extends('layouts.public')
@section('content')

<div class="container my-5 col-6">
    <form action="{{ route('blog.unesiSubmit') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="naslov" class="form-label">Naslov:</label>
            <input type="text" class="form-control" name="naslov" required>
        </div>

        <div class="mb-3">
            <label for="sadrzaj" class="form-label">Sadržaj:</label>
            <textarea id="editor" name="sadrzaj" required></textarea>
        </div>

        <div class="mb-3">
            <label for="kategorija" class="form-label">Kategorija:</label>
            <input type="text" class="form-control" name="kategorija" required>
        </div>

        <div class="mb-3">
            <label for="slika" class="form-label">Slika:</label>
            <input type="text" class="form-control" name="slika" required>
        </div>

        <div class="mb-3">
            <label for="objavljen" class="form-label">Objavljen:</label>
            <select class="form-select" name="objavljen">
                <option value="0">Ne</option>
                <option value="1">Da</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="istaknut" class="form-label">Istaknut:</label>
            <select class="form-select" name="istaknut">
                <option value="0">Ne</option>
                <option value="1">Da</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Unesi</button>
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

@endsection