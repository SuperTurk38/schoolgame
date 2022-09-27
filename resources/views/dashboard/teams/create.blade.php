@extends('dashboard/base')

@section('content')
<div class="container">

    <h2>Maak een nieuwe team aan!</h2>
    <form action="{{route('teams.store')}}" method="post">
        @csrf
        <div class="form-group m-3">
            <label for="">Wat is het team naam?</label>
            <input type="text" name="teamnaam">
        </div>
        <div class="form-group m-3">
            <label for="">Wie is de docent?</label>
            <input type="text" name="team_docent">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Maak nieuwe team!</button>
    </form>
</div>
@endsection

