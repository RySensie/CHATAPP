@extends('layouts.navbar')
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
    body,h1 {font-family: "Raleway", sans-serif}
    body, html {height: 100%}
    .bgimg {
      background-image: url('/images/tech.jpg');
      min-height: 100%;
      background-position: center;
      background-size: cover;
    }
    </style>
<link rel="stylesheet" href="{{ asset('css/apps.css') }}">
@section('navbar-content')
<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
    <div class="w3-display-middle">
      <h1 class="w3-jumbo w3-animate-top">"Technology is best when it brings people together."</h1>
      <hr class="w3-border-grey" style="margin:auto;width:40%">
      <p class="w3-large w3-center">Matt Mullenweg</p>
    </div>
  </div>
@endsection
