<?php

/* posts/notfound.html.twig */
class __TwigTemplate_eca86a721ccc63647dd469842a4f916f9f7785285130330a0e6576304205379e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "posts/notfound.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "404";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<p>Sorry.</p>
<a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getUrl("Post");
        echo "\">Go back</a>
<p>404 Not Found: ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "posts/notfound.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  41 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}404{% endblock %}*/
/* */
/* {% block body %}*/
/* <p>Sorry.</p>*/
/* <a href="{{ url('Post') }}">Go back</a>*/
/* <p>404 Not Found: {{ page }}</p>*/
/* {% endblock %}*/
