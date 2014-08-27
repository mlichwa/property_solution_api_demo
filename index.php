<!DOCTYPE html>

<html data-wf-site="53ea6520f90240c2448f6407">
<head>
  <meta charset="utf-8">
  <title>Reside</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="generator" content="Webflow">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/webflow.css">
  <link rel="stylesheet" type="text/css" href="css/main.webflow.css">
  
  <script type="text/javascript" src="classes/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="classes/scripts.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  <script>
    WebFont.load({
      google: {
        families: ["Roboto:300,regular","Roboto Condensed:regular"]
      }
    });
  </script>  
  <script type="text/javascript" src="js/modernizr.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="https://y7v4p6k4.ssl.hwcdn.net/placeholder/favicon.ico">
</head>
<body>
  <div class="section hero">
    <div>
      <h1>Reside Demo</h1>
    </div>
    <div id="spinner">
    </div>
    <div class="w-row">
      <div class="w-col w-col-4">
        <div class="w-clearfix">
			<!-- Currently only get Properties displays data.          -->
        	<a class="button" id="getFloorPlans" href="#">getFloorPlans</a> 
        	<a class="button" id="getProperties" href="#">getProperties</a>
        	<a class="button" id="getUnitTypes" href="#">getUnitTypes</a>
        	<a class="button" id="getUnitsAvailabilityAndPricing" href="#">getUnitsAvailabilityAndPricing</a>
        	<a class="button" id="getAmenities" href="#">getAmenities</a>
        	<a class="button" id="getMitsPropertyUnits" href="#">getMitsPropertyUnits</a>
        </div>
      </div>
      <div class="w-col w-col-8">
	      <div id="loaded_content"></div>
	      
      </div>
    </div>
  </div>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script type="text/javascript" src="js/webflow.js"></script>
  <!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
</body>
</html>