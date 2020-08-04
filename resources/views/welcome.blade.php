@extends('layout')

@section('title', 'Welcome')

@section('content')

    <h1>{{ $name }}'s first website</h1>
<!--  <h1>Winston's first website is {!! $name !!}ed</h1> --> <!-- Do not escape $name. Be careful with this -->

    <ul>

        @foreach ($tasks as $task)

            <li>{{ $task }}</li>

        @endforeach

    </ul>

@endsection