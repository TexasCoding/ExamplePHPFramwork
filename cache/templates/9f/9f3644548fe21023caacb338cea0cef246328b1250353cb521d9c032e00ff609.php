<?php

/* home/index.html.twig */
class __TwigTemplate_699e51db4f0ef430b1e2e1e58117e9ce91a1d796d23bb6248e220308a2d28c1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/base.html.twig", "home/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Index";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style type=\"text/css\">
        .important { color: #336699; }
    </style>
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "    <h1>Index</h1>
    <p class=\"important\">
        Welcome to my awesome homepage.
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 15
            echo "            <p>";
            echo twig_escape_filter($this->env, $context["user"], "html", null, true);
            echo "</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </p>
";
    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 17,  61 => 15,  57 => 14,  52 => 11,  49 => 10,  39 => 5,  36 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends "layouts/base.html.twig" %}*/
/* */
/* {% block title %}Index{% endblock %}*/
/* {% block head %}*/
/*     {{ parent() }}*/
/*     <style type="text/css">*/
/*         .important { color: #336699; }*/
/*     </style>*/
/* {% endblock %}*/
/* {% block content %}*/
/*     <h1>Index</h1>*/
/*     <p class="important">*/
/*         Welcome to my awesome homepage.*/
/*         {% for user in users %}*/
/*             <p>{{user}}</p>*/
/*         {% endfor %}*/
/*     </p>*/
/* {% endblock %}*/
/* */
