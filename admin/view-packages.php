<!DOCTYPE html>

<html lang="en" class="no-js">

    <head>
        <meta charset="utf-8"/>
        <title>Holidays and Vacation Packages</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="FlameOnePage freebie theme for web startups by FairTech SEO." name="description"/>
        <meta content="FairTech" name="author"/>
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="../public/vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="../public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../public/css/animate.css" rel="stylesheet">
        <link href="../public/vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>
        <link href="../public/css/layout.min.css" rel="stylesheet" type="text/css"/>
        <link rel="shortcut icon" href="../public/favicon.ico"/>
        <link rel="stylesheet" type="text/css" href="../public/css/mix.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>

    <body id="body" data-spy="scroll" data-target=".header">
        <header class="header navbar-fixed-top" style="background-color: #999;">
            <nav class="navbar" role="navigation">
                <div class="container">
                    <div class="menu-container js_nav-item">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container" >
                            <div class="top-nav" align="right">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                                    <li><a href="all-packages.php"><i class="fa fa-dashboard"></i> View All</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="content-lg container">
            <div class="row margin-b-40">
                <div class="col-md-12">
                   <div id="load-all"></div> 
                </div>
            </div>
            <script type="text/javascript">
                $("#load-all").load("../__factory/load-packages.php");
            </script>
        </div>
    </body>
</html>