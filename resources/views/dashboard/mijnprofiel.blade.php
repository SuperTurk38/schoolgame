@extends('dashboard.base')
@section('content')
<div class="container">
    <h1>Mijn Account</h1>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name">
    </div>
    <div class="form-group">
        <label for="">Achternaam</label>
        <input type="text" name="achternaam">
    </div>
</div>

@endsection
