<?php 
	$arr = file_get_contents(__DIR__ . "/base.json");
	$a = json_decode($arr, true);
	error_reporting(E_ERROR);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>json</title>
	<style>
		table {
			border-collapse: collapse;
			margin: 0 auto;
			margin-top: 100px;
			text-align: center;
			font-size: 18px;
		}
		td {
			width: 200px;
			height: 40px;
			border: 1px solid black;
		}
		tr:first-child {
			color: #f1f1f1;
			background-color: blue;
			height: 50px;
			text-transform: uppercase;

		}
	</style>
</head>
<body>
	<table>
		<tr>
			<td>Имя</td>
			<td>Фамилия</td>
			<td>Адрес</td>
			<td>Телефон</td>
		</tr>
		<?php foreach($a as $item): ?>
			<tr>
				<td><?php echo $item['firstName']; ?></td>
				<td><?php echo $item['lastName']; ?></td>
				<td><?php echo $item['address']; ?></td>
				<td><?php echo $item['phoneNumber']; ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</body>
</html