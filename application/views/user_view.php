<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Users View</title>
    </head>
    <body>

    <h1><?php
        foreach ($results as $object) {
            echo $object->idusers . ". username: " . $object->username . "; password: " . $object->password . "<br>";
        }
        ?></h1>

    </body>
</html>