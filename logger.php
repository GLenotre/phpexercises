<?php

function logMessage($logLevel, $message)
	{
	// Creates variables for the formatted times 
	date_default_timezone_set("America/Chicago");
    $date = date("Y-m-d");
    $filename = "log-{$date}.log";
	}

// The logInfo and logError functions create different messages to be printed out by the logMessages functions. 
function logInfo()
	{
    return "[INFO], This is an info message.";
	}

function logError()
	{
    return "[ERROR], This is an error message.";
	}


logMessage("INFO", "This is an info message.");
logMessage("ERROR", "This is an info message.");


//Newer logs should appear at the end of the log file.
//Log entries should match the format:

//*
// logMessages takes a string of 'info' or 'error' to decide which message to return.
function logMessage($logLevel)
{
    if ($logLevel == 'info') {
    	return logInfo();
    } elseif ($logLevel == 'error') {
    	return logError();
    } else {
    	return "[UNK], '{$logLevel}' is unknown.";
    }
}
// This function creates the entire message line using the two parameters.
// $yearMonthDayTime is the formated time for the message.
// $msgType is a string of 'info' or 'error' to pass to the logMessage function.
function makeDateTimeEntry($yearMonthDayTime, $msgType) 
{
	$msg = logMessage($msgType);
	$formatedDateTimeEntry = "{$yearMonthDayTime} {$msg}";
	return $formatedDateTimeEntry;
}
// This function creates or opens the file and names it in yearMonthDay format from that variable.
// The fwrite line adds the message, $formatedDateTimeEntry to the new or opened file.
function openOrCreateFile($yearMonthDay, $formatedDateTimeEntry) 
{
	$formatedDateLogFile = "log-{$yearMonthDay}.log";
	$filename = "data/$formatedDateLogFile";
	$handle = fopen($filename, 'a');
	fwrite($handle, PHP_EOL . $formatedDateTimeEntry);
	fclose($handle);	
}
// Functions are called and set to the needed variables.
$formatedDateTimeEntry = makeDateTimeEntry($yearMonthDayTime, 'info');
openOrCreateFile($yearMonthDay, $formatedDateTimeEntry);



