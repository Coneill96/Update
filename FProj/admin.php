<?php
$connect = mysqli_connect("localhost", "root", "", "project");
$query = "SELECT user_id, Username, email, first_name, surname FROM users";
$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>EC1 Form login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <meta name="robots" context="follow">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/css/uikit.min.css" />
</head>
	<body>
		<div class="uk-section uk-container">
			<img src="images/UUJlogo.jpg" alt="Jordanstown logo">
  		<h2 id="pm_header">UUJ Extenuating Circumstance Admin</h2>
		</div>

		<?php require_once "inc/footer.php"; ?>
		<div class="row">
   		 <div class="col-sm-2"></div>
    	<div class="col-sm-8">
    		<div class="well">Extenuating Circumstances Submissions</div>
    		<div class="newContainer">
          <h3>Update User table</h3>
    			<div class="container">
            <div class="table-responsive">
            <table id="editable_table" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>user_id</th>
                  <th>Username</th>
                  <th>email</th>
                  <th>first_name</th>
                  <th>surname</th>
                </tr>
              </thead>
              <tbody>
                <?php
                while($row = mysqli_fetch_array($result))
                {
                  echo '
                  <tr>
                    <td>'.$row["user_id"].'</td>
                    <td>'.$row["Username"].'</td>
                    <td>'.$row["email"].'</td>
                    <td>'.$row["first_name"].'</td>
                    <td>'.$row["surname"].'</td>
                  </tr>
                  ';
                }
                ?>
              </tbody>
          </div>
        </div>
      </div>
    </div>
  <div class="col-sm-2"></div>

  
</body>
</html>
<script>
  $(document).ready(function(){
    $('#editable_table').Tabledit({
      url: 'ajax/action.php',
      columns:{
        identifier:[0, "user_id"],
        editable:[[1, 'Username'], [2, 'email'], [3, 'first_name'], [4, 'surname']]
      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR)
      {
         if(data.action == 'delete')
         {
            $('#'+data.id).remove();
         }
      }
    });
  });
</script>