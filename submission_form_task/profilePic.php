<html>
  <head>
    <title>Profile Picture Submit</title>
  </head>
  <body>
    <h3>Attach Your Profile Picture:</h3>
    <form action="profile.php" enctype="multipart/form-data">
      <input type="file" name="picture" accept="image/*" required />
      <br />
      <br />
      <input type="submit" value="Submit" />
    </form>
  </body>
</html>