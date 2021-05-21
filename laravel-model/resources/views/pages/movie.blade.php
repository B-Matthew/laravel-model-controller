@extends('layouts.main-layout')
@section('content')
  <main>
    <h2>Film:</h2>
    <ul class="movielist">
      <li>[{{$movie -> id}}]</li>
      <li>{{$movie -> title}}</li>
      <li>{{$movie -> original_title}}</li>
      <li>{{$movie -> nationality}}</li>
      <li>{{$movie -> date}}</li>
      <li>{{$movie -> vote}}</li>
    </ul>
  @endsection
</main>
