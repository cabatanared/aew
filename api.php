<?php


session_start();


$servername = "localhost";
$username = "root";
$password = "";
// $password = "duisx2nd!!";

try {
  $pdo = new PDO("mysql:host=$servername;dbname=virtual_tours", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {

}

switch ($_POST['action']) {
	case 'register':
		
		$sql = "INSERT INTO visitor (name, email, age, gender, country_id, public_ip) VALUES (?,?,?,?,?,?)";
		$pdo->prepare($sql)->execute([$_POST['name'], $_POST['email'],$_POST['age'], $_POST['gender'], $_POST['country'], $_POST['publicIp']]);
		$id = $pdo->lastInsertId();

		$_SESSION["name"] = $_POST['name'];
		$_SESSION["email"] = $_POST['email'];
		$_SESSION["age"] = $_POST['age'];
		$_SESSION["gender"] = $_POST['gender'];
		$_SESSION["country"] = $_POST['country'];		
		$_SESSION["publicIp"] = $_POST['publicIp'];
		$_SESSION["id"] = $id;
		break;
	case 'question':
		
		$sql = "INSERT INTO `questions`( `visitor`, `question`, `about`) VALUES (?,?, ?)";
		$pdo->prepare($sql)->execute([$_SESSION['id'], $_POST['question'], $_POST['facility']]);

		break;
	case 'get_question':
		$stmt = $pdo->prepare("SELECT * FROM `questions` WHERE about = ? and answer is not null and visitor = 1");
		$stmt->execute([ $_POST['facility']]);
		while ($row = $stmt->fetch()) {
		    echo '<div class="question"><div>'.$row['question'].'</div><br><div>'.$row['answer'].'</div></div>';
		}
		break;
	case 'getQuestions':
		$stmt = $pdo->execute("SELECT q.*, name, email, COALESCE(answer, '') answer  FROM `questions` q INNER JOIN visitor v on visitor = v.id WHERE 1");
		while ($row = $stmt->fetch()) {
		    echo '<div class="question"><div>'.$row['question'].'</div><br><div>'.$row['answer'].'</div></div>';
		}
		break;
	case 'home_views':
		$id = $_POST['id'];
		$sql = "UPDATE visitor set home_views = home_views + 1 where id = ?";
		$pdo->prepare($sql)->execute([$id]);
		break;
	case 'tour_views':
			$id = $_POST['id'];
			$sql = "UPDATE visitor set tour_views = tour_views + 1 where id = ?";
			$pdo->prepare($sql)->execute([$id]);
			break;
	default:
		# code...
		break;
}


?>