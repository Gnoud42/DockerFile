<?php
//print string to screen
echo "Hello world Docker. This is PHP application!!!!";
echo "<br>";
echo "This is employee list !!!!";
//declare array with 4 element
$mysqli = new mysqli("db", "root", "example", "FPT");
//command sql to add employee info to DB
$sql = "INSERT INTO employee (name, age, position) VALUES('Nguyen Van A', '23', 'IT')";
//variable mysqli access in to variable sql
$result = $mysqli->query($sql);
$sql = "INSERT INTO employee (name, age, position) VALUES('Le Thi H', '22', 'QA')";
$result = $mysqli->query($sql);
$sql = "INSERT INTO employee (name, age, position) VALUES('Nguyen Van B', '21', 'Test')";
$result = $mysqli->query($sql);
$sql = "INSERT INTO employee (name, age, position) VALUES('Nguyen Thi C', '25', 'AI')";
$result = $mysqli->query($sql);
$sql = "INSERT INTO employee (name, age, position) VALUES('Vu Van D', '25', 'DevOps')";
$result = $mysqli->query($sql);
//get all employee info
$sql = 'SELECT * FROM employee';

//checking in variable result has data or not
if ($result = $mysqli->query($sql)) {
//fetch_object get each field's value in result
//while loop get all array of data in result
    while ($data = $result->fetch_object()) {
//new empty array. Assign data to employee[]
        $employee[] = $data;
    }
}
//assgin data to elements
foreach ($employee as $user) {
    echo "<br>";
    echo $user->name . " " . $user->age . " " . $user->position;
    echo "<br>";
}
?>