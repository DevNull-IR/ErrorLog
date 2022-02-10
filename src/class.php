<?pho

class ErrorLog {
  public $FileNameErrorLog = "error.log";
  public function __construct ($FileNameErrorLog){
    $this->FileNameErrorLog = $FileNameErrorLog;
  }
  public function ErrorLog((string)$value){
    file_put_contents($this->FileNameErrorLog,$value . PHP_EOL ,FILE_APPEND);
  }
}
