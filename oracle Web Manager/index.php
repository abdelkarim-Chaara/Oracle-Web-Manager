<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title> PROJET ORACLE WEB MANAGER</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        :focus {
  outline: none;
}
.row {
  margin-right: 0;
  margin-left: 0;
}
/* 
    Sometimes the sub menus get too large for the page and prevent the menu from scrolling, limiting functionality
    A quick fix is to change .side-menu to 

    -> position:absolute
    
    and uncomment the code below.
    You also need to uncomment 
    
    -> <div class="absolute-wrapper"> </div> in the html file

    you also need to tweek the animation. Just uncomment the code in that section
    --------------------------------------------------------------------------------------------------------------------
    If you want to make it really neat i suggest you look into an alternative like http://areaaperta.com/nicescroll/
    This will allow the menu to say fixed on body scoll and scoll on the side bar if it get to large
*/
/*.absolute-wrapper{
    position: fixed;
    width: 300px;
    height: 100%;
    background-color: #f8f8f8;
    border-right: 1px solid #e7e7e7;
}*/
   



::-webkit-scrollbar { width: 12px; }
 /* Track */ 
 ::-webkit-scrollbar-track { -webkit-box-shadow: inset 0 0 6px grey; 
  -webkit-border-radius: 10px; border-radius: 10px; } 
  /* Handle */ 
  ::-webkit-scrollbar-thumb { -webkit-border-radius: 10px; border-radius: 10px; background: grey; -webkit-box-shadow: inset 0 0 6px grey; } 
  ::-webkit-scrollbar-thumb:window-inactive { background: grey; }











.side-menu {
  position: fixed;
  width: 350px;
  height: 100%;
  background-color: #f8f8f8;
  border-right: 1px solid #e7e7e7;
  font-size: 21px
}
.side-menu .navbar {
  border: none;
}
.side-menu .navbar-header {
  width: 100%;
  border-bottom: 1px solid #e7e7e7;
}
.side-menu .navbar-nav .active a {
  background-color: transparent;
  margin-right: -1px;
  border-right: 5px solid #e7e7e7;
}
.side-menu .navbar-nav li {
  display: block;
  width: 100%;

  border-bottom: 1px solid #e7e7e7;
}
.side-menu .navbar-nav li a {
  padding: 30px;
}
.side-menu .navbar-nav li a .glyphicon {
  padding-right: 10px;
}
.side-menu #dropdown {
  border: 0;
  margin-bottom: 0;
  border-radius: 0;
  background-color: transparent;
  box-shadow: none;
}
.side-menu #dropdown .caret {
  float: right;
  margin: 9px 5px 0;
}
.side-menu #dropdown .indicator {
  float: right;
}
.side-menu #dropdown > a {
  border-bottom: 1px solid #e7e7e7;
}
.side-menu #dropdown .panel-body {
  padding: 0;
  background-color: #f3f3f3;
}
.side-menu #dropdown .panel-body .navbar-nav {
  width: 100%;
}
.side-menu #dropdown .panel-body .navbar-nav li {
  padding-left: 15px;
  border-bottom: 1px solid #e7e7e7;
}
.side-menu #dropdown .panel-body .navbar-nav li:last-child {
  border-bottom: none;
}
.side-menu #dropdown .panel-body .panel > a {
  margin-left: -20px;
  padding-left: 35px;
}
.side-menu #dropdown .panel-body .panel-body {
  margin-left: -15px;
}
.side-menu #dropdown .panel-body .panel-body li {
  padding-left: 30px;
}
.side-menu #dropdown .panel-body .panel-body li:last-child {
  border-bottom: 1px solid #e7e7e7;
}

