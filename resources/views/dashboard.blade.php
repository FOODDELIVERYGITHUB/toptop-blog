<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2> --}}
    {{-- </x-slot> --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-4 px-4 h-20 flex justify-between items-center">
                    <div class="text-gray-900 dark:text-gray-100">
                        Categories
                    </div>
                    <a href="{{ route('categories.index') }}"> <button class="btn btn-info">{{ __('View') }}</button></a>
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-4 px-4 h-20 flex justify-between items-center">
                    <div class="text-gray-900 dark:text-gray-100">
                        Tags
                    </div>
                    <a href="{{ route('tags.index') }}"> <button class="btn btn-info">{{ __('View') }}</button></a>
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-4 px-4 h-20 flex justify-between items-center">
                    <div class="text-gray-900 dark:text-gray-100">
                        Posts
                    </div>
                    <a href="{{ route('posts.index') }}"> <button class="btn btn-info">{{ __('View') }}</button></a>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="d-flex  justify-content-center">
                   
                       {{-- <div class="position-relative">
                           <div class="card">
                               <div class="card-header">
                                   <h2> Posts</h2>
                                   <div class="card-content">
                                       <h3>{{50}}<h3>
                                   </div>
                               </div>
                           </div>
                           <div class="card">
                               <div class="card-header">
                                   <h2>Tags</h2>
                                   <div class="card-content">
                                       <h3>{{50}}<h3>
                                   </div>
                               </div>
                           </div>
                           <div class="card">
                               <div class="card-header">
                                   <h2>Categories</h2>
                                   <div class="card-content">
                                       <h3>{{50}}<h3>
                                   </div>
                               </div>
                           </div>
                       </div> --}}
                   @include('posts.index')
                </div>
            </div>
        </div>
    </div>
    @include('footer')
</x-app-layout>