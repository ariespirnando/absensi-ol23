@if ($errors->any())
<div class="alert alert-danger">
    @foreach ($errors->all() as $items)
        {{ $items }}
    @endforeach
</div>
@endif

@if (Session::get('success'))
<div class="alert alert-success alert-dismissible fade show">
    {{ Session::get('success') }}
</div>
@endif
