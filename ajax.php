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
<ul>
<?php
foreach($output as $item){
    echo "<li>$item[1] $item[2]</li>";
}
?>
</ul>