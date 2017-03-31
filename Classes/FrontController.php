<?php
    // namespace LibraryController;

    class FrontController implements FrontControllerInterface
    {
        const DEFAULT_CONTROLLER = "ProductsController";
        const DEFAULT_ACTION     = "index";

        protected $controller    = self::DEFAULT_CONTROLLER;
        protected $action        = self::DEFAULT_ACTION;
        protected $params        = array();
        protected $basePath      = "/";

        public function __construct(array $options = array()) {
            if (empty($options)) {
               $this->parseUri();
            }

            else {

                if (isset($options["controller"])) {
                    $this->setController($options["controller"]);
                }
                // if (isset($options["action"])) {
                //     $this->setAction($options["action"]);
                // }

                if (isset($options["params"])) {
                    $this->setParams($options["params"]);
                }
            }
        }

        protected function parseUri() {

            $path = trim(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH), "/");
            // $path = preg_replace('/[^a-zA-Z0-9]//', "", $path);

            if (strpos($path, $this->basePath) === 0) {
                $path = substr($path, strlen($this->basePath));
            }

            @list($controller, $params) = explode("/", $path, 2);


            if (isset($controller)) {
                error_log("################ Controller is {$controller} ###### ");
                $this->setController($controller);
            }
            // if (isset($action)) {
            //     error_log("################ Action is {$action} ###### ");
            //     $this->setAction($action);
            // }
            if (isset($params)) {
                error_log("################ Params are {$params} ###### ");
                $this->setAction('show');
                $this->setParams(explode("/", $params));
            }
        }

        public function setController($controller) {
            if ( empty($controller) ) {
                return $this;
            }

            $controller = ucfirst(strtolower($controller)) . "Controller";
            if (!class_exists($controller)) {
              header("Location: /");
              exit();
                // throw new InvalidArgumentException(
                //     "The action controller '$controller' has not been defined.");
            }
            $this->controller = $controller;
            return $this;
        }

        public function setAction($action) {
            $reflector = new ReflectionClass($this->controller);
            if (!$reflector->hasMethod($action)) {
                throw new InvalidArgumentException(
                    "The controller action '$action' has been not defined.");
            }
            $this->action = $action;
            return $this;
        }

        public function setParams(array $params) {
            $this->params = $params;
            return $this;
        }

        public function getView(){
            return "Views/".str_replace("Controller", "", $this->controller)."/".$this->action.".php";
        }

        public function run() {
            call_user_func_array(array(new $this->controller, $this->action), $this->params);
        }
    }
?>
