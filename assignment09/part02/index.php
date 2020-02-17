<!DOCTYPE html>
<head>
    <title>Assignment 9, Part 2</title>
</head>
<body>
    
    <?php
        //Task 3.1: Change these items to reflect
        //four of your favorite things
        $my_favorite_things = array (
            "My first favorite thing is my family.",
            "My second favorite thing is my facebook group.",
            "My third favorite thing is my friends.",
            "My fourth favorite thing is my laptop."
        );
        $counter = 0;
    ?>

    <h1>My Favorite Things</h1>
        <!-- Task 3.2: Code to output things below -->
        <?php
            do {
                echo $my_favorite_things[$counter]. "<br />";
                $counter++;
            } while ($counter < count($my_favorite_things))
        ?>
    </body>

