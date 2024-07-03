@extends('layouts.app')

@section('title', 'Kategori')

@section('sidebar_kategori')
<li class="text-white bg-gray-700 rounded-lg p-2">
    <a href="{{ url('/kategori') }}" class="flex items-center justify-start">
        <i class='bx bxs-cog text-white'></i>
        <span class="ml-2">Kategori</span>
    </a>
</li>
@endsection

@section('content')
<main class="flex-1 bg-white p-8">
    <!-- Your Kategori Content Here -->
    <h1>Kategori</h1>
</main>
@endsection
