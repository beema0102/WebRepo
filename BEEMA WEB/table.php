<?php
$conn= mysqli_connect("localhost","root","","mits");
if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}
else{

    echo "Connected successfully";}
$sql="insert into student values('3', 'badu', 45, 'pathamyl','03/05/2002','7902504710','2')";
if (mysqli_query($conn, $sql)) {
     echo "New record created successfully";
}else {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



?>
<?php

$sqll = "SELECT * FROM student";

$result = mysqli_query($conn, $sqll);

if (mysqli_num_rows($result) > 0) {

// output data of each row
echo "<table border=\"1\"><tr><th>si no</th><th>Name</th><th>rollno</th><th>address</th><th>date of birth</th><th>phone</th><th>course</th></tr>";

while($row = mysqli_fetch_assoc($result)) {

echo "<tr><td> ". $row["student_id"]."</td>";
echo "<td>" . $row["student_name"]."</td>";
echo "<td>".$row["student_rollno"]."</td>";
echo "<td>".$row["student_address"]."</td>";
echo "<td>" . $row["student_dateofbirth"]."</td>";
echo "<td>".$row["student_phone"]."</td>";
echo "<td>".$row["student_course"]."</td></tr>";
echo "<br>";
}

} else {

echo "No records found";

}

mysqli_close($conn);

?>