<?php

use PHPUnit\Framework\TestCase; // Usa la clase TestCase del paquete PHPUnit\Framework
use APP\User; // Usa la clase User del espacio de nombres APP
use APP\Author; // Usa la clase Author del espacio de nombres APP
use APP\Post; // Usa la clase Post del espacio de nombres APP
use APP\Category; // Usa la clase Category del espacio de nombres APP


class PostTest extends TestCase {
  public function testGetTitle() {
    $post = new APP\Post("Título de ejemplo", "Contenido de ejemplo", "Autor de ejemplo", "https://example.com/profile-picture.jpg", "Profesión de ejemplo", "Categoría de ejemplo");
    $this->assertEquals("Título de ejemplo", $post->getTitle());
  }
  public function testAuthor() {
    $post = new APP\Post("Título de ejemplo", "Contenido de ejemplo", "Autor de ejemplo", "https://example.com/profile-picture.jpg", "Profesión de ejemplo", "Categoría de ejemplo");
    $this->assertEquals("Autor de ejemplo", $post->getAuthorName());
    $this->assertEquals("Profesión de ejemplo", $post->getProfession());
    $this->assertEquals("https://example.com/profile-picture.jpg", $post->getAuthorProfilePicture());
  }
}

// <?php

// use PHPUnit\Framework\TestCase;

// class PostTest extends TestCase {

//     public function testGetTitle() {
//         $post = new APP\Post("Título de ejemplo", "Contenido de ejemplo", "Autor de ejemplo", "Profesión de ejemplo", "https://example.com/profile-picture.jpg", "Categoría de ejemplo");
//         $this->assertEquals("Título de ejemplo", $post->getTitle());
//     }

//     public function testGetAuthorName() {
//         $post = new APP\Post("Título de ejemplo", "Contenido de ejemplo", "Autor de ejemplo", "Profesión de ejemplo", "https://example.com/profile-picture.jpg", "Categoría de ejemplo");
//         $this->assertEquals("Autor de ejemplo", $post->getAuthorName());
//     }

//     public function testGetProfession() {
//         $post = new APP\Post("Título de ejemplo", "Contenido de ejemplo", "Autor de ejemplo", "Profesión de ejemplo", "https://example.com/profile-picture.jpg", "Categoría de ejemplo");
//         $this->assertEquals("Profesión de ejemplo", $post->getProfession());
//     }

//     public function testAuthorProfilePicture() {
//         $post = new APP\Post("Título de ejemplo", "Contenido de ejemplo", "Autor de ejemplo", "Profesión de ejemplo", "https://example.com/profile-picture.jpg", "Categoría de ejemplo");
//         $this->assertEquals("https://example.com/profile-picture.jpg", $post->authorProfilePicture());
//     }

//     public function testGetContent() {
//         $post = new APP\Post("Título de ejemplo", "Contenido de ejemplo", "Autor de ejemplo", "Profesión de ejemplo", "https://example.com/profile-picture.jpg", "Categoría de ejemplo");
//         $this->assertEquals("Contenido de ejemplo", $post->getContent());
//     }

//     public function testGetCategory() {
//         $post = new APP\Post("Título de ejemplo", "Contenido de ejemplo", "Autor de ejemplo", "Profesión de ejemplo", "https://example.com/profile-picture.jpg", "Categoría de ejemplo");
//         $this->assertEquals("Categoría de ejemplo", $post->getCategory());
//     }

//     public function testInvalidCategory() {
//         $post = new APP\Post("Título de ejemplo", "Contenido de ejemplo", "Autor de ejemplo", "Profesión de ejemplo", "https://example.com/profile-picture.jpg", "Categoría inválida");
//         $this->assertEquals("", $post->getCategory());
//     }

// }