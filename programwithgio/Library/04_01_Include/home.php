<!DOCTYPE html>
<html>
<head>
    <title>My Simple Website</title>
    <style>
        /* Style the navigation menu */
        nav {
            display: flex;
            justify-content: space-around;
            background-color: #333;
            padding: 10px;
        }

        /* Style the navigation links */
        nav a {
            color: white;
            text-decoration: none;
            padding: 5px 10px;
        }

        /* Change link color on hover */
        nav a:hover {
            color: lightgray;
        }
    </style>
</head>
<body>

<?php include './partials/nav.php' ?>

<h1>Welcome to My Simple Website</h1>
<p>This is the homepage content.</p>

</body>
</html>
