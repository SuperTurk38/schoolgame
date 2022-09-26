@extends('dashboard.base')

@section('content')
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            @foreach( $teams as $team)
                                <th scope="row">1</th>
                                <td>{{ $team->name }}</td>
                            @endforeach
                        </tr>

                        </tbody>
                    </table>
                </div>
                <div class="col-sm">
                    <div class="card">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ Auth::user()->name }}</h5>
                            <p class="card-text">{{ Auth::user()->description }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
