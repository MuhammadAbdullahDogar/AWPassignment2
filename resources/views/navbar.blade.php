<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ url('css/globalCss.css') }}">
    <style>
        header li {
            list-style: none;
            display: inline-block;
            padding: 0 1.5rem;
        }

        header {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            padding: .7rem 4rem;
            box-shadow: 0 1px 8px #ddd;
        }

        #nav-title {
            margin-right: auto;
            font-size: 1.5em;
        }

        header li {
            list-style: none;
            display: inline-block;
            padding: 0 20px;
        }

        header a {
            text-decoration: none;
            color: black;
            transition: all 0.3s ease 0s;
            cursor: pointer;
        }

        header a:hover {
            color: gray;
            font-weight: 600;
        }

        header button {
            padding: .3rem;
            border-radius: .3rem;
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <header>
        <h1 id="nav-title">Construction Company</h1>
        <nav>
            <ul>
                <li><a href="../company">Add Project Type</a></li>
                <li><a href="../view-Data">View Project Types</a></li>
                <li><a href="../createProject">Add Project</a></li>
                <li><a href="../view-project">View Project</a></li>
            </ul>
        </nav>
    </header>
</body>
<div class="container">
    @yield('content')
</div>

</html>
