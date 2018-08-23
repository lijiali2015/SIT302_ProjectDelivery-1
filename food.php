<?php require_once('top.php'); ?>

    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a>
                        </li>
                        <li>Eat Sustainably</li>
                    </ul>
                </div>

                <div class="col-md-3">
                    <!-- *** MENUS AND FILTERS ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Categories</h3>
                        </div>

                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked category-menu">
                                <li class="active">
                                    <a href="food.php">Eat Sustainably <span class="badge pull-right">4</span></a>
                                    <ul>
                                        <li><a href="eatlessmeat.php">Eat Less Meat</a>
                                        </li>
                                        <li><a href="eatO.php">Eat Orgainc</a>
                                        </li>
                                        <li><a href="eatlocal.php">Eat Local</a>
                                        </li>
										<li><a href="eatseasonal.php">Eat Seasonal</a>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
	
					<div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Nutrition<a class="btn btn-xs btn-danger pull-right" href="#"><i class="fa fa-times-circle"></i> Clear</a></h3>
                        </div>

                        <div class="panel-body">

                            <form>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">fat
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">protein
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">cellulose
                                        </label>
                                    </div>
									<div class="checkbox">
                                        <label>
                                            <input type="checkbox">sugar
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">vitamin
                                        </label>
                                    </div>
                                </div>

                                <button class="btn btn-default btn-sm btn-primary"><i class="fa fa-pencil"></i> Apply</button>

                            </form>
                        </div>
					</div>
				</div>
				
				<div class="col-md-9">
                    <div class="box">
                        <h1>Eat Sustainability</h1>
                        <p>To be more sustainably in the way we eat. Deakin Green Book will show you how we can control the protein as well as nutrition.</p>
                    </div>

                    <div class="box info-bar">
                        <div class="row">
                            <div class="col-sm-12 col-md-4 products-showing">
                                Showing <strong>4</strong> products
                            </div>
                        </div>
                    </div>
<!--change-------------------------------------------------------------------------------------------------------------------------------------->
                    <div class="row products" id = "furnitureContent">

                        <div class="col-md-4 col-sm-6">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="detail.php">
								<!--------------------------------------------------------------------->
                                                <img src="img/food1.jpg" alt="" class="img-responsive">
								<!--------------------------------------------------------------------->
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="detail.php">
								<!--------------------------------------------------------------------->
                                                <img id = "imgback1" src="img/food1_2.jpg" alt="" class="img-responsive">
								<!--------------------------------------------------------------------->
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="detail.php" class="invisible">
                                    <img src="img/food2.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="detail.php">Eat Less Meat</a></h3>
                                    <p class="price"></p>
                                    <p class="buttons">
                                        <a href="detail.php" class="btn btn-default">View detail</a>
                                    </p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="detail.php">
                                                <img src="img/food2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="detail.php">
                                                <img src="img/food2_2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="detail.php" class="invisible">
                                    <img src="img/food2.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="detail.php">Eat Orgainc</a></h3>
                                    <p class="price"></p>
                                    <p class="buttons">
                                        <a href="detail.php" class="btn btn-default">View detail</a>
                                    </p>
                                </div>
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="detail.php">
                                                <img src="img/food3.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="detail.php">
                                                <img src="img/food3_2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="detail.php" class="invisible">
                                    <img src="img/food3.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="detail.php">Eat Local</a></h3>
                                    <p class="price"></p>
                                    <p class="buttons">
                                        <a href="detail.php" class="btn btn-default">View detail</a>

                                    </p>

                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>


                        <div class="col-md-4 col-sm-6">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="detail.php">
                                                <img src="img/food4.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="detail.php">
                                                <img src="img/food4_2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="detail.php" class="invisible">
                                    <img src="img/food4.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="detail.php">Eat Seasonal</a></h3>
                                    <p class="price"></p>
                                    <p class="buttons">
                                        <a href="detail.php" class="btn btn-default">View detail</a>

                                    </p>

                                </div>
                            </div>
                            <!-- /.product -->
                        </div>
                    </div>
                    <!-- /.products -->
                </div>
                <!-- /.col-md-9 -->
				
					

	<div id="advantages">

                <div class="container">
                    <div class="same-height-row">
                        <div class="col-sm-4">
                            <div class="box same-height clickable">
                                <div class="icon"><i class="fa fa-heart"></i>
                                </div>

                                <h3><a href="#">Sustainability Map</a></h3>
                                <p> Could/should we have our own sustainability map?</p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="box same-height clickable">
                                <div class="icon"><i class="fa fa-tags"></i>
                                </div>

                                <h3><a href="#">Getting Involved</a></h3>
                                <p>Community gardens, Deakin Sustainable Food Movement, Student for Sustainable Living- Reduce your Juice Game, Green Impact, Green Labs</p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="box same-height clickable">
                                <div class="icon"><i class="fa fa-thumbs-up"></i>
                                </div>

                                <h3><a href="#">100% satisfaction guaranteed</a></h3>
                                <p>Free returns on everything for 1 month.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
    </div>
    <!-- /#advantages -->

            <!-- *** ADVANTAGES END *** -->


