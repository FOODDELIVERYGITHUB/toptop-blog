<div class="container-fluid py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="owl-carousel owl-carousel-2 carousel-item-1 position-relative mb-3 mb-lg-0 ">
                    @foreach($post as $posts)
                    <div class="position-relative overflow-hidden" style="height: 435px;">
                        <img class="img-fluid h-100" src="{{Storage::url($posts->filename)}}" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-1">
                                <a class="text-white" href="">Technology</a>
                                <span class="px-2 text-white">/</span>
                                <a class="text-white" href="">{{ $posts ->created_at}}</a>
                            </div>
                            <a class="h2 m-0 text-white font-weight-bold" href="{{`/posts/post/$posts->id`}}">{{$posts->title}}</a>
                        </div>
                    </div>
                  
                    @endforeach
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                    <h3 class="m-0">Categories</h3>
                    <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                </div>
                @foreach ($post as $posts)    
                <div class="position-relative overflow-hidden mb-3" style="height: 80px;">
                    <img class="img-fluid w-100 h-100" src="{{Storage::url($posts->filename)}}" style="object-fit: cover;">
                    <a href="" class="overlay align-items-center justify-content-center h4 m-0 text-white text-decoration-none">
                        {{$posts->category_id}}
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
            <h3 class="m-0">Featured</h3>
            <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
        </div>
        <div class="row">
            @foreach($post as $posts)
            <div class="col-md-3 mb-3">
                <div class="position-relative">
                        <div class="" style="height: 300px;" style="padding-bottom: 2px">
                            <img class="img-fluid w-100 h-100" src="{{Storage::url($posts->filename)}}" style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a class="text-white" href="">Technology</a>
                                    <span class="px-1 text-white">/</span>
                                    <a class="text-white" href="">{{ $posts ->created_at}}</a>
                                </div>
                                <a class="h4 m-0 text-white" href="{{url('/posts/post/{$posts->id}')}}">{{$posts->title}}</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
     
    </div>
</div>
Collapse
has context menu
Compose