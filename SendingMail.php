<?php
/**
 * @var \App\Model\Entity\Appointment $appointment
 * @var string[]|\Cake\Collection\CollectionInterface $clients
 * @var string[]|\Cake\Collection\CollectionInterface $companies
 */
?>

<?php
 
// ignore_user_abort(); //run php all the time
// set_time_limit(0); // run the code all the time
 
//link data
// $servername = "localhost";
// $username = "root";
// $password = "123";
// $dbname = "mail";
// $conn = new mysqli($servername, $username, $password, $dbname);// create link
// if ($conn->connect_error) {
//     die("link fail: " . $conn->connect_error);// detect link
// } 

//read data from database
// $a=null;
// $sql = "select * from xx limit 1";
// $result=$conn->query($sql);
// $row=mysqli_fetch_assoc($result);
// $a=$row["content"];
// $b=$row["order"];
// //delete the read data
// $ee="delete from xx where id="."'".$row["id"]."'";
// $rr=mysqli_query($conn,$ee);
 
//sending email
$to ="qhuu0013@student.monash.edu";//destination email
$subject ="Hello";//mail title
$message ="Hello";//mail content
$from = "avenhuhuhu@163.com";
$headers = "From: $from";
$result = mail($to,$subject,$message,$headers);
// sleep(10); //time interval

 
?>