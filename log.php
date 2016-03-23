<?php
class Log

{ 
	private $filename;
	private $handle;

	public function logMessage($logLevel, $message)
	{
		$this->setFileName();

	    if ($logLevel == 'info') {
	    	return $this->logInfo();
	    } elseif ($logLevel == 'error') {
	    	return $this->logError();
	    } else {
	    	return "[UNK], '{$logLevel}' is unknown.";
	    }
	}

	protected function setFileName()
	{
		date_default_timezone_set("America/Chicago");
	    $date = date("Y-m-d");
	    $this->filename = "log-{$date}.log";  // reuses the definition of $filename globally		
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
	$this->handle = fopen($this->filename, 'a'); //$this uses a variable that is available across all the methods in the class
	if (is_writable($this->filename) && touch($this->filename)){
		fwrite($this->handle, PHP_EOL . $message);  //$this allows us to use the property of a class instead of a local variable
		fclose($this->handle);	
	}
	
}

}
?>