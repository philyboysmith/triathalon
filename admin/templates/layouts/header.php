<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php perch_pages_title(); ?> | Duchenne Dash 2018</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <!-- google fonts -->
    <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
    <!-- site style -->
    <link href="css/outline.min.css" media="all" rel="stylesheet" type="text/css" />
    <style>

      .hero {position: relative;}
.hero-text {
  position: absolute;
  right: 0;
  top: 0;
  bottom: 0;
  z-index: 10;
  background: rgb(0, 186, 242, 0.9);
  padding: 2rem;
  line-height: 1;
  color: white;
  display: flex;
  flex-direction: column;
  justify-content: center;
  max-width: 570px;
}
@media (min-width: 768px) {
  .hero-text {
    left: 50%;
  }
}
      </style>
  </head>
  <body>
    <div id="page">
      <header class="main-header">
        <div class="container  container--header">
          <div class="l-logo">
            <a href="/""><img src="/img/logo.svg" alt="Duchenne Triathalon" class="logo"/></a>
          </div>
          <div class="l-nav">
            <?php perch_pages_navigation(); ?>
          </div>
        </div>
      </header>