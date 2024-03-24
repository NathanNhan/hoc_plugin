<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="<?php echo PLUGIN_URI ?>css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="<?php echo PLUGIN_URI ?>js/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="<?php echo PLUGIN_URI ?>js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
<form class="form-inline pt-3" action="/action_page.php">
  <div class="alert alert-warning text-center">Add Employee</div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>

  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name">
  </div>

  <div class="form-group">
    <label for="age">Age:</label>
    <input type="number" class="form-control" id="age">
  </div>

  <div class="form-group">
    <label for="phone">Phone:</label>
    <input type="text" class="form-control" id="phone">
  </div>

  <div class="form-group">
    <label for="address">Address:</label>
    <input type="text" class="form-control" id="address">
  </div>

  <div class="form-group pt-3">
    <select class="form-select" aria-label="Default select example">
        <option selected>Select gender</option>
        <option value="nam">Nam</option>
        <option value="nu">Nữ</option>
    </select>
  </div>

  <div class="form-group pt-3 d-flex justify-content-center">
      <button type="submit" class="btn btn-info pt-3">Submit</button>
  </div>
</form>
</body>
</html>