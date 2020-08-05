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

/* @EasyAdmin/default/exception.html.twig */
class __TwigTemplate_96a0f4c08beb266893da2b799d47de3144bf9c46c0523429679f715903e6edde extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_class' => [$this, 'block_body_class'],
            'page_title' => [$this, 'block_page_title'],
            'content_header_wrapper' => [$this, 'block_content_header_wrapper'],
            'content_footer_wrapper' => [$this, 'block_content_footer_wrapper'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(($context["layout_template_path"] ?? null), "@EasyAdmin/default/exception.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "error";
    }

    // line 4
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->transchoice("errors", 1, [], "EasyAdminBundle"), "html", null, true);
    }

    // line 6
    public function block_content_header_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "";
    }

    // line 7
    public function block_content_footer_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "";
    }

    // line 8
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    <div class=\"error-message\">
        <h1><i class=\"fa fa-fw fa-exclamation-circle\"></i> ";
        // line 10
        $this->displayBlock("page_title", $context, $blocks);
        echo "</h1>
        ";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "publicMessage", [], "any", false, false, false, 11), twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "translationParameters", [], "any", false, false, false, 11), "EasyAdminBundle"), "html", null, true);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  84 => 10,  81 => 9,  77 => 8,  70 => 7,  63 => 6,  56 => 4,  49 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/default/exception.html.twig", "/home/ec2-user/deploy/releases/20200608195650/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/exception.html.twig");
    }
}
