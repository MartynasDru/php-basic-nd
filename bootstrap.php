<?php

class Psr4Autoloader
{

  private $prefixes;

  public function add(string $prefix, string $base_dir): self
  {

    if (isset($this->prefixes[$prefix]) === false) {
            $this->prefixes[$prefix] = [];
    }
    array_push($this->prefixes[$prefix], $base_dir);

    return $this;
  }

  public function register()
  {
    spl_autoload_register(function($class){
      $prefix = $class;
      while (false !== $pos = strrpos($prefix, '\\')) {
          $prefix = substr($class, 0, $pos + 1);
          $relative_class = substr($class, $pos + 1);
          $mapped_file = $this->loadFile($prefix, $relative_class);
              if ($mapped_file) {
                  return $mapped_file;
              }
          $prefix = rtrim($prefix, '\\');
      }
    });
  }

  public function loadFile($prefix, $relative_class)
  {
    if (isset($this->prefixes[$prefix]) === false) {
            return;
    }

    foreach ($this->prefixes[$prefix] as $base_dir) {
      $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
      if (file_exists($file)) {
          require $file;
      }
    }

  }
}

$autoloader = new Psr4Autoloader();
$autoloader->add('Nfq\\Academy\\Homework\\', __DIR__.'/src/')
            ->add('Symfony\\Component\\Yaml\\', __DIR__.'/vendor/symfony/yaml/');
$autoloader->register();
