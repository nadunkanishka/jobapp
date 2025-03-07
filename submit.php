<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $cv_filename = $_FILES['file']['name'];

    // File upload logic (handling file upload)
    if ($_FILES['file']['error'] == 0) {
        $upload_dir = "uploads/"; // directory to store the uploaded files
        $upload_path = $upload_dir . basename($cv_filename);
        move_uploaded_file($_FILES['file']['tmp_name'], $upload_path);
    }

    // Insert data into the database
    $sql = "INSERT INTO job_applications (full_name, email, mobile, cv_filename) 
            VALUES (:full_name, :email, :mobile, :cv_filename)";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':full_name', $full_name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':mobile', $mobile);
    $stmt->bindParam(':cv_filename', $cv_filename);

    if ($stmt->execute()) {
        echo "Application submitted successfully!";
    } else {
        echo "Error submitting application.";
    }
}
?>
