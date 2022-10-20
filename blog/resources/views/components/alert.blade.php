<div class="alert alert-{{$theme}} alert-dismissible fade show" role="alert">
    {{$caption}}
    @if($closeable)
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    @endif
</div>