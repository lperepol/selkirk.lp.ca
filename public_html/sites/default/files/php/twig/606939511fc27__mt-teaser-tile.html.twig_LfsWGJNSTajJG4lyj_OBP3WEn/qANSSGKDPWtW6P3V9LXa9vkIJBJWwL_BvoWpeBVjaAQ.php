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

/* @teamplus/partials/_mt-teaser-tile.html.twig */
class __TwigTemplate_6e82f479eb59433803e681428bccd08f07e31b2b2299f303254ceea93ebb22d9 extends \Twig\Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 7), "addClass", [0 => "region--default-background mt-style-custom-all"], "method", false, false, true, 7), 7, $this->source), "html", null, true);
        echo ">
  ";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 8, $this->source), "html", null, true);
        echo "
  ";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 9, $this->source), "html", null, true);
        echo "

  ";
        // line 11
        if ((($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["image"] ?? null)) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["image_caption"] ?? null))) || (($context["display_submitted"] ?? null) && ($context["date_overlay"] ?? null)))) {
            // line 12
            echo "    <div class=\"teaser-tile-image-container\">
      ";
            // line 13
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["image"] ?? null))) {
                // line 14
                echo "        <div class=\"teaser-tile-image\">
          ";
                // line 15
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image"] ?? null), 15, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 18
            echo "      ";
            if ((($context["display_submitted"] ?? null) && ($context["date_overlay"] ?? null))) {
                // line 19
                echo "        ";
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
            echo "      ";
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["image_caption"] ?? null))) {
                // line 29
                echo "        <div class=\"image-caption\">
          ";
                // line 30
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image_caption"] ?? null), 30, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 33
            echo "    </div>
  ";
        }
        // line 35
        echo "
  <div class=\"p-4 mt-teaser-tile-card\">
    <div class=\"row align-items-center mb-2\">
      ";
        // line 38
        if ( !($context["page"] ?? null)) {
            // line 39
            echo "        <h4";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "mt-0 mb-0 node__title col"], "method", false, false, true, 39), 39, $this->source), "html", null, true);
            echo ">
          <a href=\"";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 40, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 40, $this->source), "html", null, true);
            echo "</a>
        </h4>
      ";
        }
        // line 43
        echo "      ";
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["teaser_tile_subtitle"] ?? null))) {
            // line 44
            echo "        <div class=\"teaser-tile-subtitle col-auto\">
          ";
            // line 45
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["teaser_tile_subtitle"] ?? null), 45, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 48
        echo "    </div>

    ";
        // line 50
        if ((($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["teaser_tile_pre_content_first"] ?? null)) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["teaser_tile_pre_content_second"] ?? null))) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["teaser_tile_content"] ?? null)))) {
            // line 51
            echo "      <div class=\"row teaser-tile-content-wrapper align-items-center\">
        ";
            // line 52
            if (($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["teaser_tile_pre_content_first"] ?? null)) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["teaser_tile_pre_content_second"] ?? null)))) {
                // line 53
                echo "          <div class=\"teaser-tile-pre-content col-auto\">
            ";
                // line 54
                if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["teaser_tile_pre_content_first"] ?? null))) {
                    // line 55
                    echo "              <div class=\"teaser-tile-pre-content-item\">
                ";
                    // line 56
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["teaser_tile_pre_content_first"] ?? null), 56, $this->source), "html", null, true);
                    echo "
              </div>
            ";
                }
                // line 59
                echo "            ";
                if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["teaser_tile_pre_content_second"] ?? null))) {
                    // line 60
                    echo "              <div class=\"teaser-tile-pre-content-item\">
                ";
                    // line 61
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["teaser_tile_pre_content_second"] ?? null), 61, $this->source), "html", null, true);
                    echo "
              </div>
            ";
                }
                // line 64
                echo "          </div>
        ";
            }
            // line 66
            echo "
        ";
            // line 67
            if (($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["teaser_tile_content"] ?? null)) && ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["teaser_tile_pre_content_first"] ?? null)) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["teaser_tile_pre_content_second"] ?? null))))) {
                // line 68
                echo "          <div class=\"teaser-tile-content-separator col-auto px-0\"><i class=\"fas fa-square\"></i></div>
        ";
            }
            // line 70
            echo "
        ";
            // line 71
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["teaser_tile_content"] ?? null))) {
                // line 72
                echo "          <div class=\"teaser-tile-content  col-auto\">
            ";
                // line 73
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["teaser_tile_content"] ?? null), 73, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 76
            echo "      </div>
    ";
        }
        // line 78
        echo "
    ";
        // line 79
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["rendered_content"] ?? null))) {
            // line 80
            echo "      <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "node__content"], "method", false, false, true, 80), 80, $this->source), "html", null, true);
            echo ">
        ";
            // line 81
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rendered_content"] ?? null), 81, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 84
        echo "
    ";
        // line 85
        if (($context["read_more"] ?? null)) {
            // line 86
            echo "      ";
            echo t("<a class=\"mt-link-stylable mb-0\" href=\"@url\">Read more</a>", array("@url" =>             // line 87
($context["url"] ?? null), ));
            // line 89
            echo "    ";
        }
        // line 90
        echo "  </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "@teamplus/partials/_mt-teaser-tile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 90,  235 => 89,  233 => 87,  231 => 86,  229 => 85,  226 => 84,  220 => 81,  215 => 80,  213 => 79,  210 => 78,  206 => 76,  200 => 73,  197 => 72,  195 => 71,  192 => 70,  188 => 68,  186 => 67,  183 => 66,  179 => 64,  173 => 61,  170 => 60,  167 => 59,  161 => 56,  158 => 55,  156 => 54,  153 => 53,  151 => 52,  148 => 51,  146 => 50,  142 => 48,  136 => 45,  133 => 44,  130 => 43,  122 => 40,  117 => 39,  115 => 38,  110 => 35,  106 => 33,  100 => 30,  97 => 29,  94 => 28,  87 => 24,  83 => 23,  78 => 21,  72 => 19,  69 => 18,  63 => 15,  60 => 14,  58 => 13,  55 => 12,  53 => 11,  48 => 9,  44 => 8,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@teamplus/partials/_mt-teaser-tile.html.twig", "/var/www/selkirk.lp.ca/public_html/themes/custom/teamplus/templates/partials/_mt-teaser-tile.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 11, "trans" => 86);
        static $filters = array("escape" => 7, "render" => 11);
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
