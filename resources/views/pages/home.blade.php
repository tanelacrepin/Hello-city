@extends('layouts.app')

@section('content')
       <img src="/images/quebec-flag.png" alt="Quebec Flag" class="mt-12 rounded shadow-md h-32">

       <h1 class="mt-5 text-3xl sm:text-5xl font-semibold text-indigo-600">Hello from Madagascar!!</h1>

       <p class="text-lg text-gray-800">Its's currently {{date('h:i A')}}.</p>
@endsection
