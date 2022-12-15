<?php
foreach($_POST['kamoku'] as $kamoku){
//echo '<span>'. $kamoku . '</span> ';
//var_dump($kamoku);
$write_data = "{$kamoku} ";
var_dump($write_data);

$file = fopen('data/kamoku.txt','a');
flock($file, LOCK_EX);

fwrite($file, $write_data);

flock($file, LOCK_EX);
fclose($file);

// header('Location:kamoku.php');
// exit();
}
?>