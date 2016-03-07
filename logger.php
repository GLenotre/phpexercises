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


