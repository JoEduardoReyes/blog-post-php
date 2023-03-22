<?php

use PHPUnit\Framework\TestCase; // Usa la clase TestCase del paquete PHPUnit\Framework
use APP\User; // Usa la clase User del espacio de nombres APP
use APP\Author; // Usa la clase Author del espacio de nombres APP

class AuthorTest extends TestCase {
  public function testIsInstanceOfUser() {
    $author = new Author("Nombre de usuario", "http://example.com/profile.jpg", "Profesión");
    $this->assertInstanceOf(User::class, $author);
  }

  // URL válido
  public function testProfilePictureValidation() {
    $profilePicture = "https://example.com/profile.jpg";
    $author = new Author("Nombre de usuario", $profilePicture, "Profesión");
    $this->assertInstanceOf(Author::class, $author);
  }
  // URL invalido
  public function testProfilePictureInvalidation() {
    $this->expectException(InvalidArgumentException::class);
    $author = new Author("Nombre de usuario", "Valor no válido", "Profesión");
  }
}