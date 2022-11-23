<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica;
        }

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
            color: #555;
            transition: all 0.3s ease 0s;
        }

        header a:hover {
            color: #b2dfdb;
        }

        header button {
            padding: .3rem;
            border-radius: .3rem;
            border: 1px solid black;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <header>
        <h1 id="nav-title">Shoping Online</h1>

        <nav>
            <ul>
                <li>
                    <a>Add Project</a>
                </li>
                <li>
                    <a>View Project Details</a>
                </li>
            </ul>
        </nav>
</body>

</html>
