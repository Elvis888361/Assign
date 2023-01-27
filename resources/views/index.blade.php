
@extends('layouts.app')

@section('content')

<div class="background-image grid grid-cols-1 m-auto">
    <div class="flex text-gray-100 pt-10">
        <div class="m-auto pt-4 pd-14 sm:m auto w-4/5 block text-center">
            <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pd-14">
                I am a frontend/Backend Developer
            </h1>
            <a href="/blog" class="text-center bg-gray-50 text-gray-700  px-4 font-bold text-xl uppercase">Read More</a>
        </div>
    </div>
</div>
<div class="sm:grid grid-cols-2 gap-20 w-25 mx-auto py-15 border-border-gray-200">
    <div>
        <img src="https://cdn.pixabay.com/photo/2021/07/31/15/02/hacker-6512174_960_720.jpg" width="700" alt="">
    </div>
    <div class="m-auto sm:m-auto text-left w-4/5 block">
        <h2 class="text-3xl font-extrabold text-gray-600">
            How to become a better Developer
        </h2>
        <p class="py-8 text-gray-500 text-s">
            The first step in learning something is recognizing that you don’t know it. That sounds obvious, but experienced programmers remember how long it took to overcome this personal assumption.
        </p>
        <p class="font-extrabold text-gray-600 text-s pb-9">
            To become great—not just good—you have to learn from experience. But be careful, experience can teach us to repeat poor behavior and to create bad habits.
        </p>
        <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">Find Out More</a>
    </div>
</div>
<div class="text-center p-15 bg-black text-white">
    <h2 class="text-2xl pb-5 text-l">
        i'm an expert in ...
    </h2>
    <span class="font-extrabold block text-4xl py-1">
        Web development
    </span>
    <span class="font-extrabold block text-4xl py-1">
        Mobile development
    </span>
    <span class="font-extrabold block text-4xl py-1">
        Data Science
    </span>
    <span class="font-extrabold block text-4xl py-1">
       Project Management
    </span>
</div>
@endsection
