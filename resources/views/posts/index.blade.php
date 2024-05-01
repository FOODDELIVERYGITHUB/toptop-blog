@include('headers')

<div class="container-fluid">
    <div class="d-flex justify-content-between">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Posts') }}
        </h2>
        <a href="{{ route('posts.create') }}">
            <button class="btn btn-primary">{{ __('New') }}</button>
        </a>
    </div>
  

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col">Published</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        @foreach($posts as $post)
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg  px-4 h-20 flex justify-between items-center">
                <div class="text-gray-900 dark:text-gray-100">
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->category->name}}</td>
                        <td>{{$post->is_published}}</td>
                        <td class="flex"><a href="{{ route('posts.edit', ['post' => $post->id]) }}"> <i class="fas fa-pen"></i></a>
                        
                            <form method="post" action="{{ route('posts.destroy', ['post' => $post->id]) }}" class="inline">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <i class="fas fa-trash">
                                    
                                </i>
                            </form>    
                        </td> 
                    </tr>
                </div>
            </div>
        @endforeach
    </table>   
 
</div>
