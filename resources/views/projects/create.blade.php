@extends('layouts.app')

@section('content')

    <h1 class="text-2xl mb-5">Registro de proyecto</h1>

    <div class="w-96">
        <form action="{{ route('project.store') }}" method="POST">
            @csrf
            @include('projects._form')
        </form>
    </div>

@endsection()