<DOCTYPE! html>
<html>
<head>
<style>
#regform{  
  border: 7px outset red;
  background-color: white;
  text-align: center;
  width: 500;
  height: 500;
  margin:auto;

}
</style>
</head>
<body>
<div id="book">
<h3> BOOK</h3>
<br>
<form name="bookForm"  action="mybconn.php" method="post">
<label for="name">Book Name</label> 
<input type="text" id="name" name="bookname" > <br><br>
<label for="roll">Book title</label> 
<input type="text" id="roll" name="title" > <br>
<label for="ds">Book Author</label> 
<input type="text" id="ds" name="author" ><br><br>
<label for="ase">Book Edition</label> 
<input type="text" id="ase" name="edition" ><br><br>
<label for="tot">Book Publisher</label> 
<input type="text" id="tot" name="publisher" ><br><br>

<input type="submit" name="submit" value="Submit">
</form>
</div>
</body>