@extends('base')

@section('content')
    <div class="container mx-auto">
        <div class="w-full max-w-lg mx-auto">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{ route('recipes.store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <h1 class="text-center mb-8">Post a Recipe</h1>
                <div class="mb-4">
                    <label class="block text-grey-darker text-sm font-bold mb-2" for="title">
                    Recipe Name
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline" id="title" type="text" name="title" placeholder="">
                </div>
                
                <div class="mb-4">
                    <label class="block text-grey-darker text-sm font-bold mb-2" for="ingredients">
                    Recipe Ingredients
                    </label>
                    <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker mb-3 leading-tight focus:outline-none focus:shadow-outline" name="ingredients" id="ingredients" rows="4"></textarea>
                </div>

                <div class="mb-4">
                    <label class="block text-grey-darker text-sm font-bold mb-2" for="description">
                    Recipe Description
                    </label>
                    <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker mb-3 leading-tight focus:outline-none focus:shadow-outline" name="description" id="description" rows="4"></textarea>
                </div>

                <div class="mb-4">
                    <label class="block text-grey-darker text-sm font-bold mb-2" for="instructions">
                    Recipe Instructions
                    </label>
                    <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker mb-3 leading-tight focus:outline-none focus:shadow-outline" name="instructions" id="instructions" rows="4"></textarea>
                </div>

                <div class="mb-4">
                    <label class="block text-grey-darker text-sm font-bold mb-2"  for="recipeimage">Recipe Image:</label>
                    <input id="recipe-image" type="file" class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker mb-3 leading-tight focus:outline-none focus:shadow-outline" name="recipeimage"/>
                </div>
                
                <div class="flex items-center justify-between">
                    <input type="submit" value="Submit Recipe" class="bg-green hover:bg-purple hover:text-white text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"/>
                </div>
            </form>
        </div>
    </div>
@endsection