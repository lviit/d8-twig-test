<?php

/* themes/custom/d8_test/templates/node--teaser.html.twig */
class __TwigTemplate_12e16de8c8cee5788402d40e4e1fcabc694f739b0b00fdee0b1a2bcfe522e09d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("node.html.twig", "themes/custom/d8_test/templates/node--teaser.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "node.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 2);
        $filters = array("t" => 5, "ellipsis" => 6, "truncate" => 6);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set'),
                array('t', 'ellipsis', 'truncate'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 2
        $context["attributes"] = $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "node--teaser"), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "  <div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content_attributes"]) ? $context["content_attributes"] : null), "html", null, true));
        echo ">
  \t<span> ";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("this is a teaser")));
        echo " </span>
    ";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('my_twig_filter.ellipsis')->ellipsis($this->env->getExtension('my_twig_filter.truncate')->truncate($this->getAttribute((isset($context["my_custom_stuff"]) ? $context["my_custom_stuff"] : null), "body", array()))), "html", null, true));
        echo "
  </div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/d8_test/templates/node--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 6,  63 => 5,  58 => 4,  55 => 3,  51 => 1,  49 => 2,  11 => 1,);
    }
}
/* {% extends "node.html.twig" %}*/
/* {% set attributes = attributes.addClass('node--teaser') %}*/
/*   {% block content %}*/
/*   <div{{ content_attributes }}>*/
/*   	<span> {{ 'this is a teaser'|t }} </span>*/
/*     {{ my_custom_stuff.body|truncate|ellipsis }}*/
/*   </div>*/
/* {% endblock content %}*/
