
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="from_style.css">
</head>
<body>

<h2>WILL ADD NEW PRODUCTS</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">AGREE</button>

<div id="id01" class="modal">
  
  <form action="from.php" method="post">

    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>
    

    <div class="container" style="width: 50%; text-align: center;">
      <label for="uname"><b>PRODUCTS NAME</b></label>
      <input type="text" placeholder="products_name" name="email" required>

      <label for="psw"><b>PEICE</b></label>
      <input type="password" placeholder="peice" name="password" required>
        
      <button type="submit">SUBMIT</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
