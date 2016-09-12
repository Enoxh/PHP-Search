<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="   crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/jquery-ui-git.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>

<?php

    include_once('includes/class.search.php');
    $expected_array_got_string = 'POST';  
    if ($_SERVER["REQUEST_METHOD"] == "POST"  ) {
    $str1 = test_input($_POST["query"]);
    $weight = test_input($_POST["points"]);    
    $min_length = 3; //min 3
    $search = new Search();
    $resArr = array();
    // if query length is more or equal minimum length then
    if(strlen($str1) >= $min_length){
    //returns an array of string matches from the phrase db   
    $resArr = $search->checkSimilarity($str1,$weight);
   // var_dump($resArr);
    if(!empty($resArr)){
        for($i=0;$i<count($resArr);$i++){
       
        echo 'Match: ';
        echo $resArr[$i];
        echo   '<br/>';        
            
    }        
    }else{
    echo 'INVALID! INPUT';
    }
    }
    }


    //sanitizes input from user
    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
    ?>
    

    
</body>
</html>