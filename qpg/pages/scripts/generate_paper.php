<html>
<head>
    <style>
table, th, td {
/*    border: 1px solid black;*/
/*    background: #fff;*/
/*    padding:4px;*/
}
</style>

</head>
<body>
<h4 style="text-align:center;">Paper/Subject Code:123/Database Management System</h4>    

<span style="padding-left:600px" ><b>[Time:3 Hours]</b></span>
<span style="padding-left:530px"><b>[Marks:80]</b></span>
<br>
<br>
<div style="margin-left:200px margin-top:50px">
<table class="table table-bordered table-hover table-responsive">
    <col width ="100">
    <col width = "5500">
    <col width = "500">
<!--   <col width ="50">-->
    <tr class="info">
    <th></th>
    <th></th>
    <th></th>
<!--    <th>EDIT</th>-->
    <?php
        require_once('../includes/db.php');
function type1_of_1($question_1_count,$total_count,$overall_questions)
{   global $connection;
    global $question_number;
    global $flag;
    //echo $flag;
    echo "<tr><td>"." "."</td></tr>";
    echo "<strong>".$overall_questions."</strong>";
    echo "<strong>  ATTEMPT ALL FOUR  </strong>";
    echo"<br>";
    while($question_1_count!=4){
        
        
        $value=rand(1,30);
        $query="select * from question where question_id =$value and sub_id=1 and selected!=1 and marks=5";
        $question=mysqli_query($connection,$query);
        //echo $question;
        $num_of_rows=mysqli_num_rows($question);
        //echo $num_of_rows;
        if($num_of_rows==1){
            $question_1_count=$question_1_count+1;
            $total_count=$total_count+1;
            $row=mysqli_fetch_assoc($question);
                $question_statement = $row['question_statement'];
                $chapter_id = $row['chp_id'];
                $module_id = $row['mod_id'];
                $question_id = $row['question_id'];
            //echo $question_id;
            //echo "<br>";
            echo "<tr><td>".$question_number[$question_1_count -1]."</td>";
            echo "<td>".$question_statement."</td>";
            echo "<td>"."5"."</td></tr>";
            $query="Update question set selected=1 where question_id = $question_id";
            $update_selected=mysqli_query($connection,$query);
            
            
            
        }
    }
}
    function type2_of_1($question_1_count,$total_count,$overall_questions)
{   global $connection;
    global $question_number;
    echo "<tr><td>"." "."</td></tr>";
    echo "<strong>".$overall_questions."</strong>";
    //echo "<strong>  ATTEMPT ALL TWO  </strong>";
    //echo"<br>";
 while($question_1_count!=2){
     $val=rand(1,30);
    //echo $val;
    $query="select * from question where question_id =$val and sub_id=1 and selected!=1 and marks=10";
    $question=mysqli_query($connection,$query);
    $num_of_rows=mysqli_num_rows($question);
     if($num_of_rows==1){
         $total_count=$total_count+1;
         $question_1_count=$question_1_count+1;
         $row=mysqli_fetch_assoc($question);
        
        $question_statement = $row['question_statement'];
        $chapter_id = $row['chp_id'];
        $module_id = $row['mod_id'];
        $question_id = $row['question_id'];
        //echo $question_id;
        //echo "<br>";
        echo "<tr><td>".$question_number[$question_1_count -1]."</td>";
        echo "<td>".$question_statement."</td>";
        echo "<td>"."10"."</td></tr>";
        $query="Update question set selected=1 where question_id = $question_id";
        $update_selected=mysqli_query($connection,$query);
     //echo'hi';
     }

 }
}
//--------------question 2-5 are categorized in 4 categories----
// **************1st- 6,6,8 mks ****************************
//**************2nd- 10,10 mks  ****************************
 //**************3rd- 7,7,6 mks ****************************
 //**************4th- 6,6,4,4 mks ****************************

