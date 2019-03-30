<html>
<head>
<link rel="stylesheet" type="text/css" href="CSS/index.css">
<link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
<title>KOH Message board</title>
</head>
<body>
  <div id="header">
    <h1>KOH Message Board</h1>
  </div>

<div id="container">
  <form method="POST" action="/PHP/createAccount.php">
  <div class="container">
    <label for="uname"><b>Create Username</b></label>
    <input type="text" placeholder="Enter a Username" name="uname" required>
    <br>
    <br>
    <label for="pword"><b>Create Password</b></label>
    <input type="password" placeholder="Enter a Password" name="pword" required>
    <br>
    <br>
    <button type="submit">Register</button>
    <a href="index.php">Log In Existing Account</a>
  </div>
  </form>
</div>

</body>
</html>
