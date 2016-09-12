<?php
class Search{
 
/*
Searches a MYSQL column for string matches and compares to a submitted string based on a user defined  weighted similarity between strings 
@ENOXH
*/

 
function __construct(){
//your db connection must establish $mysqli as connection variable
include_once('db_conn.php');
$this->mysqli = $mysqli;
}
    
 
        /*SELECT*/
        public function selectFromDb($selectors,$table){
        $mysqli = $this->mysqli;
        $sql = "SELECT $selectors FROM $table";
        $result = $mysqli->query($sql);
        if (mysqli_num_rows($result) > 0) {
        return $result;
        }
        else {
        return "0 results";
        }
        }
        /*INSERT*/            
        public function insertIntoDb($selectors,$table,$values){
        $mysqli = $this->mysqli;
        $sql = "INSERT INTO $table ($selectors) VALUES ($values)";
        $result = $mysqli->query($sql);
        if (mysqli_num_rows($result) > 0) {
        return $result;
        }
        else {
        return "0 results";
        }
        }
        /*UPDATE*/
        public function updateDbWhere($selectors,$table,$updatevals,$field,$fieldval){
        $mysqli = $this->mysqli;
        $sql = "UPDATE $table SET $updatevals WHERE $field = $fieldval";
        $result = $mysqli->query($sql);
        if (mysqli_num_rows($result) > 0) {
        return $result;
        }else {
        return "0 results";
        }
        }
        /*DELETE*/
        public function deleteFromDB($table,$updatevals,$field,$fieldval){
        $mysqli = $this->mysqli;
        $sql = "DELETE FROM $table WHERE $field = $fieldval";
        $result = $mysqli->query($sql);
        if (mysqli_num_rows($result) > 0) {
        return $result;
        }else {
        return "0 results";
        }
        }    
        /*
        Usage: $result = $crud->selectFromDbJoinOn('test','profiles','test.id=profiles.id','*');
        */ 
        public function selectFromDbJoinOn($table1,$table2,$equals,$selectors ){
        $mysqli = $this->mysqli;
        $sql = "
        SELECT $selectors
        FROM $table1
        INNER JOIN $table2
        ON $equals 
        ";
        $result = $mysqli->query($sql);
        if (mysqli_num_rows($result) > 0) {
        return $result;
        }
        else {
        return "0 results";
        }
        }      


    
        //check for similarity
        public function checkSimilarity($str1,$weight){
        $arr = array();
        //get all known phrases    
        $result = $this->selectFromDb('ph_phrase','simi_phrases');
        if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
        $c = $this->similarity($str1, $row['ph_phrase']);
        $c = $c * 100;    
        if ($c >= $weight){
        array_push($arr,$row['ph_phrase']);
        } 
            
        }
        return $arr;
        }
        }
    
    
        //compares two strings for similarity
        public function similarity($str1, $str2) {
        $len1 = strlen($str1);
        $len2 = strlen($str2);
        $max = max($len1, $len2);
        $similarity = $i = $j = 0;

        while (($i < $len1) && isset($str2[$j])) {
        if ($str1[$i] == $str2[$j]) {
        $similarity++;
        $i++;
        $j++;
        } elseif ($len1 < $len2) {
        $len1++;
        $j++;
        } elseif ($len1 > $len2) {
        $i++;
        $len1--;
        } else {
        $i++;
        $j++;
        }
        }

        return round($similarity / $max, 2);

        }

   
}

?>