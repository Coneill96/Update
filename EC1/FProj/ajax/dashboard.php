<?php 
		//Allow the config
		define('__CONFIG__', true);
		//Require the config
		require_once "../inc/config.php";

		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			header('Content-Type: application/json');

			$return1 = [];

			$ass_name = ( $_POST['ass_name'] );
			$due_date = ( $_POST['due_date'] );
			$preferred_outcome = ( $_POST['preferred_outcome'] );
			$p_e_d = ( $_POST['p_e_d'] );
			$d_o_c = ( $_POST['d_o_c'] );
			$d_a_f = ( $_POST['d_a_f'] );
			$d_a_t = ( $_POST['d_a_t'] );
			$evidence = ( $_POST['evidence'] );
			$statement = ( $_POST['statement'] );

				
				$stmt = $con->prepare("INSERT INTO assessment(ass_name, due_date, preferred_outcome, p_e_d) VALUES( :ass_name, :due_date, :preferred_outcome, :p_e_d)");
				$stmt->bindParam(":ass_name", $ass_name, PDO::PARAM_STR);
				$stmt->bindParam(":due_date", $due_date, PDO::PARAM_STR);
				$stmt->bindParam(":preferred_outcome", $preferred_outcome, PDO::PARAM_STR);
				$stmt->bindParam(":p_e_d", $p_e_d, PDO::PARAM_STR);
				$assessmentInsertSuccess = $stmt->execute();


				
				$sql= "SELECT LAST_INSERT_ID() AS id";
				$stmt2 = $con->query($sql); 
				$row =$stmt2->fetchObject();
				$ass_id = $row->id;



				$stmt1 = $con->prepare("INSERT INTO reason_for_request(d_o_c, d_a_f, d_a_t, evidence, statement) VALUES( :d_o_c, :d_a_f, :d_a_t, :evidence, :statement)");
				$stmt1->bindParam(":d_o_c", $d_o_c, PDO::PARAM_STR);
				$stmt1->bindParam(":d_a_f", $d_a_f, PDO::PARAM_STR);
				$stmt1->bindParam(":d_a_t", $d_a_t, PDO::PARAM_STR);
				$stmt1->bindParam(":evidence", $evidence, PDO::PARAM_STR);
				$stmt1->bindParam(":statement", $statement, PDO::PARAM_STR);
				$reasonInsertSuccess = $stmt1->execute();

				$sql= "SELECT LAST_INSERT_ID() AS id";
				$stmt3 = $con->query($sql);
				$row =$stmt3->fetchObject();
				$reason_id = $row->id;

				$stmt4 = $con->prepare("INSERT INTO requests (user_id, ass_id, rfr_id) VALUES ( :user_id, :ass_id, :rfr_id)");
				$stmt4->bindParam(":user_id", $_SESSION['user_id'], PDO::PARAM_STR);
				$stmt4->bindParam(":ass_id", $ass_id, PDO::PARAM_STR);
				$stmt4->bindParam(":rfr_id", $reason_id, PDO::PARAM_STR);
				$requestInsertSuccess = $stmt4->execute();




			if($assessmentInsertSuccess AND $reasonInsertSuccess AND $requestInsertSuccess)
			{
				echo "Form has been submitted - ";
				echo $ass_id;
				echo " - ";
				echo $reason_id;
				echo " - ";
				echo $_SESSION['user_id'];
				// echo json_encode($return1, JSON_PRETTY_PRINT); 
				exit;
				
			} else {
				echo "Query Problems";
			}

			
			}
		
		

?>