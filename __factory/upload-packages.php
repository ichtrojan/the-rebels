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
$package_avatar = $_FILES['files'];

# upload images 
$images_arr = array();
$images_name = array();
foreach($_FILES['files']['name'] as $key=>$val){
    //upload and stored images
    $target_dir = "../storage/uploads/";
    $ext = substr($_FILES['files']['name'][$key], strpos($_FILES['files']['name'][$key], '.'));
    $new_name = time().rand(000,999).$ext;
    $target_file = $target_dir.$new_name;
    if(move_uploaded_file($_FILES['files']['tmp_name'][$key],$target_file)){
        $images_arr[] = $target_file;
        array_push($images_name, $new_name);
    }
}

# packages to arrays
$packages = array(
	'name' => $package_name,
	'type' => $package_type,
	'price' => $package_price,
	'location' => $package_location,
	'duration' => $package_duration,
	'contact' => $package_contact,
	'images' => $images_name
);

# create new instance of card
$save_package = new UploadPackages();
$save_package->save($packages);
?>