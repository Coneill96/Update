<?php

$mysqli = new mysqli('localhost', 'root', '', 'project');

if (mysqli_connect_errno()) {
  echo json_encode(array('mysqli' => 'Failed to connect to MySQL: ' . mysqli_connect_error()));
  exit;
}

$page = isset($_GET['p'])? $_GET['p'] : '' ;
if($page=='view'){
	$result = $mysqli->query("Select requests.request_id, users.Username, requests.submission_date, reason_for_request.d_o_c, reason_for_request.d_a_t, reason_for_request.d_a_f, reason_for_request.evidence, reason_for_request.statement, assessment.ass_name, assessment.due_date, assessment.preferred_outcome, assessment.p_e_d, requests.status From users, requests, reason_for_request, assessment Where users.user_id = requests.user_id AND requests.rfr_id = reason_for_request.rfr_id AND assessment.ass_id = requests.ass_id");
	while($row = $result->fetch_assoc()){
		?>
		<tr>
			<td><?php echo $row['request_id'] ?></td>
			<td><?php echo $row['Username'] ?></td>
			<td><?php echo $row['submission_date'] ?></td>
			<td><?php echo $row['d_o_c'] ?></td>
			<td><?php echo $row['d_a_t'] ?></td>
			<td><?php echo $row['d_a_f'] ?></td>
			<td><?php echo $row['evidence'] ?></td>
			<td><?php echo $row['statement'] ?></td>
			<td><?php echo $row['ass_name'] ?></td>
			<td><?php echo $row['due_date'] ?></td>
			<td><?php echo $row['preferred_outcome'] ?></td>
			<td><?php echo $row['status'] ?></td>
		</tr>
		<?php
	}

} else {

	header('Content-Type: application/json');

	$input = filter_input_array(INPUT_POST);


	if ($input['action'] == 'edit') {
	    $mysqli->query("UPDATE users, requests, reason_for_request, assessment SET users.Username='" . $input['Username'] . "', submission_date='" . $input['submission_date'] . "', d_o_c='" . $input['d_o_c'] . "', d_a_t='" . $input['d_a_t'] . "', d_a_f='" . $input['d_a_f'] . "', evidence='" . $input['evidence'] . "', statement='" . $input['statement'] . "', ass_name='" . $input['ass_name'] . "', due_date='" . $input['due_date'] . "', preferred_outcome='" . $input['preferred_outcome'] . "', status='" . $input['status'] . "', WHERE request_id='" . $input['request_id'] . "'AND users.user_id = requests.user_id AND requests.rfr_id = reason_for_request.rfr_id AND assessment.ass_id = requests.ass_id");
	} else if ($input['action'] == 'delete') {
	    $mysqli->query("UPDATE users SET deleted=1 WHERE id='" . $input['id'] . "'");
	} else if ($input['action'] == 'restore') {
	    $mysqli->query("UPDATE users SET deleted=0 WHERE id='" . $input['id'] . "'");
	}

mysqli_close($mysqli);

echo json_encode($input);
}