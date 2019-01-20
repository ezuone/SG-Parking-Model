<?php

      $con = mysqli_connect('127.0.0.1', 'root', '');

      mysqli_select_db($con,'park_it_v10');

      if(!$con)

            echo "ERROR Connection";

            else {
                  echo "CONNECT TO INTERNET";
            }

?>
