<?php
            function Loadannousment() {
                require './config2.php';
                $query = "SELECT * FROM Announcement_Detail ORDER BY Announcement_ID DESC   ";

                $stmt = $con->prepare($query);
                $stmt->execute();
                $result = $stmt->get_result();
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='note-heading'><h2>Note " . $row['Topic'] . "</h2></div>";
                    echo "<div class='notice-content'><h5>" . $row['Description'] . "</h5></div>";
                }
            }
        
?>
