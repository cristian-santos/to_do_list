@if($errors->any())
<div class="container-fluid">
    <div class="row">
        @foreach($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible">{{ $error}}
            @endforeach
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
@endif

@if(session('message'))
    <div class="container-fluid">
        <div class="row">
            <div class="alert alert-success alert-dismissible">{{ session('message')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
@endif
