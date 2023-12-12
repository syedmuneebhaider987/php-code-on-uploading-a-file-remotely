# php-code-on-uploading-a-file-remotely
This is a php code on uploading a file remotely using cURL.
This code was made for [Techtista](https://techtista.com/)- a service focused on helping people with tech and internet related issues. And for https://masteryourlooks.com/
Note: Make sure that the remote server has permission to write to the directory where you want to upload the file. Also, you may need to modify the post_data array to match the expected field name for the file upload in the remote server.
In the code, we are using the CURLFile class to create a cURL file handle for the local file. We then set the CURLOPT_POST option to indicate that we want to use the HTTP POST method, and the CURLOPT_POSTFIELDS option to set the POST data. Finally, we execute the cURL session using the curl_exec() function, and print a message to confirm whether the file was uploaded successfully
