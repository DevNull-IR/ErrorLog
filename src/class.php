<?php
namespace src\ErrorLog;
class ErrorLog {
  public $FileNameErrorLog = "error.log";
  public static function __construct ($FileNameErrorLog){
    $this->FileNameErrorLog = $FileNameErrorLog;
  }
  public static function __constructStatic ($FileNameErrorLog){
    $this->FileNameErrorLog = $FileNameErrorLog;
  }
  public static function ErrorLog((string)$value){
    file_put_contents($this->FileNameErrorLog,$value . PHP_EOL ,FILE_APPEND);
  }
}
