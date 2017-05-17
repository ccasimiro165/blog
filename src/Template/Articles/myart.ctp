<?php
/**
  * @var \App\View\AppView $this
  */
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<div class="contain-fluid">
  <div col-sm-12>
    <div>
      <head>
        <h1>Articles </h1>
      </head>
      <nav class="navbar navbar-default" mavbar-fixed-top>
        <div class="container-fluid">
        <ul class="nav navbar-nav">
          <li class="active"><a> Articles</a> </li>
          <li> <a href="#">My Articles</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
      </nav>
      <pre>
        <div  class="col-md-4" >
        <?php foreach ($articles as $article): ?>
            <h1><?= $article->title  ?></h1>

                <img src="/img/Desert.jpg" class="img-thumbnail" alt="Picture of Deser" style="width:100%">
            <p>

      <?php endforeach; ?>
      </div>
    </pre>
  </div>
  </div>


</div>
