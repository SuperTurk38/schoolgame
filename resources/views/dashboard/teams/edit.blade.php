@extends('dashboard/base')

@section('content')
    <div class="container">
        <h2>Pas een bestaande team aan!</h2>
        <form method="post" action="{{route('teams.update', $team->id)}}">
            @csrf
            @method("PUT")
            <div class="form-group m-3">
                <label for="name">Wat is het team naam?</label>
                <input type="text" name="name" value="{{$team->name}}">
            </div>
            <div class="form-group m-3">
                <label for="team_docent">Wie is de docent?</label>
                <input type="text" name="team_docent" value="{{$team->team_docent}}">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Aanpassen</button>
        </form>
    </div>
@endsection
