@if($msg = session('success'))
    <div class="alert alert-success">
        {{ $msg }}
    </div>
@endif
