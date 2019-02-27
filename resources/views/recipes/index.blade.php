@extends('base')

@section('content')
    <div class="flex flex-wrap mb-5">
        @foreach ($recipes as $recipe)

            <div class="w-full sm:w-1/2 md:w-1/3 mb-4 p-4">
                <a href="{{ route('recipes.show', $recipe->id) }}"><img class="card-img-top" src="{{url('uploads/'.$recipe->filename)}}" alt="{{$recipe->original_filename}}"></a>
                <h2 class="mb-2 mt-2"><a href="{{ route('recipes.show', $recipe->id) }}">{{ $recipe->title}}</a></h2>
                <div class="text-xs mb-2">Submitted on: {{ $recipe->created_at->format('m/d/Y') }}</div>
                <div class="text-grey-darker text-base">
                    {!! \Illuminate\Support\Str::words($recipe->description, 15) !!}
                </div>
            </div>
        @endforeach
    <div class="mt-4 flex justify-center" style="width:100%;"> {{ $recipes->links('vendor.pagination.tailwind') }}
    </div>
@endsection