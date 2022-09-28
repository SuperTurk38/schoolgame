@extends('dashboard.base')

@section('content')
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <table class="table table-striped">
                        <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Aanpassen</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $teams as $team)
                            <tr>
                                <th scope="row">{{ $team->id }}</th>
                                <td>{{ $team->name }}</td>
                                <td><a href="{{route('teams.edit', $team->id)}}" class="btn btn-info">Aanpassen</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-sm">
                    <div class="card">
                        <img class="card-img-top" src="" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ Auth::user()->name }}</h5>
                            <p class="card-text">{{ Auth::user()->description }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <table class="table table-striped">
                        <thead class="table-dark">
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
