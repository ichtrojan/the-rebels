<?php
# include the processor for processing files.
require "../__config/processor.php";
require "../__config/functions.php";

// load last uploads
$packages = new UploadPackages();
?>

<div class="row">
	<?php $packages = $packages->homeIndex(); ?>
</div>