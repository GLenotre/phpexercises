<?php

function parseContacts($filename)
{
    $contacts = array();

    // todo - read file and parse contacts
		$filename = 'contacts.txt';
		$handle = fopen($filename, 'r');
		$contents = fread($handle, filesize($filename));
		$arrayOfStrings = explode(PHP_EOL, $contents);   // 

		foreach($arrayOfStrings as $string) {
			$nameInfo = explode(",", $string);
		}
		print_r($nameInfor);
		
		echo $contents;
		fclose($handle);

    return $contacts;
}

var_dump(parseContacts('contacts.txt'));
