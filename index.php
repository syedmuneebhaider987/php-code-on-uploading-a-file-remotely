<?php

$file_path = '/path/to/local/file.txt';
$file_name = basename($file_path);
$remote_url = 'https://example.com/upload.php';

// Initialize a cURL session
$ch = curl_init($remote_url);

// Create a cURL file handle
$cfile = new CURLFile($file_path, '', $file_name);

// Set the POST data
$post_data = array(
    'file' => $cfile
);

// Set the CURLOPT_POST option
curl_setopt($ch, CURLOPT_POST, true);

// Set the CURLOPT_POSTFIELDS option to the POST data
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);

// Set the CURLOPT_RETURNTRANSFER option to get the response as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the cURL session
$response = curl_exec($ch);

// Check for errors
if(curl_errno($ch)) {
    echo 'Error uploading file: ' . curl_error($ch);
} else {
    echo 'File uploaded successfully.';
}

// Close the cURL resource
curl_close($ch);

?>
