@include('headers')
@extends('layout')

@section('title')
<title>{{$post->title}} | TopTop</title>
@endsection

@section('content')
<div class="container-fluid" >
    <div class="row">
        <div class="col-lg-8">
            <div class="position-relative mb-3">
                <img class="img-fluid h-40" style="object-fit: cover;" src="{{Storage::url( '.$post->cover)}}" alt="..." />
                <h1 class="mt-5 mb-2 text-center text-2xl font-bold">{{ $post->title }}</h1>
                <p class="mb-5 text-center text-sm text-slate-500 italic">By {{ $post->user->name }} | {{ \Carbon\Carbon::parse($post->created_at)->format('M d, Y') }}</p>
        
                <div>{!! $post->content !!}</div>
        
                <div class="my-5">
                    @foreach ($post->tags as $tag)
                    <a href="{{ route('tag', ['tag' => $tag->id]) }}" class="text-blue-500 hover:underline mr-3">{{ $tag->name }}</a>
                    @endforeach
                </div>
        
                <hr>
        
                <!-- Related posts -->
        
                <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-4">
                    <h3 class="m-0">Related Posts</h3>
                </div>
                <div class="row">
                    @foreach ($related_posts as $post)
                    
                    <div class="col-md-3 mb-3">
                        <div class="position-relative">
                                <div class="" style="height: 300px;" style="padding-bottom: 2px">
                                    <img class="img-fluid w-100 h-100" src="{{Storage::url($post->cover)}}" style="object-fit: cover;">
                                    <div class="overlay">
                                        <div class="mb-1" style="font-size: 13px;">
                                         
                                            <p class="text-base text-white">
                                                {{ Str::limit(strip_tags($post->content), 150, '...') }}
                                            </p>
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
        <div class="col-lg-4 pt-3 pt-lg-0">
            <div class="pb-3">
                @include('vendor.sidebar')
            </div>
        </div>
    </div>
</div>
@endsection