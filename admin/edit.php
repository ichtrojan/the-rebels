<?php
// include functions and processor
require "../__config/processor.php";
require "../__config/functions.php";

// get packages request
if($_GET['pid'])
{
    // assign package id
    $p_id = $_GET['pid'];
    if(!is_numeric($p_id))
    {
        $back = $_SERVER['HTTP_REFERER'];
        header('Location: '.$back);
    }else{
        $packages = new UploadPackages();
        $packages = $packages->load($p_id);

        // assign variables
        $id = $packages['id'];
        $name = $packages['name'];
        $description = $packages['description'];
        $type = $packages['type'];
        $price = $packages['price'];
        $location = $packages['location'];
        $duration = $packages['duration'];
        $contact = $packages['contact'];

        // tags and date
        $tags = $packages['tags'];
        $dates = $packages['dates'];
    }
}else{
    $back = $_SERVER['HTTP_REFERER'];
    header('Location: '.$back);
}
?>
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
                                    <li><a href="all-packages">view</a></li>
                                    <li><a href="all-packages">edit</a></li>
                                    <li><a href="all-packages">create</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <div class="content-lg container">
            <div class="row margin-b-40">
                <div class="col-md-8">
                    <h1 class="lead">Create Packages</h1>
                    <hr />
                    <div class="form">
                        <form class="form" action="../__factory/update-package.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" id="pid" name="package_id" value="<?= $id; ?>">
                            <div class="row">
                                <div class="col-sm-2">What is the package name?</div>
                                <div class="col-sm-6">
                                    <input type="text" name="package_name" placeholder="Package Name" required="" class="dino-input" value="<?= $name; ?>">
                                </div>
                            </div><br />

                            <div class="row">
                                <div class="col-sm-2">Tell us more about this package</div>
                                <div class="col-sm-6">
                                    <textarea name="package_desc" cols="60" rows="5" class="dino-input" placeholder="Tell us about this package" required=""><?= $description; ?></textarea>
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
                                <div class="col-sm-2">Package price ?</div>
                                <div class="col-sm-6">
                                    <input type="number" name="package_price" placeholder="000,000,00" required="" class="dino-input" value="<?= $price; ?>">
                                </div>
                            </div> <br />

                            <div class="row">
                                <div class="col-sm-2">Package Location</div>
                                <div class="col-sm-6">
                                   <textarea class="dino-input" name="package_location" cols="60" rows="2" placeholder="Location " required=""><?= $location; ?></textarea>
                                </div>
                            </div><br />

                            <div class="row">
                                <div class="col-sm-2">Package Duration</div>
                                <div class="col-sm-6">
                                    <input type="text" name="package_duration" placeholder="Duration" required="" class="dino-input" value="<?= $duration; ?>">
                                </div>
                            </div><br />

                            <div class="row">
                                <div class="col-sm-2">Contact Information</div>
                                <div class="col-sm-6">
                                    <input type="text" pattern="[0-9]*" name="package_contact" placeholder="Contact" required="" class="dino-input" value="<?= $contact; ?>">
                                </div>
                            </div><br />

                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-6">
                                  <button class="btn btn-info">Save and Update Package</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <h1 class="lead">Preview last edited package</h1>
                    <hr />
                    <div id="load-last-edit"></div>
                </div>
            </div>
            <script type="text/javascript">
                var id = $("#pid").val(); // get hidden id from form.
                $("#load-last-edit").load("../__factory/load-last-edit.php?id="+id);
            </script>
        </div>
    </body>
</html>