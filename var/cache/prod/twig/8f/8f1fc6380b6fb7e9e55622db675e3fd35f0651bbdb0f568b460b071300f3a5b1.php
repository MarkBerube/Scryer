<?php

/* ::base.html.twig */
class __TwigTemplate_4db5b949dee4e44dc15af90cdfdf05124ed0b9df65b53115f656cbe7f4376819 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    </head>
    <body>
        <div id=\"sidebar\">
            ";
        // line 12
        $this->displayBlock('sidebar', $context, $blocks);
        // line 15
        echo "        </div>

        <div id=\"content\">
            ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "        </div>
    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Test Application";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            ";
        $this->loadTemplate("partials/stylesheets.html.twig", "::base.html.twig", 7)->display($context);
        // line 8
        echo "        ";
    }

    // line 12
    public function block_sidebar($context, array $blocks = array())
    {
        // line 13
        echo "                ";
        $this->loadTemplate("partials/sidebar.html.twig", "::base.html.twig", 13)->display($context);
        // line 14
        echo "            ";
    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  81 => 18,  77 => 14,  74 => 13,  71 => 12,  67 => 8,  64 => 7,  61 => 6,  55 => 5,  49 => 19,  47 => 18,  42 => 15,  40 => 12,  35 => 9,  33 => 6,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8">*/
/*         <title>{% block title %}Test Application{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             {% include 'partials/stylesheets.html.twig' %}*/
/*         {% endblock %}*/
/*     </head>*/
/*     <body>*/
/*         <div id="sidebar">*/
/*             {% block sidebar %}*/
/*                 {% include 'partials/sidebar.html.twig' %}*/
/*             {% endblock %}*/
/*         </div>*/
/* */
/*         <div id="content">*/
/*             {% block body %}{% endblock %}*/
/*         </div>*/
/*     </body>*/
/* </html>*/
