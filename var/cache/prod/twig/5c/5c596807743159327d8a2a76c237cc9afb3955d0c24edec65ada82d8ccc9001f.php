<?php

/* :posts:detail.html.twig */
class __TwigTemplate_0e7342b96c831f753a3342a7bdda22a3f43ce78e0fa0ccaefc30387b3491000d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":posts:detail.html.twig", 1);
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
        echo "My cool blog posts";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\t";
        echo strip_tags((isset($context["fileText"]) ? $context["fileText"] : null), "<b><i><em><s><sup><sub><strike><strong><a><p><span><div><pre><code><blockquote><br><hr><h1><h2><h3><h4><h5><h6><table><tr><td><li><ul><ol><img>");
        echo "
\t<a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getUrl("Post");
        echo "\">Go back</a>

";
    }

    public function getTemplateName()
    {
        return ":posts:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}My cool blog posts{% endblock %}*/
/* */
/* {% block body %}*/
/* 	{{ fileText | striptags('<b><i><em><s><sup><sub><strike><strong><a><p><span><div><pre><code><blockquote><br><hr><h1><h2><h3><h4><h5><h6><table><tr><td><li><ul><ol><img>') | raw  }}*/
/* 	<a href="{{ url('Post') }}">Go back</a>*/
/* */
/* {% endblock %}*/
