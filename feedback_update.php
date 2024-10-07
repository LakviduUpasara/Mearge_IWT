<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>

    <link rel="stylesheet" href="styles/feedback_update.css">
</head>
<body>
            <?php

            include    'Hederfootor.php';
            ManagemntNavbr() ;  

            ?>
    <div class="container">
        <h2>Feedback Update</h2>
        <div class="feedback-form">
            <form method="post" action="Feedbackupdate.php">
                <div class="form-group">
                    <label for="name">Feedback ID:</label>
                    <input type="text" id="name" name="f_id" placeholder="Enter your ID" required>
                </div>
                <div class="form-group">
                    <label for="text">Course:</label>
                    <input type="text" id="email" name="f_course" placeholder="Enter your Course" required>
                </div>
                <div class="form-group">
                    <label for="feedback">Feedback:</label>
                    <textarea id="feedback" name="f_feedback" placeholder="Enter your feedback" required></textarea>
                </div>
                <input type="submit" value="Submit Feedback" name="update" id="button">
            </form>
        </div>
    </div>
</body>
</html>