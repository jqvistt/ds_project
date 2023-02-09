<?php

foreach ($_FILES['file']['name'] as $index => $filename) {
  
  /* Gets the temporary name of the uploaded file */
  $file_tmp = $_FILES['file']['tmp_name'][$index];
  
  /* Gets the file extension */
  $extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
  
  /* Check if the file is a PDF or an image */
  if ($extension == "pdf" || $extension == "png" || $extension == "jpeg" || $extension == "jpg"|| $extension == "gif" || $$extension == "heic") {
    
    /* Constructs the file location */
    $location = "../uploads/" . $filename;
    
    /* Check if the file has been uploaded successfully */
    if (move_uploaded_file($file_tmp, $location)) {
      header("Location: ../index.php");
    } else {
      echo "There was an error uploading the file.";
    }
  } else {
    echo "Invalid file type. Please upload a PDF or an image file.";
  }
}