<?php
include 'dbconfig.php';
$statusMsg= '';
$target_dir = "uploads/";
$filename = $target_dir . basename($_FILES["filetoupload"]["name"]);
$targetFilePath = $filename;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
echo $targetFilePath;
if(isset($_POST["submit"]) && !empty($_FILES["filetoupload"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $db->query("INSERT into images (filename, date) VALUES ('$filename', NOW())");
            if($insert){
                echo "The file ".$filename. " has been uploaded successfully.";
            }else{
                echo "File upload failed, please try again.";
            } 
        }else{
            echo "Sorry, there was an error uploading your file.";
        }
    }else{
        echo 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}
?>