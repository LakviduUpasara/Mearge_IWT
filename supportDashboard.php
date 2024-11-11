<?php

    if (session_status() == PHP_SESSION_NONE) {
      session_start();
    }
    if(isset($_SESSION['success']))
    {
       
        echo" <script>alert('successfully completed ') ;</script>" ;

    } else if(isset($_SESSION['error']))
    {
    
      echo" <script>alert('unsuccessfully completed') ;</script>" ;
    }
      unset($_SESSION['error']);
      unset($_SESSION['success']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>TeachWave Online Teacher Trainer</title>

  <link rel ="stylesheet" type="text/css" href="./styles/support_dahsboard_style.css">
  
  <!--header and footer-->
 

  <script defer src="./js/suppDash.js"></script>

</head>
<body>

<?php include 'sup_nav.php' ;?>

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
            require './config2.php';

            $sqlAnnou = "SELECT Topic, Description FROM announcement_detail";
            $announcement = $con->query($sqlAnnou);

            if ($announcement->num_rows > 0) { // Checking for the data in the table
                while ($row = $announcement->fetch_assoc()) { // Fetch one row at a time
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row["Topic"]) . "</td>" . "<td>" . htmlspecialchars($row["Description"]) . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr class='no-announcement'>";
                echo "<td>-</td><td>No Announcements Yet</td>";
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

              require './config2.php';


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
        <form id = "formReply" method="POST" action="sup.php">
          <div class="Pop-reply" id="pop-Rpl" >

            <label for ="ticket_id">Ticket Id</label><br>
            <input type="text" id="ticket id" name="ticket_id" required> <br>

            <label for="reply">Reply</label><br>
            <textarea id="reply" name="reply" placeholder=" reply" required></textarea> 
            
            <button type = "submit" class="button" name ="update" onclick="closePopRpl()">send</Button>
          </div>
        </form>

        <!-- delete-->
        <form id = "formRDelete" method="post" action="sup.php">

          <div class="Pop-del" id="pop-del" >

            <label for ="ticket_id">Ticket Id</label><br><br>
            <input type="text" id="Delete_tick_id" name="tick_id" required> <br>

            <button type = "submit" class="button" name="delete" onclick="closeDelete()">Delete</Button>
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
