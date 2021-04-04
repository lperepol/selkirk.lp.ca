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

/* themes/custom/teamplus/templates/field--comment.html.twig */
class __TwigTemplate_11f8fa70f2d871e702411b12687ac19e094a2b95553bc3b2a625dce27323c50e extends \Twig\Template
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
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("teamplus/comments"), "html", null, true);
        echo "
";
        // line 30
        $context["classes"] = [0 => "field", 1 => ("field--name-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 32
($context["field_name"] ?? null), 32, $this->source))), 2 => ("field--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 33
($context["field_type"] ?? null), 33, $this->source))), 3 => ("field--label-" . $this->sandbox->ensureToStringAllowed(        // line 34
($context["label_display"] ?? null), 34, $this->source)), 4 => "comment-wrapper"];
        // line 39
        $context["title_classes"] = [0 => "title", 1 => (((        // line 41
($context["label_display"] ?? null) == "visually_hidden")) ? ("visually-hidden") : (""))];
        // line 44
        if ((($context["comments"] ?? null) || ($context["comment_form"] ?? null))) {
            // line 45
            echo "<section";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 45), 45, $this->source), "html", null, true);
            echo ">
  ";
            // line 46
            if ((($context["comments"] ?? null) &&  !($context["label_hidden"] ?? null))) {
                // line 47
                echo "    ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 47, $this->source), "html", null, true);
                echo "
    <h2";
                // line 48
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "setAttribute", [0 => "id", 1 => "comments"], "method", false, false, true, 48), "addClass", [0 => ($context["title_classes"] ?? null)], "method", false, false, true, 48), 48, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 48, $this->source), "html", null, true);
                echo "</h2>
    ";
                // line 49
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 49, $this->source), "html", null, true);
                echo "
  ";
            }
            // line 51
            echo "
  ";
            // line 52
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comments"] ?? null), 52, $this->source), "html", null, true);
            echo "

  ";
            // line 54
            if (($context["comment_form"] ?? null)) {
                // line 55
                echo "    <h2 class=\"title comment-form__title\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Add new comment"));
                echo "</h2>
    ";
                // line 56
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comment_form"] ?? null), 56, $this->source), "html", null, true);
                echo "
  ";
            }
            // line 58
            echo "
</section>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/teamplus/templates/field--comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 58,  91 => 56,  86 => 55,  84 => 54,  79 => 52,  76 => 51,  71 => 49,  65 => 48,  60 => 47,  58 => 46,  53 => 45,  51 => 44,  49 => 41,  48 => 39,  46 => 34,  45 => 33,  44 => 32,  43 => 30,  39 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/teamplus/templates/field--comment.html.twig", "/var/www/selkirk.lp.ca/public_html/themes/custom/teamplus/templates/field--comment.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 30, "if" => 44);
        static $filters = array("escape" => 28, "clean_class" => 32, "t" => 55);
        static $functions = array("attach_library" => 28);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'clean_class', 't'],
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
