<?php

// Place your directory path to your tv series.
	 $files = glob('/your root directory/your tv series name/*/*/*.{r*}', GLOB_BRACE);
	 foreach ($files as $file) {
	 	$directory = pathinfo($file, PATHINFO_DIRNAME);
		if (stripos($file,'.r00') !== false) {
		    $string="unrar e '$file' '$directory' "; 
			exec($string);
		} else {
		    //do nothing
		}
		unlink($file); //deletes all .rar files after extraction, if you don't want that to happen comment out this line.
    }
?>
