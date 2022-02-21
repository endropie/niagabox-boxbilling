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

/* mod_servicedomain_config.phtml */
class __TwigTemplate_c0e5f4382b8dd797944ecc2652c3c469b341a683ff3b9572338e8317037caa27 extends \Twig\Template
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
        echo "<div class=\"help\">
    <h5>";
        // line 2
        echo gettext("Domains management");
        echo "</h5>
</div>

<div class=\"body\">
    <div class=\"aligncenter\">
        <a href=\"";
        // line 7
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("servicedomain");
        echo "\" title=\"\" class=\"btn55 mr10\"><img src=\"images/icons/middlenav/pencil.png\" alt=\"\"><span>Management</span></a>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "mod_servicedomain_config.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"help\">
    <h5>{% trans 'Domains management' %}</h5>
</div>

<div class=\"body\">
    <div class=\"aligncenter\">
        <a href=\"{{ 'servicedomain'|alink }}\" title=\"\" class=\"btn55 mr10\"><img src=\"images/icons/middlenav/pencil.png\" alt=\"\"><span>Management</span></a>
    </div>
</div>", "mod_servicedomain_config.phtml", "/var/www/boxbilling/bb-themes/admin_default/html/mod_servicedomain_config.phtml");
    }
}
