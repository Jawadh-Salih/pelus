<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PEplus</title><!--put an image-->

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" >

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">The Panzer</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Contact us</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Section -->
    <section id="intro" class="intro-section" class="backgroundimg">
    </section>

    <!-- About Section -->
    <section id="about" class="about-section" style="background-image: url(t3.jpg)">

                   <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                    <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                  </ol>
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active"style="width:100%;height:400px" >
                        <div class="slide1" >
                           <h1>Game description</h1> 
                        </div>
                        <div class="slide1d" style="">
                            A little description of game will be wriiten here
                       <!--scroll bar for excess-->
                        </div>
                        
                      <div class="carousel-caption">
                        
                      </div>
                    </div>
                    <div class="item"style="width:100%;height:400px">
                         <div class="slide1" >
                         <h1> How to be succeeded</h1>
                        </div>
                        <div class="slide1d">
                          Description on earning points will be wriiten here.
                            <!--scroll bar for excess-->
                        </div> 
                      <div class="carousel-caption">
                        ...
                      </div>
                    </div>
                     <div class="item"style="width:100%;height:400px">
                         <div class="slide1" >
                            <h1>AI made it all</h1>
                         </div>
                         <div class="slide1d">
                            All the Ai techniques will be written here.
                            <!--scroll bar for excess-->
                         </div> 
                         <div class="carousel-caption">
                         ...
                         </div>
                     </div>
                    ...
                  </div>

                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
                
            
        
    </section>

    <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Facebook links will be here</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
             <div class="news">
        <form id="riderReview" method="post" action="#">
        
         <div class="newsq">
             <label for="Name">Name:</label>
              <input type="text" name="name" id="name">
        </div>
            
        <div class="newsq">
          <label for="email">Your Email:</label>
          <input type="email" name="email" id="email" >
        </div>
            
        <div class="newsq">
          <label for="message">Message:<br>
          </label>
          <textarea name="message" id="message" tabindex="70" cols="45" rows="10"></textarea>
        </div> 
        <input type="submit" name="submit" id="submit" tabindex="80" value="Submit your Message">
   		<?php echo $_POST["name"];
   			  echo $_POST["email"];
   			  echo $_POST["message"];
        ?>
        <?php
		// the message
		$msg ="Name :"+$_POST["name"]+"\n" "E-mail :"+ $_POST["email"]+"\n"+$_POST["message"]+"First line of text\nSecond line of text";

		// use wordwrap() if lines are longer than 70 characters
		$msg = wordwrap($msg,70);

		// send email
		mail("jawadhsalih.4th@gmail.com","My subject",$msg);
		?> 
        </form>
    </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

</body>

</html>
