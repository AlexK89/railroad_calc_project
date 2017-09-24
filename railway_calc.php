<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" sizes="192x192"  href="./img/android-icon-192x192.png">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Railroad constructor</title>
</head>
<body>
    <div class="page_header">
        <p><img src="./img/train.png" alt=""> Railroad Calculator</p>
    </div>
    <div class="container">
        <div class="components_section">
            <div class="header">
                <h4>Provide length you need</h4>
            </div>
            <form action="railway_calc.php" method="post">
                <div class="input_text">
                    <p>
                        <input type="text" placeholder="Length" name="length">
                    </p>
                </div>
                <p>
                    <input type="submit" name="submit_components_calc" class="submit_btn">
                </p>
            </form>
            <p class="result">
                <?php
                    require ("components_calc.php");
                ?>
            </p>
        </div>
        <div class="length_section">
            <div class="header">
                <h4>Available components</h4>
            </div>
            <form action="railway_calc.php" method="post">
                <div class="input_text">
                    <p>
                        <input type="text" placeholder="Amount of railings" name="railings">
                    </p>
                    <p>
                        <input type="text" placeholder="Amount of posts" name="posts">
                    </p>
                </div>
                <p>
                    <input type="submit" name="submit_length_calc" class="submit_btn">
                </p>
            </form>
            <p class="result">
                <?php
                    require ("length_calc.php");
                ?>
            </p>
        </div>
    </div>
</body>
</html>