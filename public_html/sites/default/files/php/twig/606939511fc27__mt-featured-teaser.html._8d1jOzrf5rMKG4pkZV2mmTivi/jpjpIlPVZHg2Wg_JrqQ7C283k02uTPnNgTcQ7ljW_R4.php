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

/* @teamplus/partials/_mt-featured-teaser.html.twig */
class __TwigTemplate_8b020ac02ba4326795a37f01c16d751b76e364e920dd3bfde15c74b20630fece extends \Twig\Template
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
        // line 7
        echo "<article";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 7), 7, $this->source), "html", null, true);
        echo ">
  ";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 8, $this->source), "html", null, true);
        echo "
  ";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 9, $this->source), "html", null, true);
        echo "

  <div class=\"row\">
    <div class=\"col-lg-8\">
      ";
        // line 13
        if (($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["image"] ?? null)) || (($context["display_submitted"] ?? null) && ($context["date_overlay"] ?? null)))) {
            // line 14
            echo "        <div class=\"featured-teaser-image\">
          ";
            // line 15
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["image"] ?? null))) {
                // line 16
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image"] ?? null), 16, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 18
            echo "          ";
            if ((($context["display_submitted"] ?? null) && ($context["date_overlay"] ?? null))) {
                // line 19
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 19, $this->source), "html", null, true);
                echo "
            <div class=\"node__submitted-date mt-style-custom-tl region--default-background\">
              <div class=\"day\">";
                // line 21
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["submitted_day"] ?? null), 21, $this->source), "html", null, true);
                echo "</div>
              <div class=\"month-year\">
                ";
                // line 23
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["submitted_month"] ?? null), 23, $this->source), "html", null, true);
                echo "
                ";
                // line 24
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["submitted_year"] ?? null), 24, $this->source), "html", null, true);
                echo "
              </div>
            </div>
          ";
            }
            // line 28
            echo "        </div>
      ";
        }
        // line 30
        echo "    </div>
    <div class=\"col-lg-4\">

      ";
        // line 33
        if (($context["featured_label"] ?? null)) {
            // line 34
            echo "        ";
            echo t("<div class=\"promoted-label mt-style-custom-all\">Promoted</div>", array());
            // line 37
            echo "      ";
        }
        // line 38
        echo "
      ";
        // line 39
        if (($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["pre_content_first"] ?? null)) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["pre_content_second"] ?? null)))) {
            // line 40
            echo "        <div class=\"node__meta\">
          ";
            // line 41
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["pre_content_first"] ?? null))) {
                // line 42
                echo "            <div class=\"node__meta-item\">
              ";
                // line 43
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pre_content_first"] ?? null), 43, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 46
            echo "          ";
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["pre_content_second"] ?? null))) {
                // line 47
                echo "            <div class=\"node__meta-item\">
              ";
                // line 48
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pre_content_second"] ?? null), 48, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 51
            echo "        </div>
      ";
        }
        // line 53
        echo "
      ";
        // line 54
        if ( !($context["page"] ?? null)) {
            // line 55
            echo "        <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "mt-0 node__title"], "method", false, false, true, 55), 55, $this->source), "html", null, true);
            echo ">
          <a href=\"";
            // line 56
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 56, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 56, $this->source), "html", null, true);
            echo "</a>
        </h2>
      ";
        }
        // line 59
        echo "     
      <div";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "node__content"], "method", false, false, true, 60), 60, $this->source), "html", null, true);
        echo ">
        ";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rendered_content"] ?? null), 61, $this->source), "html", null, true);
        echo "
      </div>

      ";
        // line 64
        if ((($context["display_submitted"] ?? null) && ($context["author_info"] ?? null))) {
            // line 65
            echo "        <div class=\"node__meta\">
          ";
            // line 66
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 66, $this->source), "html", null, true);
            echo "
          <span";
            // line 67
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["author_attributes"] ?? null), "addClass", [0 => "node__submitted"], "method", false, false, true, 67), 67, $this->source), "html", null, true);
            echo ">
            ";
            // line 68
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_name"] ?? null), 68, $this->source), "html", null, true);
            echo "
            ";
            // line 69
            if ((($context["display_submitted"] ?? null) &&  !($context["date_overlay"] ?? null))) {
                // line 70
                echo "              ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 70, $this->source), "html", null, true);
                echo "
            ";
            }
            // line 72
            echo "          </span>
        </div>
      ";
        }
        // line 75
        echo "
      ";
        // line 76
        if (($context["read_more"] ?? null)) {
            // line 77
            echo "        ";
            echo t("<a class=\"mt-link-stylable\" href=\"@url\">Read more</a>", array("@url" =>             // line 78
($context["url"] ?? null), ));
            // line 80
            echo "      ";
        }
        // line 81
        echo "
    </div>
  </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "@teamplus/partials/_mt-featured-teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 81,  215 => 80,  213 => 78,  211 => 77,  209 => 76,  206 => 75,  201 => 72,  195 => 70,  193 => 69,  189 => 68,  185 => 67,  181 => 66,  178 => 65,  176 => 64,  170 => 61,  166 => 60,  163 => 59,  155 => 56,  150 => 55,  148 => 54,  145 => 53,  141 => 51,  135 => 48,  132 => 47,  129 => 46,  123 => 43,  120 => 42,  118 => 41,  115 => 40,  113 => 39,  110 => 38,  107 => 37,  104 => 34,  102 => 33,  97 => 30,  93 => 28,  86 => 24,  82 => 23,  77 => 21,  71 => 19,  68 => 18,  62 => 16,  60 => 15,  57 => 14,  55 => 13,  48 => 9,  44 => 8,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@teamplus/partials/_mt-featured-teaser.html.twig", "/var/www/selkirk.lp.ca/public_html/themes/custom/teamplus/templates/partials/_mt-featured-teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 13, "trans" => 34);
        static $filters = array("escape" => 7, "render" => 13);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['escape', 'render'],
                []
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
