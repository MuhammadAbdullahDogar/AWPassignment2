<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }

        .button {
            background-color: #4CAF50;
            /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .button3 {
            background-color: white;
            color: black;
            border: 2px solid #f44336;
        }

        .button2 {
            background-color: white;
            color: black;
            border: 2px solid #008CBA;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <table id="customers">
        <tr>
            <th>Project Name</th>
            <th>Project Location</th>
            <th>Project Updats</th>
            <th>Project Type</th>
            <th>Operactions</th>
        </tr>

        @forelse ($data as $key=>$data)
            <tr>
                <td>{{ $data->Pname }}</td>
                <td>{{ $data->Plocation }}</td>
                <td>{{ $data->Pupdates }}</td>
                <td>{{ $data->Ptype }}</td>
                <td><button class="button button3"><a
                            href="destroy-project/{{ $data->id }}">Delete</a></button><button
                        class="button button2"><a href="edit-project/{{ $data->id }}">Edit</a></button></td>
            </tr>
        @empty
            No Data Found
        @endforelse
    </table>
</body>

</html>
