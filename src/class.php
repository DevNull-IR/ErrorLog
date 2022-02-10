<?php
class ErrorLog {
  public $FileNameErrorLog = "error.log";
  public function __construct ($FileNameErrorLog = "Error.log"){
    $this->FileNameErrorLog = $FileNameErrorLog;
  }
  public function __constructStatic ($FileNameErrorLog){
    $this->FileNameErrorLog = $FileNameErrorLog;
  }
  public function ErrorLog(string $value){
    file_put_contents($this->FileNameErrorLog,$value . PHP_EOL ,FILE_APPEND);
  }
}
