<?php

/* forms/default/form.html.twig */
class __TwigTemplate_cc5b4c704ac79e96257d2cf50d3dfa813b9c3d9f2cdb3b266a5ddde1a508a0de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_classes' => array($this, 'block_form_classes'),
            'button_classes' => array($this, 'block_button_classes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array())) {
            echo "<div class=\"alert notices ";
            echo (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message_color", array())) ? ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message_color", array())) : ("green"));
            echo "\"><p>";
            echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array());
            echo "</p></div>";
        }
        // line 2
        $context["scope"] = (((isset($context["scope"]) ? $context["scope"] : null)) ? ((isset($context["scope"]) ? $context["scope"] : null)) : ("data."));
        // line 3
        $context["multipart"] = "";
        // line 4
        $context["method"] = _twig_default_filter(twig_upper_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "method", array())), "POST");
        // line 5
        echo "
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 7
            echo "    ";
            if ((((isset($context["method"]) ? $context["method"] : null) == "POST") && ($this->getAttribute($context["field"], "type", array()) == "file"))) {
                // line 8
                echo "        ";
                $context["multipart"] = " enctype=\"multipart/form-data\"";
                // line 9
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
";
        // line 12
        $context["action"] = (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "action", array())) ? (((isset($context["base_url"]) ? $context["base_url"] : null) . $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "action", array()))) : ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array())));
        // line 13
        if (((isset($context["action"]) ? $context["action"] : null) == (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null))) {
            // line 14
            echo "    ";
            $context["action"] = (((isset($context["base_url_relative"]) ? $context["base_url_relative"] : null) . "/") . $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slug", array()));
        }
        // line 16
        echo "
<form name=\"";
        // line 17
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array());
        echo "\"
      action=\"";
        // line 18
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\"
      method=\"";
        // line 19
        echo (isset($context["method"]) ? $context["method"] : null);
        echo "\"";
        echo (isset($context["multipart"]) ? $context["multipart"] : null);
        echo "
      ";
        // line 20
        $this->displayBlock('form_classes', $context, $blocks);
        // line 23
        echo ">

";
        // line 25
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
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 26
            echo "    ";
            $context["value"] = $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "value", array(0 => $this->getAttribute($context["field"], "name", array())), "method");
            // line 27
            echo "        ";
            try {
                $this->loadTemplate((((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), "forms/default/form.html.twig", 27)->display($context);
            } catch (Twig_Error_Loader $e) {
                // ignore missing template
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
\t<div class=\"buttons\">
\t";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "buttons", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 32
            echo "\t    <button
            ";
            // line 33
            $this->displayBlock('button_classes', $context, $blocks);
            // line 36
            echo "            type=\"";
            echo (($this->getAttribute($context["button"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "type", array()), "submit")) : ("submit"));
            echo "\"
        >
            ";
            // line 38
            echo _twig_default_filter($this->env->getExtension('GravTwigExtension')->translate($this->getAttribute($context["button"], "value", array())), "Submit");
            echo "
        </button>
\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "\t</div>

  ";
        // line 43
        echo $this->env->getExtension('GravTwigExtension')->nonceFieldFunc("form", "form-nonce");
        echo "
</form>
";
    }

    // line 20
    public function block_form_classes($context, array $blocks = array())
    {
        // line 21
        echo "      ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classes", array())) {
            echo "class=\"";
            echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classes", array());
            echo "\"";
        }
        // line 22
        echo "      ";
    }

    // line 33
    public function block_button_classes($context, array $blocks = array())
    {
        // line 34
        echo "            class=\"";
        echo (($this->getAttribute((isset($context["button"]) ? $context["button"] : null), "classes", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["button"]) ? $context["button"] : null), "classes", array()), "button")) : ("button"));
        echo "\"
            ";
    }

    public function getTemplateName()
    {
        return "forms/default/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 34,  203 => 33,  199 => 22,  192 => 21,  189 => 20,  182 => 43,  178 => 41,  161 => 38,  155 => 36,  153 => 33,  150 => 32,  133 => 31,  129 => 29,  109 => 27,  106 => 26,  89 => 25,  85 => 23,  83 => 20,  77 => 19,  73 => 18,  69 => 17,  66 => 16,  62 => 14,  60 => 13,  58 => 12,  55 => 11,  48 => 9,  45 => 8,  42 => 7,  38 => 6,  35 => 5,  33 => 4,  31 => 3,  29 => 2,  21 => 1,);
    }
}
/* {% if form.message %}<div class="alert notices {{ form.message_color ?: 'green' }}"><p>{{ form.message }}</p></div>{% endif %}*/
/* {% set scope = scope ?: 'data.' %}*/
/* {% set multipart = '' %}*/
/* {% set method = form.method|upper|default('POST') %}*/
/* */
/* {% for field in form.fields %}*/
/*     {% if (method == 'POST' and field.type == 'file') %}*/
/*         {% set multipart = ' enctype="multipart/form-data"' %}*/
/*     {% endif %}*/
/* {% endfor %}*/
/* */
/* {% set action = form.action ? base_url ~ form.action : page.url %}*/
/* {% if (action == base_url_relative) %}*/
/*     {% set action = base_url_relative ~ '/' ~ page.slug %}*/
/* {% endif %}*/
/* */
/* <form name="{{ form.name }}"*/
/*       action="{{ action }}"*/
/*       method="{{ method }}"{{ multipart }}*/
/*       {% block form_classes %}*/
/*       {% if form.classes %}class="{{ form.classes }}"{% endif %}*/
/*       {% endblock %}*/
/* >*/
/* */
/* {% for field in form.fields %}*/
/*     {% set value = form.value(field.name) %}*/
/*         {% include "forms/fields/#{field.type}/#{field.type}.html.twig" ignore missing %}*/
/* {% endfor %}*/
/* */
/* 	<div class="buttons">*/
/* 	{% for button in form.buttons %}*/
/* 	    <button*/
/*             {% block button_classes %}*/
/*             class="{{ button.classes|default('button') }}"*/
/*             {% endblock %}*/
/*             type="{{ button.type|default('submit') }}"*/
/*         >*/
/*             {{ button.value|t|default('Submit') }}*/
/*         </button>*/
/* 	{% endfor %}*/
/* 	</div>*/
/* */
/*   {{ nonce_field('form', 'form-nonce') }}*/
/* </form>*/
/* */
