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

/* themes/custom/teamplus/templates/paragraph--mt-icon-features--mt_tile.html.twig */
class __TwigTemplate_1c6df291201d3d35a0f2bec3d5f3665c1b0e82fca0750cd4a1470e783d538a21 extends \Twig\Template
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
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("teamplus/icon-features"), "html", null, true);
        echo "
";
        // line 43
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 45
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 45), 45, $this->source))), 2 => ((        // line 46
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 46, $this->source)))) : ("")), 3 => "region--default-background mt-style-custom-all p-4"];
        // line 50
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "  <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 51), 51, $this->source), "html", null, true);
        echo ">
    ";
        // line 52
        $this->displayBlock('content', $context, $blocks);
        // line 87
        echo "  </div>
";
    }

    // line 52
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "      <div class=\"feature\">
        <div class=\"feature__icon \">
          ";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_if_fa_icon", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
        echo "
        </div>
        ";
        // line 57
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_if_image", [], "any", false, false, true, 57))) {
            // line 58
            echo "          <div class=\"feature__image\">
            ";
            // line 59
            if (twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_mt_if_link", [], "any", false, false, true, 59)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["0"] ?? null) : null), "url", [], "any", false, false, true, 59)) {
                // line 60
                echo "              <div class=\"overlay-container\">
                <span class=\"overlay\">
                  <a class=\"overlay-target-link\" href=\"";
                // line 62
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_mt_if_link", [], "any", false, false, true, 62)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["0"] ?? null) : null), "url", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
                echo "\"></a>
                  <span class=\"overlay-inner\">
                    <a class=\"overlay-icon overlay-icon--button\" href=\"";
                // line 64
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_mt_if_link", [], "any", false, false, true, 64)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["0"] ?? null) : null), "url", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
                echo "\"><i class=\"fas fa-link\"></i></a>
                  </span>
                </span>
                ";
                // line 67
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_if_image", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
                echo "
              </div>
            ";
            } else {
                // line 70
                echo "              ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_if_image", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
                echo "
            ";
            }
            // line 72
            echo "          </div>
        ";
        }
        // line 74
        echo "        ";
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_mt_if_title", [], "any", false, false, true, 74), "value", [], "any", false, false, true, 74))) {
            // line 75
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_mt_if_link", [], "any", false, false, true, 75)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["0"] ?? null) : null), "url", [], "any", false, false, true, 75)) {
                // line 76
                echo "            <h4 class=\"feature__title\"><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_mt_if_link", [], "any", false, false, true, 76)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["0"] ?? null) : null), "url", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_mt_if_title", [], "any", false, false, true, 76), "value", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
                echo "</a></h4>
          ";
            } else {
                // line 78
                echo "            <h4 class=\"feature__title\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_mt_if_title", [], "any", false, false, true, 78), "value", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
                echo "</h4>
          ";
            }
            // line 80
            echo "        ";
        }
        // line 81
        echo "        ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 81, $this->source), "field_mt_if_fa_icon", "field_mt_if_link", "field_mt_if_title", "field_mt_if_image"), "html", null, true);
        echo "
        ";
        // line 82
        if ((twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_mt_if_link", [], "any", false, false, true, 82)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["0"] ?? null) : null), "url", [], "any", false, false, true, 82) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_mt_if_link", [], "any", false, false, true, 82), "title", [], "any", false, false, true, 82))) {
            // line 83
            echo "          <div class=\"feature__link\"><a class=\"mt-link-stylable mb-0\" href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_mt_if_link", [], "any", false, false, true, 83)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["0"] ?? null) : null), "url", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_mt_if_link", [], "any", false, false, true, 83), "title", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
            echo "</a></div>
        ";
        }
        // line 85
        echo "      </div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/teamplus/templates/paragraph--mt-icon-features--mt_tile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 85,  149 => 83,  147 => 82,  142 => 81,  139 => 80,  133 => 78,  125 => 76,  122 => 75,  119 => 74,  115 => 72,  109 => 70,  103 => 67,  97 => 64,  92 => 62,  88 => 60,  86 => 59,  83 => 58,  81 => 57,  76 => 55,  72 => 53,  68 => 52,  63 => 87,  61 => 52,  56 => 51,  49 => 50,  47 => 46,  46 => 45,  45 => 43,  41 => 41,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/teamplus/templates/paragraph--mt-icon-features--mt_tile.html.twig", "/var/www/selkirk.lp.ca/public_html/themes/custom/teamplus/templates/paragraph--mt-icon-features--mt_tile.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 43, "block" => 50, "if" => 57);
        static $filters = array("escape" => 41, "clean_class" => 45, "render" => 57, "without" => 81);
        static $functions = array("attach_library" => 41);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['escape', 'clean_class', 'render', 'without'],
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
