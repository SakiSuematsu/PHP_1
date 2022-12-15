<?php

$todo = $_POST['todo'];
$deadline = $_POST['deadline'];
$gakunen = $_POST['gakunen'];

$write_data = "{$deadline} {$todo} {$gakunen}\n";

$file = fopen('data/todo.txt','a');
flock($file, LOCK_EX);

fwrite($file, $write_data);

flock($file, LOCK_EX);
fclose($file);

header('Location:todo_txt_input.php');
exit();