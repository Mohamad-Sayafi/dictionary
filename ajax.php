<?php
require_once 'loader.php';
$connection = db_connection();

$word = $_POST['word'];
$type = $_POST['type'];

if ($type == 'en-fa') {
    $sql = "SELECT * FROM words WHERE `word` LIKE '$word%'";
} else {
    $sql = "SELECT * FROM words WHERE `translate` LIKE '$word%'";
}

$result = mysqli_query($connection, $sql);
$output = mysqli_fetch_all($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ul {
            list-style: none;
            padding: 0;
        }

        ul li {
            background-color: #f1f3f5;
            border: 1px solid #ced4da;
            border-radius: 0.5rem;
            padding: 1rem;
            margin-bottom: 0.75rem;
            font-size: 1rem;
            color: #343a40;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.03);
        }
    </style>
</head>

<body>

</body>

</html>
<ul>
    <?php
    foreach ($output as $item) {
        echo "<li>$item[1] $item[2]</li>";
    }
    ?>
</ul>