.side-menu #search-trigger {
  background-color: #f3f3f3;
  border: 0;
  border-radius: 0;
  position: absolute;
  top: 0;
  right: 0;
  padding: 15px 18px;
}
.side-menu .brand-name-wrapper {
  min-height: 50px;
}
.side-menu .brand-name-wrapper .navbar-brand {
  display: block;
  color: #2a3c59;
  font :italic bold 35px Georgia, serif;
  margin-left: 60px;
}
.side-menu #search {
  position: relative;
  z-index: 1000;
}
.side-menu #search .panel-body {
  padding: 0;
}
.side-menu #search .panel-body .navbar-form {
  padding: 0;
  padding-right: 50px;
  width: 100%;
  margin: 0;
  position: relative;
  border-top: 1px solid #e7e7e7;
}
.side-menu #search .panel-body .navbar-form .form-group {
  width: 100%;
  position: relative;
}
.side-menu #search .panel-body .navbar-form input {
  border: 0;
  border-radius: 0;
  box-shadow: none;
  width: 100%;
  height: 50px;
}
.side-menu #search .panel-body .navbar-form .btn {
  position: absolute;
  right: 0;
  top: 0;
  border: 0;
  border-radius: 0;
  background-color: #f3f3f3;
  padding: 15px 18px;
}
/* Main body section */
.side-body {
  margin-left: 370px;
}
/* small screen */
@media (max-width: 768px) {
  .side-menu {
    position: relative;
    width: 100%;
    height: 0;
    border-right: 0;
    border-bottom: 1px solid #e7e7e7;
  }
  .side-menu .brand-name-wrapper .navbar-brand {
    display: inline-block;
  }
  /* Slide in animation */
  @-moz-keyframes slidein {
    0% {
      left: -300px;
    }
    100% {
      left: 10px;
    }
  }
  @-webkit-keyframes slidein {
    0% {
      left: -300px;
    }
    100% {
      left: 10px;
    }
  }
  @keyframes slidein {
    0% {
      left: -300px;
    }
    100% {
      left: 10px;
    }
  }
  @-moz-keyframes slideout {
    0% {
      left: 0;
    }
    100% {
      left: -300px;
    }
  }
  @-webkit-keyframes slideout {
    0% {
      left: 0;
    }
    100% {
      left: -300px;
    }
  }
  @keyframes slideout {
    0% {
      left: 0;
    }
    100% {
      left: -300px;
    }
  }
  /* Slide side menu*/
  /* Add .absolute-wrapper.slide-in for scrollable menu -> see top comment */
  .side-menu-container > .navbar-nav.slide-in {
    -moz-animation: slidein 300ms forwards;
    -o-animation: slidein 300ms forwards;
    -webkit-animation: slidein 300ms forwards;
    animation: slidein 300ms forwards;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
  }
  .side-menu-container > .navbar-nav {
    /* Add position:absolute for scrollable menu -> see top comment */
    position: fixed;
    left: -300px;
    width: 300px;
    top: 43px;
    height: 100%;
    border-right: 1px solid #e7e7e7;
    background-color: #f8f8f8;
    -moz-animation: slideout 300ms forwards;
    -o-animation: slideout 300ms forwards;
    -webkit-animation: slideout 300ms forwards;
    animation: slideout 300ms forwards;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
  }
  /* Uncomment for scrollable menu -> see top comment */
  /*.absolute-wrapper{
        width:285px;
        -moz-animation: slideout 300ms forwards;
        -o-animation: slideout 300ms forwards;
        -webkit-animation: slideout 300ms forwards;
        animation: slideout 300ms forwards;
        -webkit-transform-style: preserve-3d;
        transform-style: preserve-3d;
    }*/
  @-moz-keyframes bodyslidein {
    0% {
      left: 0;
    }
    100% {
      left: 300px;
    }
  }
  @-webkit-keyframes bodyslidein {
    0% {
      left: 0;
    }
    100% {
      left: 300px;
    }
  }
  @keyframes bodyslidein {
    0% {
      left: 0;
    }
    100% {
      left: 300px;
    }
  }
  @-moz-keyframes bodyslideout {
    0% {
      left: 300px;
    }
    100% {
      left: 0;
    }
  }
  @-webkit-keyframes bodyslideout {
    0% {
      left: 300px;
    }
    100% {
      left: 0;
    }
  }
  @keyframes bodyslideout {
    0% {
      left: 300px;
    }
    100% {
      left: 0;
    }
  }
  /* Slide side body*/
  .side-body {
    margin-left: 5px;
    margin-top: 70px;
    position: relative;
    -moz-animation: bodyslideout 300ms forwards;
    -o-animation: bodyslideout 300ms forwards;
    -webkit-animation: bodyslideout 300ms forwards;
    animation: bodyslideout 300ms forwards;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
  }
  .body-slide-in {
    -moz-animation: bodyslidein 300ms forwards;
    -o-animation: bodyslidein 300ms forwards;
    -webkit-animation: bodyslidein 300ms forwards;
    animation: bodyslidein 300ms forwards;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
  }
  /* Hamburger */
  .navbar-toggle {
    border: 0;
    float: left;
    padding: 18px;
    margin: 0;
    border-radius: 0;
    background-color: #f3f3f3;
  }
  /* Search */
  #search .panel-body .navbar-form {
    border-bottom: 0;
  }
  #search .panel-body .navbar-form .form-group {
    margin: 0;
  }
  .navbar-header {
    /* this is probably redundant */
    position: fixed;
    z-index: 3;
    background-color: #f8f8f8;
  }
  /* Dropdown tweek */
  #dropdown .panel-body .navbar-nav {
    margin: 0;
  }
}
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
</head>
<body background="69.png">
<div class="row">
    <!-- uncomment code for absolute positioning tweek see top comment in css -->
    <!-- <div class="absolute-wrapper"> </div> -->
    <!-- Menu -->
    <div id="scr" style=" overflow-y: auto" class="side-menu">
    
    <nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <div class="brand-wrapper">
            <!-- Hamburger -->
            <button type="button" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Brand -->
            <div  class="brand-name-wrapper">
                <a  class="navbar-brand" href="#">
                    SERVICES
                </a>
            </div>

            <!-- Search -->
            <a data-toggle="collapse" href="#search" class="btn btn-default" id="search-trigger">
                <span class="glyphicon glyphicon-search"></span>
            </a>

            <!-- Search body -->
            <div id="search" class="panel-collapse collapse">
                <div class="panel-body">
                    <form class="navbar-form" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default "><span class="glyphicon glyphicon-ok"></span></button>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- Main Menu -->
    <div class="side-menu-container">
        <ul class="nav navbar-nav">

 <li class="panel panel-default " id="dropdown">
                <a data-toggle="collapse" href="#dropdown-lvl1">
                    <span class="glyphicon glyphicon-upload"></span> Import <span class="caret"></span>
                </a>

                <!-- Dropdown level 1 -->
                <div id="dropdown-lvl1" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul class="nav navbar-nav">
                            <li><a href="import_schemas.php" target="myframe">Schemas</a></li>
                            <li><a href="import_tablespace.php" target="myframe">Tablespace</a></li>
                            <li><a href="import_tables.php" target="myframe">Tables</a></li>

                         
                        </ul>
                    </div>
                </div>
            </li>

 <li class="panel panel-default " id="dropdown">
                <a data-toggle="collapse" href="#dropdown-lvl2">
                    <span class="glyphicon glyphicon-download-alt"></span> Export <span class="caret"></span>
                </a>

                <!-- Dropdown level 1 -->
                <div id="dropdown-lvl2" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul class="nav navbar-nav">
                            <li><a href="export_schemas.php" target="myframe">Schemas</a></li>
                            <li><a href="export_tablespace.php" target="myframe" >Tablespace</a></li>
                            <li><a href="export_tables.php" target="myframe" >Tables</a></li>

                         
                        </ul>
                    </div>
                </div>
            </li>

 <li class="panel panel-default " id="dropdown">
                <a data-toggle="collapse" href="#dropdown-lvl3">
                    <span class="glyphicon glyphicon-download-alt"></span> Save to Cloud Dropbox <span class="caret"></span>
                </a>

                <!-- Dropdown level 1 -->
                <div id="dropdown-lvl3" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul class="nav navbar-nav">
                            <li><a href="save_schemas.php" target="myframe">Schemas</a></li>
                            <li><a href="save_tablespace.php" target="myframe" >Tablespace</a></li>
                            <li><a href="save_tables.php" target="myframe" >Tables</a></li>

                         
                        </ul>
                    </div>
                </div>
            </li>
            <li><a href="importdb.php" target="myframe"><span class="glyphicon glyphicon-upload"></span> Restore DataBase </a></li>
            <li><a href="Exportdb.php" target="myframe"><span class="glyphicon glyphicon-download-alt"></span> Backup DataBase</a></li>

     </div>
            
    </div><!-- /.navbar-collapse -->
</nav>
    
    </div>

    <!-- Main Content -->
<div class="container-fluid">
        <div class="side-body">
           
          
           <iframe name='myframe' style="width: 100%; height: 1000px" src="info.php" frameborder="0"  allowfullscreen></iframe>
           
         
        </div>
    </div>         
         
        
    </div>
</div>
<script type="text/javascript">
$(function () {
    $('.navbar-toggle').click(function () {
        $('.navbar-nav').toggleClass('slide-in');
        $('.side-body').toggleClass('body-slide-in');
        $('#search').removeClass('in').addClass('collapse').slideUp(200);

        /// uncomment code for absolute positioning tweek see top comment in css
        //$('.absolute-wrapper').toggleClass('slide-in');
        
    });
   
   // Remove menu for searching
   $('#search-trigger').click(function () {
        $('.navbar-nav').removeClass('slide-in');
        $('.side-body').removeClass('body-slide-in');

        /// uncomment code for absolute positioning tweek see top comment in css
        //$('.absolute-wrapper').removeClass('slide-in');

    });
});
</script>
</body>
</html>
