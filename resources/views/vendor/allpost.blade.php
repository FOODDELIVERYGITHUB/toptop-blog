<div class="container-fluid">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-4">
            <h3 class="m-0">Featured</h3>
            <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
        </div>
        <div class="row">
            @foreach($posts as $post)
            <div class="col-md-3 mb-3">
                <div class="position-relative">
                        <div class="" style="height: 300px;" style="padding-bottom: 2px">
                            <img class="img-fluid w-100 h-100" src="{{Storage::url($post->cover)}}" style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-1" style="font-size: 13px;">
                                    
                                    <a class="text-white" href="">{{ $post ->title}}</a>
                                </div>
                                <a class="" href="{{ route('post', ['post' => $post->id]) }}">Read more →</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
     
    </div>
</div>