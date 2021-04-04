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

/* themes/custom/teamplus/templates/comment.html.twig */
class __TwigTemplate_bc668290f83fe12e14113cf2a577215fb912c63d12fdce00f82f6040c2064742 extends \Twig\Template
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
        // line 67
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("teamplus/comment"), "html", null, true);
        echo "
";
        // line 68
        if (($context["threaded"] ?? null)) {
            // line 69
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("classy/drupal.comment.threaded"), "html", null, true);
            echo "
";
        }
        // line 72
        $context["classes"] = [0 => "comment", 1 => "js-comment", 2 => (((        // line 75
($context["status"] ?? null) != "published")) ? (("comment--" . $this->sandbox->ensureToStringAllowed(($context["status"] ?? null), 75, $this->source))) : ("")), 3 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 76
($context["comment"] ?? null), "owner", [], "any", false, false, true, 76), "anonymous", [], "any", false, false, true, 76)) ? ("by-anonymous") : ("")), 4 => (((        // line 77
($context["author_id"] ?? null) && (($context["author_id"] ?? null) == twig_get_attribute($this->env, $this->source, ($context["commented_entity"] ?? null), "getOwnerId", [], "method", false, false, true, 77)))) ? ((("by-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["commented_entity"] ?? null), "getEntityTypeId", [], "method", false, false, true, 77), 77, $this->source)) . "-author")) : ("")), 5 => "clearfix", 6 => "mt-style-custom-all"];
        // line 82
        echo "<article role=\"article\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 82), 82, $this->source), "role"), "html", null, true);
        echo ">
  ";
        // line 88
        echo "  <span class=\"hidden new-indicator\" data-comment-timestamp=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["new_indicator_timestamp"] ?? null), 88, $this->source), "html", null, true);
        echo "\"></span>

  <div class=\"comment__content-container\">
    ";
        // line 91
        if (($context["title"] ?? null)) {
            // line 92
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 92, $this->source), "html", null, true);
            echo "
      <h3";
            // line 93
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "title"], "method", false, false, true, 93), 93, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 93, $this->source), "html", null, true);
            echo "</h3>
      ";
            // line 94
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 94, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 96
        echo "    <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "comment__content"], "method", false, false, true, 96), 96, $this->source), "html", null, true);
        echo ">
      ";
        // line 97
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 97, $this->source), "links"), "html", null, true);
        echo "
    </div>
    <div class=\"row\">
      <div class=\"col-auto\">
        ";
        // line 101
        if (($context["user_picture"] ?? null)) {
            // line 102
            echo "          <header>
            ";
            // line 103
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_picture"] ?? null), 103, $this->source), "html", null, true);
            echo "
          </header>
        ";
        }
        // line 106
        echo "      </div>
      <div class=\"col-sm col-xs-12\">
        <div class=\"comment__meta\">
          <div>";
        // line 109
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["created"] ?? null), 109, $this->source), "html", null, true);
        echo "</div>
          <div>";
        // line 110
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author"] ?? null), 110, $this->source), "html", null, true);
        echo "</div>
          ";
        // line 111
        if (($context["parent"] ?? null)) {
            // line 112
            echo "            <p class=\"visually-hidden\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["parent"] ?? null), 112, $this->source), "html", null, true);
            echo "</p>
          ";
        }
        // line 114
        echo "        </div>
      </div>
      <div class=\"col-12\">
        ";
        // line 117
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "links", [], "any", false, false, true, 117)) {
            // line 118
            echo "          <nav class=\"comment__links\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "links", [], "any", false, false, true, 118), 118, $this->source), "html", null, true);
            echo "</nav>
        ";
        }
        // line 120
        echo "      </div>
    </div>
  </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/teamplus/templates/comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 120,  137 => 118,  135 => 117,  130 => 114,  124 => 112,  122 => 111,  118 => 110,  114 => 109,  109 => 106,  103 => 103,  100 => 102,  98 => 101,  91 => 97,  86 => 96,  81 => 94,  75 => 93,  70 => 92,  68 => 91,  61 => 88,  56 => 82,  54 => 77,  53 => 76,  52 => 75,  51 => 72,  45 => 69,  43 => 68,  39 => 67,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/teamplus/templates/comment.html.twig", "/var/www/selkirk.lp.ca/public_html/themes/custom/teamplus/templates/comment.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 68, "set" => 72);
        static $filters = array("escape" => 67, "without" => 82);
        static $functions = array("attach_library" => 67);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', 'without'],
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
