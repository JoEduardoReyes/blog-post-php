<?php

namespace APP;

class Author extends User {
  private $profession;

  public function __construct($username, $profilePicture, $profession){
    parent::__construct($username, $profilePicture);
    $this->profession = $profession;
  }
  public function getProfession() {
    return $this->profession;
  }
}