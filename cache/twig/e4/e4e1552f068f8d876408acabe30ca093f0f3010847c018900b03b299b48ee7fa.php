<?php

/* forms/default/data.txt.twig */
class __TwigTemplate_a40643ed45d24682aae4a8b035e5080c216284ffe1ff49af4a9bb2b815b24ca4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fields", array()));
        foreach ($context['_seq'] as $context["index"] => $context["field"]) {
            // line 2
            $context["input"] = $this->getAttribute($context["field"], "input@");
            // line 3
            if (((null === (isset($context["input"]) ? $context["input"] : null)) || ((isset($context["input"]) ? $context["input"] : null) == true))) {
                // line 4
                $context["value"] = $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "value", array(0 => ((($this->getAttribute($context["field"], "name", array(), "any", true, true) &&  !(null === $this->getAttribute($context["field"], "name", array())))) ? ($this->getAttribute($context["field"], "name", array())) : ($context["index"]))), "method");
                // line 5
                echo ((($this->getAttribute($context["field"], "name", array(), "any", true, true) &&  !(null === $this->getAttribute($context["field"], "name", array())))) ? ($this->getAttribute($context["field"], "name", array())) : ($context["index"]));
                echo ": ";
                echo twig_replace_filter($this->env->getExtension('GravTwigExtension')->stringFunc(nl2br(twig_escape_filter($this->env, ((twig_test_iterable((isset($context["value"]) ? $context["value"] : null))) ? (twig_jsonencode_filter((isset($context["value"]) ? $context["value"] : null))) : ((isset($context["value"]) ? $context["value"] : null))), "html", null, true))), array("
" => " ", "" => " "));
                echo "
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "forms/default/data.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  27 => 4,  25 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% for index, field in form.fields %}*/
/* {% set input = attribute(field, "input@") %}*/
/* {% if input is null or input == true %}*/
/* {% set value = form.value(field.name ?? index) %}*/
/* {{ field.name ?? index }}: {{ string((value is iterable ? value|json_encode : value)|nl2br)|replace({"\n":' ', "\r":' '}) }}*/
/* {% endif %}*/
/* {% endfor %}*/
/* */
