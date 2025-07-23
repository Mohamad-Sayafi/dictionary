<?php
require_once 'function.php';



function creat_tables()
{
  $sql = "CREATE TABLE IF NOT EXISTS `words` (
  `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `word` text NOT NULL,
  `translate` text NOT NULL)";
  mysqli_query(db_connection(), $sql);
}

creat_tables();
