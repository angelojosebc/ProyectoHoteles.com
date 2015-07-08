<?php if ($_POST) {
    include '../includes/config.php';
	
    $habnro = $_POST['habnro'];
	$hotel_id= $_POST['hotel_id'];
    $detalle = $_POST['detalle'];
	$capacidad= $_POST['capacidad'];
    $piso = $_POST['piso'];
    $precio = $_POST['precio'];
	$estado = $_POST['estado'];
	
	
    $id = $_POST['post'];
	
    echo $id;
    if ($id > 0) {
        $sql = sprintf("UPDATE habitacion SET hab_num = '$habnro', hotel_id = '$hotel_id', detalle = '$detalle', hab_capacidad = '$capacidad', hab_piso = '$piso', estado = '$estado' WHERE id = '$id'");
        $res = mysql_query($sql);
        if (!$res) die('Invalid query: ' . mysql_error());
    }
    else {
        $sql = sprintf("INSERT INTO habitacion VALUES (NULL, '$habnro', '$hotel_id', '$detalle', $capacidad, '$piso', '$precio', '$estado')");
        $res = mysql_query($sql);
        if (!$res) die('Invalid query: ' . mysql_error());
        $new_id = mysql_insert_id();
        echo $new_id;
    }
 
}  ?>