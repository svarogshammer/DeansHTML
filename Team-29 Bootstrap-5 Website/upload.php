<?php

// This script will dump all the received files via the server and move those files to the 'uploads' directory
// for demo purpose
var_dump($_FILES);

// Move uploaded files to uploads directory
foreach ($_FILES["myFiles"]["tmp_name"] as $key => $value) {
    $targetPath = "uploads/" . basename($_FILES["myFiles"]["name"][$key]);
    move_uploaded_file($value, $targetPath);
}
