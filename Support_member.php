<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>support support_member</title>
    <link rel="stylesheet" href="styles/support_member.css">
    
    <!-- Header and footer styles -->
    
</head>

<body>
   

        <?php
            include './Hederfootor.php';
            ManagemntNavbr();
        ?>
  

    <main>
        <script src="./js/adminSupport.js"></script>

        <fieldset>
            <h2 id ="subheading">Support</h2>
            <div class="error"></div>
            <form onsubmit="return validate()" action="admin_supp.php" method="post" id="adminsup">
                <label for="ticketId">Ticket ID:</label>
                <input type="text" id="ticketId" name="ticketId"><br>

                <label for="name">Agent Name:</label>
                <input type="text" id="agentName" name="agentName"><br>

                <label for="email">Email:</label>
                <input type="text" id="email" name="email"><br>

                <label for="message">Message:</label>
                <textarea id="message" name="message" placeholder="Further Explanation"></textarea><br>

                <button class="submit" id="submit" type="submit" value="submit" name="submit">Submit</button>
            </form>
        </fieldset>
    </main>

   
    <?php
            include './Hederfootor.php';
            Managemntfooter();
     ?>
</body>

</html>
