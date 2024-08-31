<?php

$table = array(
    "header"=>array(
        "Student ID",
        "Lastname",
        "Middlename",
        "Firstname",
        "Course",
        


    ),
 "body"=>array(
        array(
            "student id"=>"",
            "middlename"=>"Middlename",
            "firstname"=>"Firstname",
            "course"=>"BSIT",
            "section"=>"3C"
        ),
        array(
            "student id"=>"",
            "middlename"=>"Middlename",
            "firstname"=>"Firstname",
            "course"=>"BSIT",
            "section"=>"3C"
        ),
        array(
            "student id"=>"",
            "middlename"=>"Middlename",
            "firstname"=>"Firstname",
            "course"=>"BSIT",
            "section"=>"3C"
        ),
        array(
            "student id"=>"",
            "middlename"=>"Middlename",
            "firstname"=>"Firstname",
            "course"=>"BSIT",
            "section"=>"3C"
        ),
        array(
            "student id"=>"",
            "middlename"=>"Middlename",
            "firstname"=>"Firstname",
            "course"=>"BSIT",
            "section"=>"3C"
        ),
        array(
            "student id"=>"",
            "middlename"=>"Middlename",
            "firstname"=>"Firstname",
            "course"=>"BSIT",
            "section"=>"3C"
        ),
        array(
            "student id"=>"",
            "middlename"=>"Middlename",
            "firstname"=>"Firstname",
            "course"=>"BSIT",
            "section"=>"3C"
        ),
        array(
            "student id"=>"",
            "middlename"=>"Middlename",
            "firstname"=>"Firstname",
            "course"=>"BSIT",
            "section"=>"3C"
        ),
        array(
            "student id"=>"",
            "middlename"=>"Middlename",
            "firstname"=>"Firstname",
            "course"=>"BSIT",
            "section"=>"3C"
        ),
        array(
            "student id"=>"",
            "middlename"=>"Middlename",
            "firstname"=>"Firstname",
            "course"=>"BSIT",
            "section"=>"3C"
        )
    )
       
        
)

?>

<table border="6">
<thead>

<?php
    for ($i = 0; $i <= count ($table["header"]) - 1; $i++){
        echo "<th>".$table["header"][$i]."</th>";
    }
     
?>


<thead>
<body>

<?php
    for ($i = 0; $i <=count ($table["body"]) -1 ; $i++){
    echo "<tr>";
    echo "<td>".$i."</td";
    echo "<td>".$table["body"][$i]["student id"]."</td>";
    echo "<td>".$table["body"][$i]["middlename"]."</td>";
    echo "<td>".$table["body"][$i]["firstname"]."</td>";
    echo "<td>".$table["body"][$i]["course"]."</td>";
    echo "<td>".$table["body"][$i]["section"]."</td>";
    echo"</tr>";                                                                                                                            
}
?>
