<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: larger;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width:60%;
  margin-left: 20%;
margin-top: 8%;
}

</style>


<body>
  <div>
  <form method="post" action="insert.php">
    <label>Enter ID</label><br>
    <input type="text" name="id"><br>
    <label>Enter Post Title</label><br>
    <input type="text" name="ptitle"><br>
    <label>Enter Post Description</label><br>
    <input type="text" name="pdesc"><br>
    <input type="submit" name="submit" value="Insert record"><br>
</form>
</div>


</body>

</html>
