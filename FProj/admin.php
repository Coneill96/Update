<?php
$connect = mysqli_connect("localhost", "root", "", "project");
$query = "Select users.Username, requests.request_id, requests.submission_date, reason_for_request .d_o_c, reason_for_request .d_a_t , reason_for_request .evidence, reason_for_request.statement, assessment.ass_name, assessment.due_date, assessment.preferred_outcome, assessment.p_e_d, requests.status From Requests JOIN reason_for_request JOIN assessment JOIN users ";
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
                  <th>request_id</th>
                  <th>submission_date</th>
                  <th>status</th>
                  <th>Username</th>
                  
                </tr>
              </thead>
              <tbody>
                <?php
                while($row = mysqli_fetch_array($result))
                {
                  echo '
                  <tr>
                  
                  </tr>
                  ';
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  <div class="col-sm-2"></div>

  
</body>
</html>
<script>
 
</script>