<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @EasyAdmin/default/field_percent.html.twig */
class __TwigTemplate_9a10721c4c99df293e9e15883debd44adcace39ea782cb7ae3ae3d8237ac0d60 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["type"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_options"] ?? null), "type_options", [], "any", false, true, false, 1), "type", [], "any", true, true, false, 1)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_options"] ?? null), "type_options", [], "any", false, true, false, 1), "type", [], "any", false, false, false, 1), "fractional")) : ("fractional"));
        // line 2
        $context["scale"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_options"] ?? null), "type_options", [], "any", false, true, false, 2), "scale", [], "any", true, true, false, 2)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_options"] ?? null), "type_options", [], "any", false, true, false, 2), "scale", [], "any", false, false, false, 2), 0)) : (0));
        // line 3
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((0 === twig_compare(($context["type"] ?? null), "fractional")) ? ((($context["value"] ?? null) * 100)) : (($context["value"] ?? null))), ($context["scale"] ?? null)), "html", null, true);
        echo "%
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/default/field_percent.html.twig", "/home/ec2-user/deploy/releases/20200608195650/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_percent.html.twig");
    }
}
