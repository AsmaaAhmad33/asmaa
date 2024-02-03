<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>submit form</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container" style="padding: 5px">
  <p></p>
  <h3> Please enter your personal information here
</h3>
  <!-- you can change the action attribute with the path of a file in the server where you want to send the data 
  or the link for example http://localhost:8080/example if the form is outside server -->
  <form action="/Backend-R9-Tasks/task-7-php-arrays/submit.php" method="POST">
    <div class="form-group">
      <label for="name">name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter your name" name="u-name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
