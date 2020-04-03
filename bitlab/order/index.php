<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <form name="test" action="order.php" method="post">
    <label>Name</label><br>
    <input type="text" name="name"><br>
    <label>Surname</label><br>
    <input type="text" name="surname"><br>
    <label>Select food</label><br>
    <select name="select">
      <option value="pizza">pizza</option>
      <option value="burger">burger</option>
       <option value="french-fries">french-fries</option>
    </select><br>
    <button type="submit">Order</button>
  </form>
</body>
</html>