<x-app-layout name="header">
    <div class="d-flex justify-content-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Tags') }}
            </h2>
            <a href="{{ route('tags.create') }}">
                <button class="btn btn-info">{{ __('New') }}</button>
            </a>
        </div>

    <table  class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        @foreach($tags as $tag)
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-4 px-4 h-20 flex justify-between items-center">
            <div class="text-gray-900 dark:text-gray-100">
                <tr>
                    <td>{{ $tag->id}}</td>
                    <td>{{$tag->name}}</td>
                    <td>
                        <div class="space-x-2">
                            <a href="{{ route('tags.edit', ['tag' => $tag->id]) }}"> <i class="fas fa-pen"></i></a>
                            <form method="post" action="{{ route('tags.destroy', ['tag' => $tag->id]) }}" class="inline">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <i class="fas fa-trash">
                                    
                                </i>
                            </form>
                        </div>
                    </td>
                </tr>
            </div>
        </div>
        @endforeach
    </table>
    
    @extends('footer')
</x-app-layout>