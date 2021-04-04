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

/* themes/custom/teamplus/templates/field--node--field-mt-prd-image.html.twig */
class __TwigTemplate_5c0897f55938e76b47286a06f2a56428c165db2fc5efad762b136a56f4110f85 extends \Twig\Template
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
        // line 41
        $context["classes"] = [0 => "field", 1 => ("field--name-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 43
($context["field_name"] ?? null), 43, $this->source))), 2 => ("field--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 44
($context["field_type"] ?? null), 44, $this->source))), 3 => ("field--label-" . $this->sandbox->ensureToStringAllowed(        // line 45
($context["label_display"] ?? null), 45, $this->source))];
        // line 49
        $context["title_classes"] = [0 => "field__label", 1 => (((        // line 51
($context["label_display"] ?? null) == "visually_hidden")) ? ("visually-hidden") : (""))];
        // line 54
        if ((($context["view_mode"] ?? null) == "full")) {
            // line 55
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("teamplus/magnific-popup-field-image-slider-init"), "html", null, true);
            echo "
";
        }
        // line 57
        if (((twig_length_filter($this->env, ($context["items"] ?? null)) > 1) && (($context["view_mode"] ?? null) == "full"))) {
            // line 58
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("teamplus/flexslider-prd-in-page-init"), "html", null, true);
            echo "
