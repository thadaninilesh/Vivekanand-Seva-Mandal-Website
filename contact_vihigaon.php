<!--header-->
<?php
    include_once("header.php");
?>
<style>

#map-canvas {
    position:relative;
	height:500px;
    overflow:hidden;
}
        </style>
    <script src="//www.google-analytics.com/analytics.js" async=""></script><script src="//www.google-analytics.com/analytics.js" async=""></script><script style="" src="X5WShrDas7_data/common.js" charset="UTF-8" type="text/javascript"></script><script src="X5WShrDas7_data/util.js" charset="UTF-8" type="text/javascript"></script><script src="X5WShrDas7_data/marker.js" charset="UTF-8" type="text/javascript"></script><script src="X5WShrDas7_data/map.js" charset="UTF-8" type="text/javascript"></script><script src="X5WShrDas7_data/onion.js" charset="UTF-8" type="text/javascript"></script><script src="X5WShrDas7_data/controls.js" charset="UTF-8" type="text/javascript"></script><script src="X5WShrDas7_data/stats.js" charset="UTF-8" type="text/javascript"></script><script src="X5WShrDas7_data/common_002.js" charset="UTF-8" type="text/javascript"></script><script src="X5WShrDas7_data/util_002.js" charset="UTF-8" type="text/javascript"></script><script src="X5WShrDas7_data/marker_002.js" charset="UTF-8" type="text/javascript"></script><script src="X5WShrDas7_data/map_002.js" charset="UTF-8" type="text/javascript"></script><script src="X5WShrDas7_data/stats_002.js" charset="UTF-8" type="text/javascript"></script><script src="X5WShrDas7_data/common_003.js" charset="UTF-8" type="text/javascript"></script><script src="X5WShrDas7_data/util_003.js" charset="UTF-8" type="text/javascript"></script><script src="X5WShrDas7_data/marker_003.js" charset="UTF-8" type="text/javascript"></script><script src="X5WShrDas7_data/map_003.js" charset="UTF-8" type="text/javascript"></script><script src="X5WShrDas7_data/stats_003.js" charset="UTF-8" type="text/javascript"></script></head>
    
    
      


<div class="container" id="main">
	<div class="row">
		<div class="col-md-5 col-sm-6 col-xs-12" id="left">
			<h1 class="page-header page-head">
				Contact Details
			</h1>
				<!-- item list -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-head" style="text-align:center">
						Our Office / Library &amp; Study Center Address:
					</h3>
				</div>
				<div class="panel-heading">
					<a href="contact_office.php">
						<h3 class="sub-head" style="text-align:center">
							Vivekanand Seva Mandal&nbsp;<span class="glyphicon glyphicon-glyphicon glyphicon-share-alt" aria-hidden="true"></span>
						</h3>
					</a>
				</div>
				<div class="panel-body">    
					<p class="vsm-proeve-des">
						Dnyan Mandir Building, 
                            Nerurkar Road,<br> Datta Nagar Chowk, Sangita Wadi,<br>
                            Dombivli(E), Thane 421 201.<br>
                            <i class="general foundicon-phone icon"></i>
                            <span class="glyphicon glyphicon-phone-alt"></span>&nbsp;:
                            (0251)-2800 303
					</p>
				</div>
			</div>
      		<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="sub-head" style="text-align:center">
						Our Rural Deveolpment Projects
					</h3>
				</div>
				<div class="panel-heading">
					<a href="contact_vihigaon.php">
						<h4 class="sub-head" style="text-align:center">
							1.Vihigaon&nbsp;<span class="glyphicon glyphicon-glyphicon glyphicon-share-alt" aria-hidden="true"></span>
						</h4>
					</a>
				</div>
				<div class="panel-body">
					<p class="vsm-proeve-des">
						Taluka Shahapur, On Javhar Bypass,<br>
						Nashik Highway,	District Thane
					</p>
				</div>
				<div class="panel-heading">
					<a href="contact_khodadhe.php">
						<h4 class="sub-head" style="text-align:center">
							2.Khodade&nbsp;<span class="glyphicon glyphicon-glyphicon glyphicon-share-alt" aria-hidden="true"></span>
						</h4>
					</a>
				</div>
				<div class="panel-body">   
					<p class="vsm-proeve-des">
						Khodade-Garmal Grampanchayat, Taluka Wada,<br>
						On Wada-Khodala Road, District Thane
					</p>
				</div>
				<div class="panel-heading">
					<a href="contact_khoste.php">
						<h4 class="sub-head" style="text-align:center">
							3.Khoste&nbsp;<span class="glyphicon glyphicon-glyphicon glyphicon-share-alt" aria-hidden="true"></span>
						</h4>
					</a>
				</div>
				<div class="panel-body">   
					<p class="vsm-proeve-des">
					Khoste-Jilla parishad prathamik shala, Taluka Shahapur,<br>
					Post Tanasa, District Thane	
					</p>
				</div>
			</div> 
		</div>
		<!--map-canvas will be postioned here-->
		
    	<div class="col-md-7 col-sm-6 col-xs-12" >
			<h1 class="page-header page-head">
				Reach Us
	        </h1>
			<div class="panel panel-default" style="background-color: rgb(229, 227, 223); overflow: hidden;" id="map-canvas"></div>
		</div><!-- end Map -->
	</div><!-- end Row -->
</div><!-- end container -->
					<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
					<script src="X5WShrDas7_data/analytics.js" async=""></script><script type="text/javascript" src="X5WShrDas7_data/jquery.js"></script>


					<script type="text/javascript" src="X5WShrDas7_data/bootstrap.js"></script>


					<script type="text/javascript" src="X5WShrDas7_data/js.txt"></script><script src="X5WShrDas7_data/main_003.js"></script><script src="X5WShrDas7_data/main_002.js"></script><script src="X5WShrDas7_data/main.js"></script>

					<script>
						// In this example, we center the map, and add a marker, using a LatLng object
						// literal instead of a google.maps.LatLng object. LatLng object literals are
						// a convenient way to add a LatLng coordinate and, in most cases, can be used
						// in place of a google.maps.LatLng object.

						var map;
						function initialize() {
						  var mapOptions = {
							zoom: 12,
							center: {lat:19.709896 , lng:73.477682 }
						  };
						  map = new google.maps.Map(document.getElementById('map-canvas'),
							  mapOptions);

						  var marker = new google.maps.Marker({
							// The below line is equivalent to writing:
							// position: new google.maps.LatLng(19.709896, 73.477682)
							position: {lat:19.709896 , lng:73.477682 },
							map: map
						  });

						  // You can use a LatLng literal in place of a google.maps.LatLng object when
						  // creating the Marker object. Once the Marker object is instantiated, its
						  // position will be available as a google.maps.LatLng object. In this case,
						  // we retrieve the marker's position using the
						  // google.maps.LatLng.getPosition() method.
						  var infowindow = new google.maps.InfoWindow({
							content: '<p>Marker Location:' + marker.getPosition() + '</p>'
						  });

						  google.maps.event.addListener(marker, 'click', function() {
							infowindow.open(map, marker);
						  });
						}

						google.maps.event.addDomListener(window, 'load', initialize);

					</script>
					<script>
						(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
						(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
						m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
						})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
						ga('create', 'UA-40413119-1', 'bootply.com');
						ga('send', 'pageview');
					</script>
	<!--footer-->
	</br>
	<?php
	include("footer.php");
	?>
    