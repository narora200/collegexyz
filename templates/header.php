<!DOCTYPE HTML>
<html>
    <head>
        <title>BVPCSI</title>
        <meta charset = "utf-8">
        <meta name="Description" content="BVPCSI" />
        
       
        <link href="Content/bootstrap.min.css" rel="stylesheet" />
        <link href="Content/main.css" rel="stylesheet" />
        <link rel="shortcut icon" href="img/logofavicon.png" />
    </head>
    <body>
        <!-- Header of the Page-->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">
                        <img class = "img-responsive" width = "250em" src = "img/logo.png" alt = "BVPCSI" />
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <!--    <ul class="nav navbar-nav">
                        
                    </ul>-->
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <?php
                                $page = $_SERVER["PHP_SELF"];
                                if(strcmp($page, "/index.php") == 0)
                                {
                                    echo '<li class = "active"><a href = "">Home</a></li>';
                                }
                                else
                                {
                                    echo '<li><a href = "">Home</a></li>';                            
                                }
                                if(strcmp($page, "/") == 0)
                                {
                                    echo '<li class = "active"><a href = "">Council</a></li>';
                                }
                                else
                                {
                                    echo '<li><a href = "">Council</a></li>';                            
                                }
                                if(strcmp($page, "/") == 0)
                                {
                                    echo '<li class = "active"><a href = "">Gallery</a></li>';
                                }
                                else
                                {
                                    echo '<li><a href = "">Gallery</a></li>';                            
                                }
                                if(strcmp($page, "/") == 0)
                                {
                                    echo '<li class = "active"><a href = "">Events</a></li>';
                                }
                                else
                                {
                                    echo '<li><a href = "">Events</a></li>';                            
                                }
                                if(strcmp($page, "/") == 0)
                                {
                                    echo '<li class = "active"><a href = "">Contact Us</a></li>';
                                }
                                else
                                {
                                    echo '<li><a href = "">Contact Us</a></li>';                            
                                }
                            ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Main Body -->
        <div class = "container-fluid" style = "padding-left:0; padding-right:0;">
