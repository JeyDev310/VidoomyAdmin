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

/* @EasyAdmin/default/field_toggle.html.twig */
class __TwigTemplate_358134c7854bc1d6560453fcc33514498d27de1840812bf81b4357011118c5f4 extends Template
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
        // line 2
        echo "
";
        // line 3
        if ((0 === twig_compare(($context["view"] ?? null), "show") || twig_in_filter("edit", twig_get_attribute($this->env, $this->source, ($context["backend_config"] ?? null), "disabled_actions", [], "any", false, false, false, 3)))) {
            // line 4
            echo "    ";
            if (0 === twig_compare(($context["value"] ?? null), true)) {
                // line 5
                echo "        <span class=\"badge badge-success\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.true", [], "EasyAdminBundle"), "html", null, true);
                echo "</span>
    ";
            } else {
                // line 7
                echo "        <span class=\"badge badge-danger\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.false", [], "EasyAdminBundle"), "html", null, true);
                echo "</span>
    ";
            }
        } else {
            // line 10
            echo "    <div class=\"checkbox-switch\" data-propertyname=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field_options"] ?? null), "property", [], "any", false, false, false, 10), "html", null, true);
            echo "\">
        <label>
            <input type=\"checkbox\" ";
            // line 12
            echo ((0 === twig_compare(($context["value"] ?? null), true)) ? ("checked") : (""));
            echo ">
            ";
            // line 13
            echo "<span></span>
        </label>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_toggle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 13,  64 => 12,  58 => 10,  51 => 7,  45 => 5,  42 => 4,  40 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/default/field_toggle.html.twig", "/home/ec2-user/deploy/releases/20200608195650/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_toggle.html.twig");
    }
}
