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
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Post Challenge</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/a11ab70f88.js" crossorigin="anonymous"></script>
</head>

<body class="bg-slate-900 text-white min-w-phone min-h-phone w-screen max-w-fit px-10% py-5%">
  <div id="body-container" class="bg-slate-800 w-full h-full p-10 rounded-3xl">
    <header class="mb-12">
      <h1 class="text-center text-3xl font-bold mb-6"><?= $blog_post->getTitle(); ?></h1>
      <div id="category" class="text-start text-xl font-thin italic my-8"><i class="fa-solid fa-tag"></i>
        <?= $blog_post->getCategory() ?></div>
    </header>
    <hr>
    <main>
      <section id="contentContainer" class="my-12">
        <div id="content">
          <?= $blog_post->getContent(); ?>
        </div>
      </section>
      <hr>
      <section id="author" class="my-12">
        <p id="authorTittle" class="text-lg font-semibold my-4">Author</p>
        <div id="authorContainer" class="flex h-100px">
          <div id="authorProfile" class="rounded-full">
            <img src=<?= $blog_post->getAuthorProfilePicture()?> alt="profile" class="rounded-full w-100px">
          </div>
          <div id="authorInfo" class="text-2xl ml-6 flex flex-col justify-around">
            <div class="authorName"><?= $blog_post->getAuthorName(); ?></div>
            <div class="authorProfesion"><?= $blog_post->getProfession(); ?></div>
          </div>
        </div>
      </section>
    </main>
    <hr>
    <footer>
      <p><q>Nunca Pares de Aprender</q> - I 💚 Platzi</p>
    </footer>
  </div>
</body>

</html>