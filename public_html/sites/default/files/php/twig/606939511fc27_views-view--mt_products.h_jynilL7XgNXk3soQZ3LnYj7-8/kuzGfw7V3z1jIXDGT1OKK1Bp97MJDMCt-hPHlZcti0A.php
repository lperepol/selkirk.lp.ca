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

/* themes/custom/teamplus/templates/views-view--mt_products.html.twig */
class __TwigTemplate_a7525bad4ea0524d7ab171b3a27292455cb2b39499b16b01d1c85a7af8287ca3 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("teamplus/detailed-pager"), "html", null, true);
        echo "
";
        // line 35
        $context["classes"] = [0 => "view", 1 => ("view-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 37
($context["id"] ?? null), 37, $this->source))), 2 => ("view-id-" . $this->sandbox->ensureToStringAllowed(        // line 38
($context["id"] ?? null), 38, $this->source)), 3 => ("view-display-id-" . $this->sandbox->ensureToStringAllowed(        // line 39
($context["display_id"] ?? null), 39, $this->source)), 4 => ((        // line 40
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null), 40, $this->source))) : (""))];
        // line 43
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 43), 43, $this->source), "html", null, true);
        echo ">
  ";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 44, $this->source), "html", null, true);
        echo "
  ";
        // line 45
        if (($context["title"] ?? null)) {
            // line 46
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 46, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 48
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 48, $this->source), "html", null, true);
        echo "
  ";
        // line 49
        if (($context["header"] ?? null)) {
            // line 50
            echo "    <div class=\"view-header\">
      ";
            // line 51
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 51, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 54
        echo "  ";
        if (($context["attachment_before"] ?? null)) {
            // line 55
            echo "    <div class=\"attachment attachment-before\">
      ";
            // line 56
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null), 56, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 59
        echo "  ";
        if (($context["exposed"] ?? null)) {
            // line 60
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("teamplus/slideout-filters"), "html", null, true);
            echo "
    <button class=\"mt-button slideout-filters-toggle d-lg-none mb-3 mb-lg-0\"><i class=\"fas fa-filter mr-2\"></i> ";
            // line 61
            echo t("Filters", array());
            echo "</button>
    <div class=\"view-filters view-filters--slideout\">
      <button class=\"mt-button slideout-filters-close-toggle d-lg-none\"><i class=\"fas fa-times\"></i></button>
      ";
            // line 64
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 64, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 67
        echo "  ";
        if (($context["rows"] ?? null)) {
            // line 68
            echo "    <div class=\"view-content\">
      ";
            // line 69
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 69, $this->source), "html", null, true);
            echo "
    </div>
  ";
        } elseif (        // line 71
($context["empty"] ?? null)) {
            // line 72
            echo "    <div class=\"view-empty\">
      ";
            // line 73
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 73, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 76
        echo "  ";
        if (twig_trim_filter($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["pager"] ?? null)))) {
            // line 77
            echo "    ";
            if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["pager"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["#theme"] ?? null) : null) && twig_in_filter("pager", (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["pager"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["#theme"] ?? null) : null)))) {
                // line 78
                echo "      <div class=\"detailed-pager detailed-pager--bottom clearfix\">
        ";
                // line 79
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 79, $this->source), "html", null, true);
                echo "
      </div>
    ";
            } else {
                // line 82
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 82, $this->source), "html", null, true);
                echo "
    ";
            }
            // line 84
            echo "  ";
        }
        // line 85
        echo "
  ";
        // line 86
        if (($context["attachment_after"] ?? null)) {
            // line 87
            echo "    <div class=\"attachment attachment-after\">
      ";
            // line 88
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 88, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 91
        echo "  ";
        if (($context["more"] ?? null)) {
            // line 92
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 92, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 94
        echo "  ";
        if (($context["footer"] ?? null)) {
            // line 95
            echo "    <div class=\"view-footer\">
      ";
            // line 96
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 96, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 99
        echo "  ";
        if (($context["feed_icons"] ?? null)) {
            // line 100
            echo "    <div class=\"feed-icons\">
      ";
            // line 101
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 101, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 104
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/teamplus/templates/views-view--mt_products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 104,  201 => 101,  198 => 100,  195 => 99,  189 => 96,  186 => 95,  183 => 94,  177 => 92,  174 => 91,  168 => 88,  165 => 87,  163 => 86,  160 => 85,  157 => 84,  151 => 82,  145 => 79,  142 => 78,  139 => 77,  136 => 76,  130 => 73,  127 => 72,  125 => 71,  120 => 69,  117 => 68,  114 => 67,  108 => 64,  102 => 61,  97 => 60,  94 => 59,  88 => 56,  85 => 55,  82 => 54,  76 => 51,  73 => 50,  71 => 49,  66 => 48,  60 => 46,  58 => 45,  54 => 44,  49 => 43,  47 => 40,  46 => 39,  45 => 38,  44 => 37,  43 => 35,  39 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/teamplus/templates/views-view--mt_products.html.twig", "/var/www/selkirk.lp.ca/public_html/themes/custom/teamplus/templates/views-view--mt_products.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 35, "if" => 45, "trans" => 61);
        static $filters = array("escape" => 33, "clean_class" => 37, "trim" => 76, "render" => 76);
        static $functions = array("attach_library" => 33);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
                ['escape', 'clean_class', 'trim', 'render'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
