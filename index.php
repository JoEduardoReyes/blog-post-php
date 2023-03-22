<?php

require_once __DIR__ . '/vendor/autoload.php';

use APP\User;
use APP\Author;
use APP\Post;
use APP\Category;

$blog_post = new post(
  "Cómo la IA nos puede ayudar en nuestro día a día",
  "<h2>Asistentes virtuales</h2>
      <p>Los asistentes virtuales como Siri, Google Assistant o Alexa, son capaces de realizar una gran variedad de tareas, desde buscar información en línea hasta controlar nuestros dispositivos domésticos inteligentes. Estos asistentes pueden ser de gran ayuda para quienes tienen dificultades para realizar tareas físicas o para aquellos que necesitan ayuda para recordar cosas.</p>
  <h2>Automatización</h2>
      <p>La IA también puede automatizar tareas repetitivas, ahorrándonos tiempo y esfuerzo. Por ejemplo, la IA puede programarse para responder automáticamente a correos electrónicos de ciertos remitentes o para clasificar automáticamente documentos y archivos.</p>
  <h2>Personalización</h2>
      <p>La IA también puede ayudarnos a personalizar nuestras experiencias de consumo. Por ejemplo, los algoritmos de recomendación de Amazon o Netflix pueden sugerirnos productos o programas que sean de nuestro interés, y los motores de búsqueda de Google pueden personalizar los resultados de búsqueda en función de nuestras consultas anteriores.</p>",
  "Eduardo Reyes",
  "https://pbs.twimg.com/profile_images/1344141081332613127/IZH0mVx8_400x400.jpg",
  "Desarrrollador",
  "Inteligencia artificial"
);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Post Challenge</title>
</head>

<body>
  <header>
    <h1><?= $blog_post->getTitle(); ?></h1>
    <div class="category"></div>
  </header>
  <main>
    <section class="author">
      <div class="authorProfile">
        <img src=<?= $blog_post->getAuthorProfilePicture()?> alt="profile">
      </div>
      <div class="authorName"><?= $blog_post->getAuthorName(); ?></div>
      <div class="authorProfesion"><?= $blog_post->getProfession(); ?></div>
    </section>
    <section class="contentContainer">
      <div class="content">
        <?= $blog_post->getContent(); ?>
      </div>
    </section>
  </main>
</body>

</html>