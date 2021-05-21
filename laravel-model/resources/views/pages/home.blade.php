@extends('layouts.main-layout')
@section('content')
  <main>
    <h2>Lista dei Movies:</h2>
    <ul>
      @foreach ($movies as $movie)
        <li class="homelist">
          <a href="{{route('movie', $movie -> id)}}">
            [{{$movie -> id}}]
            {{$movie -> title}}
          </a>
        </li>
      @endforeach
    </ul>
  </main>
@endsection
