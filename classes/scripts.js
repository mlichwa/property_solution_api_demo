
$(function(){ 


// http://blog.teamtreehouse.com/beginners-guide-to-ajax-development-with-php
// https://propertysolutions.com/api/documentation/code-snippet

  //--------------------------------------------------------------
  // GET FLOOR PLANS 
  //--------------------------------------------------------------
  $('body').on('click', '#getFloorPlans', function(e){
    e.preventDefault();  
    var container = $('#spinner');
    
    $(container).html('<img src="images/loader.gif">');
    var newhtml = '';
    
    $.ajax({
      url: 'property_solution/ajax-ps.php',
      type: 'post',
      data: {'action': 'getFloorPlans'},
      cache: false,
      success: function(json) {
      
      
   
      
		  alert(json);
   /*     $.each(json, function(i, item) {
        
       
        
        

          if(typeof item == 'object') {
          newhtml += '<div class="user"> <a href="#" class="clearfix"> <img src="'+item.profile_pic+'" class="avi"> <h4>'+item.username+'</h4></a></div>';
          } 
          else {
            return false;
          }
        }) // end $.each() loop
        
        if(json.nextpage != 'end') {
          // if the nextpage is any other value other than end, we add the next page link
          $(container).html('<a href="'+json.nextpage+'" id="morefllwrs" class="bigblue thinblue">Load more followers</a>');
        } else {
          $(container).html('<p></p>');
        }
        
        $('#followers').append(newhtml);
*/
      },
      error: function(xhr, desc, err) {
        console.log(xhr);
        console.log("Details: " + desc + "\nError:" + err);
      }
    }); // end ajax call
  });


  //--------------------------------------------------------------
  // GET PROPERTIES
  //--------------------------------------------------------------
    $('body').on('click', '#getProperties', function(e){
    e.preventDefault();
    var container = $('#load_content');
    
    $(container).html('<img src="images/loader.gif">');
    var newhtml = '';
    $('.property').remove(); 
    
    
    $.ajax({
      url: 'property_solution/ajax-ps.php',
      type: 'post',
      data: {'action': 'getProperties'},
      cache: false,
      success: function(str) {
      
       var json = JSON.parse(str);

	   var propertyID 			= json.response.result.PhysicalProperty.Property[0].PropertyID;
	   var marketingName		= json.response.result.PhysicalProperty.Property[0].MarketingName;
	   var type 				= json.response.result.PhysicalProperty.Property[0].Type;
	   var address 			= json.response.result.PhysicalProperty.Property[0].Address.Address;
	   var city				= json.response.result.PhysicalProperty.Property[0].Address.City;
	   var state				= json.response.result.PhysicalProperty.Property[0].Address.State;
	   var postalCode			= json.response.result.PhysicalProperty.Property[0].Address.PostalCode;
	   var isDisabled			= json.response.result.PhysicalProperty.Property[0].IsDisabled;
	   var isFeaturedProperty  = json.response.result.PhysicalProperty.Property[0].IsFeaturedProperty;

       newhtml += '<div class="property"><ul><li><b>Property ID: </b>'+ propertyID +'</li><li><b>Marketing name: </b>'+ marketingName +'</li><li><b>Type: </b>'+ type +'</li><li><b>Address: </b>'+ address +'</li><li><b>City: </b>'+ city +'</li><li><b>State: </b>'+ state +'</li><li><b>Post Code: </b>'+ postalCode +'</li><li><b>isDisabled: </b>'+ isDisabled +'</li><li><b>isFeaturedProperty: </b>'+ isFeaturedProperty +'</li></ul></div>'; 
         
       $('#loaded_content').append(newhtml);

      },
      error: function(xhr, desc, err) {
        console.log(xhr + "\n" + err);
      }
    }); // end ajax call
  });
  
 
 //--------------------------------------------------------------
 // GET UNIT TYPES
 //--------------------------------------------------------------
     $('body').on('click', '#getUnitTypes', function(e){
    e.preventDefault();
    var container = $('#load_content');
    
    $(container).html('<img src="images/loader.gif">');
    var newhtml = '';
    
    
    //-----------
    // html variables from the json    
    
    
    
    $.ajax({
      url: 'property_solution/ajax-ps.php',
      type: 'post',
      data: {'action': 'getUnitTypes'},
      cache: false,
      success: function(json) {
       alert(json);
       
       
       
/*
        $.each(json, function(i, item) {
          if(typeof item == 'object') {
          newhtml += '<div class="user"> <a href="#" class="clearfix"> <img src="'+item.profile_pic+'" class="avi"> <h4>'+item.username+'</h4></a></div>';
          } 
          else {
            return false;
          }
        }) // end $.each() loop
        
        if(json.nextpage != 'end') {
          // if the nextpage is any other value other than end, we add the next page link
          $(container).html('<a href="'+json.nextpage+'" id="morefllwrs" class="bigblue thinblue">Load more followers</a>');
        } else {
          $(container).html('<p></p>');
        }
        
        $('#followers').append(newhtml);
*/
      },
      error: function(xhr, desc, err) {
        console.log(xhr + "\n" + err);
      }
    }); // end ajax call
  });
 
 //--------------------------------------------------------------
 // GET UNITS AVAILABILITY AND PRICING
 //--------------------------------------------------------------
     $('body').on('click', '#getUnitsAvailabilityAndPricing', function(e){
    e.preventDefault();
    var container = $('#load_content');
    
    $(container).html('<img src="images/loader.gif">');
    var newhtml = '';
    
    $.ajax({
      url: 'property_solution/ajax-ps.php',
      type: 'post',
      data: {'action': 'getUnitsAvailabilityAndPricing'},
      cache: false,
      success: function(json) {
       alert(json);
/*
        $.each(json, function(i, item) {
          if(typeof item == 'object') {
          newhtml += '<div class="user"> <a href="#" class="clearfix"> <img src="'+item.profile_pic+'" class="avi"> <h4>'+item.username+'</h4></a></div>';
          } 
          else {
            return false;
          }
        }) // end $.each() loop
        
        if(json.nextpage != 'end') {
          // if the nextpage is any other value other than end, we add the next page link
          $(container).html('<a href="'+json.nextpage+'" id="morefllwrs" class="bigblue thinblue">Load more followers</a>');
        } else {
          $(container).html('<p></p>');
        }
        
        $('#followers').append(newhtml);
*/
      },
      error: function(xhr, desc, err) {
        console.log(xhr + "\n" + err);
      }
    }); // end ajax call
  });
 
 
 //--------------------------------------------------------------
 // GET AMENITIES
 //--------------------------------------------------------------
     $('body').on('click', '#getAmenities', function(e){
    e.preventDefault();
    var container = $('#load_content');
    
    $(container).html('<img src="images/loader.gif">');
    var newhtml = '';
    
    $.ajax({
      url: 'property_solution/ajax-ps.php',
      type: 'post',
      data: {'action': 'getAmenities'},
      cache: false,
      success: function(json) {
       alert(json);
/*
        $.each(json, function(i, item) {
          if(typeof item == 'object') {
          newhtml += '<div class="user"> <a href="#" class="clearfix"> <img src="'+item.profile_pic+'" class="avi"> <h4>'+item.username+'</h4></a></div>';
          } 
          else {
            return false;
          }
        }) // end $.each() loop
        
        if(json.nextpage != 'end') {
          // if the nextpage is any other value other than end, we add the next page link
          $(container).html('<a href="'+json.nextpage+'" id="morefllwrs" class="bigblue thinblue">Load more followers</a>');
        } else {
          $(container).html('<p></p>');
        }
        
        $('#followers').append(newhtml);
*/
      },
      error: function(xhr, desc, err) {
        console.log(xhr + "\n" + err);
      }
    }); // end ajax call
  });
  
 
 //--------------------------------------------------------------
 // GET MITS PROPERTY UNITS
 //--------------------------------------------------------------
    $('body').on('click', '#getMitsPropertyUnits', function(e){
    e.preventDefault();
    var container = $('#load_content');
    
    $(container).html('<img src="images/loader.gif">');
    var newhtml = '';
    
    $.ajax({
      url: 'property_solution/ajax-ps.php',
      type: 'post',
      data: {'action': 'getMitsPropertyUnits'},
      cache: false,
      success: function(json) {
       alert(json);
       /*
 $.each(json, function(i, item) {
          if(typeof item == 'object') {
          newhtml += '<div class="user"> <a href="#" class="clearfix"> <img src="'+item.profile_pic+'" class="avi"> <h4>'+item.username+'</h4></a></div>';
          } 
          else {
            return false;
          }
        }) // end $.each() loop
        
        if(json.nextpage != 'end') {
          // if the nextpage is any other value other than end, we add the next page link
          $(container).html('<a href="'+json.nextpage+'" id="morefllwrs" class="bigblue thinblue">Load more followers</a>');
        } else {
          $(container).html('<p></p>');
        }
        
        $('#followers').append(newhtml);
*/
      },
      error: function(xhr, desc, err) {
        console.log(xhr + "\n" + err);
      }
    }); // end ajax call
  });

});