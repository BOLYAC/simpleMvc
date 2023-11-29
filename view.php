<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple MVC</title>
</head>

<body>
    <div>
        <h1>Hi</h1>
        <?php
        $currentPage = basename($_SERVER['REQUEST_URI']);
        if ($currentPage === '') {
            echo '<div>I\'m on the homepage</div>';
        } else {
            echo '<div>I\'m in ' . $currentPage . '</div>';
        }
        ?>
    </div>
</body>

</html>