<?php session_start();error_reporting(0);
if($_SESSION["loggedin"]=="yes" && $_SESSION["role"]=="admin"){
    require 'header.php';
?>
  <body>
  <!-- container section start -->
  <section id="container" class="">
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"></div>
            </div>
            <a href="index.php" class="logo"><span class="lite">Admin</span></a>
           <div class="top-nav notification-row">                
                <ul class="nav pull-right top-menu">
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/now/<?php 
    $path = "img/now/".$_SESSION["id"]."1_small.jpg";
 if(file_exists($path)) {
   echo $_SESSION["id"];} else {
        echo "avatar";
    }?>1_small.jpg">
                            </span>
                            <span class="username"><?php echo $_SESSION["name"]; ?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="#"><i class="icon_profile"></i> My Profile</a>
                            </li>
                            <li>
                                <a href="signout.php"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->
      
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a class="" href="javascript:;">
                          <i class="icon_document_alt"></i>
                          <span>Add People</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="student_add.php">Students</a></li>
                          <li><a class="" href="faculty_add.php">Faculty Members</a></li>
                          <li><a class="" href="admin_add.php">Admins</a></li><li><a class="" href="ofaculty_add.php">Outside Faculty</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a class="" href="javascript:;">
                          <i class="icon_document_alt"></i>
                          <span>Research Work<br>Update</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="journal_add.php">Journal Article</a></li>
                          <li><a class="" href="book_add.php">Book Chapters</a></li>
                          <li><a class="" href="conf_add.php">Conference Papers</a></li>
                      </ul>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
                    <!--ALERTS START -->
                    
                    <?php 
    if($_SESSION["success_student_added"]==1){ ?>
                    <div class="alert alert-success">
                        <strong>Success!</strong> Student has been added!
                    </div>
                    <?php unset($_SESSION["success_student_added"]);
                    }
    else if($_SESSION["success_student_added"]==2){ ?>
                    <div class="alert alert-danger">
                        <strong>Sorry!</strong> Unable to process information right now. Please contact the administrator at akshit [dot] arora1995 [at] gmail [dot] com .
                    </div>
                    <?php
        unset($_SESSION["success_student_added"]);
    }
                    ?>
                    
                    
                    <?php 
    if($_SESSION["success_faculty_added"]==1){ ?>
                    <div class="alert alert-success">
                        <strong>Success!</strong> Faculty has been added!
                    </div>
                    <?php unset($_SESSION["success_faculty_added"]);
                    }
    else if($_SESSION["success_faculty_added"]==2){ ?>
                    <div class="alert alert-danger">
                        <strong>Sorry!</strong> Unable to process information right now. Please make sure if the faculty id entered was unique or not. If the problem persists, please contact the administrator at akshit [dot] arora1995 [at] gmail [dot] com .
                    </div>
                    <?php
        unset($_SESSION["success_faculty_added"]);
    }
                    ?>
                    
                    
                    <?php 
    if($_SESSION["success_admin_added"]==1){ ?>
                    <div class="alert alert-success">
                        <strong>Success!</strong> Admin has been added!
                    </div>
                    <?php unset($_SESSION["success_admin_added"]);
                    }
    else if($_SESSION["success_admin_added"]==2){ ?>
                    <div class="alert alert-danger">
                        <strong>Sorry!</strong> Unable to process information right now. Please contact the administrator at akshit [dot] arora1995 [at] gmail [dot] com .
                    </div>
                    <?php
        unset($_SESSION["success_admin_added"]);
    }
                    ?>
                    <!--ALERTS END -->
					<h3 class="page-header"><i class="fa fa-laptop"></i>Welcome <?php echo $_SESSION["name"];?>!</h3>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-6">
                      <div class="col-sm-12 bootcards-list" id="list" data-title="students">
                          
<?php
    $conn = new mysqli("localhost", "root", "","phd");
    $sql = "SELECT * from student";
    if ($result=mysqli_query($conn,$sql))
  {
        echo "<div class='panel panel-default'>";
        echo "<div class='list-group'>";
  // Fetch one and one row
  while ($row=mysqli_fetch_assoc($result))
    {
      echo "<a class='list-group-item' href='#'>";
      
      echo "<img src='img/now/avatar1.jpg' class='img-rounded pull-left'/>
        <h4 class='list-group-item-heading'>";echo $row["sname"]; echo "</h4>";
      echo "<p class='list-group-item-text'>"; echo $row["semail"]; echo "</p>";
      echo "<p class='list-group-item-text'>"; echo $row["status"]; echo "&nbsp;&nbsp;&nbsp;"; echo $row["sbranch"];echo "&nbsp;&nbsp;&nbsp;"; echo $row["full_part"]; echo "</p>";
      
      echo "</a>";
    }
        echo "</div>";
        echo "</div>";
  // Free result set
  mysqli_free_result($result);
}  
?>
                      </div>
                  </div>
              </div>
          </section>
      </section>
      <!--main content end-->
      </section>
  <!--   container section start -->
      
    <!-- javascripts -->
    <script src="js/jquery.js"></script>
	<script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
	<script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
	<script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js" ></script>
	<script src="assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
	<script src="js/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="js/jquery-jvectormap-world-mill-en.js"></script>
	<script src="js/xcharts.min.js"></script>
	<script src="js/jquery.autosize.min.js"></script>
	<script src="js/jquery.placeholder.min.js"></script>
	<script src="js/gdp-data.js"></script>	
	<script src="js/morris.min.js"></script>
	<script src="js/sparklines.js"></script>	
	<script src="js/charts.js"></script>
	<script src="js/jquery.slimscroll.min.js"></script>
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
	  
	  /* ---------- Map ---------- */
	$(function(){
	  $('#map').vectorMap({
	    map: 'world_mill_en',
	    series: {
	      regions: [{
	        values: gdpData,
	        scale: ['#000', '#000'],
	        normalizeFunction: 'polynomial'
	      }]
	    },
		backgroundColor: '#eef3f7',
	    onLabelShow: function(e, el, code){
	      el.html(el.html()+' (GDP - '+gdpData[code]+')');
	    }
	  });
	});



  </script>
<script type="text/javascript">

      /*
       * Initialize Bootcards.
       * 
       * Parameters:
       * - offCanvasBackdrop (boolean): show a backdrop when the offcanvas is shown
       * - offCanvasHideOnMainClick (boolean): hide the offcanvas menu on clicking outside the off canvas
       * - enableTabletPortraitMode (boolean): enable single pane mode for tablets in portraitmode
       * - disableRubberBanding (boolean): disable the iOS rubber banding effect
       * - disableBreakoutSelector (string) : for iOS apps that are added to the home screen:
                            jQuery selector to target links for which a fix should be added to not
                            allow those links to break out of fullscreen mode.
       */
       
      bootcards.init( {
        offCanvasBackdrop : true,
        offCanvasHideOnMainClick : true,
        enableTabletPortraitMode : true,
        disableRubberBanding : true,
        disableBreakoutSelector : 'a.no-break-out'
      });

      //enable FastClick
      window.addEventListener('load', function() {
          FastClick.attach(document.body);
      }, false);

      //activate the sub-menu options in the offcanvas menu
      $('.collapse').collapse();

      //theme switcher: only needed for this sample page to set the active CSS
      $('input[name=themeSwitcher]').on('change', function(ev) {
        var theme = $(ev.target).val();
        var themeCSSLoaded = false;

        $.each( document.styleSheets, function(idx, css) {
          var href = css.href;
          if (href.indexOf('bootcards')>-1) {
            if (href.indexOf(theme)>-1) {
              themeCSSLoaded = true;
              css.disabled = false;
            } else {
              css.disabled = true;
            }
          }
        });

        if (!themeCSSLoaded) {
          $("<link/>", {
             rel: "stylesheet",
             type: "text/css",
             href: "//cdnjs.cloudflare.com/ajax/libs/bootcards/1.1.1/css/bootcards-" + theme + ".min.css"
          }).appendTo("head");
        }
        
      });

    </script>
  </body>
</html>
<?php
}
else {
    ?>
<html>
    <head>
        <!-- Latest compiled and minified CSS -->   
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="assets/css/main.css" />
    </head>
    <body>
        <div class="container alert alert-danger">
            <strong><h2>OOPS!</h2></strong>
            <p>You are not logged in. Please go <a href="../">here</a> first.<br>If you are still unable to log in, kindly contact the administrator at akshit [dot] arora1995 [at] gmail [dot] com.</p>
        </div>
    </body>
</html>
<?php
session_destroy();
}

?>