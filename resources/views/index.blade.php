<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        h1 {
            font-size: 2em;
            font-weight: bold;
            text-align: center;
            margin-top: 0.5em;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 10vh;
        }

        label {
            display: block;
            font-size: 1.5em;
        }

        input {
            border: 2px solid black;
            width: 20rem;
            height: 2.5rem;
            font-size: 1rem;

        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        h1 {
            font-size: 2em;
            font-weight: bold;
            text-align: center;
            margin-top: 0.5em;
        }

        /* .container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 10vh;
        } */

        .button {
            background-color: #4CAF50;
            /* Green */
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
        }

        .button1 {
            background-color: white;
            color: black;
            border: 2px solid #4CAF50;
        }

        .button1:hover {
            background-color: #4CAF50;
            color: white;
        }

        .button2 {
            background-color: white;
            color: black;
            border: 2px solid #008CBA;
        }

        .button2:hover {
            background-color: #008CBA;
            color: white;
        }

        a {

            text-decoration: none;

        }
    </style>
    <title>Project Type</title>
</head>

<body>
    <h1>Construction Company</h1>
    <div class="container">
        <form action="construction-Ptype" method="get">
            @csrf
            <label for="name">Project Type</label></br>
            <input type="text" name="name" /></br>
            <input type="submit" value="Add Project Type" /></br>


        </form>
        <div class="container">

        </br><button class="button button1"><a href="createProject">Add Project</a></button>
            <button class="button button2"><a href="view-Data">VIEW PROJECT TYPES</a></button>
        </div>
    </div>
</body>

</html>
