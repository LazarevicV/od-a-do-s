@if ($message = Session::get('info'))
<div class="alert alert-info alert-block mt-4 d-flex justify-content-between align-items-center rounded" id="myAlert">
    <strong>{{ $message }}</strong>
    <button type="button" class="btn-close" aria-label="Close" onclick="closeAlert()"></button>
</div>
<script>
    function closeAlert() {
        document.getElementById('myAlert').remove();
    }
</script>
@endif
