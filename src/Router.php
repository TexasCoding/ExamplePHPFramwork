<?php namespace src;

class Router
{
    protected $uri;
    protected $method;

    public $routes = [
        'GET'  => [],
        'POST' => []
    ];

    public function __construct()
    {
        $this->uri    = ($_SERVER['REQUEST_URI'] != '/') ? trim($_SERVER['REQUEST_URI'], '/') : '/';
        $this->method = $_SERVER['REQUEST_METHOD'];
    }

    /**
     * Build the GET Route
     *
     * @param mixed $path
     * @param mixed $controllerMethod
     */
    public function get($path, $controllerMethod)
    {
       return $this->routes['GET'][$path] = static::routeArray($path, $controllerMethod);
    }

    /**
     * Build the POST route
     *
     * @param mixed $path
     * @param mixed $controllerMethod
     */
    public function post($path, $controllerMethod)
    {
        return $this->routes['POST'][$path] = static::routeArray($path, $controllerMethod);
    }

    /**
     * Load the Route
     *
     */
    public function load()
    {
        require('../app/routes.php');

        if (array_key_exists($this->uri, $route->routes[$this->method])) {
            $controller_name = "App\Controllers\\".$route->routes[$this->method][$this->uri]['controller'];
            $controller = new $controller_name();
            $method = $route->routes[$this->method][$this->uri]['method'];
            return $controller->$method();
        }
        throw new \Exception('Route does not exist!');
    }

    /**
     * Setup Route Array
     *
     * @param mixed $path
     * @param mixed $controllerMethod
     * @param mixed $type
     */
    private static function routeArray($path, $controllerMethod, $type){
        $controller = explode("@", $controllerMethod);
        
        return [
            'path'       => $path,
            'controller' => $controller[0],
            'method'     => $controller[1]
        ];

    }
}
