<?php
class Log

{ 
	public $filename;

public function logMessage($logLevel, $message)
	{
	// Creates variables for the formatted times 
	date_default_timezone_set("America/Chicago");
    $date = date("Y-m-d");
    $this->filename = "log-{$date}.log";  // reuses the definition of $filename globally

    if ($logLevel == 'info') {
    	return $this->logInfo();
    } elseif ($logLevel == 'error') {
    	return $this->logError();
    } else {
    	return "[UNK], '{$logLevel}' is unknown.";
    }
	}

// The logInfo and logError functions create different messages to be printed out by the logMessages functions. 
public function logInfo()
	{
    return $this->writeFile ("[INFO], This is an info message.");
	}

public function logError()
	{
    return $this->writeFile ("[ERROR], This is an error message.");
	}

// This function creates or opens the file and names it in yearMonthDay format from that variable.
// The fwrite line adds the message, $formatedDateTimeEntry to the new or opened file.
public function writeFile($message) 
{
	$handle = fopen($this->filename, 'a');
	fwrite($handle, PHP_EOL . $message);
	fclose($handle);	
}

}
?>