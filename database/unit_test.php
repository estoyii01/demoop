<?php
require("Database.php");

$dbobjt = new Database();
//case # 1  Inserting data using valid SQL insert command			
/*
$result=$dbobjt->execute("INSERT INTO tableuser(name,email,username,password) VALUES ('restoyii','esrotyii@y.com','estoyii','restotoy')");
echo "Case 1 result:" .$result;
*/
//case # 2
/*$result=$dbobjt->execute("UPDATE tableuser SET name = 'shanice' WHERE idno = 1");
echo "Case 2 result: ".$result;
*/
//case # 3
/*$result=$dbobjt->execute("SELECT * FROM tableuser");
echo "Case 3 result: ".$result;
*/
//case # 4
/*$result=$dbobjt->execute("DELETE FROM tableuser WHERE idno = 2");
echo "Case 4 result: ".$result;
*/
//case # 5
/*$result=$dbobjt->execute("INSER tableuser(name,email,username,password) VALUES ('estoyii','esrotyii@y.com','estoyii','restotoy')");
echo "Case 5 result:" .$result;*/
//case # 6
/*$result=$dbobjt->execute("UPDATE INTO tableuser SET name = 'shanice' WHERE idno = 1");
echo "Case 6 result: ".$result;*/
//case # 7
/*$result=$dbobjt->execute("DELETE INTO FROM tableuser WHERE idno = 2");
echo "Case 7 result: ".$result;*/
//case # 8
/*$result=$dbobjt->execute("SELECT INTO * FROM tableuser");
echo "Case 8 result: ".$result;*/
?>