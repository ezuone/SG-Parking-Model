<?php

      $con = mysqli_connect('127.0.0.1', 'root', '');

      if(!$con)
      {
            echo 'Not Connected to Server';
      }

      if(!mysqli_select_db($con,'park_it_v10'))
      {
            echo 'Database Park It Not Selected';
      }

      $ID = $_POST['ID'];
      $First_Name = $_POST['First_Name'];
      $Last_Name = $_POST['Last_Name'];
      $Email = $_POST['Email'];

      $sql = "INSERT INTO Users (ID, First_Name, Last_Name, Email)
                  VALUES ('$ID', '$First_Name','$Last_Name','$Email')";

      if(!mysqli_query($con,$sql))
      {
            echo 'Not Inserted';
      }

      else {
            echo 'The Data has been Inserted';
      }

      header("refresh:2; url=index.html");

 ?>
