<?php

/* error.html.twig */
class __TwigTemplate_8d19f26362c607f37c15e06ffdc6bf54bc93a9c6b355934f9f5bbff8d9d39bb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
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
        echo "<section class=\"intro text-center section-padding\" id=\"introduction\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-8 col-md-offset-2 wp1\">
        <h1 class=\"arrow\">Error ";
        // line 7
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "http_response_code", array());
        echo "</h1>
        ";
        // line 8
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
      </div>
    </div>
  </div>
</section>

";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  37 => 7,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* {% block content %}*/
/* <section class="intro text-center section-padding" id="introduction">*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="col-md-8 col-md-offset-2 wp1">*/
/*         <h1 class="arrow">Error {{ page.header.http_response_code }}</h1>*/
/*         {{ page.content }}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </section>*/
/* */
/* {% endblock %}*/
/* */
