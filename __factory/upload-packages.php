<?php
# include the processor for processing files.
require "../__config/processor.php";
require "../__config/functions.php";

# request all packages from Form
$package_name = $_POST['package_name'];
$package_desc = $_POST['package_desc'];
$package_type = $_POST['package_type'];
$package_price = $_POST['package_price'];
$package_location = $_POST['package_location'];
$package_duration = $_POST['package_duration'];
$package_contact = $_POST['package_contact'];

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

# ser files name
$packages_images = $images_name;

# create new instance of card and save
$save_package = new UploadPackages();
$save_package->save(
    $package_name, $package_desc, $package_type, 
    $package_price, $package_location, $package_duration, 
    $package_contact, $packages_images
);

?>