<?php namespace src;

class Router
{
    /**
     * Set the approve route request types
     *
     * @var mixed
     */
    public $routes = [
        'GET'    => [],
        'POST'   => [],
        'PUT'    => [],
        'DELETE' => []
    ];

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
     * Setup Route Array
     *
     * @param mixed $path
     * @param mixed $controllerMethod
     * @param mixed $type
     */
    private static function routeArray($path, $controllerMethod){
        $controller = explode("@", $controllerMethod);

        return [
            'path'       => $path,
            'controller' => $controller[0],
            'method'     => $controller[1]
        ];

    }

    /**
     * Load route file and setup controller
     *
     * @param mixed $uri
     * @param mixed $type
     */
    public function load($uri, $type)
    {
        require('../app/routes.php');

        if($current = $route->routes[$type][static::cleanUri($uri)]){
           return static::display($current);
        }

        throw new \Exception('Route does not exist!');
    }

    /**
     * Display the correct controller and method
     *
     * @param mixed $route
     */
    private static function display($route)
    {
        $controller_name = "App\Controllers\\" . $route['controller'];
        $controller = new $controller_name();
        $method = $route['method'];

        return $controller->$method();
    }

    /**
     * Clean and setup the correct uri
     *
     * @param mixed $uri
     */
    private static function cleanUri($uri)
    {
        return ($uri != '/') ? trim($uri, '/') : '/';
    }

}
