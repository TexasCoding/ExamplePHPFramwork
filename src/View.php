<?php namespace src;

class View
{
    protected $twig;
    
    public function __construct()
    {
        $loader = new \Twig_Loader_Filesystem('../app/Views');

        $this->twig = new \Twig_Environment($loader, array(
            'cache' => '../cache/templates',
            'auto_reload' => true, // disable cache
            'autoescape' => true
        ));
    }

    /**
     * Render View:
     *
     * @param mixed $view
     * @param mixed $variables
     */
    public function render($view, $variables = [])
    {
        if (! $template = $this->twig->loadTemplate($view . '.view.twig')) {
            throw new \Twig_Error("Error Processing View", 1);
        }
        echo $template->render($variables);
    }
}
