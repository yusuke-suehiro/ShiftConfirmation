<?php

// パラメーター
$id = $_GET['id']
 
// SELECT * FROM file WHEHE id = $id
$DB_DATA = [DBから取得した値の配列];
 
header("Content-Type: {$DB_DATA['ContentType']}");
echo $DB_DATA['content'];
exit();

?>
