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

      $mrtCode = $_POST['mrtCode'];
      $carpark_ID = $_POST['carpark_ID'];

      $sql2 = "INSERT INTO Parking (carpark_ID, mrtCode)
                  VALUES ($carpark_ID', '$mrtCode')";

      if(!mysqli_query($con,$sql2))
      {
            echo 'Not Inserted';
      }

      else {
            echo 'The MRT destination has been Inserted';
      }

      header("refresh:2; url=index.html");

 ?>