//*****************************6,6,8***********************************************//        
function type1_of_2($question_2_count,$total_count,$overall_questions){
    global $connection;
    global $question_number;
    
    echo "<tr><td>"." "."</td></tr>";
    echo "<tr><td>"."<strong>".$overall_questions."</strong>"."</td>";
    echo "<td>".""."</td></tr>";
    
    while($question_2_count!=3){
    $val=rand(1,50);
    $eight_marks=0;
    $query="select * from question where question_id =$val and sub_id=1 and selected!=1";
    if($question_2_count==2){
        $query="select * from question where question_id =$val and sub_id=1 and selected!=1";
        $eight_marks=1;
    }
    
    $question=mysqli_query($connection,$query);
    $num_of_rows=mysqli_num_rows($question);
     if($num_of_rows==1){
         $total_count=$total_count+1;
         $question_2_count=$question_2_count+1;
         $row=mysqli_fetch_assoc($question);
         
        $question_statement = $row['question_statement'];
        $chapter_id = $row['chp_id'];
        $module_id = $row['mod_id'];
        $question_id = $row['question_id'];
        
        if($eight_marks==0){
            echo "<tr><td>".$question_number[$question_2_count -1]."</td>";
            echo "<td>".$question_statement."</td>";
            echo "<td>"."6"."</td></tr>";
        
        }
        else
        {
            echo "<tr><td>".$question_number[$question_2_count -1]."</td>";
            echo "<td>".$question_statement."</td>";
            echo "<td>"."8"."</td></tr>";
        }
        $query="Update question set selected=1 where question_id = $question_id";
        $update_selected=mysqli_query($connection,$query);
     }

}
}

//*****************************10,10***********************************************//
function type2_of_2($question_2_count,$total_count,$overall_questions){
    global $connection;
    global $question_number;
    
    echo "<tr><td>"." "."</td></tr>";
    echo "<tr><td>"."<strong>".$overall_questions."</strong>"."</td>";
    echo "<td>".""."</td></tr>";
    
    while($question_2_count!=2){
    $val=rand(1,50);

    $query="select * from question where question_id =$val and sub_id=1 and selected!=1 and marks=10";
    
    $question=mysqli_query($connection,$query);
    $num_of_rows=mysqli_num_rows($question);
     if($num_of_rows==1){
         $total_count=$total_count+1;
         $question_2_count=$question_2_count+1;
         $row=mysqli_fetch_assoc($question);
         
        $question_statement = $row['question_statement'];
        $chapter_id = $row['chp_id'];
        $module_id = $row['mod_id'];
        $question_id = $row['question_id'];
        
        echo "<tr><td>".$question_number[$question_2_count -1]."</td>";
        echo "<td>".$question_statement."</td>";
        echo "<td>"."10"."</td></tr>";
         
        $query="Update question set selected=1 where question_id = $question_id";
        $update_selected=mysqli_query($connection,$query);
        }
    }
}

        
//*****************************7,7,6***********************************************//
function type3_of_2($question_2_count,$total_count,$overall_questions){
    global $connection;
    global $question_number;
    
    echo "<tr><td>"." "."</td></tr>";
    echo "<tr><td>"."<strong>".$overall_questions."</strong>"."</td>";
    echo "<td>".""."</td></tr>";

    while($question_2_count!=3){
    $val=rand(1,50);
    $six_marks=0;
    $query="select * from question where question_id =$val and sub_id=1 and selected!=1";
    if($question_2_count==2){
        $query="select * from question where question_id =$val and sub_id=1 and selected!=1";
        $six_marks=1;
    }
    
    $question=mysqli_query($connection,$query);
    $num_of_rows=mysqli_num_rows($question);
     if($num_of_rows==1){
         $total_count=$total_count+1;
         $question_2_count=$question_2_count+1;
         $row=mysqli_fetch_assoc($question);
         
        $question_statement = $row['question_statement'];
        $chapter_id = $row['chp_id'];
        $module_id = $row['mod_id'];
        $question_id = $row['question_id'];
        
        if($six_marks==0){
            echo "<tr><td>".$question_number[$question_2_count -1]."</td>";
            echo "<td>".$question_statement."</td>";
            echo "<td>"."7"."</td></tr>";
        
        }
        else
        {
            echo "<tr><td>".$question_number[$question_2_count -1]."</td>";
            echo "<td>".$question_statement."</td>";
            echo "<td>"."6"."</td></tr>";
        }
        $query="Update question set selected=1 where question_id = $question_id";
        $update_selected=mysqli_query($connection,$query);
        }
    }
}

