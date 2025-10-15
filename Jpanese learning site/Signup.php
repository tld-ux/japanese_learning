<!DOCTYPE html>
<html>
<head>
  <title>My PHP signup Page</title>
</head>
<body>

<h1>Sign Up</h1>
<form action="SignupProcessor.php" method="post">
  <label>Username: <input type="text" name="username"></label>
  <select name="Fluency" id="Fluency">
        <option value="">--Please choose an option--</option>
        <option value="1">Begginer</option>
        <option value="2">Novice</option>
        <option value="3">Intermediate</option>
        <option value="4">Fluent</option>
  </select>
  <label>Password: <input type="text" name="password"></label>
  <p>at least 12 characters</p>
  <label>Confirm Password: <input type="text" name="password"></label>
  <p>must match</p>
  <p> </p>
  <button type="submit">Submit</button>
</form>

</body>
</html>