<?php


$conn = mysql_connect('localhost','root','root');
//if($conn !== false)
//  echo "nice","<br>";
mysql_query('use test',$conn);
mysql_query('set nemes utf-8',$conn);


$id = $_GET['id'];

$sql = 'select * from liuyan where id=' . $id;


$rs = mysql_query($sql,$conn);

$row = mysql_fetch_assoc($rs);
?>
<h1>  <?php echo $row['title']; ?> </h1>
<p>   <?php  echo $row['content']; ?></p>
