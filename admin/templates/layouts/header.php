<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php perch_pages_title(); ?> | Duchenne Triathalon 2019</title>

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

.container--page {
  padding-left: 1.5rem;
  padding-right: 1.5rem;
}
.container--page table {
    /* Remove spacing between table cells (from Normalize.css) */
    border-collapse: collapse;
    border-spacing: 0;
    empty-cells: show;
    border: 1px solid #cbcbcb;
}

.container--page table caption {
    color: #000;
    font: italic 85%/1 arial, sans-serif;
    padding: 1em 0;
    text-align: center;
}

.container--page table td,
.container--page table th {
    border-left: 1px solid #cbcbcb;/*  inner column border */
    border-width: 0 0 0 1px;
    font-size: inherit;
    margin: 0;
    overflow: visible; /*to make ths where the title is really long work*/
    padding: 0.5em 1em; /* cell padding */
}

/* Consider removing this next declaration block, as it causes problems when
there's a rowspan on the first cell. Case added to the tests. issue#432 */
.container--page table td:first-child,
.container--page table th:first-child {
    border-left-width: 0;
}

.container--page table thead {
    background-color: #e0e0e0;
    color: #000;
    text-align: left;
    vertical-align: bottom;
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