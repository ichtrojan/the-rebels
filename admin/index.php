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
    </head>

    <body id="body" data-spy="scroll" data-target=".header">
        <header class="header navbar-fixed-top">
            <nav class="navbar" role="navigation">
                <div class="container">
                    <div class="menu-container js_nav-item">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>


                    </div>

                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <div class="top-nav" align="right">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="all-packages">view all package</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <div class="content-lg container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="lead">Create Card for packages</h1>
                    <hr />
                </div>
                <div class="col-md-4">
                    <h1 class="lead">Preview Upload packages</h1>
                    <hr />
                </div>
            </div>
            <div class="row margin-b-40">
                <div class="col-md-12">
                    <div class="form">
                        <form class="form" role="form" action="../__factory/upload-packages.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-2">What is the package name?</div>
                                <div class="col-sm-6">
                                    <input type="text" name="package_name" placeholder="Package Name" required="" class="dino-input">
                                </div>
                            </div><br />

                            <div class="row">
                                <div class="col-sm-2">Tell us more about this package</div>
                                <div class="col-sm-6">
                                    <textarea cols="60" rows="5" class="dino-input" placeholder="Tell us about this package" required=""></textarea>
                                </div>
                            </div> <br />

                            <div class="row">
                                <div class="col-sm-2">What type of Package? </div>
                                <div class="col-sm-6">
                                    <select class="dino-input" name="package_type">
                                        <option value="gold">Gold Package</option>
                                        <option value="silver">Silver Package</option>
                                        <option value="platinum">Platinum Package</option>
                                    </select>
                                </div>
                            </div> <br />

                            <div class="row">
                                <div class="col-sm-2">Photo's of packages</div>
                                <div class="col-sm-6">
                                    <input type="file" name="files[]" required="" class="dino-input" multiple>
                                </div>
                            </div> <br />

                            <div class="row">
                                <div class="col-sm-2">Package price ?</div>
                                <div class="col-sm-6">
                                    <input type="number" name="package_price" placeholder="000,000,00" required="" class="dino-input">
                                </div>
                            </div> <br />

                            <div class="row">
                                <div class="col-sm-2">Package Location</div>
                                <div class="col-sm-6">
                                   <textarea class="dino-input" name="package_location" cols="60" rows="2" placeholder="Location " required=""></textarea>
                                </div>
                            </div><br />

                            <div class="row">
                                <div class="col-sm-2">Package Duration</div>
                                <div class="col-sm-6">
                                    <input type="text" name="package_duration" placeholder="Duration" required="" class="dino-input">
                                </div>
                            </div><br />

                            <div class="row">
                                <div class="col-sm-2">Contact Information</div>
                                <div class="col-sm-6">
                                    <input type="text" pattern="[0-9]*" name="package_contact" placeholder="Contact" required="" class="dino-input">
                                </div>
                            </div><br />

                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-6">
                                  <button class="btn btn-info">Add Package</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>