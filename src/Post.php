<?php

namespace APP;

class Post {

  private $title;
  private $content;
  private $authorName;
  private $authorProfession;
  private $authorProfilePicture;
  private $category;

  public function __construct($title, $content, $authorName, $authorProfilePicture, $authorProfession, $category) {
    $this->title = $title;
    $this->content =$content;
    $this->author = new Author($authorName, $authorProfilePicture, $authorProfession);

    if (in_array($category, Category::$listOfCategories)) {
        $this->category =$category;
    } else {
        $this->category ="Categoría inválida";
    }
  }
  public function getTitle() {
    return $this->title;
  }
  public function getAuthorName(){
    return $this->author->getUsername();
  }
  public function getProfession() {
    return $this->author->getProfession();
  }
  public function getAuthorProfilePicture() {
    return $this->author->getProfilePicture();
  }
  public function getContent() {
    return $this->content;
  }
  public function getCategory() {
    if ($this->category == "Categoría inválida")
      return "";
    else
      return $this->category;
  }
}