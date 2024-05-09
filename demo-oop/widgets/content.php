<?php
    include ("./models/Employee.php");

    $emp1 = new Employee("Mikay","Gavion", "Teacher");
    // $emp1->lname = "Gavion";
    // $emp1->fname = "Mikay";
    // $emp1->position = "Programmer";
?>

<div class="listing">
    <div class="em" -card="">
        <h3><?=$emp1->fname." ".$emp1->lname?></h3>
        <p><?=$emp1->position?></p>
    
    </div>
</div>