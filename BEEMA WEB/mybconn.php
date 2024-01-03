<?php
// Connect to DB

$conn= mysqli_connect("localhost","root","","mits");
if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

echo "The POST assoc array values are --<br>";
print_r($_POST);

if (isset($_POST['submit']))
{
  $book = $_POST['fbook'];
  $title = $_POST['title'];
  $author = $_POST['author'];
  $edition = $_POST['edition'];
  $publisher = $_POST['publisher'];
  echo " The values are: ".'<br>';
  echo "Name: ".$book.'<br>';
  echo "Roll No: ".$title.'<br>';
  echo "DS Marks: ".$author.'<br>';
  echo "ASE Marks: ".$edition.'<br>';
  echo "Total Marks: ".$publisher;
}
//Connecting to database and inserting the values
$sql="insert into marks values( '$book', '$title', '$author', '$edition', '$publisher')";
if (mysqli_query($conn, $sql)) {
     echo "New record created successfully";
} else {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);

?>