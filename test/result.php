<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
<?php
$servername = "localhost";
$username = "rockfu_test";
$password = "testtest";
$dbname = "rockfu_test";
// Create connection
$conn = new MySQLi($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->set_charset("utf8");
$sql="SELECT * FROM  `form` ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " ," . $row["idnum"]. " ," . $row["phone"]." ," . $row["email"]." ," . $row["reason"].",<a href=uploads/". $row["photo"].">photo</a><br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>