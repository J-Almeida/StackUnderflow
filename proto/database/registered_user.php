<?php
	function isLoginCorrect($email, $password) {
		global $conn;
		$stmt = $conn->prepare("SELECT *
								FROM registered_user
								WHERE email = ? AND password = ?");
		$stmt->execute(array($email, sha1($password)));
		return $stmt->fetch() == true;
	}

	function createUser($name, $surname, $email, $username, $password, $company){
		global $conn;
		$stmt = $conn->prepare("INSERT INTO registered_user(
									name, surname, email, username, password, company
								)
								VALUES (?,?,?,?,?,?)");
		$stmt->execute(array($name, $surname, $email, $username, sha1($password), $company));
		return $stmt->fetch() == true;
	}

	function getUsernameByEmail($email){
		global $conn;
		$stmt = $conn->prepare("SELECT username
								FROM registered_user
								WHERE email = ?");
		$stmt->execute(array($email));
		return $stmt->fetch();
	}
?>