<!-- *** FOOTER ***
 _________________________________________________________ -->
        <div id="footer" data-animate="fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <h4>Information</h4>

                        <ul>
                            <li><a href="aboutus.php">About us</a>
                            </li>
                            <li><a href="terms.php">Terms and conditions</a>
                            </li>
                            <li><a href="faq.php">FAQ</a>
                            </li>
                            <li><a href="contact.php">Contact us</a>
                            </li>
                        </ul>

                        <hr>

                        <h4>User section</h4>

                        <ul>
                            <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                            </li>
                            <li><a href="register.php">Regiter</a>
                            </li>
                        </ul>

                        <hr class="hidden-md hidden-lg hidden-sm">

                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">

                        <h4>Top categories</h4>

                        <h5>Food</h5>

                        <ul>
                            <li><a href="food.php">Eat Sustainably</a>
                            </li>
                            <li><a href="food.php">Waste</a>
                            </li>
							<li><a href="food.php">Eat on Campus</a>
                            </li>

                        </ul>

                        <h5>Transport</h5>
                        <ul>
                            <li><a href="transport.php">Public Transport</a>
                            </li>
                            <li><a href="transport.php">Active Transport</a>
                            </li>
                            <li><a href="transport.php">Flexi Car</a>
                            </li>

                        </ul>

                        <hr class="hidden-md hidden-lg">

                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">

                        <h4>Where to find us</h4>

                        <p><strong>Deakin University</strong>
                            <br>Burwood Highway
                            <br>Burwood
                            <br>Victoria 3125
                            <br>
                            <strong>Australia</strong>
                        </p>

                        <a href="contact.php">Go to contact page</a>

                        <hr class="hidden-md hidden-lg">

                    </div>
                    <!-- /.col-md-3 -->


                    <div class="col-md-3 col-sm-6">

                        <h4>Stay in touch</h4>

                        <p class="social">
                            <a href="#" class="facebook external" data-animate-hover="shake"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter external" data-animate-hover="shake"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="instagram external" data-animate-hover="shake"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="gplus external" data-animate-hover="shake"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="email external" data-animate-hover="shake"><i class="fa fa-envelope"></i></a>
                        </p>


                    </div>
                    <!-- /.col-md-3 -->

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#footer -->

        <!-- *** FOOTER END *** -->


        <!-- *** COPYRIGHT ***
 _________________________________________________________ -->
        <div id="copyright">
            <div class="container">
                <div class="col-md-6">
                    <p class="pull-left">© 2018 Deakin University</p>

                </div>

            </div>
      </div>
        <!-- *** COPYRIGHT END *** -->



    </div>
    <!-- /#all -->

    <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap-hover-dropdown.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/front.js"></script>

</body>

</html>