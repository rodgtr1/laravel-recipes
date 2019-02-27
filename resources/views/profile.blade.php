@extends('base')

@section('content')
    <div class="container mx-auto">
        <h1>{{ $user->name}}'s Profile</h1>
        <p>See what {{ $user->name}} has been up to</p>
        <div class="flex mb-4">
            <div class="w-1/2">
            
            </div>
            <div class="w-1/2">
            
            </div>
        </div>
    </div>
@endsection