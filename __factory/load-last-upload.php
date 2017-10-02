<?php
# include the processor for processing files.
require "../__config/processor.php";
require "../__config/functions.php";

// load last uploads
$packages = new UploadPackages();
$packages = $packages->lastUpload();

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

?>

<div class="row">
	<div class="col-sm-12 sm-margin-b-50">
	    <div class="margin-b-20">
	        <img class="img-responsive" src="../storage/uploads/<?= $images; ?>" alt="Latest Products Image">
	        <div class="price-tag"><i class="fa fa-tag"></i> &#8358; <?= $price; ?> </div>
	    </div>
	    <h4><a href="#"><?= $name; ?></a> <span class="text-uppercase margin-l-20"><?= $duration; ?></span></h4>
	    <p><?= $description; ?></p>
	    <table class="table">
	    	<tr>
	    		<td>Location: </td>
	    		<td><?= $location; ?></td>
	    	</tr>
	    	<tr>
	    		<td>Contact: </td>
	    		<td><?= $contact; ?></td>
	    	</tr>
	    </table>
	    <hr />
	    <a href="../admin/edit.php?pid=<?= $id; ?>" class="small"><i class="fa fa-edit"></i> edit </a> -
	    <a href="../view-package.php?pid=<?= $id; ?>" class="small"><i class="fa fa-desktop"></i> view </a> - 
	    <a href="../__factory/delete-package.php?pid=<?= $id; ?>" class="small"><i class="fa fa-bitbucket"></i> delete </a>
	    <hr />
	</div>	
</div>
