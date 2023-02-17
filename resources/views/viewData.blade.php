@extends('navbar')
@section('content')
    <table id="table">
        <tr>
            <th>Project Types</th>
        </tr>

        @forelse ($data as $key=>$data)
            <tr>
                <td>{{ $data->name }}</td>
            </tr>
        @empty
            No Data Found
        @endforelse
    </table>
@endsection
