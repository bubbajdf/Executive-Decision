<?php
/**
 * PLUGIN NAME: Name Of The Plugin
 * DESCRIPTION: A brief description of the Plugin.
 * VERSION: The Plugin's Version Number, e.g.: 1.0
 * AUTHOR: Name Of The Plugin Author
 */

// Call the REDCap Connect file in the main "redcap" directory
require_once "../redcap_connect.php";

// Get the list of all files and place them in an array
$filesInThisDirectory = array();
foreach (getDirFiles(dirname(__FILE__)) as $thisFile) {
	if ($thisFile == basename(__FILE__)) continue; // Do not display the current page
	$filesInThisDirectory[] = $thisFile;
}

// Display the header
$HtmlPage = new HtmlPage();
$HtmlPage->PrintHeaderExt();

// HTML page content goes here
?>
<h3 style="color:#800000;">
	Plugin Examples
</h3>
<div>
	<p style="margin:20px 0;">
		To learn more about REDCap plugins and hooks, see the 
		<a style="text-decoration:underline;" href="<?php print APP_PATH_WEBROOT ?>Plugins/index.php" target="_blank">documentation inside REDCap</a>.
	</p>
	<div style="font-weight:bold;">
		List of example plugin files in this directory:
	</div>
	<?php foreach ($filesInThisDirectory as $thisFile) { ?>
		<div style="margin:2px 15px;">&bull; <a href="<?php echo $thisFile ?>"><?php echo $thisFile ?></a></div>
	<?php } ?>
</div>
<?php

// Display the footer
$HtmlPage->PrintFooterExt();