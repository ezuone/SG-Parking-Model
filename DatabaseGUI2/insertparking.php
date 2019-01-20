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
      $carpark_ID = $_POST['carpark_ID'];

      $sql2 = "INSERT INTO Parking (ID, carpark_ID)
                  VALUES ('$ID', '$carpark_ID')";

      if(!mysqli_query($con,$sql2))
      {
            echo 'Not Inserted';
      }

      else {
            echo 'The new Parking has been Inserted';
      }

      header("refresh:2; url=index.html");

 ?>
