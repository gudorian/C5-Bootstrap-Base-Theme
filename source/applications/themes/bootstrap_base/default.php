<?php $view->inc('elements/header.php'); ?>

<?php
    $a = new Area('Content');
    if (($a->getTotalBlocksInArea($c) > 0) || ($c->isEditMode())) {
?>
  <section class="container">
    <div class="row">
      <div class="col-md-12">
        <?php $a->display($c); ?>
      </div>
    </div>
  </section>
<?php } ?>

<?php $view->inc('elements/footer.php'); ?>