//*****************************6,6,4,4***********************************************//
function type4_of_2($question_2_count,$total_count,$overall_questions){
    global $connection;
    global $question_number;
    
    echo "<tr><td>"." "."</td></tr>";
    echo "<tr><td>"."<strong>".$overall_questions."</strong>"."</td>";
    echo "<td>".""."</td></tr>";
    
    while($question_2_count!=4){
    $val=rand(1,50);
    $four_marks=0;
    $query="select * from question where question_id =$val and sub_id=1 and selected!=1";
    if($question_2_count>=2){
        $query="select * from question where question_id =$val and sub_id=1 and selected!=1";
        $four_marks=1;
    }
    
    $question=mysqli_query($connection,$query);
    $num_of_rows=mysqli_num_rows($question);
     if($num_of_rows==1){
         $total_count=$total_count+1;
         $question_2_count=$question_2_count+1;
         $row=mysqli_fetch_assoc($question);
         
        $question_statement = $row['question_statement'];
        $chapter_id = $row['chp_id'];
        $module_id = $row['mod_id'];
        $question_id = $row['question_id'];
        
        if($four_marks==0){
            echo "<tr><td>".$question_number[$question_2_count -1]."</td>";
            echo "<td>".$question_statement."</td>";
            echo "<td>"."6"."</td></tr>";
        
        }
        else
        {
            echo "<tr><td>".$question_number[$question_2_count -1]."</td>";
            echo "<td>".$question_statement."</td>";
            echo "<td>"."4"."</td></tr>";
        }
        $query="Update question set selected=1 where question_id = $question_id";
        $update_selected=mysqli_query($connection,$query);
     }
    }

}

function ques_no_1_6($overall_questions){
        //echo $overall_questions;
        $ques_rand=rand(1,2);
        //echo $ques_rand;
        $question_1_count=0;
        $total_count=0;
        if($ques_rand==1)
        {   
            type1_of_1($question_1_count,$total_count,$overall_questions);
        }
        else
        {
            type2_of_1($question_1_count,$total_count,$overall_questions);
        }
}
function ques_no_2_5($overall_questions){
        //echo $overall_questions;
        $ques_rand=rand(1,4);
        $question_2_count=0;
        $total_count=0;
    if($ques_rand==1){
        type1_of_2($question_2_count,$total_count,$overall_questions);
        
    }
    else if($ques_rand==2){
        type2_of_2($question_2_count,$total_count,$overall_questions);
    }
    else if($ques_rand==3){
        type3_of_2($question_2_count,$total_count,$overall_questions);
    }
    else
    {
        type4_of_2($question_2_count,$total_count,$overall_questions);
    }
        



}
function reset_question(){
    
    global $connection;
    $query="Update question set selected=0";
    $reset_quest=mysqli_query($connection,$query);
}
        
        
        
/*************************Global Variables******************************************/
$ques_no_1_6 = array("Q1","Q6");
$flag=0;
$ques_no_2_5 = array("Q2","Q3","Q4","Q5");
$question_number = array("a)","b)","c)","d)");
$overall_questions=array("Q1","Q2","Q3","Q4","Q5","Q6");

/*******************************************************************************/
//----------------------Function calls---------------------------------//

        
ques_no_1_6($overall_questions[0]);
ques_no_2_5($overall_questions[1]);
ques_no_2_5($overall_questions[2]);
ques_no_2_5($overall_questions[3]);
ques_no_2_5($overall_questions[4]);
//ques_no_1_6($overall_questions[5]);



reset_question();
        
        
        
        
        
        
        
        
        
        
        
        
        
        ?>
        
    </tr>
    </table>
    </div>
    </body>
</html>