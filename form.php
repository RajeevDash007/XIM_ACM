<?php

    // Retrieve form data
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];

    $message = $_POST['message'];

    // Define email variables
    $to = "rajeevdash07@gmail.com,ucse21015@stu.xim.edu.in";
    $subject = "XIM ACM Enquiry";
    $message_body = "Full Name: ".$full_name."\nEmail: ".$email."\nMessage: ".$message;
    $headers = "From: ".$email;

    // Send email
    if(mail($to, $subject, $message_body, $headers)){
        // Define data to be saved to JSON file
        $data = array(
            'to' => $to,
            'subject' => $subject,
            'message' => $message_body,
            'headers' => $headers,
            'timestamp' => date('Y-m-d H:i:s')
        );

        // Load existing JSON data from file
        $file = 'emails.json';
        if (file_exists($file)) {
            $json = file_get_contents($file);
            $existingData = json_decode($json, true);
        } else {
            $existingData = array();
        }

        // Add new data to existing data
        $existingData[] = $data;

        // Save updated data to JSON file
        $json = json_encode($existingData);
        file_put_contents($file, $json);
        
        // Return success response
        echo json_encode(array('status' => 'success'));
    } else {
        // Return error response
        echo json_encode(array('status' => 'error', 'message' => 'Failed to send email'));
    }

?>