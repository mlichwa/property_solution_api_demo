<?php
/* 
 *	This is an entry point to the server side. 
 *  Appropriate Property Solutions API calls will be made
 *  depending on a clicked button. 
 */
 


// $_POST['page'] tells us which function to call.
// Each function will return appropriate json.
if($_POST['action'] == 'getFloorPlans'){

	require_once('property.php'); 
	$var = new Properties();
	$return = $var->getFloorPlans();
	echo($return);
}

if($_POST['action'] == 'getProperties'){
	
	require_once('property.php'); 
	$var = new Properties();
	$return = $var->getProperties();
	echo($return);

}

if($_POST['action'] == 'getUnitTypes'){
		
	require_once('property.php'); 
	$var = new Properties();
	$return = $var->getUnitTypes();
	echo($return);
	
}

if($_POST['action'] == 'getUnitsAvailabilityAndPricing'){
	
	require_once('property.php'); 
	$var = new Properties();
	$return = $var->getUnitsAvailabilityAndPricing();
	echo($return);
	
}

if($_POST['action'] == 'getAmenities'){
		
	require_once('property.php'); 
	$var = new Properties();
	$return = $var->getAmenities();
	echo($return);
	
}

if($_POST['action'] == 'getMitsPropertyUnits'){
		
	require_once('property.php'); 
	$var = new Properties();
	$return = $var->getMitsPropertyUnits();
	echo($return);
}

?>