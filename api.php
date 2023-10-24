<?php


session_start();


$servername = "localhost";
$username = "root";
$password = "duisx2nd!!";

try {
  $pdo = new PDO("mysql:host=$servername;dbname=virtual_tours", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {

}

switch ($_POST['action']) {
	case 'register':
		
		$sql = "INSERT INTO visitor (name, email) VALUES (?,?)";
		$pdo->prepare($sql)->execute([$_POST['name'], $_POST['email']]);
		$id = $pdo->lastInsertId();

		$_SESSION["name"] = $_POST['name'];
		$_SESSION["email"] = $_POST['email'];
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
	
	default:
		# code...
		break;
}


?>