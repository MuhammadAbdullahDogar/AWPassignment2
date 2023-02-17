@extends('navbar')
@section('content')
    <form action="../update-project/{{ $project->id }}" method="get">
        @csrf
        <label for="Pname">Project Name</label></br>
        <input type="text" name="Pname" value="{{ $project->Pname }}" /></br>

        <label for="Plocation">Project Location</label></br>
        <input type="text" name="Plocation" value="{{ $project->Plocation }}" /></br>

        <label for="Pupdates">Project Updated</label></br>
        <input type="text" name="Pupdates" value="{{ $project->Pupdates }}" /></br>

        <label for="pType">Project Type</label></br>
        <select name="Ptype">
            @forelse ($data as $key=>$data)
                @if ($project->Ptype == $data->name)
                    <option value="{{ $data->name }}" selected>{{ $data->name }}</option>
                @else
                    <option value="{{ $data->name }}">{{ $data->name }}</option>
                @endif
            @empty
                No Data Found
            @endforelse
        </select></br>
        <input type="submit" value="Update Project" /></br>
    </form>
@endsection
