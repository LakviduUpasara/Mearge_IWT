<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Admin Support</title>
    <link rel ="stylesheet" type="text/css" href="./styles/admin_support_style.css">
    <!--header and footer-->
    <link rel = "stylesheet" type= "text/css" href="./styles/headerFooterIMESHA.css">
    
</head>  
<body>

<div class="sup_header">
  <a href="./userprofile.php"><img src="images/logo.png" alt="logo"class="logo"></a>
  
  <div class="sup_navbar">
  <ul>
     <li><a class="nav" href="#">Announcements</a></li>
     <li><a class="nav" href="supportDashboard.php">Ticket Review</a></li>
     <li><a class="nav" href="admin_support.php">Admin Support</a></li>
     <li><a class="nav" href="./userprofile.php">User Profile</a></li>
  </div>
  <br><br>
  <a href=home.php><img src="images/arrow1.png" alt="arrow1"class="arrow"></a>
</div>


<main >

  <script src="./js/adminSupport.js"></script>

  <fieldset>
    <h2>Admin Support</h2>
    <div class="error"></div>
    <form onsubmit="  return validate()" action="admin_supp.php" method="post" id="adminsup">

            <label for="ticketId">Ticket ID:</label>
            <input type="text" id="ticketId" name="ticketId" > <br>

            <label for="name">Agent Name:</label>
            <input type="text" id="agentName" name="agentName" ><br>

            <label for="email">Email:</label>
            <input type="text" id="email" name="email" > <br>

            <label for="message">Message:</label>
            <textarea id="message" name="message" placeholder="Further Explanation"></textarea> <br>
            
            <button class="submit" id="submit" type="submit" value="submit" name="submit" >Submit</button>
    </form>
  </fieldset>

</main>

<footer>
  <img class="footerLogo" src="./images/logo.png" alt="teachWave logo">
  <p> &copy; 2024 TechWave Online Teacher Training</p>
</footer>

</body>
</html>
