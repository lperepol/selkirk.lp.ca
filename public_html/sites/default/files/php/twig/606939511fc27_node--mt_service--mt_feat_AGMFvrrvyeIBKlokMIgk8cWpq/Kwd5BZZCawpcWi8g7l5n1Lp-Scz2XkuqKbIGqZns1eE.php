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

/* themes/custom/teamplus/templates/node--mt_service--mt_featured_teaser.html.twig */
class __TwigTemplate_58c328a6e84ccf66300240fae4f43af0cf874d16ca8ce276417122278ba95191 extends \Twig\Template
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
        // line 8
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 10
($context["node"] ?? null), "bundle", [], "any", false, false, true, 10), 10, $this->source))), 2 => ((twig_get_attribute($this->env, $this->source,         // line 11
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 11)) ? ("node--promoted") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,         // line 12
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 12)) ? ("node--sticky") : ("")), 4 => (( !twig_get_attribute($this->env, $this->source,         // line 13
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 13)) ? ("node--unpublished") : ("")), 5 => ((        // line 14
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 14, $this->source)))) : (""))];
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("teamplus/node-view-mode-featured-teaser"), "html", null, true);
        echo "
";
        // line 18
        $context["image"] = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_srv_teaser_image", [], "any", false, false, true, 18);
        // line 19
        $context["pre_content_first"] = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_srv_tags", [], "any", false, false, true, 19);
        // line 20
        $context["pre_content_second"] = null;
        // line 21
        $context["rendered_content"] = $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 21, $this->source), "field_mt_srv_teaser_image", "field_mt_srv_tags");
        // line 22
        $context["featured_label"] = true;
        // line 23
        $context["read_more"] = true;
        // line 25
        $context["author_info"] = false;
        // line 27
        $context["date_overlay"] = false;
        // line 28
        $context["submitted_day"] = null;
        // line 29
        $context["submitted_month"] = null;
        // line 30
        $context["submitted_year"] = null;
        // line 31
        $this->loadTemplate("@teamplus/partials/_mt-featured-teaser.html.twig", "themes/custom/teamplus/templates/node--mt_service--mt_featured_teaser.html.twig", 31)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/custom/teamplus/templates/node--mt_service--mt_featured_teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 31,  70 => 30,  68 => 29,  66 => 28,  64 => 27,  62 => 25,  60 => 23,  58 => 22,  56 => 21,  54 => 20,  52 => 19,  50 => 18,  46 => 17,  44 => 14,  43 => 13,  42 => 12,  41 => 11,  40 => 10,  39 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/teamplus/templates/node--mt_service--mt_featured_teaser.html.twig", "/var/www/selkirk.lp.ca/public_html/themes/custom/teamplus/templates/node--mt_service--mt_featured_teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 8, "include" => 31);
        static $filters = array("clean_class" => 10, "escape" => 17, "without" => 21);
        static $functions = array("attach_library" => 17);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include'],
                ['clean_class', 'escape', 'without'],
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
