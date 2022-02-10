<?php
class ErrorLog {
  public $FileNameErrorLog = "error.log";
  public function __construct ($FileNameErrorLog = "Error.log"){
    $this->FileNameErrorLog = $FileNameErrorLog;
  }
  public function __constructStatic ($FileNameErrorLog){
    $this->FileNameErrorLog = $FileNameErrorLog;
  }
  public function ErrorLog(string ...$value){
      foreach($value as $Log){
        file_put_contents($this->FileNameErrorLog,$Log . PHP_EOL ,FILE_APPEND);
      }
  }
}
