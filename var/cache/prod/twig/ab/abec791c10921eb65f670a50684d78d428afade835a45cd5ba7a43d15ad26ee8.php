<?php

/* posts/index.html.twig */
class __TwigTemplate_a1498ddcedaf65885cfd4f97ebc0f9540c9c24f31cbdfa83300a86a43471dbd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "posts/index.html.twig", 1);
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
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["post_entries"]) ? $context["post_entries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 7
            echo "        ";
            echo strip_tags($this->getAttribute($context["entry"], "body", array()), "<b><i><em><s><sup><sub><strike><strong><a><p><span><div><pre><code><blockquote><br><hr><h1><h2><h3><h4><h5><h6><table><tr><td><li><ul><ol><img>");
            echo "
    \t<a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("Post_Detail", array("page" => $this->getAttribute($context["entry"], "linkName", array()))), "html", null, true);
            echo "\">Permalink</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "posts/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 8,  43 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}My cool blog posts{% endblock %}*/
/* */
/* {% block body %}*/
/*     {% for entry in post_entries %}*/
/*         {{ entry.body | striptags('<b><i><em><s><sup><sub><strike><strong><a><p><span><div><pre><code><blockquote><br><hr><h1><h2><h3><h4><h5><h6><table><tr><td><li><ul><ol><img>') | raw  }}*/
/*     	<a href="{{ url('Post_Detail', {'page' : entry.linkName}) }}">Permalink</a>*/
/*     {% endfor %}*/
/* {% endblock %}*/
