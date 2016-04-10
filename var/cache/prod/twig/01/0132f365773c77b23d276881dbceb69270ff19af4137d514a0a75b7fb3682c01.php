<?php

/* partials/sidebar.html.twig */
class __TwigTemplate_51291707193b19fa19dc781e16166362c8597189d702a714509e756f325d5e90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('sidebar', $context, $blocks);
        // line 6
        echo "\t";
    }

    // line 1
    public function block_sidebar($context, array $blocks = array())
    {
        // line 2
        echo "    <ul>
        <li><a href=\"/\">Home</a></li>
        <li><a href=\"/blog\">Blog</a></li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 2,  26 => 1,  22 => 6,  20 => 1,);
    }
}
/* {% block sidebar %}*/
/*     <ul>*/
/*         <li><a href="/">Home</a></li>*/
/*         <li><a href="/blog">Blog</a></li>*/
/*     </ul>*/
/* {% endblock %}	*/
