<?php

/* forms/fields/captcha/captcha.html.twig */
class __TwigTemplate_1c40a89152a4ba34cf3dac083e8398aedda1ec84d5aa5f97c4804d8eacf8803e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/captcha/captcha.html.twig", 1);
        $this->blocks = array(
            'input' => array($this, 'block_input'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_input($context, array $blocks = array())
    {
        // line 4
        echo "    <script>
        var captchaOnloadCallback = function captchaOnloadCallback() {
            grecaptcha.render('g-recaptcha', {
                'sitekey': \"";
        // line 7
        echo (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "recaptcha_site_key", array())) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "recaptcha_site_key", array())) : ((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "recatpcha_site_key", array())) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "recatpcha_site_key", array())) : ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "form", array()), "recaptcha", array()), "site_key", array())))));
        echo "\",
                'callback': captchaValidatedCallback,
                'expired-callback': captchaExpiredCallback
            });
        };

        var captchaValidatedCallback = function captchaValidatedCallback() {

        };

        var captchaExpiredCallback = function captchaExpiredCallback() {
            grecaptcha.reset();
        };
    </script>
    <script src=\"https://www.google.com/recaptcha/api.js?onload=captchaOnloadCallback&render=explicit&hl=";
        // line 21
        echo $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "language", array());
        echo "\"
        async defer>
    </script>
    <div class=\"g-recaptcha\" id=\"g-recaptcha\"></div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/captcha/captcha.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 21,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "forms/field.html.twig" %}*/
/* */
/* {% block input %}*/
/*     <script>*/
/*         var captchaOnloadCallback = function captchaOnloadCallback() {*/
/*             grecaptcha.render('g-recaptcha', {*/
/*                 'sitekey': "{{field.recaptcha_site_key ?: field.recatpcha_site_key ?: config.plugins.form.recaptcha.site_key }}",*/
/*                 'callback': captchaValidatedCallback,*/
/*                 'expired-callback': captchaExpiredCallback*/
/*             });*/
/*         };*/
/* */
/*         var captchaValidatedCallback = function captchaValidatedCallback() {*/
/* */
/*         };*/
/* */
/*         var captchaExpiredCallback = function captchaExpiredCallback() {*/
/*             grecaptcha.reset();*/
/*         };*/
/*     </script>*/
/*     <script src="https://www.google.com/recaptcha/api.js?onload=captchaOnloadCallback&render=explicit&hl={{ grav.language.language }}"*/
/*         async defer>*/
/*     </script>*/
/*     <div class="g-recaptcha" id="g-recaptcha"></div>*/
/* {% endblock %}*/
/* */
