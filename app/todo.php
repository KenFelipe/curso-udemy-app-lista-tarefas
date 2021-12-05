<?php

class Todo {
  private $id;
  private $todo;
  private $state;
  private $date_registered;

  public function __set($attr, $value) {
    $this->$attr = $value;
  }

  public function __get($attr) {
    return $this->$attr;
  }
}

?>