<?php

namespace APP;

class User {
  private $username;
  private $profilePicture;

  public function __construct($username, $profilePicture) {
    if (filter_var($profilePicture, FILTER_VALIDATE_URL) === false) {
      throw new \InvalidArgumentException("El valor de profilePicture debe ser una URL válida.");
    }
    $this->username = $username;
    $this->profilePicture = $profilePicture;
  }
  public function getProfilePicture(){
    return $this->profilePicture;
  }
  public function getUsername(){
    return $this->username;
  }
}