";
        }
        // line 60
        if (($context["label_hidden"] ?? null)) {
            // line 61
            echo "  ";
            if (($context["multiple"] ?? null)) {
                // line 62
                echo "    <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => "field__items"], "method", false, false, true, 62), 62, $this->source), "html", null, true);
                echo ">
      <div class=\"images-container clearfix\">
        ";
                // line 64
                if (((twig_length_filter($this->env, ($context["items"] ?? null)) <= 1) && (($context["view_mode"] ?? null) == "full"))) {
                    // line 65
                    echo "          <div class=\"image-preview one-value clearfix\">
            <div";
                    // line 66
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["items"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "attributes", [], "any", false, false, true, 66), "addClass", [0 => "field__item"], "method", false, false, true, 66), 66, $this->source), "html", null, true);
                    echo ">
              ";
                    // line 67
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["items"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "content", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
                    echo "
            </div>
          </div>
        ";
                } elseif (((twig_length_filter($this->env,                 // line 70
($context["items"] ?? null)) > 1) && (($context["view_mode"] ?? null) == "full"))) {
                    // line 71
                    echo "          <div id=\"in-page-images-slider\" class=\"in-page-images-slider flexslider\">
            <ul class=\"slides\">
              ";
                    // line 73
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 74
                        echo "                <li>
                  ";
                        // line 75
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
                        echo "
                </li>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 78
                    echo "            </ul>
          </div>
          <div id=\"in-page-images-carousel\" class=\"in-page-images-carousel flexslider\">
            <ul class=\"slides\">
              ";
                    // line 82
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 83
                        echo "                <li>
                  ";
                        // line 84
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
                        echo "
                </li>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 87
                    echo "            </ul>
          </div>
        ";
                } else {
                    // line 90
                    echo "          <div class=\"image-preview clearfix\">
            <div";
                    // line 91
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["items"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null), "attributes", [], "any", false, false, true, 91), "addClass", [0 => "field__item"], "method", false, false, true, 91), 91, $this->source), "html", null, true);
                    echo ">
              ";
                    // line 92
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["items"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[0] ?? null) : null), "content", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
                    echo "
            </div>
          </div>
        ";
                }
                // line 96
                echo "      </div>
    </div>
  ";
            } else {
                // line 99
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 100
                    echo "      <div class=\"images-container clearfix one-value\">
        <div class=\"image-preview clearfix\">
          <div";
                    // line 102
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => "field__item"], "method", false, false, true, 102), 102, $this->source), "html", null, true);
                    echo ">
            ";
                    // line 103
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
                    echo "
          </div>
        </div>
      </div>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 108
                echo "  ";
            }
        } else {
            // line 110
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 110), 110, $this->source), "html", null, true);
            echo ">
    <div";
            // line 111
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method", false, false, true, 111), 111, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 111, $this->source), "html", null, true);
            echo "</div>
    ";
            // line 112
            if (($context["multiple"] ?? null)) {
                // line 113
                echo "      <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => "field__items"], "method", false, false, true, 113), 113, $this->source), "html", null, true);
                echo ">
        <div class=\"images-container clearfix\">
          ";
                // line 115
                if (((twig_length_filter($this->env, ($context["items"] ?? null)) <= 1) && (($context["view_mode"] ?? null) == "full"))) {
                    // line 116
                    echo "            <div class=\"image-preview one-value clearfix\">
              <div";
                    // line 117
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["items"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[0] ?? null) : null), "attributes", [], "any", false, false, true, 117), "addClass", [0 => "field__item"], "method", false, false, true, 117), 117, $this->source), "html", null, true);
                    echo ">
                ";
                    // line 118
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["items"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[0] ?? null) : null), "content", [], "any", false, false, true, 118), 118, $this->source), "html", null, true);
                    echo "
              </div>
            </div>
          ";
                } elseif (((twig_length_filter($this->env,                 // line 121
($context["items"] ?? null)) > 1) && (($context["view_mode"] ?? null) == "full"))) {
                    // line 122
                    echo "            <div id=\"in-page-images-slider\" class=\"in-page-images-slider flexslider\">
              <ul class=\"slides\">
                ";
                    // line 124
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 125
                        echo "                  <li>
                    ";
                        // line 126
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 126), 126, $this->source), "html", null, true);
                        echo "
                  </li>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 129
                    echo "              </ul>
            </div>
            <div id=\"in-page-images-carousel\" class=\"in-page-images-carousel flexslider\">
              <ul class=\"slides\">
                ";
                    // line 133
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 134
                        echo "                  <li>
                    ";
                        // line 135
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
                        echo "
                  </li>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 138
                    echo "              </ul>
            </div>
          ";
                } else {
                    // line 141
                    echo "            <div class=\"image-preview clearfix\">
              <div";
                    // line 142
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["items"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[0] ?? null) : null), "attributes", [], "any", false, false, true, 142), "addClass", [0 => "field__item"], "method", false, false, true, 142), 142, $this->source), "html", null, true);
                    echo ">
                ";
                    // line 143
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["items"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[0] ?? null) : null), "content", [], "any", false, false, true, 143), 143, $this->source), "html", null, true);
                    echo "
              </div>
            </div>
          ";
                }
                // line 147
                echo "        </div>
      </div>
    ";
            } else {
                // line 150
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 151
                    echo "        <div class=\"images-container clearfix one-value\">
          <div class=\"image-preview clearfix\">
            <div";
                    // line 153
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => "field__item"], "method", false, false, true, 153), 153, $this->source), "html", null, true);
                    echo ">
              ";
                    // line 154
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 154), 154, $this->source), "html", null, true);
                    echo "
            </div>
          </div>
        </div>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 159
                echo "    ";
            }
            // line 160
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/teamplus/templates/field--node--field-mt-prd-image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 160,  311 => 159,  300 => 154,  296 => 153,  292 => 151,  287 => 150,  282 => 147,  275 => 143,  271 => 142,  268 => 141,  263 => 138,  254 => 135,  251 => 134,  247 => 133,  241 => 129,  232 => 126,  229 => 125,  225 => 124,  221 => 122,  219 => 121,  213 => 118,  209 => 117,  206 => 116,  204 => 115,  198 => 113,  196 => 112,  190 => 111,  185 => 110,  181 => 108,  170 => 103,  166 => 102,  162 => 100,  157 => 99,  152 => 96,  145 => 92,  141 => 91,  138 => 90,  133 => 87,  124 => 84,  121 => 83,  117 => 82,  111 => 78,  102 => 75,  99 => 74,  95 => 73,  91 => 71,  89 => 70,  83 => 67,  79 => 66,  76 => 65,  74 => 64,  68 => 62,  65 => 61,  63 => 60,  57 => 58,  55 => 57,  49 => 55,  47 => 54,  45 => 51,  44 => 49,  42 => 45,  41 => 44,  40 => 43,  39 => 41,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/teamplus/templates/field--node--field-mt-prd-image.html.twig", "/var/www/selkirk.lp.ca/public_html/themes/custom/teamplus/templates/field--node--field-mt-prd-image.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 41, "if" => 54, "for" => 73);
        static $filters = array("clean_class" => 43, "escape" => 55, "length" => 57);
        static $functions = array("attach_library" => 55);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['clean_class', 'escape', 'length'],
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
