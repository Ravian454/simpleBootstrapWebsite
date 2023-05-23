<?php    
   //db connection
   $connect =  mysqli_connect('localhost', 'root', '', 'websiteuserdata');
    if($connect){
        echo "Connection Successful";
    }else{
        echo "Connection Failed";
    }

   $email = $_POST['email'];
   $user = $_POST['user'];
   $mobile = $_POST['mobile'];
   $comment = $_POST['comment'];

   $query = "INSERT INTO userinfodata (email, username, mobile, comment)
             VALUES ('$email', '$user', '$mobile', '$comment')";
         
   mysqli_query($connect, $query);    
   header('location: index.php'); 
?>
