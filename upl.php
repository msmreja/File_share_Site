<?php

include("connection.php");
function function_alert($message) {
    echo "<script>alert('$message');</script>";
}

if($_POST['submit'])
{ 
   $filen= $_FILES["upfile"]["name"];
   $tfilen= $_FILES["upfile"]["tmp_name"];
   $folder= "Files/" .$filen;
   
   move_uploaded_file($tfilen,$folder);
   if($filen!="")
   {
     $query="INSERT INTO down VALUES ('$folder', '$filen')"; 
     $data= mysqli_query($conn,$query);
     if($data)
     {
        echo "<script>
        alert('File Uplaoded Sucessfully');
        window.location.href='uploadf.php';
        </script>";
     }
     else
     {
        echo "<script>
        alert('File Upload Error');
        window.location.href='uploadf.php';
        </script>";
     }
   }
}
?>
