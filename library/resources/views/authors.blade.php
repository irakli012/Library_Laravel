@extends('layout')

@section('content')
@include('partials.hero')
@include('partials.search')
<div class="bg-gray-50 border border-gray-200 rounded">
    <div class="grid grid-cols-2">
        @foreach ($authors as $author)
        <div class="author-card p-5 m-2">
            <ul> 
                <h3>{{ $author }}</h3>
                <img src="./media/author.jpeg" alt="" width="250" height="250">
            </ul>
        </div>
        @endforeach
    </div>
</div>
<div
class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
>
</div>
@endsection

