<?php
  require_once("Classes/Autoloader.php");

  $frontController = new FrontController();
  $frontController->run();

?>

<?php include("layout/header.php") ?>
<?php include( $frontController->getView() ) ?>
<?php include("layout/footer.php") ?>
