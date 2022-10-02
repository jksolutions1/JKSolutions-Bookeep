<?php
/**
 * @var \App\Model\Entity\Appointment $appointment
 * @var string[]|\Cake\Collection\CollectionInterface $clients
 * @var string[]|\Cake\Collection\CollectionInterface $companies
 */
?>

<?php


// include('Appointments/index.php');
// $this->set(compact('appointments'));
// $appointment = $this->Appointments->get($id);
// $appdate = $appointment->$date;
// $dt = Carbon::parse($appdate);
// echo $dt->diffInDays(Carbon::now());


$to ="qhuu0013@student.monash.edu";//$this->$clients->email;//destination email
$subject ="Appointment Notification";//mail title
$message ="Hello";//mail content
$from = "avenhuhuhu@163.com";
$headers = "From: $from";
$result = mail($to,$subject,$message,$headers);


 
?>
