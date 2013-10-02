<?php

namespace Pegase\External\Doctrine2\ORM;

use \Pegase\Core\Module\AbstractModule;

class Doctrine2Module extends AbstractModule {

  public function get_name() {
    return "Pegase/External/Doctrine2/ORM";
  }

  public function get_path() {
    return __DIR__;
  }
}

