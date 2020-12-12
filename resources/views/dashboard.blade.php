@extends('layouts.master')

@section('content')

<h1>Dashboard Page | {{ auth()->id() }}</h1>

<div>
    <form action="/logout" method="post">
        @csrf
        <button class="btn btn-primary">Logout</button>
    </form>
</div>

@endsection