<?php

function parseContacts($filename)
{
    $contacts = array();

    // todo - read file and parse contacts
		$filename = 'contacts.txt';    // set the filename
		$handle = fopen($filename, 'r');  // open the file,  'r' means for reading only
		$contents = fread($handle, filesize($filename)); // read contents from the handle to the end of the file
														// contents come in as a single string
		$arrayOfStrings = explode(PHP_EOL, $contents);   // convert the single string into an array of strings

//
		foreach($arrayOfStrings as $string) {
			$nameInfo = explode(",", $string);
		}
		print_r($nameInfor);

		echo $contents;
		fclose($handle); // we need to close the file

    return $contacts;
}

var_dump(parseContacts('contacts.txt'));
