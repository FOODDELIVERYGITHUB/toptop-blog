<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Categories') }}
            </h2>
            <a href="{{ route('categories.create') }}">
                <button class="btn btn-success">{{ __('New') }}</button>
            </a>
        </div>
    </x-slot>
    <table  class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        @foreach($categories as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td>
                <div class="space-x-2">
                    <a href="{{ route('categories.edit', ['category' => $category->id]) }}"> <i class="fas fa-pen"></i></a>
                    <form method="post" action="{{ route('categories.destroy', ['category' => $category->id]) }}" class="inline">
                        {{ csrf_field() }}
                        {{ method_field('DELETE')}}
                                <x-danger-button>
                                    <i class="fas fa-trash">
                                        {{ __('Delete') }}
                                    </i>
                                </x-danger-button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </table>
   
    @include('footer')
</x-app-layout>