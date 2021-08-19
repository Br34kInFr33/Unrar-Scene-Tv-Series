<?php

// Place your directory path to your tv series. - Example - /home/tv/The.Blacklist/ leave the three /* there.  So it would look like this /home/tv/The.Blacklist/*/*/*
	 $files = glob('/home/jackdani/data/plex/test/Legend.Of.The.Seeker/*/*/*.{r*}', GLOB_BRACE);
	 foreach ($files as $file) {
	 	$directory = pathinfo($file, PATHINFO_DIRNAME);
		if (stripos($file,'.r00') !== false) {
		    $string="unrar e '$file' '$directory' "; 
			exec($string);
		} else {
		    //do nothing
		}
		unlink($file);
    }
?>
