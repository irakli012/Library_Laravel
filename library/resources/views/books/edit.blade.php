@extends('layout')
@section('content')

    <div
        class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24"
    >
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Edit A Book
            </h2>
            <p class="mb-4">Edit: {{$book->title}}</p>
        </header>

        <form action="/books/{{$book->id}}/update" method="put">
            @csrf  
            @method('PUT')
           
            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2"
                    >Book Name</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="title"
                    placeholder="Example: Harry Potter"
                    value="{{$book->title}}"
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
                    value="{{$book->author}}"
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
                    value="{{$book->release_date}}"
                />

                @error('release_date')
                    <p class="text-red500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            {{-- <div class="mb-6">
                <label for="status" class="inline-block text-lg mb-2">
                    In Library
                </label>
                <input
                    type="radio"
                    id="status"
                    name="status_off"
                    value="In Library"
                    class="border border-gray-200 rounded p-2 w-full"
                />
                <label for="status" class="inline-block text-lg mb-2">
                    Out of stock
                </label>
                <input
                    type="radio"
                    id="status"
                    name="status_on"
                    value="Out of Stock"
                    class="border border-gray-200 rounded p-2 w-full"
                /> --}}
            <div>
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
                >
                {{$book->description}}
                </textarea>

                @error('description')
                    <p class="text-red500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="edit-btns">
                <button
                    class="text-black rounded py-2 px-4"
                    type="submit"
                >
                    Update Book
                </button>

                <a href="/" class="text-black ml-4"> Back </a>
                
                <form action="{{ url('book-delete', $book->id) }}" method="POST">
                    @method('delete')
                    @csrf
                    <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black ml-4">Delete Book</button>
                </form>
            </div>
        </form>
    </div>
    @endsection