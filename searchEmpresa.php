<?phpinclude("db.class.php");if(isset($_POST['data'])){	$data = $_POST['data'];	$search = $conn->query("SELECT id,nombre from empresa where empresa.nombre like '$data%'");	$i = 0;		while($row = $search->fetch(MYSQLI_ASSOC))	{		$results[$i]['id'] = $row['id'];		$results[$i]['nombre'] = $row['nombre'];		$i++;	}		print json_encode($results);}?>