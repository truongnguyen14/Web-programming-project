<?php
if (!empty($_POST['section'])){
							$select = $_POST['section']; 
if ($select == 'privacy'){
$comment =$_POST["comment"];
$file = 'privacy.txt';
file_put_contents($file, $comment);
header('Location: admin.php');
}if ($select == 'Tos'){
$comment =$_POST["comment"];
$file = 'Tos.txt';
file_put_contents($file, $comment);
header('Location: admin.php');
}if ($select == 'copyright'){
$comment =$_POST["comment"];
$file = 'Tos.txt';
file_put_contents($file, $comment);
header('Location: admin.php');
}
}
?>