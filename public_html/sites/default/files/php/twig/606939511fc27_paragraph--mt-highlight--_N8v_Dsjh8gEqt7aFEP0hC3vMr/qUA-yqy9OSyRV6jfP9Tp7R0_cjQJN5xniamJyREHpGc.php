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

/* themes/custom/teamplus/templates/paragraph--mt-highlight--mt-teaser.html.twig */
class __TwigTemplate_3e66c3a3b011422356bf876819449916b5f2d6acf5e1c7d590cc5b6e8e0af87f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 44
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 44), 44, $this->source))), 2 => ((        // line 45
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 45, $this->source)))) : (""))];
        // line 48
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "  <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 49), 49, $this->source), "html", null, true);
        echo ">
    ";
        // line 50
        $this->displayBlock('content', $context, $blocks);
        // line 74
        echo "  </div>
";
    }

    // line 50
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "      <div class=\"row\">
        ";
        // line 52
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_highlight_image", [], "any", false, false, true, 52))) {
            // line 53
            echo "          <div class=\"col-md-6 mt-highlight-image-wrapper\">
            ";
            // line 54
            if (twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_mt_highlight_link", [], "any", false, false, true, 54)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["0"] ?? null) : null), "url", [], "any", false, false, true, 54)) {
                // line 55
                echo "              <div class=\"overlay-container\">
                <span class=\"overlay overlay--colored\">
                  <a class=\"overlay-target-link\" href=\"";
                // line 57
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_mt_highlight_link", [], "any", false, false, true, 57)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["0"] ?? null) : null), "url", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
                echo "\"></a>
                </span>
                ";
                // line 59
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_highlight_image", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
                echo "
              </div>
            ";
            } else {
                // line 62
                echo "              ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_highlight_image", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
                echo "
            ";
            }
            // line 64
            echo "          </div>
        ";
        }
        // line 66
        echo "        <div class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_highlight_image", [], "any", false, false, true, 66), 66, $this->source))) ? ("col-md-6 align-self-center") : ("col-12 align-self-center")));
        echo "\">
          ";
        // line 67
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_highlight_title", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
        echo "
          ";
        // line 68
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_highlight_body", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
        echo "
          ";
        // line 69
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_highlight_link", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
        echo "
        </div>
      </div>
      ";
        // line 72
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 72, $this->source), "field_mt_highlight_image", "field_mt_highlight_title", "field_mt_highlight_body", "field_mt_highlight_link"), "html", null, true);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/teamplus/templates/paragraph--mt-highlight--mt-teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 72,  116 => 69,  112 => 68,  108 => 67,  103 => 66,  99 => 64,  93 => 62,  87 => 59,  82 => 57,  78 => 55,  76 => 54,  73 => 53,  71 => 52,  68 => 51,  64 => 50,  59 => 74,  57 => 50,  52 => 49,  45 => 48,  43 => 45,  42 => 44,  41 => 42,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/teamplus/templates/paragraph--mt-highlight--mt-teaser.html.twig", "/var/www/selkirk.lp.ca/public_html/themes/custom/teamplus/templates/paragraph--mt-highlight--mt-teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 42, "block" => 48, "if" => 52);
        static $filters = array("clean_class" => 44, "escape" => 49, "render" => 52, "without" => 72);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['clean_class', 'escape', 'render', 'without'],
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
