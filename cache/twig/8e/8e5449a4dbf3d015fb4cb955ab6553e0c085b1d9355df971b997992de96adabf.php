<?php

/* modular/resume.html.twig */
class __TwigTemplate_be7d06694794b1ff7f59f817a150aad7b4f867fb839f428a80b5b003341a7596 extends Twig_Template
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
        echo "<section id=\"resume\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "sections", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 3
            echo "    <div class=\"row ";
            echo $this->getAttribute($context["section"], "css_class", array());
            echo "\">
        <div class=\"three columns header-col\">
            <h1><span>";
            // line 5
            echo $this->getAttribute($context["section"], "title", array());
            echo "</span></h1>
        </div>
        <div class=\"nine columns main-col\">
            ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["section"], "items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 9
                echo "            <div class=\"row item\">
                <div class=\"twelve columns\">
                    ";
                // line 11
                if ($this->getAttribute($context["item"], "title", array())) {
                    // line 12
                    echo "                    ";
                    if ($this->getAttribute($context["item"], "link", array())) {
                        echo "<a target=\"blank\" href=\"http://";
                        echo $this->getAttribute($context["item"], "link", array());
                        echo "\">";
                    }
                    // line 13
                    echo "                    <h3>";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "</h3>
                    ";
                    // line 14
                    if ($this->getAttribute($context["item"], "link", array())) {
                        echo "</a>";
                    }
                    // line 15
                    echo "                    ";
                }
                // line 16
                echo "                    ";
                if (($this->getAttribute($context["item"], "info", array()) || $this->getAttribute($context["item"], "date", array()))) {
                    // line 17
                    echo "                    <p class=\"info\">";
                    echo $this->getAttribute($context["item"], "info", array());
                    echo " <span>&bull;</span> <em class=\"date\">";
                    echo $this->getAttribute($context["item"], "date", array());
                    echo "</em></p>
                    ";
                }
                // line 19
                echo "                    <p>
                        ";
                // line 20
                echo $this->getAttribute($context["item"], "description", array());
                echo "
                        ";
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "achievements", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["achievement"]) {
                    // line 22
                    echo "                        <li>";
                    echo $this->getAttribute($context["achievement"], "description", array());
                    echo "</li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['achievement'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "                    </p>

                    ";
                // line 26
                if ($this->getAttribute($context["item"], "skills", array())) {
                    // line 27
                    echo "                    <div class=\"bars\">
                        <ul class=\"skills\">
                            ";
                    // line 29
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "skills", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
                        // line 30
                        echo "                            <li><span class=\"bar-expand\" style=\"width: ";
                        echo $this->getAttribute($context["skill"], "level", array());
                        echo "%;animation: ";
                        echo twig_lower_filter($this->env, $this->getAttribute($context["skill"], "name", array()));
                        echo " 2s ease;\"></span><em>";
                        echo $this->getAttribute($context["skill"], "name", array());
                        echo "</em></li>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 32
                    echo "                        </ul>
                    </div>
                    ";
                }
                // line 35
                echo "
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "</section>
";
    }

    public function getTemplateName()
    {
        return "modular/resume.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 42,  139 => 39,  130 => 35,  125 => 32,  112 => 30,  108 => 29,  104 => 27,  102 => 26,  98 => 24,  89 => 22,  85 => 21,  81 => 20,  78 => 19,  70 => 17,  67 => 16,  64 => 15,  60 => 14,  55 => 13,  48 => 12,  46 => 11,  42 => 9,  38 => 8,  32 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <section id="resume">*/
/*     {% for section in page.header.sections %}*/
/*     <div class="row {{ section.css_class }}">*/
/*         <div class="three columns header-col">*/
/*             <h1><span>{{ section.title }}</span></h1>*/
/*         </div>*/
/*         <div class="nine columns main-col">*/
/*             {% for item in section.items %}*/
/*             <div class="row item">*/
/*                 <div class="twelve columns">*/
/*                     {% if item.title %}*/
/*                     {% if item.link %}<a target="blank" href="http://{{ item.link}}">{% endif %}*/
/*                     <h3>{{ item.title }}</h3>*/
/*                     {% if item.link %}</a>{% endif %}*/
/*                     {% endif %}*/
/*                     {% if item.info or item.date %}*/
/*                     <p class="info">{{ item.info }} <span>&bull;</span> <em class="date">{{ item.date }}</em></p>*/
/*                     {% endif %}*/
/*                     <p>*/
/*                         {{ item.description }}*/
/*                         {% for achievement in item.achievements %}*/
/*                         <li>{{ achievement.description }}</li>*/
/*                         {% endfor %}*/
/*                     </p>*/
/* */
/*                     {% if item.skills %}*/
/*                     <div class="bars">*/
/*                         <ul class="skills">*/
/*                             {% for skill in item.skills %}*/
/*                             <li><span class="bar-expand" style="width: {{ skill.level }}%;animation: {{ skill.name|lower }} 2s ease;"></span><em>{{ skill.name }}</em></li>*/
/*                             {% endfor %}*/
/*                         </ul>*/
/*                     </div>*/
/*                     {% endif %}*/
/* */
/*                 </div>*/
/*             </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*     </div>*/
/*     {% endfor %}*/
/* </section>*/
/* */
