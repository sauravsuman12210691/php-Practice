<?php
if (isset($_FILES['myfile'])) {
    $name = $_FILES['myfile']['name'];
    $tmp_name = $_FILES['myfile']['tmp_name'];
    
    // Define the path where the file will be uploaded
    $upload_dir = 'uploads/'; // Make sure the directory exists and is writable
    $target_file = $upload_dir . basename($name);

    // Move the uploaded file to the target directory
    if (move_uploaded_file($tmp_name, $target_file)) {
        echo "File uploaded successfully.";
    } else {
        echo "File upload failed.";
    }
} else {
    echo "No file selected.";
}
?>
