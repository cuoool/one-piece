@extends('layouts.admin')

@section('content')
    <div class="rounded overflow-hidden shadow bg-white">
        <div class="p-4">
            <div class="font-bold text-xl mb-2">Monga</div>
        </div>
        <div class="p-4">
            <form class="w-full max-w-xs" action="{{ url('admin/monga') }}" method="post">
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label class="block md:text-right mb-1 md:mb-0 pr-4" for="chapter">
                            Chapter
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" 
                            id="chapter"
                            name="chapter"
                            type="text">
                    </div>
                </div>
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label class="block md:text-right mb-1 md:mb-0 pr-4" for="chapter_name">
                            Title
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" 
                            id="chapter_name"
                            name="chapter_name"
                            type="text">
                    </div>
                </div>
                <div class="md:flex md:items-center">
                    <div class="md:w-1/3"></div>
                    <div class="md:w-2/3">
                        @csrf
                        <button class="bg-blue hover:bg-blue-dark text-white py-2 px-4 rounded">
                            Create
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection