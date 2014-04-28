<?php
$function = $_GET['function'];
$setpoint = (int)$_GET['sp'];
$onOffState = $_GET['onOff'];
$zones = $_GET['zone'];
        $zones = explode(',',$zones);
try {
	$dbh = new PDO("mysql:host=smarthome.cs.virginia.edu;dbname=smarthome",'smarthome','sm4rthom3', array(PDO::ATTR_PERSISTENT => true ));
}
catch(PDOException $e) {
	//die($e->getMessage());
	
}

if($function == "get"){
	$statement = $dbh -> prepare("select ZoneTemp,SystemSP from Zoning order by Timestamp desc limit 1");
	$statement ->execute();
	if($curr = $statement -> fetch()) {
		echo json_encode(array("zone_temp"=>$curr['ZoneTemp'],"set_temp"=>$curr['SystemSP']));
	} else {
		echo json_encode(array("success"=>"0"));
	}

	
}

?>
