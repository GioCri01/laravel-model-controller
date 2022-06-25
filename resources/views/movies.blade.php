@extends("layout.main")


@section("content")
    @foreach ($movies as $movie)
    <div class="card">
        <li>Titolo: {{ $movie->title }}</li>
        <li>Lingua: {{ $movie->nationality }}</li>
        <li>Voto: {{ $movie->vote }}</li>
    </div>
    @endforeach
@endsection
