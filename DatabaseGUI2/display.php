<?php

      //$con = mysqli_connect('127.0.0.1', 'root', '');
//include "connect.php";

      $con = mysqli_connect('127.0.0.1', 'root', '');

      mysqli_select_db($con,'park_it_v10');

      if(!$con)

            echo "ERROR Connection";

            else {
                  //echo "CONNECT TO INTERNET";
            }


      $id = $_POST['id'];
      //echo $id;
      "<br/><br/>";

      //$sql = "INSERT INTO Users (ID, First_Name, Last_Name, Email)
      //            VALUES ('$ID', '$First_Name','$Last_Name','$Email')";

      $displayUser = mysqli_query($con,"SELECT p.id, p.Carpark_ID, c.Address FROM carpark c, parking p WHERE c.carpark_ID = p.Carpark_id AND p.id = '$id'");

//$displayUser = mysql_query("SELECT ID, First_Name, Last_name, Email FROM users where id = '$ID'");

      //Display the data on another ldap_control_paged_result
      //while($result = mysql_fetch_array($displayUser, MYSQL_ASSOC))
      while($result = mysqli_fetch_array($displayUser))
      {
            echo"<br/> User ID: " . $result['id'];
            //echo"<br/> User First Name: " . $result['First Name'];
            //echo"<br/> User ID: " . $result['Last Name'];
            echo"<br/> Carpark ID: " . $result['Carpark_ID'];
            echo"<br/> Address: " . $result['Address'];
      }


      header("refresh:20; url=index.html");

 ?>
