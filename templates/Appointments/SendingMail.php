<?php
/**
 * @var \App\Model\Entity\Appointment $appointment
 * @var string[]|\Cake\Collection\CollectionInterface $clients
 * @var string[]|\Cake\Collection\CollectionInterface $companies
 */
?>

<?php

if ($relativeAppointments->date >= $currentTime){
    foreach ($relativeAppointments as $appointment):
        $to = $appointment->client->email;//$this->$clients->email;//destination email
        $subject ="Appointment Notification";//mail title
        $message ="Hello";//mail content
        $from = "bookeep@u22s2105.monash-ie.me";
        $headers = "From: $from";
        $result = mail($to,$subject,$message,$headers);
    endforeach;
}
