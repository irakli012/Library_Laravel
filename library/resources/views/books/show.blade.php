@extends('layout')

@section('content')
@include('partials.search')

<a href="index.html" class="inline-block text-black ml-4 mb-4"
><i class="fa-solid fa-arrow-left"></i> Back
</a>
<div class="mx-4">
<div class="bg-gray-50 border border-gray-200 p-10 rounded">
    <div
        class="flex flex-col items-center justify-center text-center"
    >
        <img
            class="w-48 mr-6 mb-6"
            src="../media/book.png"
            alt=""
        />

        <h3 class="text-2xl mb-2">Title - {{$book['title']}}</h3>
        <div class="text-xl font-bold mb-4">Author - {{$book['author']}}</div>
        <ul class="flex"> 
            <li
                class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
            >
            {{$book['status']}}
            </li>
        </ul>
        
        <div class="border border-gray-200 w-full mb-6"></div>
        <div>
            <h3 class="text-3xl font-bold mb-4">
                Book Description
            </h3>
            <div class="text-lg space-y-6">
                <p>
                    DESCRIPTION
                </p>

                <x-card class="mt-4 p-2 flex space-x-6">
                    <a href="/books/{{$book->id}}/edit">
                        <i class="fa-solid fa-pencil"></i> Edit
                    </a>
                
                </x-card>
                
                   
                   <div  class="block bg-black text-white py-2 rounded-xl"> Release Date: {{$book['release_date']}}</dir>
                  
               
            </div>
            
        </div>
    </div>
</div>

</div>

 @endsection