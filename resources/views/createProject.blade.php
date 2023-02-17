@extends('navbar')
@section('content')
    <form action="create-project" method="get">
        @csrf
        <label for="Pname">Project Name</label></br>
        <input type="text" name="Pname" /></br>

        <label for="Plocation">Project Location</label></br>
        <input type="text" name="Plocation" /></br>




        <label for="Pupdates">Project Updated</label></br>
        <input type="text" name="Pupdates" /></br>

        <label for="pType">Project Type</label></br>
        <select name="Ptype">
            @forelse ($data as $key=>$data)
                <option value="{{ $data->name }}">{{ $data->name }}</option>
            @empty
                No Data Found</br>
            @endforelse
        </select></br>
        <input type="submit" value="Add Project" />
    </form>
@endsection
