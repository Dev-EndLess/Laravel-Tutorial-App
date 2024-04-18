@extends('layout')

@section('content')
@include('partials._search')

<a href="/" class="bg-gray-50 ml-12 inline-block border border rounded-lg text-black p-2 mb-4
hover:border-red-500 hover:text-red-500 "
><i class="fa-solid fa-arrow-left hover:text-red-500"></i> <span class="text-xl">Back</span>
</a>
<div class="mx-12">
<div class="bg-gray-50 border border-gray-200 p-10 rounded">
    <div
        class="flex flex-col items-center justify-center text-center"
    >
        <img
            class="w-48 mr-6 mb-6"
            src="{{asset('images/no-image.png')}}"
            alt="no-image"
        />
        <h3 class="text-2xl mb-2">{{$listing->title}}</h3>
        <div class="text-xl font-bold mb-4">{{$listing->company}}</div>
        <ul class="flex">
            <li
                class="bg-black text-white rounded-xl px-3 py-1 mr-2"
            >
                <a href="#">Laravel</a>
            </li>
            <li
                class="bg-black text-white rounded-xl px-3 py-1 mr-2"
            >
                <a href="#">API</a>
            </li>
            <li
                class="bg-black text-white rounded-xl px-3 py-1 mr-2"
            >
                <a href="#">Backend</a>
            </li>
            <li
                class="bg-black text-white rounded-xl px-3 py-1 mr-2"
            >
                <a href="#">Vue</a>
            </li>
        </ul>
        <div class="text-lg my-4">
            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
        </div>
        <div class="border border-gray-200 w-full mb-6"></div>
        <div>
            <h3 class="text-3xl font-bold mb-4">
                Job Description
            </h3>
            <div class="text-lg justify-center items-center flex flex-col space-y-6">{{$listing->description}}
                <a
                    href="mailto:{{$listing->email}}"
                    class="w-full lg:w-1/2 bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"
                    ><i class="fa-solid fa-envelope"></i>
                    Contact Employer</a
                >
                <a
                    href="{{$listing->website}}"
                    target="_blank"
                    class="block w-full lg:w-1/2 bg-black text-white py-2 rounded-xl hover:opacity-80"
                    ><i class="fa-solid fa-globe"></i> Visit
                    Website</a
                >
            </div>
        </div>
    </div>
</div>
</div>

@endsection