
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
<body onload="viewData()">
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
          <h3>Update table</h3>
    			
            <table id="tabledit" class="table table-bordered table-striped">
              <thead>
            <tr>
              <th>request_id</th>
             <th>Username</th>
             <th>submission_date</th>
             <th>d_o_c</th>
             <th>d_a_t</th>
             <th>d_a_f</th>
             <th>evidence</th>
             <th>statement</th>
             <th>ass_name</th>
             <th>due_date</th>
             <th>preferred_outcome</th>
             <th>status</th>
            </tr>
         </thead>
           
          <tbody></tbody>
        </table>
      </div>
    </div>
  <div class="col-sm-2"></div>
<script src="assets/js/jquery.tabledit.js"></script>
  
</body>
<script>
  function viewData(){
    $.ajax({
      url: 'process.php?p=view',
      method: 'GET'
    }).done(function(data){
      $('tbody').html(data)
      tableData()
    })

  }
  function tableData(){
    $('#tabledit').Tabledit({
    url: 'process.php',
    eventType: 'dblclick',
    editButton: false,
    deleteButton: false,
    columns: {
        identifier: [0, 'request_id'],
        editable: [[1, 'Username'], [2, 'submission_date'], [3, 'd_o_c'], [4, 'd_a_t'], [5, 'd_a_f'], [6, 'evidence'], [7, 'statement'], [8, 'ass_name'], [9, 'due_date'], [10, 'preferred_outcome'], [11, 'status']]
    },
    onSuccess: function(data, textStatus, jqXHR) {
        viewData()
    },
    onFail: function(jqXHR, textStatus, errorThrown) {
        console.log('onFail(jqXHR, textStatus, errorThrown)');
        console.log(jqXHR);
        console.log(textStatus);
        console.log(errorThrown);
    },
    onAjax: function(action, serialize) {
        console.log('onAjax(action, serialize)');
        console.log(action);
        console.log(serialize);
    }
});

  }
</script>
</html>
