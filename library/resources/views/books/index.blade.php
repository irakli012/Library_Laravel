@extends('layout')

@section('content')
@include('partials.hero')
@include('partials.search')
<div
class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
>

@unless(count($books) == 0)
@foreach($books as $book)
<x-book_card :book="$book" />
@endforeach

@else
<p>no books found</p>
@endunless
</div>

<div class="mt-6 p-4">
    {{$books->links()}}
</div> 

@endsection
