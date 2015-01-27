<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

      <footer class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <?php $a = new GlobalArea('Footer col 1'); $a->display(); ?>
          </div>
          <div class="col-md-3 col-sm-6">
            <?php $a = new GlobalArea('Footer col 2'); $a->display(); ?>
          </div>
          <div class="col-md-3 col-sm-6">
            <?php $a = new GlobalArea('Footer col 3'); $a->display(); ?>
          </div>
          <div class="col-md-3 col-sm-6">
            <?php $a = new GlobalArea('Footer col 4'); $a->display(); ?>
          </div>
        </div>
      </footer>

    </div> <!-- end page wrapper classes -->

    <?php if ($this->themeObject->isDevEnvironment()): // Dev files ?>
      <script type="text/javascript" src="<?php echo $view->getThemePath(); ?>/js/dev/scripts.js"></script>
      <script type="text/javascript" src="<?php echo $view->getThemePath(); ?>/js/dev/lib/bootstrap.min.js"></script>
    <?php else: // Compressed files ?>
      <script type="text/javascript" src="<?php echo $view->getThemePath(); ?>/js/build/scripts.min.js"></script>
    <?php endif; ?>
    <?php Loader::element('footer_required'); ?>
  </body>
</html>
