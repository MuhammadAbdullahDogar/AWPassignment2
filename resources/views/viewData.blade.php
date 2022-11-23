<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ViewData</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>Project Types</th>
        </tr>

        @forelse ($data as $key=>$data)
        <tr>
            <td>{{$data->name}}</td>
        </tr>
        @empty
        No Data Found
        @endforelse
    </table>
</body>

</html>