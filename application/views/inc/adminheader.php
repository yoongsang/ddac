<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CMS</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

	<!--<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>-->
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
				<link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="Stylesheet"
        type="text/css" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
       <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
       <script>
           $(document).ready(function(){
  var touch   = $('#resp-menu');
  var menu  = $('.menu');

  $(touch).on('click', function(e) {
    e.preventDefault();
    menu.slideToggle();
  });

  $(window).resize(function(){
    var w = $(window).width();

    // breakpoint
    if(w > 767 && menu.is(':hidden')) {
      menu.removeAttr('style');
    }
  });

});

       </script>

        <style>
            nav {
  display: block;
  background: #E95546;
}

.menu { display: block; }

.menu li {
  display: inline-block;
  position: relative;
  z-index: 100;
}

.menu li:first-child { margin-left: 0; }

.menu li a {
  font-weight: 600;
  text-decoration: none;
  padding: 20px 15px;
  display: block;
  color: #fff;
  transition: all 0.2s ease-in-out 0s;
}

.menu li a:hover,
.menu li:hover>a {
  color: #fff;
  background: #FC6D58;
}

.menu ul {
  visibility: hidden;
  opacity: 0;
  margin: 0;
  padding: 0;
  width: 170px;
  position: absolute;
  left: 0px;
  background: #fff;
  z-index: 99;
  transform: translate(0, 20px);
  transition: all 0.2s ease-out;
}

.menu ul:after {
  bottom: 100%;
  left: 20%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
  border-color: rgba(255, 255, 255, 0);
  border-bottom-color: #fff;
  border-width: 6px;
  margin-left: -6px;
}

.menu ul li {
  display: block;
  float: none;
  background: none;
  margin: 0;
  padding: 0;
}

.menu ul li a {
  font-size: 12px;
  font-weight: normal;
  display: block;
  color: #797979;
  background: #fff;
}

.menu ul li a:hover,
.menu ul li:hover>a {
  background: #FC6D58;
  color: #fff;
}

.menu li:hover>ul {
  visibility: visible;
  opacity: 1;
  transform: translate(0, 0);
}

.menu ul ul {
  left: 169px;
  top: 0px;
  visibility: hidden;
  opacity: 0;
  transform: translate(20px, 20px);
  transition: all 0.2s ease-out;
}

.menu ul ul:after {
  left: -6px;
  top: 10%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
  border-color: rgba(255, 255, 255, 0);
  border-right-color: #fff;
  border-width: 6px;
  margin-top: -6px;
}

.menu li>ul ul:hover {
  visibility: visible;
  opacity: 1;
  transform: translate(0, 0);
}

.responsive-menu {
  display: none;
  width: 100%;
  padding: 20px 15px;
  background: #E95546;
  color: #fff;
  text-transform: uppercase;
  font-weight: 600;
}

.responsive-menu:hover {
  background: #E95546;
  color: #fff;
  text-decoration: none;
}

a.homer { background: #FC6D58; }

@media (min-width: 768px) and (max-width: 979px) {

.mainWrap { width: 768px; }

.menu ul { top: 37px; }

.menu li a { font-size: 12px; }

a.homer { background: #E95546; }

}

@media (max-width: 767px) {

.mainWrap {
  width: auto;
  padding: 50px 20px;
}

.menu { display: none; }

.responsive-menu { display: block; }

nav {
  margin: 0;
  background: none;
}

.menu li {
  display: block;
  margin: 0;
}

.menu li a {
  background: #fff;
  color: #797979;
}

.menu li a:hover,
.menu li:hover>a {
  background: #FC6D58;
  color: #fff;
}

.menu ul {
  visibility: hidden;
  opacity: 0;
  top: 0;
  left: 0;
  width: 100%;
  transform: initial;
}

.menu li:hover>ul {
  visibility: visible;
  opacity: 1;
  position: relative;
  transform: initial;
}

.menu ul ul {
  left: 0;
  transform: initial;
}

.menu li>ul ul:hover { transform: initial; }

}

        </style>




</head>
<body ><!--start body-->
    <div id="header" class="col-xs-12 col-md-12">
        <div class="col-xs-3 col-md-3" style="padding-top:3%">
            <p style="font-size:12px;color:white">Login as, <span style="font-size:15px;font-weight: bold"><?php if(isset($userName)){
     echo $userName;
     }?></span></p>
        </div>
        <div class="col-xs-7 col-md-7" style="margin-left:-5%">
          <span style="font-size:40px;color:white;font-weight:bold">Maersk Line CMS</span>
        </div>
        <div class="col-xs-2 col-md-2" style="padding-top:3%">
             <a href="<?php echo base_url();?>adminLogout"style="font-size:15px;color:white"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
        </div>
    </div>
    <div>
        <nav>
            <a id="resp-menu" class="responsive-menu" href="#" style="padding-top:26%">
   <i class="fa fa-reorder"></i>
  </a>
  <ul class="menu">
    <li><a href="<?php echo base_url();?>adminAll"><i class="fa fa-users"></i> Administrator</a>
      <ul class="sub-menu">
        <li><a href="<?php echo base_url();?>adminCreateAdmin">Create Administrator</a></li>
        <li><a href="<?php echo base_url();?>adminEditAdmin">Edit Administrator</a></li>
      </ul>
    </li>
    <li><a href="<?php echo base_url();?>adminSchedule"><i class="fa fa-calendar"></i> Schedule</a>
      <ul class="sub-menu">
        <li><a href="<?php echo base_url();?>createSchedule">Add Schedule</a></li>
        <li><a href="<?php echo base_url();?>editSchedule">Edit Schedule</a></li>
      </ul>
    </li>
    <li><a href="<?php echo base_url();?>adminImport"><i class="fa fa-ship"></i> Import/Export/Transshipment</a>
      <ul class="sub-menu">
        <li><a href="<?php echo base_url();?>adminCreateImport">Create service</a></li>
        <li><a href="<?php echo base_url();?>adminEditImport">Receive service</a></li>
      </ul>
    </li>
  </ul>
</nav>
    </div>
