@extends('layout')

@section('content')
@include('partials._hero')
@include('partials._search')

        @if (count($listings) == 0)
            <p>No listing found</p>
        @endif

        @foreach ($listings as $listing)
				<x-listing-card :listing="$listing" />
        @endforeach
    @endsection
