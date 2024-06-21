@extends('layout.app')

@section('title', 'Home')

@section('content')
<div class="jumbotron">
  <h1 class="display-4">Welcome to Home Page</h1>
  <p class="lead">This is the home page of the Laravel 11 application.</p>
  <hr class="my-4">
  <p>More information about this application.</p>
  <a class="btn btn-primary btn-lg" href="/about" role="button">Learn more</a>
</div>
@endsection
