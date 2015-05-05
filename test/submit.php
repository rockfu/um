<?php
$servername = "localhost";
$username = "test";
$password = "testtest";
$dbname = "test";
// Create connection
$conn = new MySQLi($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
/* change character set to utf8 */
$conn->set_charset("utf8");
function getExtension($str) {$i=strrpos($str,".");if(!$i){return"";}$l=strlen($str)-$i;$ext=substr($str,$i+1,$l);return $ext;}
$formats = array("jpg", "png", "gif", "bmp", "jpeg", "PNG", "JPG", "JPEG", "GIF", "BMP");
if(isset($_POST)){
 $name = $_FILES["uploadedfile"]["name"];
 $size = $_FILES["uploadedfile"]["size"];
 $tmp  = $_FILES["uploadedfile"]["tmp_name"];
 $reason =$_POST["reason"];
 $engname =$_POST["name"];
 $idnum =$_POST["idnum"];
$phone =$_POST["phone"];
$email =$_POST["email"];
 if(strlen($name)){
  $ext = getExtension($name);
  if(in_array($ext,$formats)){
  	 if($size<(3024*3024)){
    		$imgn = time().".".$ext;
    		if(move_uploaded_file($tmp, "./uploads/".$imgn)){
				$sql = "INSERT INTO  `form` (`id` ,`name` ,`idnum` ,`phone` ,`email` ,`reason` ,`photo`) VALUES (NULL , '$engname',  '$idnum',  '$phone',  '$email',  '$reason',  '$imgn');";
				if ($conn->query($sql) === TRUE) {
				   	header("location:thank.php");
	    				exit();
				} else {
				   echo "Error: " . $sql . "<br>" . $conn->error;
				}
				$conn->close();
    		
    			}else{
    			 echo "Uploading Failed.";
    			 }
    			 
    		}else{
		    echo "Image File Size Max 3 MB";
		   }	
  	}else{
   echo "Invalid Image file format.";
  }
  }else{
  echo "Please select an image.";
  exit;
}
}
?>