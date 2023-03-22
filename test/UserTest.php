<?php

use PHPUnit\Framework\TestCase;
use APP\User;

class UserTest extends TestCase
{
  public function testUserWithValidProfilePicture()
  {
    $user = new User("username", "https://example.com/profile-picture.jpg");
    $this->assertInstanceOf(User::class, $user);
  }

  public function testUserWithInvalidProfilePicture()
  {
    $this->expectException(\InvalidArgumentException::class);
    $user = new User("username", "invalid-url");
  }
}