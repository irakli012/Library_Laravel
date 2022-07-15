
@extends('layout')
@section('content')

    <div
        class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24"
    >
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Post A Book
            </h2>
            <p class="mb-4">Add A New Book To Library</p>
        </header>

        <form action="/books" method="POST">
            @method('post')
            @csrf  
            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2"
                    >Book Name</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="title"
                    placeholder="Example: Harry Potter"
                    value="{{old('title')}}"
                />

                @error('title')
                    <p class="text-red500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="author"
                    class="inline-block text-lg mb-2"
                    >Author Full Name</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="author"
                    placeholder="Example: Joanne Rowling"
                    value="{{old('author')}}"
                />

                @error('author')
                    <p class="text-red500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="release_date" class="inline-block text-lg mb-2"
                    >Book Release Date</label
                >
                <input
                    type="date"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="release_date"
                    value="{{old('release_date')}}"
                />

                @error('release_date')
                    <p class="text-red500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="status" class="inline-block text-lg mb-2">
                    In Library
                </label>
                <input
                    type="radio"
                    id="status"
                    name="status"
                    value="1"
                    class="border border-gray-200 rounded p-2 w-full"
                />
                <label for="status" class="inline-block text-lg mb-2">
                    Out of stock
                </label>
                <input
                    type="radio"
                    id="status"
                    name="status"
                    value="0"
                    class="border border-gray-200 rounded p-2 w-full"
                />
                
                @error('status')
                    <p class="text-red500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="description"
                    class="inline-block text-lg mb-2"
                >
                    Book Description
                </label>
                <textarea
                    class="border border-gray-200 rounded p-2 w-full"
                    name="description"
                    rows="10"
                    placeholder="Description Of The Book"
                ></textarea>

                @error('description')
                    <p class="text-red500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button
                    class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                    type="submit"
                >
                    Create Book
                </button>

                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </div>

    @endsection