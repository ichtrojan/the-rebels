<?php
# include the processor for processing files.
require "../__config/processor.php";
require "../__config/functions.php";

# request all packages from Form
$package_id = $_POST['package_id'];
$package_name = $_POST['package_name'];
$package_desc = $_POST['package_desc'];
$package_type = $_POST['package_type'];
$package_price = $_POST['package_price'];
$package_location = $_POST['package_location'];
$package_duration = $_POST['package_duration'];
$package_contact = $_POST['package_contact'];

# create new instance of card and save
$save_package = new UploadPackages();
$save_package->update(
    $package_id, $package_name, $package_desc, $package_type, 
    $package_price, $package_location, $package_duration, $package_contact
);

?>