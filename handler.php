<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="Favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="Favicon/favicon-16x16.png">
  <link rel="manifest" href="Favicon/site.webmanifest">
  <title>Welcome Page</title>
</head>

<body>
  <!-- Uses a header that scrolls with the text, rather than staying
  locked at the top -->
  <div class="mdl-layout mdl-js-layout">
    <header class="mdl-layout__header mdl-layout__header--scroll">
      <div class="mdl-layout__header-row">
        <!-- Title -->
        <span class="mdl-layout-title">Title</span>
        <!-- Add spacer, to align navigation to the right -->
        <div class="mdl-layout-spacer"></div>
        <!-- Navigation -->
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="">Link</a>
          <a class="mdl-navigation__link" href="">Link</a>
          <a class="mdl-navigation__link" href="">Link</a>
          <a class="mdl-navigation__link" href="https://sturdy-palm-tree-v6q6prwj47gjfpwvw-8000.app.github.dev/">Back</a>
        </nav>
      </div>
    </header>
    <div class="mdl-layout__drawer">
      <span class="mdl-layout-title">Title</span>
      <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="https://sturdy-palm-tree-v6q6prwj47gjfpwvw-8000.app.github.dev/">Back</a>
      </nav>
    </div>
    <main class="mdl-layout__content">
      <div class="page-content"><!-- Your content goes here --></div>
      <?php
      $userName = "";
      if (isset($_POST['userName'])) {
        $userName = $_POST['userName'];
      }
      echo "<h1>Welcome " . $userName . "!</h1>\n";
      ?>
    </main>
  </div>



</body>

</html>