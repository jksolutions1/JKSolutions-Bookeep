<?php
/**
 * @var \App\Model\Entity\Appointment $appointment
 * @var string[]|\Cake\Collection\CollectionInterface $clients
 * @var string[]|\Cake\Collection\CollectionInterface $companies
 * @var \App\Model\Entity\Appointment[]|\Cake\Collection\CollectionInterface $appointments
 */
?>

<?php
foreach ($relativeAppointments as $appointment):
    if ($appointment->date >= $currentTime){
            $to = $appointment->client->email;//$this->$clients->email;//destination email
            $subject ="Appointment Notification";//mail title
            $message ="Hello";//mail content
            $from = "bookeep@u22s2105.monash-ie.me";
            $headers = "From: $from";
            $result = mail($to,$subject,$message,$headers);
    }
endforeach;


?>