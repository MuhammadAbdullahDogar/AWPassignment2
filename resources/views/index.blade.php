@extends('navbar')
@section('content')
    <form action="construction-Ptype" method="get">
        @csrf
        <label for="name">Project Type</label></br>
        <input type="text" name="name" /></br>
        <input type="submit" value="Add" /></br>
    </form>
@endsection
