<?php

/* forms/default/field.html.twig */
class __TwigTemplate_f963c3a26113abc4bb417ca55c6b2e46dd9d6aeeb68a702e64e4aba8d393537a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'contents' => array($this, 'block_contents'),
            'label' => array($this, 'block_label'),
            'global_attributes' => array($this, 'block_global_attributes'),
            'group' => array($this, 'block_group'),
            'input' => array($this, 'block_input'),
            'prepend' => array($this, 'block_prepend'),
            'input_attributes' => array($this, 'block_input_attributes'),
            'append' => array($this, 'block_append'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["originalValue"] = ((array_key_exists("originalValue", $context)) ? ((isset($context["originalValue"]) ? $context["originalValue"] : null)) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 2
        $context["toggleableChecked"] = ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "toggleable", array()) && ( !(null === (isset($context["originalValue"]) ? $context["originalValue"] : null)) &&  !twig_test_empty((isset($context["originalValue"]) ? $context["originalValue"] : null))));
        // line 3
        $context["isDisabledToggleable"] = ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "toggleable", array()) &&  !(isset($context["toggleableChecked"]) ? $context["toggleableChecked"] : null));
        // line 4
        $context["value"] = (((is_object((isset($context["value"]) ? $context["value"] : null)) || (null === (isset($context["value"]) ? $context["value"] : null)))) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('field', $context, $blocks);
    }

    public function block_field($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"form-field ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "outerclasses", array(), "any", true, true)) {
            echo " ";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "outerclasses", array());
        }
        echo "\">
        ";
        // line 8
        $this->displayBlock('contents', $context, $blocks);
        // line 64
        echo "    </div>
