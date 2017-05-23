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

      <nav class="navbar navbar-default navbar-fixed-top header-nav navbar-scroll-collapsed">
        <div class="container-fluid">
          <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
               </button>
              <a class="navbar-brand" href="#"><h4>Local.Blog</h4></a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav text-center">
              <li class="active"><a><h4>Articles<h4></a> </li>
              <li> <a href="index"><h4>My Articles</h4></a></li>
              <li> <a href="index"><h4>Top 10</h4></a></li>
              <li> <a href="index"><h4>Historys</h4></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
            <li><a href="singup"><h4><span class="glyphicon glyphicon-user"></span>Sign Up</h4></a></li>
            <li><a href="login"><h4><span class="glyphicon glyphicon-log-in"></span> Login</h4></a></li>
          </ul>

        </div>
      </nav>
      <div>
        <h1>  </h1>
      </div>

      <pre>
        <div  class="col-md-4" >
        <?php foreach ($articles as $article): ?>
            <h1><?= $article->title  ?></h1>
                <div>
                    <img src="/img/Desert.jpg" class="img-responsive" alt="Picture of Deser" style="width:100%">
                    <h3><?= $this->Html->link(__('Edit'), ['action' => 'edit', $article->id]) ?></h3>
                </div>
            

            <?php endforeach; ?>
        </div>
      </pre>
    </div>

  </div>


</div>
