<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Support Dashboard</title>

  <link rel ="stylesheet" type="text/css" href="./styles/support_dahsboard_style.css">
  <!--header and footer-->
  <link rel = "stylesheet" type= "text/css" href="./styles/headerFooterIMESHA.css">

  <script defer src="./js/suppDash.js"></script>

</head>
<body>

<div class="sup_header">
  <img src="images/logo.png" alt="logo"class="logo">
  
  <div class="sup_navbar">
  <ul>
      <li><a class="nav" href= "supportDashboard.php">Announcements</a></li>
     <li><a class="nav" href="supportDashboard.php">Ticket Review</a></li>
     <li><a class="nav" href="admin_support.php">Admin Support</a></li>
     <li><a class="nav" href="#">User Profile</a></li>
  </div>
  <br><br>

  <a href=home.php><img src="images/arrow1.png" alt="arrow1"class="arrow"></a>
</div>

<main ><!--<div class="banner">-->
  <div class="content">
    <h2 id="announcemnts">Announcements</h2>
    <div class="announcements">
      <table class="Annu-table">
        <thead>
          <tr>
            <th>Topic</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>

          <?php

            require 'config5.php';

            $sqlAnnou    = "SELECT Topic, Description FROM announcement_detail";

            $announcement = $con->query($sqlAnnou);

            if($announcement->num_rows > 0)//checking for the data in table
            {
                
                while($row = $announcement->fetch_assoc())//fetch oone raw at a time
                {
                    echo"<tr>";
                    echo "<td>".$row["Topic"]."</td>"."<td>".$row["Description"]."</td>";
                    echo"</tr>";
                }
              
            }
            else
            {
                echo "<tr";
                echo "<td>"."-"."</td>"."<td>"."No Announcements Yet"."</td>";
                echo "</tr>";
            }

          ?>

        </tbody>
      </table>
    </div>

    <h2 id="ticket">Ticket Review</h2>

      <fieldset class="tbl">

        <table class="table">
          <thead>
            <tr>
              <th>Ticket ID</th>
              <th>Email</th>
              <th>Subject</th>
              <th>Message</th>
            </tr>
          </thead>
          <tbody>
          
            <?php

              require 'config5.php';

              $sqlTicket   = "SELECT Ticket_id, Email, Subject, Message FROM tickets";

              $tickets = $con->query($sqlTicket);

              if($tickets->num_rows > 0)//checking for the data in table
              {
                  
                  while($row = $tickets->fetch_assoc())//fetch oone raw at a time
                  {
                      echo"<tr>";
                      echo "<td>".$row["Ticket_id"]."</td>"."<td>".$row["Email"]."</td>"."<td>".$row["Subject"]."</td>"."<td>".$row["Message"]."</td>";
                      echo"</tr>";
                  }
                
              }
              else
              {
                  echo "<tr";
                  echo "<td>"."No Tickets Yet"."</td>";
                  echo "</tr>";
              }

            ?>

          </tbody>
        </table>
      
        <div class="button-grp">
          <button class="button" onclick="openPopRpl()">Reply</button>
          <button class="button" onclick="openDelete()">Delete</button>
        </div>
      </fieldset>

            <!-- reply-->
        <form id = "formReply" method="post" action="sup.php">
          <div class="Pop-reply" id="pop-Rpl" >

            <label for ="ticket_id">Ticket Id</label><br>
            <input type="text" id="ticket id" name="ticket_id" required> <br>

            <label for="reply">Reply</label><br>
            <textarea id="reply" name="reply" placeholder=" reply" required></textarea> 
            
            <button type = "submit" class="button" onclick="closePopRpl()">send</Button>
          </div>
        </form>

        <!-- delete-->
        <form id = "formRDelete" method="post" action="sup.php">

          <div class="Pop-del" id="pop-del" >

            <label for ="ticket_id">Ticket Id</label><br><br>
            <input type="text" id="Delete_tick_id" name="tick_id" required> <br>

            <button type = "submit" class="button" onclick="closeDelete()">Delete</Button>
          </div>
        </form>
      </div>
    </div>
  </div>  
</main>

<footer>
    <img class="footerLogo" src="./images/logo.png" alt="teachWave logo">
    <p> &copy; 2024 TechWave Online Teacher Training</p>
</footer>  
  
</body>
</html>