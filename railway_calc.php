<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="railway_calc.php" method="post">
    <h4>What length do you need?</h4>
    <p><input type="number" pattern="[0-9]" placeholder="Length" name="length" step=".1"></p>
    <p><input type="submit" name="submit_components_calc"></p>
</form>
<?php
    require ("components_calc.php");
?>
<form action="railway_calc.php" method="post">
    <h4>Available Railings</h4>
    <p><input type="number" pattern="[0-9]" placeholder="Amount of railings" name="railings""></p>
    <h4>Available Posts</h4>
    <p><input type="number" pattern="[0-9]" placeholder="Amount of posts" name="posts""></p>
    <p><input type="submit" name="submit_length_calc"></p>
</form>
<p class="result">
    <?php
        require ("length_calc.php");
    ?>
</p>
</body>
</html>