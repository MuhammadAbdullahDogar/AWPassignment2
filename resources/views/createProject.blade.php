@include('navbar');
<!DOCTYPE html>
<html lang="en">
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
       
    }

    * {
        box-sizing: border-box;
    }

    input[type=text],
    select,
    textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
    }

    input[type=submit] {
        background-color: #04AA6D;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button {
        background-color: #04AA6D;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    .container {
        margin-top: 10vh;
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
        width: 40vw;
        margin: 0 auto;
        box-sizing: border-box;

    }
    a{
        text-decoration: none;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>

<body>
    <div class="container">
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
                    No Data Found
                @endforelse
            </select></br>
            <input type="submit" value="Add Project" />
            <button><a href="view-project">View Project Details</a></button>
        </form>
    </div>

</body>

</html>
