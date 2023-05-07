<?php
    if(isset($_POST['submit'])){
        $to = "gabyad238000@gmail.com"; // Change this to your own email address
        $subject = "Appointment Request from Barbershop Meto";
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $appointment = $_POST['appointment'];
        $time = $_POST['time'];
        $body = "Name: $name\nPhone: $phone\nEmail: $email\nAppointment Date: $appointment\nAppointment Time: $time\nMessage: $message";
        $headers = "From: $email";
        
        if (mail($to, $subject, $body, $headers)) {
            echo '<p class="success-message">Your appointment request has been sent. We will contact you shortly to confirm.</p>';
        } else {
            echo '<p class="error-message">Sorry, there was a problem sending your appointment request. Please try again later.</p>';
        }
    }
?>
