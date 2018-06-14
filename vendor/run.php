<?php
//namespace vendor;

class Run{

  protected $base_dir;
  protected $file;
  protected $class;
  protected $methods;
  protected $args = [];
  protected $ext = '.php';


  public function __construct($class)
  {
    $this->file = DIRECTORY_SEPARATOR . $class . $this->ext;
    $this->get_file($class);
  }

  private function get_file($path, $results = [])
  {
    // scan all folder on __DIR__
    $files = scandir(__DIR__);
    foreach ($files as $key => $value) {
      $path = realpath(__DIR__.DIRECTORY_SEPARATOR.$value);

      if(!is_dir($path)){
        $results[] = $path;
      }else if($value != "." && $value != ".."){
        $this->get_file($path, $results);
          $results[] = $path;
      }
      return $results;
      // code...
    }
  }

  private static function get_folder()
  {
    return scandir(__DIR__ . '/../');
  }

  private function call_method()
  {

  }

  private function do_args()
  {

  }

}
