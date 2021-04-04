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

/* themes/custom/teamplus/templates/field--field-mt-prd-content-collapses.html.twig */
class __TwigTemplate_521285a9bff75af649717e2b873ee5c5f523738a52157137b6634f7f98be5be3 extends \Twig\Template
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
        // line 10
        $context["classes"] = [0 => "field", 1 => ("field--name-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 12
($context["field_name"] ?? null), 12, $this->source))), 2 => ("field--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 13
($context["field_type"] ?? null), 13, $this->source))), 3 => ("field--label-" . $this->sandbox->ensureToStringAllowed(        // line 14
($context["label_display"] ?? null), 14, $this->source))];
        // line 18
        $context["title_classes"] = [0 => "field__label", 1 => (((        // line 20
($context["label_display"] ?? null) == "visually_hidden")) ? ("visually-hidden") : (""))];
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("teamplus/field-mt-prd-content-collapses"), "html", null, true);
        echo "
<div";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 24), 24, $this->source), "html", null, true);
        echo ">
  ";
        // line 25
        if ( !($context["label_hidden"] ?? null)) {
            // line 26
            echo "    <h3";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method", false, false, true, 26), 26, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 26, $this->source), "html", null, true);
            echo "</h3>
  ";
        }
        // line 28
        echo "  <div class=\"collapse-group collapse-group--style-2\" id=\"mt-content-collapse\" role=\"tablist\" aria-multiselectable=\"true\">
    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 30
            echo "      <div class=\"card\">
        <div class=\"card-header card-header--trigger-icon\" role=\"tab\" id=\"heading-id-";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "\">
          <div class=\"card-title\">
            <a class=\"";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 33)) ? ("") : (" collapsed")));
            echo "\" data-toggle=\"collapse\" href=\"#collapse-id-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo "\" aria-expanded=\"true\" aria-controls=\"collapse-id-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo "\">
              ";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 34)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["#paragraph"] ?? null) : null), "get", [0 => "field_mt_collapse_title"], "method", false, false, true, 34), "value", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            echo "
            </a>
          </div>
        </div>
        <div id=\"collapse-id-";
            // line 38
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
            echo "\" class=\"collapse ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 38)) ? (" show") : ("")));
            echo "\" role=\"tabpanel\" aria-labelledby=\"heading-id-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
            echo "\" data-parent=\"#mt-content-collapse\">
          <div class=\"card-body\">
            ";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/teamplus/templates/field--field-mt-prd-content-collapses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 45,  117 => 40,  108 => 38,  101 => 34,  93 => 33,  88 => 31,  85 => 30,  68 => 29,  65 => 28,  57 => 26,  55 => 25,  51 => 24,  47 => 23,  45 => 20,  44 => 18,  42 => 14,  41 => 13,  40 => 12,  39 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/teamplus/templates/field--field-mt-prd-content-collapses.html.twig", "/var/www/selkirk.lp.ca/public_html/themes/custom/teamplus/templates/field--field-mt-prd-content-collapses.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 10, "if" => 25, "for" => 29);
        static $filters = array("clean_class" => 12, "escape" => 23);
        static $functions = array("attach_library" => 23);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['clean_class', 'escape'],
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
