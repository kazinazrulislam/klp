
<!DOCTYPE html>
<html>
   
<head>
    <title>Image Upload</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
   
<body>
    <div id="content">
        <form method="POST" action="" enctype="multipart/form-data">
            <div class="form-group">
                <input class="form-control" type="file" name="uploadfile" value="" />
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
            </div>
        </form>
    </div>
    <div id="display-images">
    <?php
    include 'dt.php';

        $query = " select * from images ";
        $result = mysqli_query($db, $query);
 
        while ($data = mysqli_fetch_assoc($result)) {
    ?>
        <img src="./images/<?php echo $data['filename']; ?>">
 
  
    
    </div>
</body>
 
</html><?php  } 
     
                 



$conn->close();
?>