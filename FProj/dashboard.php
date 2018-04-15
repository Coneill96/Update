<?php 
    //Allow the config
    define('__CONFIG__', true);
    //Require the config
    require_once "inc/config.php"; 
   
  Page::ForceLogin();

  $User = new User($_SESSION['user_id']);
  

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <meta name="robots" context="follow">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/css/uikit.min.css" />
  <title>Dashboard</title>

 </head>

 <body>
  <div class="uk-section uk-container">
    <div class="container2">
    <img src="images/UUJlogo.jpg" alt="Jordanstown logo">
    <button class="btn btn-primary btn4"><a class="logout" href="/EC1/FProj/logout.php">Logout</a></button>
    <div class="row">
    <div class="col-sm-12">
      <h1 class="goldline">Faculty of Computing and engineering online EC1 Form submission</h1>
    </div>
  </div>
</div>
  
      
  </div>

  <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
      <div class="well">Extenuating Circumstances</div>
      <form class="form1">
      <div class="row">
        <div class="col-sm-4">
          <h5>Student Name: <?php echo $User->first_name;?> <?php  echo $User->surname; ?> </h5>

        </div>
        <div class="col-sm-3">
          <h5>Course Name:</h5>

        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <h5>Username: <?php echo $User->Username; ?></h5>
        </div>
        <div class="col-sm-3">
        <h5></h5>
        </div>
      </div>
    </form>

    <form class="form2" enctype="multipart/form-data">
      <div class="row">
        <h3 class="req_header">Requests</h3>
      </div>
    <div class="row">
      <div class="btn-group">
       <button type="button" class="btn btn-primary btn12" id="show" data-toggle="tooltip" title="CLick if you would like to submit a new request for extenuating circumstance">+ New Request</button>
       <button type="button" class="btn btn-primary btn5">Edit Request</button>
       <button type="button" class="btn btn-primary btn6" id="hide">- Delete Request</button>
      </div>
    </div>
    <br>
    <h4 id="form"></h4>
    <div id="New_form" class="hidden">
      <div class="row">
        <div class="col-sm-6">
          <h5 class="Req_id">Request ID: </p></h5>
        </div>
        <div class="col-sm-6">
          <h5 class="Req_id">Creation Date:</h5>
        </div>
      </div>
    <h3>Assessments</h3>
    <div class="row">
      <div class="col-sm-5">
        <h5>Assessment</h5>
      </div>
      <div class="col-sm-2">
        <h5>Due Date</h5>
      </div>
       <div class="col-sm-2">
        <h5>Preferred Outcome</h5>
      </div>
       <div class="col-sm-3">
        <h5>Preferred Extension</h5>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-5">
        <input class="uk-input" id="assessment_name" required="required" type="text" placeholder="Assessment Name">
      </div>
      <div class="col-sm-2">
        <input class="uk-input" id="Due_date" required="required" type="date" placeholder="Due Date">
      </div>
       <div class="col-sm-2">
        <div class="uk-margin">
        <div class="uk-form-controls" placeholder="Preferred outcome">
            <select class="uk-select" id="preferred_outcome">
                <option>Extension of Deadline</option>
                <option>Another assessment oppurtunity</option>
                <option>Deferred placement</option>
            </select>
        </div>
    </div>
      </div>
       <div class="col-sm-3">
        <input class="uk-input" id="Preferred_extension" required="required" type="date" placeholder="Preferred Extension">
      </div>
    </div>
    <button type="button" class="btn btn-primary btn7">+ Add Assessment</button>
    


    <h3 class="ror_header">Reason for Request</h3>
    <p>Please provide below your reason(s) for EC1 submission</p>

    <div class="row">
      <div class="col-sm-2">
        <p>Details of claim :</p>
      </div>
      <div class="col-sm-9">
        <input class="uk-input" id="details_of_claim" required="required" type="text" placeholder="Details...">
      </div>
    </div>
  <br></br>
  <div class="row">
    <div class="col-sm-2">
     <p>Date affected from :</p>
    </div>
    <div class="col-sm-2">
      <input class="uk-input" id="D_a_f" required="required" type="date">
    </div>
    <div class="col-sm-2">
      <p>Date affected to :</p>
    </div>
    <div class="col-sm-2">
      <input class="uk-input" id="D_a_t" required="required" type="date">
    </div>
  </div>
    <br></br>
    <div class="row">
      <div class="col-sm-2">
        <p>Evidence (pdf) :</p>
      </div>
      <div class="col-sm-8">
        <input id="evidence" required="required" type="file" name="evidence" accept="application/pdf">
      </div>
    </div>
    

    <h4>Statement</h4>

    <p>Please provide a statement providing details of your extenuating circumstances that will be presented to the EC1 panel.</p>
     <div class="uk-margin">
            <textarea class="uk-textarea" rows="5" id="statement" required="required" placeholder="Textarea"></textarea>
      </div>
      <button type="button" class="btn btn-primary btn8">Add Another Reason</button>
      <br>

    <button type="submit" class="btn btn-primary btn9">Submit</button> 
    </form>
    <div class="row">
      <div id="success"></div>
    <div id="output"></div>
    </div>    
      
    <br></br>
    

  
  <div class="col-sm-2"></div>
  </div>

<?php require_once "inc/footer.php"; ?>

 </body>
 </html>