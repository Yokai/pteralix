<?php

/* formdata.html.twig */
class __TwigTemplate_cd77c00209647bda1d992ab7801328d53e139140641023b7558795da9d5d88a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "formdata.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<section id=\"about\">
    <div class=\"row\">
        <div class=\"nine columns main-col\">
            <h2>";
        // line 6
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array());
        echo "</h2>
            ";
        // line 7
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "

            ";
        // line 9
        $this->loadTemplate("forms/data.html.twig", "formdata.html.twig", 9)->display($context);
        echo " <br />
            Back to <a href=\"";
        // line 10
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "\">homepage</a>.
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "formdata.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 10,  45 => 9,  40 => 7,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* {% block content %}*/
/* <section id="about">*/
/*     <div class="row">*/
/*         <div class="nine columns main-col">*/
/*             <h2>{{ form.message }}</h2>*/
/*             {{ content }}*/
/* */
/*             {% include "forms/data.html.twig" %} <br />*/
/*             Back to <a href="{{ base_url_absolute }}">homepage</a>.*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* {% endblock %}*/
/* */
