@extends('base')

@section('content')
<div class="max-w-xl rounded overflow-hidden shadow-lg mx-auto">
    <div class="px-6 py-4">
        
        <h2 class="mb-5 mt-2">{{ $recipe->title}}</h2>
        <img class="card-img-top mb-5" src="{{url('uploads/'.$recipe->filename)}}" alt="{{$recipe->original_filename}}">
        <h3 class="mt-2 mb-2">Ingredients</h3>
        <div class="text-grey-darker text-base">
            {!! nl2br(e($recipe->ingredients)) !!}
        </div>
        <hr />
        <h3 class="mt-6 mb-2">Description</h3>
        <div class="text-grey-darker text-base">
            {!! nl2br(e($recipe->description)) !!}
        </div>
        <hr /> 
        <h3 class="mt-6 mb-2">Instructions</h3>
        <div class="text-grey-darker text-base">
            {!! nl2br(e($recipe->instructions)) !!}
        </div>
        <hr>
        <h3 class="mb-2">Comments:</h3>
        @if ($recipe->comments()->count() > 0)
        @foreach ($recipe->comments as $comment)  
        <div class="max-w-lg rounded overflow-hidden shadow-md">
                <div class="px-6 py-4 mt-3">
                    <p class="text-grey-darker text-base">
                        {{ $comment->content }}<br><span class="text-xs">Posted on: {{ $comment->created_at->format('m-d-Y') }}</span>
                    </p>
                </div>
                </div> 
            <div>
            </div>
        @endforeach
        @else
            <p>
                There are no comments yet. Please consider leaving one below!
            </p>
        @endif
        <hr>
        <form action="{{ route('comments.store') }}" method="POST">
        {{ csrf_field() }}
            <h4 class="mb-2">Leave a Comment:</h4>
            <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker mb-3 leading-tight focus:outline-none focus:shadow-outline comment" name="content" rows="4"></textarea>
            <input type="hidden" value="{{ $recipe->id }}" name="recipe_id">
            <input type="submit" value="Submit" class="bg-green hover:bg-purple text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"/>
        </form>
    </div>
@endsection
