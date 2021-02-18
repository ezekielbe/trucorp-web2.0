
<?php

echo "Hello";
echo "<br>";
$con = mysqli_connect("172.18.0.2","root","123","Trucorp");
if(!$con){
echo "Unable to connect" . PHP_EOL;
exit;
}

echo "Done, connection is successful." . PHP_EOL;
echo "<br>";
echo "Host Information: " . mysqli_get_host_info($con) . PHP_EOL;
$sql = "SELECT * FROM users";
$res = $con->query($sql);
echo $sql;
while($row = $res->fetch_row()){
echo "<br>";
for ($i=0;$i<$res->field_count;$i++) echo "<br>$row[$i]";
echo "<br>";
}
$con->close();
?>

