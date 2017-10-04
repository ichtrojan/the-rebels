<?php
// include functions and processor
require "__config/processor.php";
require "__config/functions.php";

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

        // files
        $images = $packages['images'];

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
        <title><?= $name; ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="<?= $description; ?>" name="description"/>
        <meta content="Hotels HNG interns" name="author"/>
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="public/vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/animate.css" rel="stylesheet">
        <link href="public/vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/layout.min.css" rel="stylesheet" type="text/css"/>
        <link rel="shortcut icon" href="public/favicon.ico"/>
        <link rel="stylesheet" type="text/css" href="public/css/mix.css">
    </head>

    <body id="body" data-spy="scroll" data-target=".header">
    	<?php include 'includes/navigation.php';?>
        <!-- Latest Products -->
        <div id="products">
            <div class="content-lg container">
               <div class="row margin-b-40">
                    <div class="col-sm-6">
                        <h2>Explore, Travel and Discover</h2>                        
                    </div>
                </div>

                <br />

                <div class="row">
                    <!-- Latest Products -->
                    <div class="col-sm-6 sm-margin-b-50">
                        <div class="margin-b-20">
                            <img class="img-responsive" src="storage/uploads/<?= $images; ?>" alt="Latest Products Image">
                            <div class="price-tag"><i class="fa fa-tag"></i> &#8358; <?= $price; ?> </div>
                        </div>
                        <h4><a href="#"><?= $name; ?></a> <span class="text-uppercase margin-l-20"><?= $duration; ?></span></h4>
                        <p><?= $description; ?></p>
                        <p>Location: <?= $location; ?> </p>
                        <p>Contact: <?= $contact; ?> </p>
                    </div>
                    <div class="col-sm-6 sm-margin-b-50">
                        <h3>Latest</h3>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="thumbnail">
                                   <img src="public/img/970x647/2.jpg">
                                   <p>Another Package</p>
                               </div>
                            </div>
                             <div class="col-sm-4">
                                <div class="thumbnail">
                                   <img src="public/img/970x647/2.jpg">
                                   <p>Another Package</p>
                               </div>
                            </div>
                             <div class="col-sm-4">
                                <div class="thumbnail">
                                   <img src="public/img/970x647/2.jpg">
                                   <p>Another Package</p>
                               </div>
                            </div>
                             <div class="col-sm-4">
                                <div class="thumbnail">
                                   <img src="public/img/970x647/2.jpg">
                                   <p>Another Package</p>
                               </div>
                            </div>
                             <div class="col-sm-4">
                                <div class="thumbnail">
                                   <img src="public/img/970x647/2.jpg">
                                   <p>Another Package</p>
                               </div>
                            </div>
                             <div class="col-sm-4">
                                <div class="thumbnail">
                                   <img src="public/img/970x647/2.jpg">
                                   <p>Another Package</p>
                               </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Latest Products -->
                </div>
            </div>
        </div>
        <?php //include 'includes/pricing.php';?>
        <?php include 'includes/footer.php';?>
    </body>
</html>