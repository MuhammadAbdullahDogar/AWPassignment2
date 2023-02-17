@extends('navbar')
@section('content')
    <table id="table">
        <tr>
            <th>Project Name</th>
            <th>Project Location</th>
            <th>Project Updates</th>
            <th>Project Type</th>
            <th>operations</th>
        </tr>

        @forelse ($data as $key=>$data)
            <tr>
                <td>{{ $data->Pname }}</td>
                <td>{{ $data->Plocation }}</td>
                <td>{{ $data->Pupdates }}</td>
                <td>{{ $data->Ptype }}</td>
                <td><button
                        onclick="document.location='destroy-project/{{ $data->id }}'">Delete</button><button
                       onclick="document.location='edit-project/{{ $data->id }}'">Edit</td>
            </tr>
        @empty
            No Data Found</br>
        @endforelse
    </table>
@endsection
