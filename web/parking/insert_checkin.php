<?php 
session_start();
if (isset($_SESSION['username']))
{
	$username = $_SESSION['username'];
}
else
{
	header("Location: login_page.php");
	die();
}

require_once("parking_db.php");
$db = get_db();

$lot = htmlspecialchars($_POST['plot']);
$pass = htmlspecialchars($_POST['ppass']);

$query1 = 'SELECT lot_id FROM parking_lot WHERE lot_location=:lot AND parking_pass=:pass';
$stmt = $db->prepare($query1);
$stmt->bindValue(':lot', $lot, PDO::PARAM_STR);
$stmt->bindValue(':pass', $pass, PDO::PARAM_STR);
$stmt->execute();
$lot_id = $stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump($lot_id);
echo "<br>";
echo "<br>";
$query2 = 'SELECT member_id FROM member WHERE username=:username';
$stmt = $db->prepare($query2);
$stmt->bindValue(':username', $username, PDO::PARAM_STR);
$stmt->execute();
$member_id = $stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump($member_id);
echo "<br>";
echo "<br>";
var_dump($username);
echo "<br>";
echo "<br>";
/*
$query3 = 'INSERT INTO parking_info(start_at_date, start_at_time, lot_id, member_id) VALUES(CURRENT_DATE, CURRENT_TIME, :lot_id, :member_id)';
$statement = $db->prepare($query3);
$statement->bindValue(':lot_id', $lot_id, PDO::PARAM_INT);
$statement->bindValue(':member_id', $member_id, PDO::PARAM_INT);
$result = $statement->execute();

flush();
header("Location:enter_info.php");
die();
*/
?>