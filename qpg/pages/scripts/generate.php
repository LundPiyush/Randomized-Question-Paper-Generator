<html>
    <head>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
<h4>Paper/Subject Code:123/Database Management System</h4>    

<span style="padding-left:600px" ><b>[Time:3 Hours]</b></span>
<span style="padding-left:530px"><b>[Marks:80]</b></span>
<br>
<br>
    
<table class="table table-bordered">  
                          <tr>  
                               <th width="5%">ID</th>  
                               <th width="30%">Name</th>  
                               <th width="10%">Gender</th>  
                               <th width="45%">Designation</th>  
                               <th width="10%">Age</th>  
                          </tr>  
                     <?php
require_once("../includes/db.php");

        
for($i=0;$i<5;$i++)
{
$randomno=rand(1,5);
//echo "$randomno";
$query="SELECT * FROM question where question_id=$randomno AND marks=5 or marks=4";

$result=mysqli_query($connection,$query);
//echo "$result";
//$row = mysqli_fetch_assoc($result); 
//echo json_encode($row);
$output='';

?>
                     </table>

    
    </body>
        </html>