";
    }

    // line 8
    public function block_contents($context, array $blocks = array())
    {
        // line 9
        echo "            <div class=\"form-label\">
                <label class=\"inline\" ";
        // line 10
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array(), "any", true, true)) {
            echo "for=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array()));
            echo "\" ";
        }
        echo " >
                ";
        // line 11
        $this->displayBlock('label', $context, $blocks);
        // line 19
        echo "                </label>
            </div>
            <div class=\"form-data\"
                ";
        // line 22
        $this->displayBlock('global_attributes', $context, $blocks);
        // line 27
        echo "            >
                ";
        // line 28
        $this->displayBlock('group', $context, $blocks);
        // line 57
        echo "                ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "description", array())) {
            // line 58
            echo "                    <div class=\"form-extra-wrapper ";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "size", array());
            echo " ";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "wrapper_classes", array());
            echo "\">
                        <span class=\"form-description\">";
            // line 59
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "description", array());
            echo "</span>
                    </div>
                ";
        }
        // line 62
        echo "            </div>
        ";
    }

    // line 11
    public function block_label($context, array $blocks = array())
    {
        // line 12
        echo "                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "help", array())) {
            // line 13
            echo "                    <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"";
            echo $this->env->getExtension('GravTwigExtension')->translate(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "help", array())));
            echo "\">";
            echo $this->env->getExtension('GravTwigExtension')->translate((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()), twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())))) : (twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())))));
            echo "</span>
                    ";
        } else {
            // line 15
            echo "                    ";
            echo $this->env->getExtension('GravTwigExtension')->translate((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()), twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())))) : (twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())))));
            echo "
                    ";
        }
        // line 17
        echo "                    ";
        echo ((twig_in_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) ? ("<span class=\"required\">*</span>") : (""));
        echo "
                ";
    }

    // line 22
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 23
        echo "                data-grav-field=\"";
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type", array());
        echo "\"
                data-grav-disabled=\"";
        // line 24
        echo (((null === (isset($context["originalValue"]) ? $context["originalValue"] : null))) ? ("true") : ("false"));
        echo "\"
                data-grav-default=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())), "html_attr");
        echo "\"
                ";
    }

    // line 28
    public function block_group($context, array $blocks = array())
    {
        // line 29
        echo "                    ";
        $this->displayBlock('input', $context, $blocks);
        // line 56
        echo "                ";
    }

    // line 29
    public function block_input($context, array $blocks = array())
    {
        // line 30
        echo "                        <div class=\"form-input-wrapper ";
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "size", array());
        echo " ";
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "wrapper_classes", array());
        echo "\">
                            ";
        // line 31
        $this->displayBlock('prepend', $context, $blocks);
        // line 32
        echo "                            <input
                                ";
        // line 34
        echo "                                name=\"";
        echo $this->env->getExtension('GravTwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())));
        echo "\"
                                value=\"";
        // line 35
        echo twig_join_filter(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html_attr"), ", ");
        echo "\"
                                ";
        // line 37
        echo "                                ";
        $this->displayBlock('input_attributes', $context, $blocks);
        // line 52
        echo "                            />
                            ";
        // line 53
        $this->displayBlock('append', $context, $blocks);
        // line 54
        echo "                        </div>
                    ";
    }

    // line 31
    public function block_prepend($context, array $blocks = array())
    {
    }

    // line 37
    public function block_input_attributes($context, array $blocks = array())
    {
        // line 38
        echo "                                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "classes", array(), "any", true, true)) {
            echo "class=\"";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "classes", array());
            echo "\" ";
        }
        // line 39
        echo "                                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array(), "any", true, true)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array()));
            echo "\" ";
        }
        // line 40
        echo "                                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "style", array(), "any", true, true)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "style", array()));
            echo "\" ";
        }
        // line 41
        echo "                                    ";
        if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "disabled", array()) || (isset($context["isDisabledToggleable"]) ? $context["isDisabledToggleable"] : null))) {
            echo "disabled=\"disabled\"";
        }
        // line 42
        echo "                                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder", array())) {
            echo "placeholder=\"";
            echo $this->env->getExtension('GravTwigExtension')->translate($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder", array()));
            echo "\"";
        }
        // line 43
        echo "                                    ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autofocus", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "autofocus=\"autofocus\"";
        }
        // line 44
        echo "                                    ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "novalidate", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "novalidate=\"novalidate\"";
        }
        // line 45
        echo "                                    ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "readonly", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "readonly=\"readonly\"";
        }
        // line 46
        echo "                                    ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autocomplete", array()), array(0 => "on", 1 => "off"))) {
            echo "autocomplete=\"";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autocomplete", array());
            echo "\"";
        }
        // line 47
        echo "                                    ";
        if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "required=\"required\"";
        }
        // line 48
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "pattern", array())) {
            echo "pattern=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "pattern", array());
            echo "\"";
        }
        // line 49
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "message", array())) {
            echo "title=\"";
            echo $this->env->getExtension('GravTwigExtension')->translate(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "message", array())));
            echo "\"
                                    ";
        } elseif ($this->getAttribute(        // line 50
(isset($context["field"]) ? $context["field"] : null), "title", array(), "any", true, true)) {
            echo "title=\"";
            echo $this->env->getExtension('GravTwigExtension')->translate(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "title", array())));
            echo "\" ";
        }
        // line 51
        echo "                                ";
    }

    // line 53
    public function block_append($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "forms/default/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 53,  289 => 51,  283 => 50,  276 => 49,  269 => 48,  264 => 47,  257 => 46,  252 => 45,  247 => 44,  242 => 43,  235 => 42,  230 => 41,  223 => 40,  216 => 39,  209 => 38,  206 => 37,  201 => 31,  196 => 54,  194 => 53,  191 => 52,  188 => 37,  184 => 35,  179 => 34,  176 => 32,  174 => 31,  167 => 30,  164 => 29,  160 => 56,  157 => 29,  154 => 28,  148 => 25,  144 => 24,  139 => 23,  136 => 22,  129 => 17,  123 => 15,  115 => 13,  112 => 12,  109 => 11,  104 => 62,  98 => 59,  91 => 58,  88 => 57,  86 => 28,  83 => 27,  81 => 22,  76 => 19,  74 => 11,  66 => 10,  63 => 9,  60 => 8,  55 => 64,  53 => 8,  45 => 7,  39 => 6,  36 => 5,  34 => 4,  32 => 3,  30 => 2,  28 => 1,);
    }
}
/* {% set originalValue = originalValue is defined ? originalValue : value %}*/
/* {% set toggleableChecked = field.toggleable and (originalValue is not null and originalValue is not empty) %}*/
/* {% set isDisabledToggleable = field.toggleable and not toggleableChecked %}*/
/* {% set value = (is_object(value) or value is null ? field.default : value) %}*/
/* */
/* {% block field %}*/
/*     <div class="form-field {% if field.outerclasses is defined %} {{ field.outerclasses }}{% endif %}">*/
/*         {% block contents %}*/
/*             <div class="form-label">*/
/*                 <label class="inline" {% if field.id is defined %}for="{{ field.id|e }}" {% endif %} >*/
/*                 {% block label %}*/
/*                     {% if field.help %}*/
/*                     <span class="tooltip" data-asTooltip-position="w" title="{{ field.help|e|t }}">{{ field.label|default(field.name|capitalize)|t }}</span>*/
/*                     {% else %}*/
/*                     {{ field.label|default(field.name|capitalize)|t }}*/
/*                     {% endif %}*/
/*                     {{ field.validate.required in ['on', 'true', 1] ? '<span class="required">*</span>' }}*/
/*                 {% endblock %}*/
/*                 </label>*/
/*             </div>*/
/*             <div class="form-data"*/
/*                 {% block global_attributes %}*/
/*                 data-grav-field="{{ field.type }}"*/
/*                 data-grav-disabled="{{ originalValue is null ? 'true' : 'false' }}"*/
/*                 data-grav-default="{{ field.default|json_encode()|e('html_attr') }}"*/
/*                 {% endblock %}*/
/*             >*/
/*                 {% block group %}*/
/*                     {% block input %}*/
/*                         <div class="form-input-wrapper {{ field.size }} {{ field.wrapper_classes }}">*/
/*                             {% block prepend %}{% endblock prepend %}*/
/*                             <input*/
/*                                 {# required attribute structures #}*/
/*                                 name="{{ (scope ~ field.name)|fieldName }}"*/
/*                                 value="{{ value|e('html_attr')|join(', ') }}"*/
/*                                 {# input attribute structures #}*/
/*                                 {% block input_attributes %}*/
/*                                     {% if field.classes is defined %}class="{{ field.classes }}" {% endif %}*/
/*                                     {% if field.id is defined %}id="{{ field.id|e }}" {% endif %}*/
/*                                     {% if field.style is defined %}style="{{ field.style|e }}" {% endif %}*/
/*                                     {% if field.disabled or isDisabledToggleable %}disabled="disabled"{% endif %}*/
/*                                     {% if field.placeholder %}placeholder="{{ field.placeholder|t }}"{% endif %}*/
/*                                     {% if field.autofocus in ['on', 'true', 1] %}autofocus="autofocus"{% endif %}*/
/*                                     {% if field.novalidate in ['on', 'true', 1] %}novalidate="novalidate"{% endif %}*/
/*                                     {% if field.readonly in ['on', 'true', 1] %}readonly="readonly"{% endif %}*/
/*                                     {% if field.autocomplete in ['on', 'off'] %}autocomplete="{{ field.autocomplete }}"{% endif %}*/
/*                                     {% if field.validate.required in ['on', 'true', 1] %}required="required"{% endif %}*/
/*                                     {% if field.validate.pattern %}pattern="{{ field.validate.pattern }}"{% endif %}*/
/*                                     {% if field.validate.message %}title="{{ field.validate.message|e|t }}"*/
/*                                     {% elseif field.title is defined %}title="{{ field.title|e|t }}" {% endif %}*/
/*                                 {% endblock %}*/
/*                             />*/
/*                             {% block append %}{% endblock append %}*/
/*                         </div>*/
/*                     {% endblock %}*/
/*                 {% endblock %}*/
/*                 {% if field.description %}*/
/*                     <div class="form-extra-wrapper {{ field.size }} {{ field.wrapper_classes }}">*/
/*                         <span class="form-description">{{ field.description|raw }}</span>*/
/*                     </div>*/
/*                 {% endif %}*/
/*             </div>*/
/*         {% endblock %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
