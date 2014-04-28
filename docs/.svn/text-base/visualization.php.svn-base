<?php
$function = $_GET['function'];
$curUID = $_GET['uid'];
try {
	$dbh = new PDO("mysql:host=smarthome.cs.virginia.edu;dbname=smarthome",'smarthome','sm4rthom3', array(PDO::ATTR_PERSISTENT => true ));
}
catch(PDOException $e) {
	//die($e->getMessage());
	
}

if($function == "getArray"){
	$statement = "select UID,Timestamp,HouseID,X,Y,URL,Scale,Action from Visualization where UID>=".$curUID." order by UID";

	foreach($dbh->query($statement) as $curr) {
	 	echo json_encode(array("uid"=>$curr['UID'],"timestamp"=>$curr['Timestamp'],"houseID"=>$curr['HouseID'],"x"=>$curr['X'],"y"=>$curr['Y'],"url"=>$curr['URL'],"scale"=>$curr['Scale'],"action"=>$curr['Action']));
		echo "<br>";
	}
}

if($function == "getTable"){
	$statement = "select UID,Timestamp,HouseID,X,Y,URL,Scale,LayerID,Action from Visualization ORDER BY LayerID";
	$index = 0;
	$table = array();
	foreach($dbh->query($statement) as $curr) {
		$index = $index+1;	 	
		$row = 	array("uid"=>$curr['UID'],"timestamp"=>$curr['Timestamp'],"houseID"=>$curr['HouseID'],"x"=>$curr['X'],"y"=>$curr['Y'],"url"=>$curr['URL'],"scale"=>$curr['Scale'],"layerID"=>$curr['LayerID'],"action"=>$curr['Action']);
		$table[] = $row;
	}
	echo json_encode(array("table"=>$table));
}

if($function == "get"){
	$statement = $dbh -> prepare("select UID,Timestamp,HouseID,X,Y,URL,Scale,Action from Visualization where UID=".$curUID);
	$statement ->execute();

	if($curr = $statement -> fetch()) {
	 	echo json_encode(array("uid"=>$curr['UID'],"timestamp"=>$curr['Timestamp'],"houseID"=>$curr['HouseID'],"x"=>$curr['X'],"y"=>$curr['Y'],"url"=>$curr['URL'],"scale"=>$curr['Scale'],"action"=>$curr['Action']));
	} else {
		echo json_encode(array("fail"=>"0"));
	}
}

if($function == "getStartUID") {
    $statement = "select UID from Visualization order by UID limit 1";
    $sql = $dbh -> prepare($statement);
    $sql ->execute();
    
	if($curr = $sql -> fetch()) {
	 	echo json_encode(array("uid"=>$curr['UID']));
	} else {
		echo json_encode(array("fail"=>"0"));
	}

}

?>
