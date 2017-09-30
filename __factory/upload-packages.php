<?php
# include the processor for processing files.
require "../__config/processor.php";
require "../__config/functions.php";

# request all packages from Form
$package_name = $_POST['package_name'];
$package_type = $_POST['package_type'];
$package_price = $_POST['package_price'];
$package_location = $_POST['package_location'];
$package_duration = $_POST['package_duration'];
$package_contact = $_POST['package_contact'];

# file data
$package_avatar = $_FILES['package_avatar'];
$processed_images = processImages($package_avatar);


# packages to arrays
$packages = array(
	'name' => $package_name,
	'type' => $package_type,
	'price' => $package_price,
	'location' => $package_location,
	'duration' => $package_duration,
	'contact' => $package_contact,
	'images' => $processed_images
);

# create new instance of card
$save_package = new UploadPackages($packages);
$save_package->save();


echo 'All functionality passed';

?>