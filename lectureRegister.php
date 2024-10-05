<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>01.lecture registration</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' href="styles/lectureRegisterstyle.css">
    
</head>
<body>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Teach With Us</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="insertLecture.php" method="post">
    <div class="container">
      <div class="lecture">
      <center><h1>Lecture Registration</h1></center>
      </div>
      <label for="uid"><b>User ID</b></label>
      <input type="text" placeholder="Enter User ID" name="uid" required>

      <label for="firstname"><b>First name</b></label>
      <input type="text" placeholder="Enter firstname" name="firstname" required>

      <label for="lastname"><b>Last name</b></label>
      <input type="text" placeholder="Enter lastname" name="lastname" required>

      <label for="phone"><b>Phone number</b></label>
      <input type="text" placeholder="Enter phone number" name="phone" required>

      <label for="email"><b>Email</b></label>
      <input type="email" placeholder="Enter email" name="email" required>
      <br>
      <label for="password"><b>Password</b></label><br>
      <input type="password" placeholder="Enter password" name="password" required>

      <br>
      <label for="userrole"><b>User role</b></label>
      <input type="text" placeholder="Enter userrol" name="userrole" required>
    <br>
  </div>

    <div class="container" style="background-color:#f1f1f1">
      <input type="submit" id="button_3" >
      
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
