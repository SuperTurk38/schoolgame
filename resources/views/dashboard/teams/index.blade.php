@extends('dashboard/base')
@section('content')
<div class="container">
    <div class="col-sm">
        <table class="table table-striped">
            <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Team</th>
                <th scope="col">Docent</th>
            </tr>
            </thead>
            <tbody>
            @foreach($team as $teams)

                <tr>
                <th scope="row">{{ $teams->id }}</th>
                <td>{{ $teams->name }}</td>
                <td>{{$teams->team_docent}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
