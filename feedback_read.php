<?php

require 'config2.php';

$sql="SELECT feedback_id,name,user_email,course,feedback FROM feedback";

$result=$con->query($sql);

if($result->num_rows>0)
{
    echo "<table border='1'>";
   while($row=$result->fetch_assoc(  ))
   {
     echo "<tr>";
        echo "<td id='f_id'>".$row["feedback_id"]."</td>";
        echo "<td id='f_name'>".$row["name"]."</td>";
        echo "<td id='f_email'>".$row["user_email"]."</td>";
        echo "<td id='f_course'>".$row["course"]."</td>" ;
        echo "<td id='f_feedback'>".$row["feedback"]."</td>" ;
        echo "<td>".
        "<a href='feedback_delete.php?feedback_id={$row['feedback_id']}' onclick='return confirmDelete()'>
        <input type='button' value='Delete' class='delete'>
        </a>
        </td>";
    
        echo "</tr>";
   }
   echo "</table>";
}
else
{
   echo "no result";
}
?>
<script>
function confirmDelete() {
    return confirm('Are you sure you want to delete this item?'); 
        
    
}
</script>