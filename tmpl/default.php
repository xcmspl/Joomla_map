<?php
	/**
	* @title			TSIMAP
	* @copyright   		Copyright (C) 2011-2016 Design Studio WWW, All rights reserved.
	* @license   		GNU General Public License version 3 or later.
	* @author url   	http://www.tsi.info.pl
	* @developers   	Design Studio WWW
	*/

	// No direct access
	defined('_JEXEC') or die('Restricted access');
?>
<?php if($params->get('UseAPI') == 0){ ?>
<script src='https://maps.googleapis.com/maps/api/js?sensor=false'></script> 
<?php }else{ ?>
<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo $params->get('ApiKey'); ?>&amp;sensor=false"></script>
<?php } ?>
 
<script typ="text/javascript"> 
    
	
	google.maps.event.addDomListener(window, 'load', init);
    var map;
    function init() {
        var mapOptions = {
            center: new google.maps.LatLng(<?php echo $Latitude; ?>,<?php echo $Longitude; ?>),
            zoom: <?php echo $Zoom; ?>,
            zoomControl: true,
            zoomControlOptions: {
                style: google.maps.ZoomControlStyle.SMALL,
            },
            disableDoubleClickZoom: true,
            mapTypeControl: false,
            scaleControl: false,
            scrollwheel: true,
            panControl: false,
            streetViewControl: false,
            draggable : true,
            overviewMapControl: false,
            overviewMapControlOptions: {
                opened: false,
            },
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            styles:<?php echo $Style; ?>,}
        var mapElement = document.getElementById('map_<?php echo $module->id; ?>');
        var map = new google.maps.Map(mapElement, mapOptions);
        var locations = [
				['', '', '', '', '', <?php echo $Latitude; ?>, <?php echo $Longitude; ?>, '<?php echo $Marker; ?>']
        ];
        for (i = 0; i < locations.length; i++) {
			if (locations[i][1] =='undefined'){ description ='';} else { description = locations[i][1];}
			if (locations[i][2] =='undefined'){ telephone ='';} else { telephone = locations[i][2];}
			if (locations[i][3] =='undefined'){ email ='';} else { email = locations[i][3];}
           if (locations[i][4] =='undefined'){ web ='';} else { web = locations[i][4];}
           if (locations[i][7] =='undefined'){ markericon ='';} else { markericon = locations[i][7];}
            marker = new google.maps.Marker({
                icon: markericon,
                position: new google.maps.LatLng(locations[i][5], locations[i][6]),
                map: map,
                title: locations[i][0],
                desc: description,
                tel: telephone,
                email: email,
                web: web
            });
link = '';     }

}
</script>
<style>
    #map_<?php echo $module->id; ?> {
        width:<?php echo $Width; ?>;
		height:<?php echo $Height; ?>;
		border-top:1px #c7c7c7 solid;
    }
    .gm-style-iw * {
        display: block;
        width: 100%;
    }
    .gm-style-iw h4, .gm-style-iw p {
        margin: 0;
        padding: 0;
    }
    .gm-style-iw a {
        color: #4272db;
    }
</style>

<div id="map_<?php echo $module->id; ?>"></div>
