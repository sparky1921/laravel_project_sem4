<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Blog</title>
    <style>
        * {
            font-family: "trebuchet ms", verdana, sans-serif;
            line-height: 1.5em;
            color: #333;
            margin: 0;
            padding: 0;
            text-align: center;
            width: 100%;
        }

        body {
            background-color: #eee1d1;
        }
        h1 {
            background-color: #1a202c;
            color: white;
        }

        .main ul {
            list-style-type: none;
            background-color: #bfb2a7;
        }

        .main li {
            display: inline;
            margin: 0 20px;
        }

        a:link {
            text-decoration: none;
            color: #000;
        }

        a:visited {
            text-decoration: none;
            color: #000;
        }

        a:hover, a:active {
            text-decoration: none;
            color: #000;
        }

        .sidenav {
            text-align: left;
            background-color: #1a202c;
            color: white;
            width: 200px;
        }
        .side.ul {
            list-style-type: none;

        }

        .side.li {
            display: block;
            margin: 0 20px;
        }
    </style>
</head>

<h1>Tech Blog</h1>
<nav class="main">
    <ul>
        <li><a href="home.blade.php">Home</a></li>
        <li><a href="login.blade.php">Log In</a></li>
        <li><a href="create.blade.php">New Blog</a></li>
        <li><a href="myblogs.blade.php">My Blogs</a></li>
    </ul>
</nav>

<body>

<nav class="sidenav">
    <h3>Categories</h3>
    <ul>
        <li class="sidelist"><a href=#>1</a></li>
        <li class="sidelist"><a href=#>2</a></li>
        <li class="sidelist"><a href=#>3</a></li>
        <li class="sidelist"><a href=#>4</a></li>
    </ul>
</nav>

<div>
    @yield('content')
</div>

</body>
</html>
