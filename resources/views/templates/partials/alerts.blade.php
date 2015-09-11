@if (Session::has('info'))
    <br>
    <div class="alert alert-success" role="alert">
        <span class="glyphicon glyphicon-saved" aria-hidden="true"></span>
        {{ Session::get('info') }}
    </div>
@endif