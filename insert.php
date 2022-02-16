<?php
include 'db.php';

// Create object / instance
$db = new Database();
$con=$db->Connect();


$id = $_POST['id_chat'];
$name = $_POST['name'];
$text_chat = $_POST['text_chat'];
$tgl = $_POST['tgl'];

mysqli_query($con,"insert into tbl_chatbox values('$id','$name','$text_chat','$tgl')");

?>