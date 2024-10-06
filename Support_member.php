<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support Member</title>
    <link rel="stylesheet" href="styles/support_member.css">
    <link rel="stylesheet"  href="styles/UserProfile.css">

</head>

<body>

    <?php
    require_once 'Hederfootor.php';
    ManagemntNavbr();
    ?>

<div class="table-wrapper">
           
           <table border="1px">
                   <tr id="header">
                       <th>Subject</th>
                       <th>Message</th>
                       <th>Reply</th>
                    </tr> 
                   
               <?php
               require './config2.php';
               $email = $_SESSION['email'];   

               $sql = "SELECT Subject ,Message,Reply FROM  tickets  WHERE Email  = '$email' ORDER BY Ticket_id  DESC";
               $stmt = $con->prepare($sql);
               $stmt->execute();
               $ticket_detail = $stmt->get_result();
              while( $row =  $ticket_detail->fetch_assoc())
              { 
                ?>     
                <tr>
                <td><?php echo $row["Subject"]; ?></td>
                <td><?php echo $row["Message"]; ?></td>
                <td><?php echo $row["Reply"]; ?></td>
                </tr>

               <?php 
              }
              ?>
              
               </table>
               </div>
    <main>
        <script src="./js/adminSupport.js"></script>

        <fieldset>
            <h2 id="subheading">Support</h2>
            <div class="error"></div>
            <form  action="Support_member.php" method="POST">
                <label for="Subject">Subject:</label>
                <input type="text" id="Subject" name="Subject" class="form-input" required><br>

                <label for="email">Email:</label>
                <input type="text" id="email" name="email" class="form-input" required><br>

                <label for="message">Message:</label>
                <textarea id="message" name="message" placeholder="Further Explanation" class="form-textarea" required></textarea><br>

                <button class="submit-btn" id="submit" type="submit" value="submit" name="submit">Submit</button>
            </form>
        </fieldset>
    </main>

    <?php
    include './Hederfootor.php';
    Managemntfooter();
    ?>

</body>

</html>
