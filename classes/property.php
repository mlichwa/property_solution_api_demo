<?php

require_once('base.php');

class Properties extends BaseConnector {
    public $name = "Property";
    
    /*
     * The endpoint used to get data from Property Solution
     */
    public $data_endpoint = 'https://residelivingllc.propertysolutions.com/api';

    /*
     * Our Constructor
     */
    public function Properties() {
    

        parent:: __construct();

        /*
         * To Do: make this dynamic so we don't alwyas have to add
         * a field
         */
         
        $this-> type = 'type';
         
        $this->user_name = 'your_username';

        $this->password = 'your_password';
		
		$this->property_id = "property_id";
            
        $this->endpoint = 'http://endpoint'; 

    }


	/*
	 *	Get Floor Plans	
     */
	public function getFloorPlans(){
		

		$params = "";
		$web_service = "properties";
		$result = $this->initialize_API_call("properties",$params, "getFloorPlans");
		return $result;	

	
		//return "aaaaa";
	}


	/*
	 *	Get Properties	
     */
	public function getProperties(){
		
		$params = "";
		$web_service = "properties";
		$result = $this->initialize_API_call("properties",$params, "getProperties");
		return $result;	
	
	}
	
	
	/*
	 *	Get Unit Types	
	 */
	public function getUnitTypes(){
		
		$params = "";
		$web_service = "propertyunits";
		$result = $this->initialize_API_call("propertyunits",$params, "getUnitTypes");
		return $result;	
	
	}


	/*
	 *	Get Units Availibility and Pricing	
     */
	public function getUnitsAvailabilityAndPricing(){
		
		$params = "";
		$web_service = "propertyunits";
		$result = $this->initialize_API_call("propertyunits",$params, "getUnitsAvailabilityAndPricing");
		return $result;	
	
	}
	
	
	/*
	 *	Get Amenities
	 *
	 * propertyId [Integer]	This is a required field. This field accepts single value.
	 * unitNumber [Integer]	This is an optional field. This field accepts single value.
	 *	
     */
	public function getAmenities(){
		
		$params = "";
		$web_service = "propertyunits";
		$result = $this->initialize_API_call("propertyunits",$params, "getAmenities");
		return $result;	
	}
	
	
	/*
	 *	Get Mits Property Units	
	 *
	 * propertyIds [String]	This is a required field. This field accepts comma seperated multiple values.
	 * availableUnitsOnly [Boolean]	This is an optional field. This field accepts single value.
	 * usePropertyPreferences [Boolean]	This is an optional field. This field accepts single value.
	 * includeDisabledFloorplans [Boolean]	This is an optional field. This field accepts single value.
	 *
     */
	public function getMitsPropertyUnits(){
		
		
		$params = "";
		$web_service = "propertyunits";
		$result = $this->initialize_API_call("propertyunits",$params, "getMitsPropertyUnits");
		return $result;	
	}



    /*
	 *	This function will make an api call after building a json string.
     */
    public function initialize_API_call($web_service, $params, $name) {

        $result = $this->make_API_call($web_service, $this->build_json($name, $params));

        $this->handle_result($result);
        
        return $result;

     }

    /*
     * This is where we construct a json object that will be injected into 
     * the API call. JSON object will be created dynamically and its parameters
     * will vary depending on the parameters.
     */
	 public function build_json($name,$params){
		 
		 
		 $type = $this->type;
		 $username = $this->user_name;
		 $pass = $this->password;
		 $prop_id = $this->property_id;

		 
		 
		 $collected_data = array(
		 	"auth" 	=>	array(
		 		"type" 		=> $type,
		 		"username" 	=> $username,
		 		"password"	=> $pass
		 	),
		 	"method" => array(
		 		"name"		=> $name,
		 		"params"	=> array(
		 			"propertyId" => $prop_id
		 			)
		 	) 
		 
		 );
		 
		 $json = json_encode($collected_data);	
		 return $json;	
		 
		 						
	 }


     public function handle_result( $result ) {

         /*
          * If the submission is successful, the server will return "OK"
          */
         if ( $result === 'OK' ){
	         
			 $this->success();
         }
             

         /*
          * Otherwise, send the client an error message
          * and log it
          */
          $this->error( explode( ':',  $result ) );

     }


    /*
     * This makes the API call to Property Solutions
     */
    public function make_API_call($web_service, $jsonRequest) {

		
		
		// Here we construct a URL necessary for the API connection.
		// The 'web-service' party might vary depending on a called function.
		$requestURL = $this->endpoint;
		$requestURL = $requestURL . '/' . $web_service;
		

		
		
		
		$resCurl = curl_init();
								
		/* If you want to send a JSON Request, use these options */
		curl_setopt( $resCurl, CURLOPT_HTTPHEADER,  array( 'Content-type: APPLICATION/JSON; CHARSET=UTF-8' ) );
		curl_setopt( $resCurl, CURLOPT_POSTFIELDS, $jsonRequest );
								

		curl_setopt( $resCurl, CURLOPT_POST, true );
		curl_setopt( $resCurl, CURLOPT_URL, $requestURL );
		curl_setopt( $resCurl, CURLOPT_RETURNTRANSFER, 1);
								

		if( curl_exec( $resCurl ) === false ) {
			echo 'Curl error: ' . curl_error( $resCurl );
			curl_close( $resCurl );
		} else {
			$result = curl_exec( $resCurl );
			curl_close( $resCurl );
			//echo $result;
		}
		return $result;
	}

}

?>