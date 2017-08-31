<?php
session_start();
include_once 'dbconnect.php';

if (!isset($_SESSION['userSession'])) {
  header("Location: index.php");
}

$query = $DBcon->query("SELECT * FROM tbl_users WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
$DBcon->close();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Adtile Fixed Nav</title>
    <meta name="author" content="Adtile">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="css/styles.css">
     <link rel="stylesheet" href="css/style.css" media="screen">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link href="dist/css/sb-admin-2.css" rel="stylesheet">
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <script src="js/jquery.js"></script>
  <script src="js/jquery.scrollTo.js"></script>
  <script src="js/bootstrap-affix.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script> 
  <script src="js/scripts.js"></script>
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <link rel="stylesheet" href="css/ie.css">
    <![endif]-->
    <script src="js/responsive-nav.js"></script>
  </head>
  <header >
      <nav class="navbar navbar-default navbar-static-top" role="navigation">
<div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="color: black">Master</a>
            </div>
    <div class="container">
 
        <div class="navbar-header" >
            <a class="navbar-brand" href="#" title='Palm' style="color: black">Home</a>
            <a class="navbar-brand" href="#" style="color: black">About</a>
            <a class="navbar-brand" href="#" style="color: black">Services</a>
            <a class="navbar-brand" href="#" style="color: black">Downloads</a>

        </div>
            <ul class="nav navbar-top-links navbar-right">
            <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <!-- navs -->
          </ul>
          <ul class="nav navbar-nav navbar-right" style="color: black">
            <li><a href="#"><span class="glyphicon glyphicon-user" style="color: black"></span>&nbsp; <?php echo "Hello Admin ".$userRow['username']; ?></a></li>
            <li><a href="logout.php?logout" style="color: black"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
            </ul>
    </div>
       </nav> 
    </header>
  <body>

    

   

  <div id="content" style="margin-top: 50px"> 
<div class="bg-content-top">


<!-- Docs nav
    ================================================== -->
    <div class="row">
      <div class="col-md-3"> 

        <div id="nav_container">
          <a href="javascript:;" id="affect_all">
            <span class="expand">
              <i class="icon-angle-down"></i>
            </span>            
            <span class="close">
              <i class="icon-angle-up"></i>
            </span>
          </a>
            <div class="clearfix"></div>    
                <ul class="nav nav-list bs-docs-sidenav"  id="nav">
                  <li class="nav-item item1">
                    <dl class="slide-down">
                       <dt><a href="#introduction" class="icon-info-sign">Introduction</a></dt>
                       <dd></dd>
                     </dl>   
                  </li>
                  <li class="nav-item item2">
                    <dl class="slide-down">
                       <dt><a href="#unzipping-template-package" class="icon-check">Unzipping Template Package</a></dt>  
                       <dd></dd>                       
                     </dl> 
                  </li>           
                  <li class="nav-item item3">
                    <dl class="slide-down">
                       <dt><a href="#general-information" class="icon-play">General Information</a></dt>
                         <dd></dd>
                     </dl> 
                  </li> 
                 <li class="nav-item item7">
                    <dl class="slide-down">
                       <dt><a href="#uploading-template" class="icon-cogs">Uploading template</a></dt>
                         <dd></dd>
                     </dl> 
                  </li> 
                  <li class="nav-item item8">
                    <dl class="slide-down">
                       <dt><a href="#conclusion" class="icon-question-sign">Addendum</a></dt>
                       <dd></dd>
                     </dl> 
                  </li> 
                </ul>
            </div>
    </div> 

      
<div class="col-md-6">

<!-- box-content
================================================== -->
<div class="box-content">
<!-- block-started
================================================== -->
<section class="block-started"  id="introduction">
  
  We have a sound foundation from which we offer tailor made solutions to our clients’ needs. With broad experience and dedication, the employees have contributed to Ocean Palm Freighters Limited growing reputation in the clearing logistics and customer service, flexible and proactive response to customer requirements and highly competitive prices.
Palm Freighters Limited has been able to handle a capacity of more than 200 TEUS in a month coupled with various project cargoes.
We constantly do a self-evaluation and respond to our customer’s needs and demands.  We therefore quickly adapt to the market with ease. In order to improve our services, the company will Endeavour to conduct research and update itself at all times.  This will enable the company to always be ahead of its competitors, in terms of service delivery and efficiency.  This ensures customer satisfaction that determines growth.
</section>

<section class="block-templates" id="unzipping-template-package">  
  We have a sound foundation from which we offer tailor made solutions to our clients’ needs. With broad experience and dedication, the employees have contributed to Ocean Palm Freighters Limited growing reputation in the clearing logistics and customer service, flexible and proactive response to customer requirements and highly competitive prices.
Palm Freighters Limited has been able to handle a capacity of more than 200 TEUS in a month coupled with various project cargoes.
We constantly do a self-evaluation and respond to our customer’s needs and demands.  We therefore quickly adapt to the market with ease. In order to improve our services, the company will Endeavour to conduct research and update itself at all times.  This will enable the company to always be ahead of its competitors, in terms of service delivery and efficiency.  This ensures customer satisfaction that determines growth.
</section>

<section class="block-templates" id="general-information">  
 We have a sound foundation from which we offer tailor made solutions to our clients’ needs. With broad experience and dedication, the employees have contributed to Ocean Palm Freighters Limited growing reputation in the clearing logistics and customer service, flexible and proactive response to customer requirements and highly competitive prices.
Palm Freighters Limited has been able to handle a capacity of more than 200 TEUS in a month coupled with various project cargoes.
We constantly do a self-evaluation and respond to our customer’s needs and demands.  We therefore quickly adapt to the market with ease. In order to improve our services, the company will Endeavour to conduct research and update itself at all times.  This will enable the company to always be ahead of its competitors, in terms of service delivery and efficiency.  This ensures customer satisfaction that determines growth.
</section>








<section class="block-templates" id="uploading-template">
 We have a sound foundation from which we offer tailor made solutions to our clients’ needs. With broad experience and dedication, the employees have contributed to Ocean Palm Freighters Limited growing reputation in the clearing logistics and customer service, flexible and proactive response to customer requirements and highly competitive prices.
Palm Freighters Limited has been able to handle a capacity of more than 200 TEUS in a month coupled with various project cargoes.
We constantly do a self-evaluation and respond to our customer’s needs and demands.  We therefore quickly adapt to the market with ease. In order to improve our services, the company will Endeavour to conduct research and update itself at all times.  This will enable the company to always be ahead of its competitors, in terms of service delivery and efficiency.  This ensures customer satisfaction that determines growth.

  
            
</section>


<section class="block-templates" id="conclusion">
 
  
           

 We have a sound foundation from which we offer tailor made solutions to our clients’ needs. With broad experience and dedication, the employees have contributed to Ocean Palm Freighters Limited growing reputation in the clearing logistics and customer service, flexible and proactive response to customer requirements and highly competitive prices.
Palm Freighters Limited has been able to handle a capacity of more than 200 TEUS in a month coupled with various project cargoes.
We constantly do a self-evaluation and respond to our customer’s needs and demands.  We therefore quickly adapt to the market with ease. In order to improve our services, the company will Endeavour to conduct research and update itself at all times.  This will enable the company to always be ahead of its competitors, in terms of service delivery and efficiency.  This ensures customer satisfaction that determines growth.
            

</section>

</div>
</div>


<!--div span3 to the right-->

 <div class="col-md-3"> 
       <div class="panel panel-default">
        <div id="nav_container2">  
              <div class="panel-body">
               <p>
               Although Palm Freighters Limited is a new, our company Comprises of Very Qualified individual with vast Experience from various companies they’ve worked for who have teamed up to take their work seriously with the aim of achieving customer satisfaction.
               <hr/>
                Although Palm Freighters Limited is a new, our company Comprises of Very Qualified individual with vast Experience from various companies they’ve worked for who have teamed up to take their work seriously with the aim of achieving customer satisfaction.
               <hr/>
                Although Palm Freighters Limited is a new, our company Comprises of Very Qualified individual with vast Experience from various companies they’ve worked for who have teamed up to take their work seriously with the aim of achieving customer satisfaction.
               <hr/>
                Although Palm Freighters Limited is a new, our company Comprises of Very Qualified individual with vast Experience from various companies they’ve worked for who have teamed up to take their work seriously with the aim of achieving customer satisfaction.
               <hr/>
               </p>
            </div>
            </div>
            </div>
    </div> 



<!--end span3 to the right-->
</div>
</div>
</div>
  
   
    

  <div id="back-top">
    <a href="#"><i class="icon-double-angle-up"></i></a>
  </div>

    <script src="js/fastclick.js"></script>
    <script src="js/fixed-responsive-nav.js"></script>
  </body>
</html>
