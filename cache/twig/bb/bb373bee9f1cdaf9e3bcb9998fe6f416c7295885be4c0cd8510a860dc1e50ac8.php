<?php

/* forms/default/data.html.twig */
class __TwigTemplate_3a9465d875936b0b8922ff4dce58db68b7a10c0999e7b44880f0dead476693db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'field_label' => array($this, 'block_field_label'),
            'field_value' => array($this, 'block_field_value'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fields", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["index"] => $context["field"]) {
            // line 2
            echo "    ";
            $context["input"] = $this->getAttribute($context["field"], "input@");
            // line 3
            echo "    ";
            if (((null === (isset($context["input"]) ? $context["input"] : null)) || ((isset($context["input"]) ? $context["input"] : null) == true))) {
                // line 4
                echo "        ";
                $this->displayBlock('field', $context, $blocks);
                // line 14
                echo "    ";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 4
    public function block_field($context, array $blocks = array())
    {
        // line 5
        echo "            <div>
                ";
        // line 6
        $this->displayBlock('field_label', $context, $blocks);
        // line 9
        echo "                ";
        $this->displayBlock('field_value', $context, $blocks);
        // line 12
        echo "            </div>
        ";
    }

    // line 6
    public function block_field_label($context, array $blocks = array())
    {
        // line 7
        echo "                    <strong>";
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array());
        echo "</strong>:
                ";
    }

    // line 9
    public function block_field_value($context, array $blocks = array())
    {
        // line 10
        echo "                    ";
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('GravTwigExtension')->stringFunc($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "value", array(0 => ((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array(), "any", true, true) &&  !(null === $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())))) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())) : ((isset($context["index"]) ? $context["index"] : null)))), "method")), "html", null, true));
        echo "
                ";
    }

    public function getTemplateName()
    {
        return "forms/default/data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 10,  91 => 9,  84 => 7,  81 => 6,  76 => 12,  73 => 9,  71 => 6,  68 => 5,  65 => 4,  48 => 14,  45 => 4,  42 => 3,  39 => 2,  22 => 1,);
    }
}
/* {% for index, field in form.fields %}*/
/*     {% set input = attribute(field, "input@") %}*/
/*     {% if input is null or input == true %}*/
/*         {% block field %}*/
/*             <div>*/
/*                 {% block field_label %}*/
/*                     <strong>{{ field.label }}</strong>:*/
/*                 {% endblock %}*/
/*                 {% block field_value %}*/
/*                     {{ string(form.value(field.name ?? index))|nl2br }}*/
/*                 {% endblock %}*/
/*             </div>*/
/*         {% endblock %}*/
/*     {% endif %}*/
/* {% endfor %}*/
/* */
