<?php
include 'database.php';

        // Create connection
       $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
               if ($conn->connect_error)

                
              {die("Connection failed: " . $conn->connect_error);}
               
       else{   

                         $sql = "SELECT * FROM table2";

                         $result = $conn->query($sql);
                         
                         if ($result->num_rows > 0) {

                           $row_er_songkha = $result->num_rows;
                         // output data of each row                 
                 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #d7581c}

th {
  background-color: #485c55;
  color: white;
}
</style>
</head>
<body>

  <div><button> <a href="index.php"> go to my site</a></button></div>

<table>
<thead>

  <th>products name</th>
  <th>price</th> 
  <th>Update Buttons</th>
  <th>Delete Buttons</th>
         <!-- <th>image</th> -->
</thead>
<tbody>    
                                         
                             <?php 

                             while ($row = $result->fetch_assoc()) { 

                              echo "<tr>";            
                              echo "<td>". $row["email"]."</td>"; 
                              echo "<td>". $row["password"]."</td>";
                               // echo "<td>". $row["image"]."</td>";

                              echo "<td><a href='update_from2.php?id=".$row['id']."'>Update</a></td>";
                              
                              echo "<td><a href='delete2.php?id=".$row['id']."'>Delete</a></td>";
                              echo "</tr>";}


                              ?>

                               
       
</tbody>
</table>

</body>
</html>
           
  <?php  } 
     
                 else {
                  echo "0 results";
                     }

}


$conn->close();
?>





