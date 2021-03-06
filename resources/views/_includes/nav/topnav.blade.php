<!-- Navigation -->
<nav class="flex items-center justify-between flex-wrap bg-green p-6">
    <div class="flex items-center flex-no-shrink text-white mr-10">
        <span class="font-semibold text-xl tracking-normal">Whole on a Budget</span>
    </div>
    <div class="block lg:hidden">
        <button class="flex items-center px-3 py-2 border rounded text-teal-lighter border-teal-light hover:text-white hover:border-white">
        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
        </button>
    </div>
    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
        <div class="text-md lg:flex-grow">
        <a href="{{ route('recipes.index') }}" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4">
            Recent
        </a>
        <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4">
            Examples
        </a>
        <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white">
            Blog
        </a>
        </div>
        <div>
        <a href="{{ route('recipes.create') }}" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-purple hover:bg-white mt-4 lg:mt-0">Post a Recipe</a>
        </div>
    </div>
</nav>  