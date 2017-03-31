<?php
  require_once("Autoloader.php");
    // namespace LibraryController;

    class ProductsController implements ProductsControllerInterface
    {
         public function index() {

        }

         public function show($params) {

          $productData = yaml_parse_file('products.yml');
          $GLOBALS['Product'] = $productData[$params];
          if (empty($GLOBALS['Product'])) {
              header("Location: /");
              exit();
            }
        }
    }
?>
