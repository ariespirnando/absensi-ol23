@if ($errors->any())
<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>

    @if($errors->count()>1)
        <ul>
            @foreach ($errors->all() as $items)
                <li>{{ $items }}</li>
            @endforeach
        <ul>
    @else
        @foreach ($errors->all() as $items)
            {{ $items }}
        @endforeach
    @endif


</div>
@endif

@if (Session::get('success'))
<div class="alert alert-success alert-dismissible fade show">
    {{ Session::get('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
