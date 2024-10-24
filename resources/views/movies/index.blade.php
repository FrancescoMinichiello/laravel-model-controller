@extends('layouts.app')
@section('page-title', 'Movies index')
@section('main-content')
    <div class="container my-5">
        <div class="row">
            <div class="col">
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Original Title</th>
                            <th scope="col">Nationality</th>
                            <th scope="col">Date</th>
                            <th scope="col">Vote</th>

                        </tr>
                    </thead>
                    @forelse ($movies as $movie)
                        <tbody>
                            <tr>
                                <th scope="row">{{ $movie->id }}</th>
                                <td>{{ $movie->id }}</td>
                                <td>{{ $movie->title }}</td>
                                <td>{{ $movie->original_title }}</td>
                                <td>{{ $movie->nationality }}</td>
                                <td>{{ $movie->vote }}</td>
                            </tr>
                        </tbody>
                    @empty
                    @endforelse
                </table>
            </div>
        </div>
    </div>
@endsection
