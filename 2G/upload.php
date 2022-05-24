<?php
// Include the database configuration file  
require_once 'config.php';
 include('session.php');
 $email = $_SESSION['login_user'];
// //  echo $email;
// // If file upload form is submitted 
$status = $statusMsg = '';
if (isset($_POST["submit"])) {
    $status = 'error';
    if (!empty($_FILES["image"]["name"])) {
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]);
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

        // Allow certain file formats 
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
        if (in_array($fileType, $allowTypes)) {
            $image = $_FILES['image']['tmp_name'];
            $imgData = addslashes(file_get_contents($image));

            // Insert image content into database 
            $sqlc = mysqli_query($con, "SELECT * FROM profileimg where email='$email'");
            if (mysqli_num_rows($sqlc) > 0) {
                $sqld = "DELETE from profileimg WHERE email = '$email'";
                $del = mysqli_query($con, $sqld);
                $sql = "INSERT into profileimg (email,images) VALUES ('$email','{$imgData}')";
                $insert = mysqli_query($con, $sql);
            } else {
                $sql = "INSERT into profileimg (email,images) VALUES ('$email','{$imgData}')";
                $insert = mysqli_query($con, $sql);
            }

            // $sql = "INSERT into ppimages (email,images) VALUES ('$email','{$imgData}')";
            // $insert = mysqli_query($conn, $sql);

            if ($insert) {
                header("Location: profile.php?status=success");
                // $status = 'success'; 
                // $statusMsg = "File uploaded successfully."; 
            } else {
                // $statusMsg = "File upload failed, please try again."; 
                header("Location: profile.php?status=failed");
            }
        } else {
            // $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
            header("Location: profile.php?status=mismatch");
        }
    } else {
        // $statusMsg = 'Please select an image file to upload.'; 
        header("Location: profile.php?status=blank");
    }
}
mysqli_close($con);
 
// Display status message 
// echo $statusMsg; 
