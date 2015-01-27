<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php if ($this->themeObject->isDevEnvironment()): // Dev files ?>
      <link href="<?php echo $view->getThemePath(); ?>/css/dev/style.css" rel="stylesheet" type="text/css" media="all">
      <link href="<?php echo $view->getThemePath(); ?>/css/dev/lib/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <?php else: // Compressed files ?>
      <link href="<?php echo $view->getThemePath(); ?>/css/build/style.min.css" rel="stylesheet" type="text/css" media="all">
    <?php endif; ?>
    <?php Loader::element('header_required'); ?>
  </head>
  <body>
    <div class="<?=$c->getPageWrapperClass()?>"> <!-- start page wrapper classes -->
      <header>
              <nav class="navbar navbar-default">
                <div class="container-fluid">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <?php $a = new GlobalArea('Nav brand'); $a->display(); ?>
                  </div>

                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="header-navbar">
                    <?php $a = new GlobalArea('Nav menu'); $a->display(); ?>
                  </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
              </nav>
      </header>
