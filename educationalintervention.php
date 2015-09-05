<?php
    include_once("header.php");
?>  
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h1 class="page-header page-head">
                    Educational Intervention
                </h1>
                <ol class="breadcrumb page-bread">
                    <li>
                        <a href="index.php" class="vsm-proeve-read">Home</a>
                    </li>
                    <li>
                        <a href="project.php" class="vsm-proeve-read">Projects</a>
                    </li>
                    <li class="active">Educational Intervention</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-12">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active ">
                            <img  src="images/projects/umang/Umang 3.JPG" class="img-responsive img-size-slider" alt="">
							<div u="thumb" style="background-color:rgba(0,0,0,0.7); color:white; text-align:center; line-height: 2em">Caption</div>
                        </div>
                        <div class="item ">
                            <img  src="images/projects/umang/Umang 5.JPG" class="img-responsive img-size-slider" alt="">
							<div u="thumb" style="background-color:rgba(0,0,0,0.7); color:white; text-align:center; line-height: 2em">Caption</div>
                        </div>
                        <div class="item">
                            <img  src="images/projects/umang/Umang 4.JPG" class="img-responsive img-size-slider" alt="">
							<div u="thumb" style="background-color:rgba(0,0,0,0.7); color:white; text-align:center; line-height: 2em">Caption</div>
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
                <p class="vsm-says-msg">
					<br> <br>
                    "How can there be any progress of our country without the spread of education, the dawning of knowledge?...The only service to be done for our lower classes is to give them education, to develop their lost individuality.”
                </p> 
				<h3 class="vsm-says-head">Swami Vivekanand</h3>
            </div>
        </div>
        <!-- /.row -->
		
		
		<!-- Service Tabs -->
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h1 class="page-header heading head">Empowering the future of country!</h1>
                <p class="vsm-proeve-des">
                    <strong>VSMANDAL</strong> aims to provide early, systematic assistance to underprivileged children who are subject to poor educational infrastructure. We seek to prevent academic failure through early intervention, frequent progress measurement, and increasingly intensive research-based instructional interventions for children who continue to learn in government or municipal administration run schools.
                </p>
                <p class="vsm-proeve-des">
                     We aim to achieve this goal by imparting education to underprivileged children in urban neighborhoods via NALANDA Initiative and through education assistance via ZEP and UMANG initiatives in tribal / rural areas.
                </p>
				 
                <h3 class="page-header heading sub-head">Our Educational Projects Include</h3>
                <ul id="myTab" class="nav nav-tabs nav-justified vsm-obj">
    				<li class="active"><a href="#ZepProgram" data-toggle="tab">Zep Program</a></li>
    				<li><a href="#UmangInitiative" data-toggle="tab">Umang Initiative</a></li>
    				<li><a href="#NalandaInitiative" data-toggle="tab">Nalanda Initiative</a></li>				
                </ul>

                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade in active"  id="ZepProgram">
                        <div class="well well-lg">   
                            <p class="vsm-proeve-des">
                                <strong>ZEP (झेप)</strong>Educational Assistance Program.<br/>
								Assistance Program:As Mandal is working in rural areas for the upliftment of the underprivileged tribal kids, our one of the main priority is the Education. So Mandal decided to work on this Educational Assistance Program. There are 52 students who are taking benefits from our ZEP Educational Assistance Program during year 2014-15.
                            </p>
                            <p style="float:right"><a href="zep.php" class="vsm-proeve-read">Read More On Zep Program&nbsp;<span class="glyphicon glyphicon-glyphicon glyphicon-share-alt" aria-hidden="true"></span></a></p>
                        </div>
   				    </div>
                    <div class="tab-pane fade"  id="UmangInitiative">
                        
                        <div class="well well-lg">   
                            <p class="vsm-proeve-des">
                                <strong>UMANG (उमंग) </strong>means Hope, Aspiration. The underprivileged children from remoteareas hope support from Mandal for their education and we only aspire their progress in return which serves as a right kind booster for our efforts.This initiative is an unconditional investment into hopes of our tribal kids, for whom we fight all odds to fulfil their dreams.Hence, we named this initiative as Umang!
                            </p>
                            <p style="float:right"><a href="umang.php" class="vsm-proeve-read">Read More Umang Initiative&nbsp;<span class="glyphicon glyphicon-glyphicon glyphicon-share-alt" aria-hidden="true"></span></a></p>
                        </div>
                      
					</div>
                    <div class="tab-pane fade"  id="NalandaInitiative">
                        
                        <div class="well well-lg">   
                            <p class="vsm-proeve-des">
                                To provide an interactive learning experience to underprivileged children, Vivekanand Seva Mandal focuses on delivering highest quality of learning experience under<strong> NALANDA </strong>Initiative.
								<blockquote>The word NALANDA stands for New Age Learning Aimed at Nurturing Development & Aspirations.</blockquote>
								Basic idea is to impart high-quality education to underprivileged children of city neighborhoods via latest audio-visual techniques and other new age techniques.
                            </p>
                            <p style="float:right"><a href="Nalanda.php" class="vsm-proeve-read">Read More On Nalanda Initiative&nbsp;<span class="glyphicon glyphicon-glyphicon glyphicon-share-alt" aria-hidden="true"></span></a></p>
                        </div>
                       

					</div>
					
					
                </div>

            </div>
        </div>

        

       <!-- Related Projects Row -->
                <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<h1 class="page-header heading head">Related Projects</h1>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="grid-sizer"></div>
									<div class="item">
				
										<img src="images/projects/Technology center/02.JPG" class="image img-responsive" style="min-height:200px">
										<div class="panel-footer" style="background-color:orange">Technology Center!</div>
				
											<a class="overlay" href="youth.php">
												<h3 class="title">Technology Center</h3>
												<div class="description">
													<p>
													With Technology Centre mandal intends to harness this goodness of technology to improve lives of the less privileged and that too in a sustainable manner. 
													</p>
												</div>
											</a>
									</div>
							</div>	
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="grid-sizer"></div>
									<div class="item">
				
										<img src="images/projects/i2i/01.JPG" class="img-responsive" style="min-height:200px" >
										<div class="panel-footer" style="background-color:orange">Career Fest!</div>
				
											<a class="overlay" href="youth.php">
												<h3 class="title">Career Fest</h3>
												<div class="description">
													<p>
													i2i tries to serve as a platform where students gain adequate industry exposure, receive appropriate career guidance and gain information about suitable employment opportunities and job openings.
													</p>
												</div>
											</a>
									</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="grid-sizer"></div>
									<div class="item">
				
										<img src="images/projects/studycenter/study6.JPG" class="image img-responsive" style="min-height:200px">
										<div class="panel-footer" style="background-color:orange">Dyanmandir,Study Center!</div>
					
											<a class="overlay" href="youth.php">
												<h3 class="title">Dyanmandir,Study Center</h3>
												<div class="description">
												<p>
												DnyanMandir provides students with a large library having good books and their very own ‘place of study’
												</p>
												</div>
											</a>
									</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="grid-sizer"></div>
									<div class="item">
				
										<img src="images/projects/library/lib7.JPG" class="image img-responsive" style="min-height:200px">
										<div class="panel-footer" style="background-color:orange">Dyanmandir,Library!</div>
				
											<a class="overlay" href="youth.php">
												<h3 class="title">Dyanmandir,Library</h3>
												<div class="description">
													<p>
													Explore the real wealth, dont let it remain confined in books.
													</p>
												</div>
											</a>
									</div>
							</div>

					</div>

				</div>
    </div>

<!-- Footer -->
<?php
	require_once('footer.php');
?>    