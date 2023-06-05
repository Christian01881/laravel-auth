@extends('layouts.app')

@section('content')
<div class="d-flex">
    <div class="minus">
        <img class="w-100" src="{{ $project->image }}" alt="">
    </div>
    <div class="major">
        <h1 class="mt-5 text-center">{{ $project->title }}</h1>
        <p class="mt-5 text-center">{{ $project->body }}</p>
    </div>
</div>

@endsection
