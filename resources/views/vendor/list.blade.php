<div >
    <div class="owl-carousel owl-carousel-2 carousel-item-1 position-relative mb-3 mb-lg-0 ">
        @foreach ($posts as $post)
       
        <div class="position-relative overflow-hidden" style="height: 435px;">
            <img class="img-fluid h-100" src="{{ Storage::url($post->cover) }}" style="object-fit: cover;">
            <div class="overlay">
                <div class="mb-1">
                    <a class="text-white" href="">Technology</a>
                    <span class="px-2 text-white">/</span>
                    {{ \Carbon\Carbon::parse($post->created_at)->format('M d, Y') }}
                </div>
                <a class="" href="{{ route('post', ['post' => $post->id]) }}">Read more →</a>
            </div>
        </div>
        @endforeach
    </div>
    @include('vendor.allpost')
</div>
 

 