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

/* themes/custom/teamplus/templates/page--front.html.twig */
class __TwigTemplate_cfe445212391be05bc47dfcd785f24680435e2bdcd716dfc4ff2e6356ca190e2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_top' => [$this, 'block_page_top'],
            'reading_progress_indicator' => [$this, 'block_reading_progress_indicator'],
            'internal_sticky_header' => [$this, 'block_internal_sticky_header'],
            'internal_banner' => [$this, 'block_internal_banner'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return "page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("page.html.twig", "themes/custom/teamplus/templates/page--front.html.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_page_top($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "  ";
        if (((((((((((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 10) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 10)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 10)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 10)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 10)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 10)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 10)) || ($context["post_progress"] ?? null)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 10)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_top", [], "any", false, false, true, 10)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_first", [], "any", false, false, true, 10)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_second", [], "any", false, false, true, 10)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_third", [], "any", false, false, true, 10))) {
            // line 11
            echo "    <div class=\"page-top-container\">

      ";
            // line 13
            if ((((((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 13) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 13)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 13)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 13)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 13)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 13)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 13)) || ($context["post_progress"] ?? null))) {
                // line 14
                echo "        ";
                // line 15
                echo "        <div class=\"header-container\">

          ";
                // line 17
                if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 17) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 17))) {
                    // line 18
                    echo "            ";
                    // line 19
                    echo "            <div class=\"clearfix header-top-highlighted ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_background_color"] ?? null), 19, $this->source), "html", null, true);
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                    echo "\">
              <div class=\"";
                    // line 20
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_layout_container"] ?? null), 20, $this->source), "html", null, true);
                    echo " ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_horizontal_paddings"] ?? null), 20, $this->source), "html", null, true);
                    echo "\">
                ";
                    // line 22
                    echo "                <div class=\"clearfix header-top-highlighted__container";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["header_top_highlighted_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                    echo "\"
                  ";
                    // line 23
                    if ((($context["header_top_highlighted_animations"] ?? null) == "enabled")) {
                        // line 24
                        echo "                    data-animate-effect=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_animation_effect"] ?? null), 24, $this->source), "html", null, true);
                        echo "\"
                  ";
                    }
                    // line 25
                    echo ">
                  <div class=\"row\">
                    ";
                    // line 27
                    if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 27)) {
                        // line 28
                        echo "                      <div class=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_first_grid_class"] ?? null), 28, $this->source), "html", null, true);
                        echo "\">
                        ";
                        // line 30
                        echo "                        <div class=\"clearfix header-top-highlighted__section header-top-highlighted-first\">
                          ";
                        // line 31
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
                        echo "
                        </div>
                        ";
                        // line 34
                        echo "                      </div>
                    ";
                    }
                    // line 36
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 36)) {
                        // line 37
                        echo "                      <div class=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_second_grid_class"] ?? null), 37, $this->source), "html", null, true);
                        echo "\">
                        ";
                        // line 39
                        echo "                        <div class=\"clearfix header-top-highlighted__section header-top-highlighted-second\">
                          ";
                        // line 40
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                        echo "
                        </div>
                        ";
                        // line 43
                        echo "                      </div>
                    ";
                    }
                    // line 45
                    echo "                  </div>
                </div>
                ";
                    // line 48
                    echo "              </div>
            </div>
            ";
                    // line 51
                    echo "          ";
                }
                // line 52
                echo "
          ";
                // line 53
                if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 53) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 53))) {
                    // line 54
                    echo "            ";
                    // line 55
                    echo "            <div class=\"clearfix header-top ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_background_color"] ?? null), 55, $this->source), "html", null, true);
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                    echo "\">
              <div class=\"";
                    // line 56
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_layout_container"] ?? null), 56, $this->source), "html", null, true);
                    echo " ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_horizontal_paddings"] ?? null), 56, $this->source), "html", null, true);
                    echo "\">
                ";
                    // line 58
                    echo "                <div class=\"clearfix header-top__container";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["header_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                    echo "\"
                  ";
                    // line 59
                    if ((($context["header_top_animations"] ?? null) == "enabled")) {
                        // line 60
                        echo "                    data-animate-effect=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_animation_effect"] ?? null), 60, $this->source), "html", null, true);
                        echo "\"
                  ";
                    }
                    // line 61
                    echo ">
                  <div class=\"row\">
                    ";
                    // line 63
                    if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 63)) {
                        // line 64
                        echo "                      <div class=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_first_grid_class"] ?? null), 64, $this->source), "html", null, true);
                        echo "\">
                        ";
                        // line 66
                        echo "                        <div class=\"clearfix header-top__section header-top-first\">
                          ";
                        // line 67
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
                        echo "
                        </div>
                        ";
                        // line 70
                        echo "                      </div>
                    ";
                    }
                    // line 72
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 72)) {
                        // line 73
                        echo "                      <div class=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_second_grid_class"] ?? null), 73, $this->source), "html", null, true);
                        echo "\">
                        ";
                        // line 75
                        echo "                        <div class=\"clearfix header-top__section header-top-second\">
                          ";
                        // line 76
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
                        echo "
                        </div>
                        ";
                        // line 79
                        echo "                      </div>
                    ";
                    }
                    // line 81
                    echo "                  </div>
                </div>
                ";
                    // line 84
                    echo "              </div>
            </div>
            ";
                    // line 87
                    echo "          ";
                }
                // line 88
                echo "
          ";
                // line 89
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 89) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 89)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 89))) {
                    // line 90
                    echo "            ";
                    // line 91
                    echo "            ";
                    $this->displayBlock('reading_progress_indicator', $context, $blocks);
                    // line 93
                    echo "            <header role=\"banner\" class=\"clearfix header ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_background_color"] ?? null), 93, $this->source), "html", null, true);
                    echo " ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_container_class"] ?? null), 93, $this->source), "html", null, true);
                    echo " ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_columns_class"] ?? null), 93, $this->source), "html", null, true);
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                    echo "\">
              <div class=\"";
                    // line 94
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_container"] ?? null), 94, $this->source), "html", null, true);
                    echo " ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_horizontal_paddings"] ?? null), 94, $this->source), "html", null, true);
                    echo "\">
                ";
                    // line 96
                    echo "                <div class=\"clearfix header__container\">
                  <div class=\"row align-items-center\">
                    ";
                    // line 98
                    if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 98)) {
                        // line 99
                        echo "                      <div class=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_first_grid_class"] ?? null), 99, $this->source), "html", null, true);
                        echo "\">
                        ";
                        // line 101
                        echo "                        <div class=\"clearfix header__section header-first\">
                          ";
                        // line 102
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
                        echo "
                        </div>
                        ";
                        // line 105
                        echo "                      </div>
                    ";
                    }
                    // line 107
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 107)) {
                        // line 108
                        echo "                      <div class=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_second_grid_class"] ?? null), 108, $this->source), "html", null, true);
                        echo "\">
                        ";
                        // line 110
                        echo "                        <div class=\"clearfix header__section header-second";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["slideout_mobile_menu_display"] ?? null)) ? (" d-none d-md-block") : ("")));
                        echo "\">
                          ";
                        // line 111
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
                        echo "
                        </div>
                        ";
                        // line 114
                        echo "                      </div>
                    ";
                    }
                    // line 116
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 116)) {
                        // line 117
                        echo "                      <div class=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_third_grid_class"] ?? null), 117, $this->source), "html", null, true);
                        echo "\">
                        ";
                        // line 119
                        echo "                        <div class=\"clearfix header__section header-third\">
                          ";
                        // line 120
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 120), 120, $this->source), "html", null, true);
                        echo "
                        </div>
                        ";
                        // line 123
                        echo "                      </div>
                    ";
                    }
                    // line 125
                    echo "                  </div>
                </div>
                ";
                    // line 128
                    echo "              </div>
            </header>
            ";
                    // line 131
                    echo "          ";
                }
                // line 132
                echo "
        </div>
        ";
                // line 135
                echo "      ";
            }
            // line 136
            echo "
      ";
            // line 137
            $this->displayBlock('internal_sticky_header', $context, $blocks);
            // line 139
            echo "
      ";
            // line 140
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 140)) {
                // line 141
                echo "        ";
                // line 142
                echo "        <div ";
                if (($context["banner_id"] ?? null)) {
                    echo "id=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_id"] ?? null), 142, $this->source), "html", null, true);
                    echo "\"";
                }
                echo " class=\"clearfix banner ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_background_color"] ?? null), 142, $this->source), "html", null, true);
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["banner_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["banner_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
          <div class=\"";
                // line 143
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_layout_container"] ?? null), 143, $this->source), "html", null, true);
                echo "\">
            ";
                // line 145
                echo "            <div class=\"clearfix banner__container\">
              <div class=\"row\">
                <div class=\"col-12\">
                  <div class=\"banner__section\">
                    ";
                // line 149
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 149), 149, $this->source), "html", null, true);
                echo "
                  </div>
                </div>
              </div>
            </div>
            ";
                // line 155
                echo "          </div>
        </div>
        ";
                // line 158
                echo "      ";
            }
            // line 159
            echo "
      ";
            // line 160
            $this->displayBlock('internal_banner', $context, $blocks);
            // line 187
            echo "
      ";
            // line 188
            if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_first", [], "any", false, false, true, 188) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_second", [], "any", false, false, true, 188)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_third", [], "any", false, false, true, 188))) {
                // line 189
                echo "        ";
                // line 190
                echo "        <div ";
                if (($context["hero_id"] ?? null)) {
                    echo "id=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_id"] ?? null), 190, $this->source), "html", null, true);
                    echo "\"";
                }
                echo " class=\"clearfix hero ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_background_color"] ?? null), 190, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["hero_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["hero_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
          <div class=\"";
                // line 191
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_layout_container"] ?? null), 191, $this->source), "html", null, true);
                echo "\">
            ";
                // line 193
                echo "            <div class=\"clearfix hero__container";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["hero_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
              ";
                // line 194
                if ((($context["hero_animations"] ?? null) == "enabled")) {
                    // line 195
                    echo "                data-animate-effect=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_animation_effect"] ?? null), 195, $this->source), "html", null, true);
                    echo "\"
              ";
                }
                // line 196
                echo ">
              <div class=\"row\">
                ";
                // line 198
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_first", [], "any", false, false, true, 198)) {
                    // line 199
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_first_grid_class"] ?? null), 199, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 201
                    echo "                    <div class=\"clearfix hero__section hero-first\">
                      ";
                    // line 202
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_first", [], "any", false, false, true, 202), 202, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 205
                    echo "                  </div>
                ";
                }
                // line 207
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_second", [], "any", false, false, true, 207)) {
                    // line 208
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_second_grid_class"] ?? null), 208, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 210
                    echo "                    <div class=\"clearfix hero__section hero-second\">
                      ";
                    // line 211
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_second", [], "any", false, false, true, 211), 211, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 214
                    echo "                  </div>
                ";
                }
                // line 216
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_third", [], "any", false, false, true, 216)) {
                    // line 217
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_third_grid_class"] ?? null), 217, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 219
                    echo "                    <div class=\"clearfix hero__section hero-third\">
                      ";
                    // line 220
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_third", [], "any", false, false, true, 220), 220, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 223
                    echo "                  </div>
                ";
                }
                // line 225
                echo "              </div>
            </div>
            ";
                // line 228
                echo "          </div>
        </div>
        ";
                // line 231
                echo "      ";
            }
            // line 232
            echo "
    </div>
  ";
        }
    }

    // line 91
    public function block_reading_progress_indicator($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 92
        echo "            ";
    }

    // line 137
    public function block_internal_sticky_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 138
        echo "      ";
    }

    // line 160
    public function block_internal_banner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 161
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_top", [], "any", false, false, true, 161)) {
            // line 162
            echo "          <div class=\"internal-banner-container\">
            ";
            // line 163
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("teamplus/banner-area"), "html", null, true);
            echo "
            ";
            // line 165
            echo "            <div ";
            if (($context["hero_top_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_top_id"] ?? null), 165, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix hero-top d-flex align-items-center ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_top_background_color"] ?? null), 165, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["hero_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["hero_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
              <div class=\"";
            // line 166
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_top_layout_container"] ?? null), 166, $this->source), "html", null, true);
            echo "\">
                ";
            // line 168
            echo "                <div class=\"clearfix hero-top__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["hero_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
                  ";
            // line 169
            if ((($context["hero_top_animations"] ?? null) == "enabled")) {
                // line 170
                echo "                    data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_top_animation_effect"] ?? null), 170, $this->source), "html", null, true);
                echo "\"
                  ";
            }
            // line 171
            echo ">
                  <div class=\"row\">
                    <div class=\"col-12\">
                      <div class=\"hero-top__section\">
                        ";
            // line 175
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_top", [], "any", false, false, true, 175), 175, $this->source), "html", null, true);
            echo "
                      </div>
                    </div>
                  </div>
                </div>
                ";
            // line 181
            echo "              </div>
            </div>
            ";
            // line 184
            echo "          </div>
        ";
        }
        // line 186
        echo "      ";
    }

    public function getTemplateName()
    {
        return "themes/custom/teamplus/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  608 => 186,  604 => 184,  600 => 181,  592 => 175,  586 => 171,  580 => 170,  578 => 169,  573 => 168,  569 => 166,  555 => 165,  551 => 163,  548 => 162,  545 => 161,  541 => 160,  537 => 138,  533 => 137,  529 => 92,  525 => 91,  518 => 232,  515 => 231,  511 => 228,  507 => 225,  503 => 223,  498 => 220,  495 => 219,  490 => 217,  487 => 216,  483 => 214,  478 => 211,  475 => 210,  470 => 208,  467 => 207,  463 => 205,  458 => 202,  455 => 201,  450 => 199,  448 => 198,  444 => 196,  438 => 195,  436 => 194,  431 => 193,  427 => 191,  413 => 190,  411 => 189,  409 => 188,  406 => 187,  404 => 160,  401 => 159,  398 => 158,  394 => 155,  386 => 149,  380 => 145,  376 => 143,  363 => 142,  361 => 141,  359 => 140,  356 => 139,  354 => 137,  351 => 136,  348 => 135,  344 => 132,  341 => 131,  337 => 128,  333 => 125,  329 => 123,  324 => 120,  321 => 119,  316 => 117,  313 => 116,  309 => 114,  304 => 111,  299 => 110,  294 => 108,  291 => 107,  287 => 105,  282 => 102,  279 => 101,  274 => 99,  272 => 98,  268 => 96,  262 => 94,  251 => 93,  248 => 91,  246 => 90,  244 => 89,  241 => 88,  238 => 87,  234 => 84,  230 => 81,  226 => 79,  221 => 76,  218 => 75,  213 => 73,  210 => 72,  206 => 70,  201 => 67,  198 => 66,  193 => 64,  191 => 63,  187 => 61,  181 => 60,  179 => 59,  174 => 58,  168 => 56,  161 => 55,  159 => 54,  157 => 53,  154 => 52,  151 => 51,  147 => 48,  143 => 45,  139 => 43,  134 => 40,  131 => 39,  126 => 37,  123 => 36,  119 => 34,  114 => 31,  111 => 30,  106 => 28,  104 => 27,  100 => 25,  94 => 24,  92 => 23,  87 => 22,  81 => 20,  74 => 19,  72 => 18,  70 => 17,  66 => 15,  64 => 14,  62 => 13,  58 => 11,  55 => 10,  51 => 9,  40 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/teamplus/templates/page--front.html.twig", "/var/www/selkirk.lp.ca/public_html/themes/custom/teamplus/templates/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 10, "block" => 91);
        static $filters = array("escape" => 19);
        static $functions = array("attach_library" => 163);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block'],
                ['escape'],
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
