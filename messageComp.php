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
    <form action="action_page.php">
    <div class="container">
      <label for="topicDesc"><b>Ente Topic Description:</b></label>
      <input type="text" placeholder="Enter Description of The Topic..." name="topicDesc" required>
      <br>
      <br>
      <label for="messagetxt"><b>Enter Message Text Here:</b></label>
      <textarea type="text" placeholder="Compose Message Text..." name="messagetxt" required></textarea>
      <button type="submit">Compose Message</button>

      </form>
  </div>

</body>
</html>
