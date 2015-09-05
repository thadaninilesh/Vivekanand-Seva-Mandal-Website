<?php
    include('header.php');
?>
 <!-- VSM slider -->
<?php  
    include('slider/slide/vsm.html');
?>

 <!-- Page Content -->   
    <div class="container"><!--container1 start-->
        <div class="row"><!--row1 starts-->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="row">
                        <h1 class="page-header heading head">Know More</h1>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="panel panel-default text-center">
                                <div class="panel-heading">
                                        <h3 class="page-header panel-head" style="margin: 10px">We: The VSM</h3>
                                </div>
                                <div class="panel-body">
                                    <p class="panel-content" style="min-height: 200px">Vivekanand Seva Mandal is an apolitical youth organization inspired by the "Seva" (service) philosophy propagated by the great warrior monk Swami Vivekanand (1863-1902). 
                                    </p>
                                    <a href="aboutus.php" class="btn btn-warning" style="border:none">Know More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="panel panel-default text-center">
                                <div class="panel-heading">
                                    <h3 class="page-header panel-head" style="margin: 10px">Our Projects</h3>
                                </div>
                                <div class="panel-body">
                                    <p class="panel-content" style="min-height: 200px">Our projects are inspired by Swamiji’s teaching of “service to humanity is service to god.” All our projects and wings are manifestation of this philosophy.
                                    </p>
                                    <a href="project.php" class="btn btn-warning" style="border:none">Know More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="panel panel-default text-center">
                                <div class="panel-heading">
                                    <h3 class="page-header panel-head" style="margin: 10px">Our Events</h3>
                                </div>
                                <div class="panel-body">
                                    <p class="panel-content" style="min-height: 200px">Vivekananda Seva Mandal organizes many thoughtful events and programs throughout the year for the benefit of students, members and volunteers.</p>
                                    <a href="event.php" class="btn btn-warning" style="border:none">Know More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <h1 class="page-header heading head">Updates/Upcoming Events</h1>
                    <iframe src="slider/slide/home.html" style="border: none; box-shadow: none;width: 100%; height: 100%; float: center"  scrolling="no"></iframe>
                    </div>

                    


					<!--on hold
                    <h1 class="page-header heading" style="margin-top: 25px">Swamiji Says</h1>
					<div class="col-md-3 col-sm-3 col-xs-5">
						<img src="img/back.jpg" class="img-responsive"/>
					</div>
                    <div class="col-md-9 col-sm-9 col-xs-12">
						<p style="font-size: 1.2em; margin: 10px">"It is only by doing good to others that one attains to ones own good."</p>
					</div>
                    -->
                  
                </div>

                <div class="col-md-3 col-sm-12 col-xs-12" style="margin-top: 25px">
                    
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="col-md-12 col-sm-6 col-xs-12" style="margin: 0 auto; width: 100%"><!--row1 starts-->
                            <a class="twitter-timeline" href="https://twitter.com/vsmandal/favorites" data-widget-id="546040478538293250" style="">Favorite Tweets by @vsmandal</a>
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                        </div> <!--row1 ends-->
                        <br/>
                        <div class="col-md-12 col-sm-6 col-xs-12"><!--row3 starts-->
							<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2F162827870409499&width=600&colorscheme=light&show_faces=true&border_color&stream=true&header=true&height=350" scrolling="no" style="border:none; overflow:hidden; background: white;height: 350px; width: 100%" allowtransparency="true" frameborder="0"></iframe>
						</div><!--row3 ends-->
                    </div>
                </div>
			</div>
        </div><!--row1 ends-->
          <!--videos-->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <a href="Video_Updates.php"><h1 class="page-header heading head">Video Updates</h1></a>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <a href="Biyanevatap_video.php"><img class="img-responsive customer-img img-polaroid" src="slider/img/videothumb/biyanevatap.png" alt=""></a>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <a href="Nalanda_video.php"><img class="img-responsive customer-img img-polaroid" src="slider/img/videothumb/Nalanda.png" alt=""></a>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <a href="Career_Fest_video.php"><img class="img-responsive customer-img img-polaroid" src="slider/img/videothumb/Career_Fest.png" alt=""></a>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <a href="Dam_Construction_video.php"><img class="img-responsive customer-img img-polaroid" src="slider/img/videothumb/dam_construction.png" alt=""></a>
                    </div>
                </div>
            </div>
                    <!--videos-->
    </div><!--container1 ends-->
                
	
        
		
    
	<br />
                

<?php
    require_once('footer.php');
?>