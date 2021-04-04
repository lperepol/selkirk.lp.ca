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

/* themes/custom/teamplus/templates/page.html.twig */
class __TwigTemplate_11f06c9468117dcdf79c90f2cc1eb9753e96264822e4939b2b1e8aacab7e08a6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_top' => [$this, 'block_page_top'],
            'reading_progress_indicator' => [$this, 'block_reading_progress_indicator'],
            'internal_sticky_header' => [$this, 'block_internal_sticky_header'],
            'internal_banner' => [$this, 'block_internal_banner'],
            'main_content' => [$this, 'block_main_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 83
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideout", [], "any", false, false, true, 83)) {
            // line 84
            echo "  ";
            // line 85
            echo "  <div class=\"clearfix slideout ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slideout_background_color"] ?? null), 85, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["slideout_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["slideout_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
    ";
            // line 87
            echo "    <div class=\"clearfix slideout__container\">
      <div class=\"slideout__section\">
        ";
            // line 89
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideout", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
            echo "
      </div>
    </div>
    ";
            // line 93
            echo "  </div>
  ";
            // line 95
            echo "
  ";
            // line 97
            echo "  <button class=\"slideout-toggle slideout-toggle--fixed\"></button>
  ";
        }
        // line 100
        echo "
";
        // line 102
        echo "<div class=\"page-container\">

  ";
        // line 104
        $this->displayBlock('page_top', $context, $blocks);
        // line 330
        echo "
  ";
        // line 331
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "system_messages", [], "any", false, false, true, 331)) {
            // line 332
            echo "    <div class=\"system-messages clearfix\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-12\">
            ";
            // line 336
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "system_messages", [], "any", false, false, true, 336), 336, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 342
        echo "
  ";
        // line 343
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 343)) {
            // line 344
            echo "    ";
            // line 345
            echo "    <div ";
            if (($context["content_top_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_id"] ?? null), 345, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix content-top ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_background_color"] ?? null), 345, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 346
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_layout_container"] ?? null), 346, $this->source), "html", null, true);
            echo "\">
        ";
            // line 348
            echo "        <div class=\"clearfix content-top__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["content_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 349
            if ((($context["content_top_animations"] ?? null) == "enabled")) {
                // line 350
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_animation_effect"] ?? null), 350, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 351
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"content-top__section\">
                ";
            // line 355
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 355), 355, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 361
            echo "      </div>
    </div>
    ";
            // line 364
            echo "  ";
        }
        // line 365
        echo "
  ";
        // line 366
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top_highlighted", [], "any", false, false, true, 366)) {
            // line 367
            echo "    ";
            // line 368
            echo "    <div ";
            if (($context["content_top_highlighted_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_id"] ?? null), 368, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix content-top-highlighted ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_background_color"] ?? null), 368, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_separator"] ?? null), 368, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_top_highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_top_highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 369
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_layout_container"] ?? null), 369, $this->source), "html", null, true);
            echo "\">
        ";
            // line 371
            echo "        <div class=\"clearfix content-top-highlighted__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["content_top_highlighted_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 372
            if ((($context["content_top_highlighted_animations"] ?? null) == "enabled")) {
                // line 373
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_animation_effect"] ?? null), 373, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 374
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"content-top-highlighted__section\">
                ";
            // line 378
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top_highlighted", [], "any", false, false, true, 378), 378, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 384
            echo "      </div>
    </div>
    ";
            // line 387
            echo "  ";
        }
        // line 388
        echo "
  ";
        // line 390
        echo "  ";
        $this->displayBlock('main_content', $context, $blocks);
        // line 436
        echo "  ";
        // line 437
        echo "
  ";
        // line 438
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_first", [], "any", false, false, true, 438) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_second", [], "any", false, false, true, 438))) {
            // line 439
            echo "    ";
            // line 440
            echo "    <div ";
            if (($context["content_bottom_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_id"] ?? null), 440, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix content-bottom ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_background_color"] ?? null), 440, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_separator"] ?? null), 440, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 441
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_layout_container"] ?? null), 441, $this->source), "html", null, true);
            echo "\">
        ";
            // line 443
            echo "        <div class=\"clearfix content-bottom__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["content_bottom_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 444
            if ((($context["content_bottom_animations"] ?? null) == "enabled")) {
                // line 445
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_animation_effect"] ?? null), 445, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 446
            echo ">
          <div class=\"row\">
            ";
            // line 448
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_first", [], "any", false, false, true, 448)) {
                // line 449
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_first_grid_class"] ?? null), 449, $this->source), "html", null, true);
                echo "\">
                ";
                // line 451
                echo "                <div class=\"clearfix content-bottom__section content-bottom-first\">
                  ";
                // line 452
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_first", [], "any", false, false, true, 452), 452, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 455
                echo "              </div>
            ";
            }
            // line 457
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_second", [], "any", false, false, true, 457)) {
                // line 458
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_second_grid_class"] ?? null), 458, $this->source), "html", null, true);
                echo "\">
                ";
                // line 460
                echo "                <div class=\"clearfix content-bottom__section content-bottom-second\">
                  ";
                // line 461
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_second", [], "any", false, false, true, 461), 461, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 464
                echo "              </div>
            ";
            }
            // line 466
            echo "          </div>
        </div>
        ";
            // line 469
            echo "      </div>
    </div>
    ";
            // line 472
            echo "  ";
        }
        // line 473
        echo "
  ";
        // line 474
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_highlighted", [], "any", false, false, true, 474)) {
            // line 475
            echo "    ";
            // line 476
            echo "    <div ";
            if (($context["content_bottom_highlighted_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_highlighted_id"] ?? null), 476, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix content-bottom-highlighted ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_highlighted_background_color"] ?? null), 476, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_highlighted_separator"] ?? null), 476, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_bottom_highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_bottom_highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 477
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_highlighted_layout_container"] ?? null), 477, $this->source), "html", null, true);
            echo "\">
        ";
            // line 479
            echo "        <div class=\"clearfix content-bottom-highlighted__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["content_bottom_highlighted_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 480
            if ((($context["content_bottom_highlighted_animations"] ?? null) == "enabled")) {
                // line 481
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_highlighted_animation_effect"] ?? null), 481, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 482
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"content-bottom-highlighted__section\">
                ";
            // line 486
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_highlighted", [], "any", false, false, true, 486), 486, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 492
            echo "      </div>
    </div>
    ";
            // line 495
            echo "  ";
        }
        // line 496
        echo "
  ";
        // line 497
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 497)) {
            // line 498
            echo "    ";
            // line 499
            echo "    <div ";
            if (($context["featured_top_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_id"] ?? null), 499, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix featured-top ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_background_color"] ?? null), 499, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_separator"] ?? null), 499, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 500
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_layout_container"] ?? null), 500, $this->source), "html", null, true);
            echo "\">
        ";
            // line 502
            echo "        <div class=\"clearfix featured-top__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["featured_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 503
            if ((($context["featured_top_animations"] ?? null) == "enabled")) {
                // line 504
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_animation_effect"] ?? null), 504, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 505
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix featured-top__section\">
                ";
            // line 509
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 509), 509, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 515
            echo "      </div>
    </div>
    ";
            // line 518
            echo "  ";
        }
        // line 519
        echo "
  ";
        // line 520
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured", [], "any", false, false, true, 520)) {
            // line 521
            echo "    ";
            // line 522
            echo "    <div ";
            if (($context["featured_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_id"] ?? null), 522, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix featured ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_background_color"] ?? null), 522, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_separator"] ?? null), 522, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 523
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_layout_container"] ?? null), 523, $this->source), "html", null, true);
            echo "\">
        ";
            // line 525
            echo "        <div class=\"clearfix featured__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["featured_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 526
            if ((($context["featured_animations"] ?? null) == "enabled")) {
                // line 527
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_animation_effect"] ?? null), 527, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 528
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix featured__section\">
                ";
            // line 532
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured", [], "any", false, false, true, 532), 532, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 538
            echo "      </div>
    </div>
    ";
            // line 541
            echo "  ";
        }
        // line 542
        echo "
  ";
        // line 543
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom", [], "any", false, false, true, 543)) {
            // line 544
            echo "    ";
            // line 545
            echo "    <div ";
            if (($context["featured_bottom_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_id"] ?? null), 545, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix featured-bottom ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_background_color"] ?? null), 545, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_separator"] ?? null), 545, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 546
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_layout_container"] ?? null), 546, $this->source), "html", null, true);
            echo "\">
        ";
            // line 548
            echo "        <div class=\"clearfix featured-bottom__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["featured_bottom_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 549
            if ((($context["featured_bottom_animations"] ?? null) == "enabled")) {
                // line 550
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_animation_effect"] ?? null), 550, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 551
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix featured-bottom__section\">
                ";
            // line 555
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom", [], "any", false, false, true, 555), 555, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 561
            echo "      </div>
    </div>
    ";
            // line 564
            echo "  ";
        }
        // line 565
        echo "
  ";
        // line 566
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_featured", [], "any", false, false, true, 566)) {
            // line 567
            echo "    ";
            // line 568
            echo "    <div ";
            if (($context["sub_featured_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_id"] ?? null), 568, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix sub-featured ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_background_color"] ?? null), 568, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_separator"] ?? null), 568, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sub_featured_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sub_featured_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 569
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_layout_container"] ?? null), 569, $this->source), "html", null, true);
            echo "\">
        ";
            // line 571
            echo "        <div class=\"clearfix sub-featured__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["sub_featured_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 572
            if ((($context["sub_featured_animations"] ?? null) == "enabled")) {
                // line 573
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_animation_effect"] ?? null), 573, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 574
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix sub-featured__section\">
                ";
            // line 578
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_featured", [], "any", false, false, true, 578), 578, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 584
            echo "      </div>
    </div>
    ";
            // line 587
            echo "  ";
        }
        // line 588
        echo "
  ";
        // line 589
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted_top", [], "any", false, false, true, 589)) {
            // line 590
            echo "    ";
            // line 591
            echo "    <div ";
            if (($context["highlighted_top_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_id"] ?? null), 591, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix highlighted-top ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_background_color"] ?? null), 591, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_separator"] ?? null), 591, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 592
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_layout_container"] ?? null), 592, $this->source), "html", null, true);
            echo "\">
        ";
            // line 594
            echo "        <div class=\"clearfix highlighted-top__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["highlighted_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 595
            if ((($context["highlighted_top_animations"] ?? null) == "enabled")) {
                // line 596
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_animation_effect"] ?? null), 596, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 597
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix highlighted-top__section\">
                ";
            // line 601
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted_top", [], "any", false, false, true, 601), 601, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 607
            echo "      </div>
    </div>
    ";
            // line 610
            echo "  ";
        }
        // line 611
        echo "
  ";
        // line 612
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 612)) {
            // line 613
            echo "    ";
            // line 614
            echo "    <div ";
            if (($context["highlighted_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_id"] ?? null), 614, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix highlighted ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_background_color"] ?? null), 614, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_separator"] ?? null), 614, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 615
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_layout_container"] ?? null), 615, $this->source), "html", null, true);
            echo "\">
        ";
            // line 617
            echo "        <div class=\"clearfix highlighted__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["highlighted_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 618
            if ((($context["highlighted_animations"] ?? null) == "enabled")) {
                // line 619
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_animation_effect"] ?? null), 619, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 620
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix highlighted__section\">
                ";
            // line 624
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 624), 624, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 630
            echo "      </div>
    </div>
    ";
            // line 633
            echo "  ";
        }
        // line 634
        echo "
  ";
        // line 635
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sticky_footer", [], "any", false, false, true, 635)) {
            // line 636
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("teamplus/sticky-footer-init"), "html", null, true);
            echo "
    ";
            // line 638
            echo "    <div class=\"sticky-footer-container\">
      <div class=\"";
            // line 639
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sticky_footer_layout_container"] ?? null), 639, $this->source), "html", null, true);
            echo "\">
        <div class=\"row\">
          <div class=\"col-12\">
            <div class=\"collapsible-sticky-footer-trigger text-right\">
              <a class=\"";
            // line 643
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sticky_footer_background_color"] ?? null), 643, $this->source), "html", null, true);
            echo " mt-button m-0\" data-toggle=\"collapse\" href=\"#collapsible-sticky-footer\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapsible-sticky-footer\">
                ";
            // line 644
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sticky_footer_trigger_text"] ?? null), 644, $this->source), "html", null, true);
            echo "
                <span class=\"ml-2 text-center collapsible-sticky-footer-icon collapsible-sticky-footer__expand-icon\"><i class=\"fas fa-angle-down m-0\"></i></span>
                <span class=\"ml-2 text-center collapsible-sticky-footer-icon collapsible-sticky-footer__collapse-icon\"><i class=\"fas fa-angle-up m-0\"></i></span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class=\"clearfix sticky-footer ";
            // line 652
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sticky_footer_background_color"] ?? null), 652, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sticky_footer_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sticky_footer_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
        <div class=\"";
            // line 653
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sticky_footer_layout_container"] ?? null), 653, $this->source), "html", null, true);
            echo "\">
          ";
            // line 655
            echo "          <div class=\"clearfix sticky-footer__container\">
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"collapse show\" id=\"collapsible-sticky-footer\">
                  ";
            // line 660
            echo "                  <div class=\"clearfix sticky-footer__section\">
                    ";
            // line 661
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sticky_footer", [], "any", false, false, true, 661), 661, $this->source), "html", null, true);
            echo "
                  </div>
                  ";
            // line 664
            echo "                </div>
              </div>
            </div>
          </div>
          ";
            // line 669
            echo "        </div>
      </div>
    </div>
    ";
            // line 673
            echo "    <div class=\"sticky-footer-placeholder\"></div>
  ";
        }
        // line 675
        echo "
  ";
        // line 676
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_first", [], "any", false, false, true, 676) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_second", [], "any", false, false, true, 676))) {
            // line 677
            echo "    ";
            // line 678
            echo "    <div ";
            if (($context["footer_top_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_id"] ?? null), 678, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix footer-top ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_regions"] ?? null), 678, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_background_color"] ?? null), 678, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_separator"] ?? null), 678, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 679
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_layout_container"] ?? null), 679, $this->source), "html", null, true);
            echo "\">
        ";
            // line 681
            echo "        <div class=\"clearfix footer-top__container mt-style-custom-all";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 682
            if ((($context["footer_top_animations"] ?? null) == "enabled")) {
                // line 683
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_animation_effect"] ?? null), 683, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 684
            echo ">
          <div class=\"row\">
            ";
            // line 686
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_first", [], "any", false, false, true, 686)) {
                // line 687
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_first_grid_class"] ?? null), 687, $this->source), "html", null, true);
                echo "\">
                ";
                // line 689
                echo "                <div class=\"clearfix footer-top__section footer-top-first\">
                  ";
                // line 690
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_first", [], "any", false, false, true, 690), 690, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 693
                echo "              </div>
            ";
            }
            // line 695
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_second", [], "any", false, false, true, 695)) {
                // line 696
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_second_grid_class"] ?? null), 696, $this->source), "html", null, true);
                echo "\">
                ";
                // line 698
                echo "                <div class=\"clearfix footer-top__section footer-top-second\">
                  ";
                // line 699
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_second", [], "any", false, false, true, 699), 699, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 702
                echo "              </div>
            ";
            }
            // line 704
            echo "          </div>
        </div>
        ";
            // line 707
            echo "      </div>
    </div>
    ";
            // line 710
            echo "  ";
        }
        // line 711
        echo "

  ";
        // line 713
        if ((((((((((((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 713) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 713)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 713)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 713)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 713)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_first", [], "any", false, false, true, 713)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_second", [], "any", false, false, true, 713)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_third", [], "any", false, false, true, 713)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_fourth", [], "any", false, false, true, 713)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_first", [], "any", false, false, true, 713)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_second", [], "any", false, false, true, 713)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_third", [], "any", false, false, true, 713)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_first", [], "any", false, false, true, 713)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 713))) {
            // line 714
            echo "    <div class=\"footers-container\">

      ";
            // line 716
            if (((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 716) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 716)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 716)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 716)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 716))) {
                // line 717
                echo "        ";
                // line 718
                echo "        <footer ";
                if (($context["footer_id"] ?? null)) {
                    echo "id=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_id"] ?? null), 718, $this->source), "html", null, true);
                    echo "\"";
                }
                echo " class=\"clearfix footer ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_background_color"] ?? null), 718, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_separator"] ?? null), 718, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
          <div class=\"";
                // line 719
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_layout_container"] ?? null), 719, $this->source), "html", null, true);
                echo "\">
            <div class=\"clearfix footer__container\">
              <div class=\"row\">
                ";
                // line 722
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 722)) {
                    // line 723
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_first_grid_class"] ?? null), 723, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 725
                    echo "                    <div class=\"clearfix footer__section footer-first";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                    echo "\"
                      ";
                    // line 726
                    if ((($context["footer_animations"] ?? null) == "enabled")) {
                        // line 727
                        echo "                        data-animate-effect=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null), 727, $this->source), "html", null, true);
                        echo "\"
                      ";
                    }
                    // line 728
                    echo ">
                      ";
                    // line 729
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 729), 729, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 732
                    echo "                  </div>
                ";
                }
                // line 734
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 734)) {
                    // line 735
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_second_grid_class"] ?? null), 735, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 737
                    echo "                    <div class=\"clearfix footer__section footer-second";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                    echo "\"
                      ";
                    // line 738
                    if ((($context["footer_animations"] ?? null) == "enabled")) {
                        // line 739
                        echo "                        data-animate-effect=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null), 739, $this->source), "html", null, true);
                        echo "\"
                      ";
                    }
                    // line 740
                    echo ">
                      ";
                    // line 741
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 741), 741, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 744
                    echo "                  </div>
                ";
                }
                // line 746
                echo "                <div class=\"clearfix ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_4_columns_clearfix_first"] ?? null), 746, $this->source), "html", null, true);
                echo "\"></div>
                ";
                // line 747
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 747)) {
                    // line 748
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_third_grid_class"] ?? null), 748, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 750
                    echo "                    <div class=\"clearfix footer__section footer-third";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                    echo "\"
                      ";
                    // line 751
                    if ((($context["footer_animations"] ?? null) == "enabled")) {
                        // line 752
                        echo "                        data-animate-effect=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null), 752, $this->source), "html", null, true);
                        echo "\"
                      ";
                    }
                    // line 753
                    echo ">
                      ";
                    // line 754
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 754), 754, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 757
                    echo "                  </div>
                ";
                }
                // line 759
                echo "                <div class=\"clearfix ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_4_columns_clearfix_second"] ?? null), 759, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_5_columns_clearfix"] ?? null), 759, $this->source), "html", null, true);
                echo "\"></div>
                ";
                // line 760
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 760)) {
                    // line 761
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_fourth_grid_class"] ?? null), 761, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 763
                    echo "                    <div class=\"clearfix footer__section footer-fourth";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                    echo "\"
                      ";
                    // line 764
                    if ((($context["footer_animations"] ?? null) == "enabled")) {
                        // line 765
                        echo "                        data-animate-effect=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null), 765, $this->source), "html", null, true);
                        echo "\"
                      ";
                    }
                    // line 766
                    echo ">
                      ";
                    // line 767
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 767), 767, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 770
                    echo "                  </div>
                ";
                }
                // line 772
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 772)) {
                    // line 773
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_fifth_grid_class"] ?? null), 773, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 775
                    echo "                    <div class=\"clearfix footer__section footer-fifth";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                    echo "\"
                      ";
                    // line 776
                    if ((($context["footer_animations"] ?? null) == "enabled")) {
                        // line 777
                        echo "                        data-animate-effect=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null), 777, $this->source), "html", null, true);
                        echo "\"
                      ";
                    }
                    // line 778
                    echo ">
                      ";
                    // line 779
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 779), 779, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 782
                    echo "                  </div>
                ";
                }
                // line 784
                echo "              </div>
            </div>
          </div>
        </footer>
        ";
                // line 789
                echo "      ";
            }
            // line 790
            echo "
      ";
            // line 791
            if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_first", [], "any", false, false, true, 791) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_second", [], "any", false, false, true, 791)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_third", [], "any", false, false, true, 791)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_fourth", [], "any", false, false, true, 791))) {
                // line 792
                echo "        ";
                // line 793
                echo "        <div ";
                if (($context["footer_bottom_id"] ?? null)) {
                    echo "id=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_id"] ?? null), 793, $this->source), "html", null, true);
                    echo "\"";
                }
                echo " class=\"clearfix footer-bottom ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_background_color"] ?? null), 793, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_separator"] ?? null), 793, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
          <div class=\"";
                // line 794
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_layout_container"] ?? null), 794, $this->source), "html", null, true);
                echo "\">
            ";
                // line 796
                echo "            <div class=\"clearfix footer-bottom__container\">
              <div class=\"row\">
                ";
                // line 798
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_first", [], "any", false, false, true, 798)) {
                    // line 799
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_first_grid_class"] ?? null), 799, $this->source), "html", null, true);
                    echo "\">
                    <div class=\"clearfix footer-bottom__section\">
                      ";
                    // line 801
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_first", [], "any", false, false, true, 801), 801, $this->source), "html", null, true);
                    echo "
                    </div>
                  </div>
                ";
                }
                // line 805
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_second", [], "any", false, false, true, 805)) {
                    // line 806
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_second_grid_class"] ?? null), 806, $this->source), "html", null, true);
                    echo "\">
                    <div class=\"clearfix footer-bottom__section\">
                      ";
                    // line 808
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_second", [], "any", false, false, true, 808), 808, $this->source), "html", null, true);
                    echo "
                    </div>
                  </div>
                ";
                }
                // line 812
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_third", [], "any", false, false, true, 812)) {
                    // line 813
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_third_grid_class"] ?? null), 813, $this->source), "html", null, true);
                    echo "\">
                    <div class=\"clearfix footer-bottom__section\">
                      ";
                    // line 815
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_third", [], "any", false, false, true, 815), 815, $this->source), "html", null, true);
                    echo "
                    </div>
                  </div>
                ";
                }
                // line 819
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_fourth", [], "any", false, false, true, 819)) {
                    // line 820
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_fourth_grid_class"] ?? null), 820, $this->source), "html", null, true);
                    echo "\">
                    <div class=\"clearfix footer-bottom__section\">
                      ";
                    // line 822
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_fourth", [], "any", false, false, true, 822), 822, $this->source), "html", null, true);
                    echo "
                    </div>
                  </div>
                ";
                }
                // line 826
                echo "              </div>
            </div>
            ";
                // line 829
                echo "          </div>
        </div>
        ";
                // line 832
                echo "      ";
            }
            // line 833
            echo "
      ";
            // line 834
            if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_first", [], "any", false, false, true, 834) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_second", [], "any", false, false, true, 834)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_third", [], "any", false, false, true, 834))) {
                // line 835
                echo "        ";
                // line 836
                echo "        <div ";
                if (($context["subfooter_top_id"] ?? null)) {
                    echo "id=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_top_id"] ?? null), 836, $this->source), "html", null, true);
                    echo "\"";
                }
                echo " class=\"clearfix subfooter-top ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_top_background_color"] ?? null), 836, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_top_separator"] ?? null), 836, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["subfooter_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["subfooter_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
          <div class=\"";
                // line 837
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_top_layout_container"] ?? null), 837, $this->source), "html", null, true);
                echo "\">
            ";
                // line 839
                echo "            <div class=\"clearfix subfooter-top__container\">
              <div class=\"row align-items-center\">
                ";
                // line 841
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_first", [], "any", false, false, true, 841)) {
                    // line 842
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_top_first_grid_class"] ?? null), 842, $this->source), "html", null, true);
                    echo "\">
                    <div class=\"clearfix subfooter-top__section\">
                      ";
                    // line 844
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_first", [], "any", false, false, true, 844), 844, $this->source), "html", null, true);
                    echo "
                    </div>
                  </div>
                ";
                }
                // line 848
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_second", [], "any", false, false, true, 848)) {
                    // line 849
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_top_second_grid_class"] ?? null), 849, $this->source), "html", null, true);
                    echo "\">
                    <div class=\"clearfix subfooter-top__section\">
                      ";
                    // line 851
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_second", [], "any", false, false, true, 851), 851, $this->source), "html", null, true);
                    echo "
                    </div>
                  </div>
                ";
                }
                // line 855
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_third", [], "any", false, false, true, 855)) {
                    // line 856
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_top_third_grid_class"] ?? null), 856, $this->source), "html", null, true);
                    echo "\">
                    <div class=\"clearfix subfooter-top__section\">
                      ";
                    // line 858
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_third", [], "any", false, false, true, 858), 858, $this->source), "html", null, true);
                    echo "
                    </div>
                  </div>
                ";
                }
                // line 862
                echo "              </div>
            </div>
            ";
                // line 865
                echo "          </div>
        </div>
        ";
                // line 868
                echo "      ";
            }
            // line 869
            echo "
      ";
            // line 870
            if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_first", [], "any", false, false, true, 870) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 870))) {
                // line 871
                echo "        ";
                // line 872
                echo "        <div ";
                if (($context["subfooter_id"] ?? null)) {
                    echo "id=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_id"] ?? null), 872, $this->source), "html", null, true);
                    echo "\"";
                }
                echo " class=\"clearfix subfooter ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_background_color"] ?? null), 872, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_separator"] ?? null), 872, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["subfooter_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["subfooter_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
          <div class=\"";
                // line 873
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_layout_container"] ?? null), 873, $this->source), "html", null, true);
                echo "\">
            ";
                // line 875
                echo "            <div class=\"clearfix subfooter__container\">
              <div class=\"row align-items-center\">
                ";
                // line 877
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_first", [], "any", false, false, true, 877)) {
                    // line 878
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_first_grid_class"] ?? null), 878, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 880
                    echo "                    <div class=\"clearfix subfooter__section subfooter-first\">
                      ";
                    // line 881
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_first", [], "any", false, false, true, 881), 881, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 884
                    echo "                  </div>
                ";
                }
                // line 886
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 886)) {
                    // line 887
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_second_grid_class"] ?? null), 887, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 889
                    echo "                    <div class=\"clearfix subfooter__section subfooter-second\">
                      ";
                    // line 890
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 890), 890, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 893
                    echo "                  </div>
                ";
                }
                // line 895
                echo "              </div>
            </div>
            ";
                // line 898
                echo "          </div>
        </div>
        ";
                // line 901
                echo "      ";
            }
            // line 902
            echo "
    </div>
  ";
        }
        // line 905
        echo "
  ";
        // line 906
        if ((($context["mobile_menu_widget_display"] ?? null) && ($context["mobile_search_enabled"] ?? null))) {
            // line 907
            echo "    ";
            // line 908
            echo "    <div class=\"clearfix mt-mobile-menu-widget-wrapper\">
      <div class=\"mt-mobile-menu-overlay\" style=\"display:none\">
        ";
            // line 910
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "mobile_menu_widget", [], "any", false, false, true, 910)) {
                // line 911
                echo "          <div class=\"mt-mobile-menu-overlay-content region--shade-background container-fluid pt-4\">
            <div class=\"row\">
              <div class=\"col-12\">
                ";
                // line 914
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "mobile_menu_widget", [], "any", false, false, true, 914), 914, $this->source), "html", null, true);
                echo "
              </div>
            </div>
          </div>
        ";
            }
            // line 919
            echo "        <button type=\"button\" class=\"mt-dismiss-button mt-button region--shade-background ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["mobile_menu_widget_sticky"] ?? null)) ? ("mt-dismiss-button--sticky") : ("")));
            echo "\">
          <span class=\"sr-only\">";
            // line 920
            echo t("Dismiss mobile overlay area", array());
            echo "</span><i class=\"fas fa-times\"></i>
        </button>
      </div>

      <form method=\"get\" action=\"";
            // line 924
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("search.view_node_search"));
            echo "\">
        <div class=\"clearfix mt-mobile-menu-widget mt-container ";
            // line 925
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["mobile_menu_widget_sticky"] ?? null)) ? ("mt-sticky") : ("")));
            echo "\">
          <div class=\"mt-search-icon\">
            <i class=\"fas fa-search\"></i>
          </div>
          <input type=\"text\" name=\"keys\" class=\"mt-input\" placeholder=\"Search...\">
          <div class=\"mt-clear-icon\">
            <span class=\"sr-only\">";
            // line 931
            echo t("Clear keys input element", array());
            echo "</span><i class=\"fas fa-times-circle\"></i>
          </div>
          <button type=\"submit\" class=\"mt-submit-button mt-button\">
            <span class=\"sr-only\">";
            // line 934
            echo t("Submit search", array());
            echo "</span><i class=\"fas fa-arrow-right\"></i>
          </button>
          <button type=\"button\" class=\"mt-menu-button mt-button\">
            <span class=\"sr-only\">";
            // line 937
            echo t("Open mobile overlay area", array());
            echo "</span><i class=\"fas fa-bars\"></i>
          </button>
        </div>
      </form>
    </div>
  ";
        }
        // line 943
        echo "  ";
        // line 944
        echo "
  ";
        // line 945
        if (($context["scroll_to_top_display"] ?? null)) {
            // line 946
            echo "  ";
            // line 947
            echo "    <div class=\"to-top\"><i class=\"fas ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["scroll_to_top_icon"] ?? null), 947, $this->source), "html", null, true);
            echo "\"></i></div>
  ";
            // line 949
            echo "  ";
        }
        // line 950
        echo "
</div>
";
    }

    // line 104
    public function block_page_top($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 105
        echo "    ";
        if (((((((((((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 105) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 105)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 105)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 105)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 105)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 105)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 105)) || ($context["post_progress"] ?? null)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 105)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_top", [], "any", false, false, true, 105)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_first", [], "any", false, false, true, 105)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_second", [], "any", false, false, true, 105)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_third", [], "any", false, false, true, 105))) {
            // line 106
            echo "    <div class=\"page-top-container\">
      ";
            // line 107
            if ((((((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 107) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 107)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 107)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 107)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 107)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 107)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 107)) || ($context["post_progress"] ?? null))) {
                // line 108
                echo "        ";
                // line 109
                echo "        <div class=\"header-container\">

          ";
                // line 111
                if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 111) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 111))) {
                    // line 112
                    echo "            ";
                    // line 113
                    echo "            <div class=\"clearfix header-top-highlighted ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_background_color"] ?? null), 113, $this->source), "html", null, true);
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                    echo "\">
              <div class=\"";
                    // line 114
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_layout_container"] ?? null), 114, $this->source), "html", null, true);
                    echo " ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_horizontal_paddings"] ?? null), 114, $this->source), "html", null, true);
                    echo "\">
                ";
                    // line 116
                    echo "                <div class=\"clearfix header-top-highlighted__container";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["header_top_highlighted_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                    echo "\"
                  ";
                    // line 117
                    if ((($context["header_top_highlighted_animations"] ?? null) == "enabled")) {
                        // line 118
                        echo "                    data-animate-effect=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_animation_effect"] ?? null), 118, $this->source), "html", null, true);
                        echo "\"
                  ";
                    }
                    // line 119
                    echo ">
                  <div class=\"row\">
                    ";
                    // line 121
                    if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 121)) {
                        // line 122
                        echo "                      <div class=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_first_grid_class"] ?? null), 122, $this->source), "html", null, true);
                        echo "\">
                        ";
                        // line 124
                        echo "                        <div class=\"clearfix header-top-highlighted__section header-top-highlighted-first\">
                          ";
                        // line 125
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 125), 125, $this->source), "html", null, true);
                        echo "
                        </div>
                        ";
                        // line 128
                        echo "                      </div>
                    ";
                    }
                    // line 130
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 130)) {
                        // line 131
                        echo "                      <div class=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_second_grid_class"] ?? null), 131, $this->source), "html", null, true);
                        echo "\">
                        ";
                        // line 133
                        echo "                        <div class=\"clearfix header-top-highlighted__section header-top-highlighted-second\">
                          ";
                        // line 134
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 134), 134, $this->source), "html", null, true);
                        echo "
                        </div>
                        ";
                        // line 137
                        echo "                      </div>
                    ";
                    }
                    // line 139
                    echo "                  </div>
                </div>
                ";
                    // line 142
                    echo "              </div>
            </div>
            ";
                    // line 145
                    echo "          ";
                }
                // line 146
                echo "
          ";
                // line 147
                if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 147) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 147))) {
                    // line 148
                    echo "            ";
                    // line 149
                    echo "            <div class=\"clearfix header-top ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_background_color"] ?? null), 149, $this->source), "html", null, true);
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                    echo "\">
              <div class=\"";
                    // line 150
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_layout_container"] ?? null), 150, $this->source), "html", null, true);
                    echo " ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_horizontal_paddings"] ?? null), 150, $this->source), "html", null, true);
                    echo "\">
                ";
                    // line 152
                    echo "                <div class=\"clearfix header-top__container";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["header_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                    echo "\"
                  ";
                    // line 153
                    if ((($context["header_top_animations"] ?? null) == "enabled")) {
                        // line 154
                        echo "                    data-animate-effect=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_animation_effect"] ?? null), 154, $this->source), "html", null, true);
                        echo "\"
                  ";
                    }
                    // line 155
                    echo ">
                  <div class=\"row\">
                    ";
                    // line 157
                    if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 157)) {
                        // line 158
                        echo "                      <div class=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_first_grid_class"] ?? null), 158, $this->source), "html", null, true);
                        echo "\">
                        ";
                        // line 160
                        echo "                        <div class=\"clearfix header-top__section header-top-first\">
                          ";
                        // line 161
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 161), 161, $this->source), "html", null, true);
                        echo "
                        </div>
                        ";
                        // line 164
                        echo "                      </div>
                    ";
                    }
                    // line 166
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 166)) {
                        // line 167
                        echo "                      <div class=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_second_grid_class"] ?? null), 167, $this->source), "html", null, true);
                        echo "\">
                        ";
                        // line 169
                        echo "                        <div class=\"clearfix header-top__section header-top-second\">
                          ";
                        // line 170
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 170), 170, $this->source), "html", null, true);
                        echo "
                        </div>
                        ";
                        // line 173
                        echo "                      </div>
                    ";
                    }
                    // line 175
                    echo "                  </div>
                </div>
                ";
                    // line 178
                    echo "              </div>
            </div>
            ";
                    // line 181
                    echo "          ";
                }
                // line 182
                echo "
          ";
                // line 183
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 183) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 183)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 183))) {
                    // line 184
                    echo "            ";
                    // line 185
                    echo "            ";
                    $this->displayBlock('reading_progress_indicator', $context, $blocks);
                    // line 187
                    echo "            <header role=\"banner\" class=\"clearfix header ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_background_color"] ?? null), 187, $this->source), "html", null, true);
                    echo " ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_container_class"] ?? null), 187, $this->source), "html", null, true);
                    echo " ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_columns_class"] ?? null), 187, $this->source), "html", null, true);
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                    echo "\">
              <div class=\"";
                    // line 188
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_container"] ?? null), 188, $this->source), "html", null, true);
                    echo " ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_horizontal_paddings"] ?? null), 188, $this->source), "html", null, true);
                    echo "\">
                ";
                    // line 190
                    echo "                <div class=\"clearfix header__container\">
                  <div class=\"row align-items-center\">
                    ";
                    // line 192
                    if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 192)) {
                        // line 193
                        echo "                      <div class=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_first_grid_class"] ?? null), 193, $this->source), "html", null, true);
                        echo "\">
                        ";
                        // line 195
                        echo "                        <div class=\"clearfix header__section header-first\">
                          ";
                        // line 196
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 196), 196, $this->source), "html", null, true);
                        echo "
                        </div>
                        ";
                        // line 199
                        echo "                      </div>
                    ";
                    }
                    // line 201
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 201)) {
                        // line 202
                        echo "                      <div class=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_second_grid_class"] ?? null), 202, $this->source), "html", null, true);
                        echo "\">
                        ";
                        // line 204
                        echo "                        <div class=\"clearfix header__section header-second";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["slideout_mobile_menu_display"] ?? null)) ? (" d-none d-md-block") : ("")));
                        echo "\">
                          ";
                        // line 205
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 205), 205, $this->source), "html", null, true);
                        echo "
                        </div>
                        ";
                        // line 208
                        echo "                      </div>
                    ";
                    }
                    // line 210
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 210)) {
                        // line 211
                        echo "                      <div class=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_third_grid_class"] ?? null), 211, $this->source), "html", null, true);
                        echo "\">
                        ";
                        // line 213
                        echo "                        <div class=\"clearfix header__section header-third\">
                          ";
                        // line 214
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 214), 214, $this->source), "html", null, true);
                        echo "
                        </div>
                        ";
                        // line 217
                        echo "                      </div>
                    ";
                    }
                    // line 219
                    echo "                  </div>
                </div>
                ";
                    // line 222
                    echo "              </div>
            </header>
            ";
                    // line 225
                    echo "          ";
                }
                // line 226
                echo "
        </div>
        ";
                // line 229
                echo "      ";
            }
            // line 230
            echo "
      ";
            // line 231
            $this->displayBlock('internal_sticky_header', $context, $blocks);
            // line 233
            echo "
      ";
            // line 234
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 234)) {
                // line 235
                echo "        ";
                // line 236
                echo "        <div ";
                if (($context["banner_id"] ?? null)) {
                    echo "id=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_id"] ?? null), 236, $this->source), "html", null, true);
                    echo "\"";
                }
                echo " class=\"clearfix banner ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_background_color"] ?? null), 236, $this->source), "html", null, true);
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["banner_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["banner_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
          <div class=\"";
                // line 237
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_layout_container"] ?? null), 237, $this->source), "html", null, true);
                echo "\">
            ";
                // line 239
                echo "            <div class=\"clearfix banner__container\">
              <div class=\"row\">
                <div class=\"col-12\">
                  <div class=\"banner__section\">
                    ";
                // line 243
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 243), 243, $this->source), "html", null, true);
                echo "
                  </div>
                </div>
              </div>
            </div>
            ";
                // line 249
                echo "          </div>
        </div>
        ";
                // line 252
                echo "      ";
            }
            // line 253
            echo "
      ";
            // line 254
            $this->displayBlock('internal_banner', $context, $blocks);
            // line 281
            echo "
      ";
            // line 282
            if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_first", [], "any", false, false, true, 282) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_second", [], "any", false, false, true, 282)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_third", [], "any", false, false, true, 282))) {
                // line 283
                echo "        ";
                // line 284
                echo "        <div ";
                if (($context["hero_id"] ?? null)) {
                    echo "id=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_id"] ?? null), 284, $this->source), "html", null, true);
                    echo "\"";
                }
                echo " class=\"clearfix hero ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_background_color"] ?? null), 284, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["hero_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["hero_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
          <div class=\"";
                // line 285
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_layout_container"] ?? null), 285, $this->source), "html", null, true);
                echo "\">
            ";
                // line 287
                echo "            <div class=\"clearfix hero__container";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["hero_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
              ";
                // line 288
                if ((($context["hero_animations"] ?? null) == "enabled")) {
                    // line 289
                    echo "                data-animate-effect=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_animation_effect"] ?? null), 289, $this->source), "html", null, true);
                    echo "\"
              ";
                }
                // line 290
                echo ">
              <div class=\"row\">
                ";
                // line 292
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_first", [], "any", false, false, true, 292)) {
                    // line 293
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_first_grid_class"] ?? null), 293, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 295
                    echo "                    <div class=\"clearfix hero__section hero-first\">
                      ";
                    // line 296
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_first", [], "any", false, false, true, 296), 296, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 299
                    echo "                  </div>
                ";
                }
                // line 301
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_second", [], "any", false, false, true, 301)) {
                    // line 302
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_second_grid_class"] ?? null), 302, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 304
                    echo "                    <div class=\"clearfix hero__section hero-second\">
                      ";
                    // line 305
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_second", [], "any", false, false, true, 305), 305, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 308
                    echo "                  </div>
                ";
                }
                // line 310
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_third", [], "any", false, false, true, 310)) {
                    // line 311
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_third_grid_class"] ?? null), 311, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 313
                    echo "                    <div class=\"clearfix hero__section hero-third\">
                      ";
                    // line 314
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_third", [], "any", false, false, true, 314), 314, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 317
                    echo "                  </div>
                ";
                }
                // line 319
                echo "              </div>
            </div>
            ";
                // line 322
                echo "          </div>
        </div>
        ";
                // line 325
                echo "      ";
            }
            // line 326
            echo "
    </div>
    ";
        }
        // line 329
        echo "  ";
    }

    // line 185
    public function block_reading_progress_indicator($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 186
        echo "            ";
    }

    // line 231
    public function block_internal_sticky_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 232
        echo "      ";
    }

    // line 254
    public function block_internal_banner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 255
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_top", [], "any", false, false, true, 255)) {
            // line 256
            echo "          <div class=\"internal-banner-container\">
            ";
            // line 257
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("teamplus/banner-area"), "html", null, true);
            echo "
            ";
            // line 259
            echo "            <div ";
            if (($context["hero_top_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_top_id"] ?? null), 259, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix hero-top d-flex align-items-center ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_top_background_color"] ?? null), 259, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["hero_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["hero_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
              <div class=\"";
            // line 260
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_top_layout_container"] ?? null), 260, $this->source), "html", null, true);
            echo "\">
                ";
            // line 262
            echo "                <div class=\"clearfix hero-top__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["hero_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
                  ";
            // line 263
            if ((($context["hero_top_animations"] ?? null) == "enabled")) {
                // line 264
                echo "                    data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_top_animation_effect"] ?? null), 264, $this->source), "html", null, true);
                echo "\"
                  ";
            }
            // line 265
            echo ">
                  <div class=\"row\">
                    <div class=\"col-12\">
                      <div class=\"hero-top__section\">
                        ";
            // line 269
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_top", [], "any", false, false, true, 269), 269, $this->source), "html", null, true);
            echo "
                      </div>
                    </div>
                  </div>
                </div>
                ";
            // line 275
            echo "              </div>
            </div>
            ";
            // line 278
            echo "          </div>
        ";
        }
        // line 280
        echo "      ";
    }

    // line 390
    public function block_main_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 391
        echo "    <div ";
        if (($context["main_content_id"] ?? null)) {
            echo "id=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_id"] ?? null), 391, $this->source), "html", null, true);
            echo "\"";
        }
        echo " class=\"clearfix main-content ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_background_color"] ?? null), 391, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_separator"] ?? null), 391, $this->source), "html", null, true);
        echo "\">
      <div class=\"";
        // line 392
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_layout_container"] ?? null), 392, $this->source), "html", null, true);
        echo "\">
        <div class=\"clearfix main-content__container\">
          <div class=\"row\">
            <section class=\"";
        // line 395
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_grid_class"] ?? null), 395, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_paddings"] ?? null), 395, $this->source), "html", null, true);
        echo "\">
              ";
        // line 397
        echo "              <div class=\"clearfix main-content__section";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["main_content_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["main_content_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["main_content_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
        echo "\"
                ";
        // line 398
        if ((($context["main_content_animations"] ?? null) == "enabled")) {
            // line 399
            echo "                  data-animate-effect=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_animation_effect"] ?? null), 399, $this->source), "html", null, true);
            echo "\"
                ";
        }
        // line 400
        echo ">
                ";
        // line 401
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 401)) {
            // line 402
            echo "                  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 402), 402, $this->source), "html", null, true);
            echo "
                ";
        }
        // line 404
        echo "              </div>
              ";
        // line 406
        echo "            </section>
            ";
        // line 407
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 407)) {
            // line 408
            echo "              <aside class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_grid_class"] ?? null), 408, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_paddings"] ?? null), 408, $this->source), "html", null, true);
            echo "\">
                ";
            // line 410
            echo "                <section class=\"sidebar__section sidebar-first clearfix";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["sidebar_first_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_first_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_first_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\"
                  ";
            // line 411
            if ((($context["sidebar_first_animations"] ?? null) == "enabled")) {
                // line 412
                echo "                    data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_animation_effect"] ?? null), 412, $this->source), "html", null, true);
                echo "\"
                  ";
            }
            // line 413
            echo ">
                  ";
            // line 414
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 414), 414, $this->source), "html", null, true);
            echo "
                </section>
                ";
            // line 417
            echo "              </aside>
            ";
        }
        // line 419
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 419)) {
            // line 420
            echo "              <aside class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_grid_class"] ?? null), 420, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_paddings"] ?? null), 420, $this->source), "html", null, true);
            echo "\">
                ";
            // line 422
            echo "                <section class=\"sidebar__section sidebar-second clearfix";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["sidebar_second_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_second_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_second_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\"
                  ";
            // line 423
            if ((($context["sidebar_second_animations"] ?? null) == "enabled")) {
                // line 424
                echo "                    data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_animation_effect"] ?? null), 424, $this->source), "html", null, true);
                echo "\"
                  ";
            }
            // line 425
            echo ">
                  ";
            // line 426
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 426), 426, $this->source), "html", null, true);
            echo "
                </section>
                ";
            // line 429
            echo "              </aside>
            ";
        }
        // line 431
        echo "          </div>
        </div>
      </div>
    </div>
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/teamplus/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2203 => 431,  2199 => 429,  2194 => 426,  2191 => 425,  2185 => 424,  2183 => 423,  2176 => 422,  2169 => 420,  2166 => 419,  2162 => 417,  2157 => 414,  2154 => 413,  2148 => 412,  2146 => 411,  2139 => 410,  2132 => 408,  2130 => 407,  2127 => 406,  2124 => 404,  2118 => 402,  2116 => 401,  2113 => 400,  2107 => 399,  2105 => 398,  2098 => 397,  2092 => 395,  2086 => 392,  2073 => 391,  2069 => 390,  2065 => 280,  2061 => 278,  2057 => 275,  2049 => 269,  2043 => 265,  2037 => 264,  2035 => 263,  2030 => 262,  2026 => 260,  2012 => 259,  2008 => 257,  2005 => 256,  2002 => 255,  1998 => 254,  1994 => 232,  1990 => 231,  1986 => 186,  1982 => 185,  1978 => 329,  1973 => 326,  1970 => 325,  1966 => 322,  1962 => 319,  1958 => 317,  1953 => 314,  1950 => 313,  1945 => 311,  1942 => 310,  1938 => 308,  1933 => 305,  1930 => 304,  1925 => 302,  1922 => 301,  1918 => 299,  1913 => 296,  1910 => 295,  1905 => 293,  1903 => 292,  1899 => 290,  1893 => 289,  1891 => 288,  1886 => 287,  1882 => 285,  1868 => 284,  1866 => 283,  1864 => 282,  1861 => 281,  1859 => 254,  1856 => 253,  1853 => 252,  1849 => 249,  1841 => 243,  1835 => 239,  1831 => 237,  1818 => 236,  1816 => 235,  1814 => 234,  1811 => 233,  1809 => 231,  1806 => 230,  1803 => 229,  1799 => 226,  1796 => 225,  1792 => 222,  1788 => 219,  1784 => 217,  1779 => 214,  1776 => 213,  1771 => 211,  1768 => 210,  1764 => 208,  1759 => 205,  1754 => 204,  1749 => 202,  1746 => 201,  1742 => 199,  1737 => 196,  1734 => 195,  1729 => 193,  1727 => 192,  1723 => 190,  1717 => 188,  1706 => 187,  1703 => 185,  1701 => 184,  1699 => 183,  1696 => 182,  1693 => 181,  1689 => 178,  1685 => 175,  1681 => 173,  1676 => 170,  1673 => 169,  1668 => 167,  1665 => 166,  1661 => 164,  1656 => 161,  1653 => 160,  1648 => 158,  1646 => 157,  1642 => 155,  1636 => 154,  1634 => 153,  1629 => 152,  1623 => 150,  1616 => 149,  1614 => 148,  1612 => 147,  1609 => 146,  1606 => 145,  1602 => 142,  1598 => 139,  1594 => 137,  1589 => 134,  1586 => 133,  1581 => 131,  1578 => 130,  1574 => 128,  1569 => 125,  1566 => 124,  1561 => 122,  1559 => 121,  1555 => 119,  1549 => 118,  1547 => 117,  1542 => 116,  1536 => 114,  1529 => 113,  1527 => 112,  1525 => 111,  1521 => 109,  1519 => 108,  1517 => 107,  1514 => 106,  1511 => 105,  1507 => 104,  1501 => 950,  1498 => 949,  1493 => 947,  1491 => 946,  1489 => 945,  1486 => 944,  1484 => 943,  1475 => 937,  1469 => 934,  1463 => 931,  1454 => 925,  1450 => 924,  1443 => 920,  1438 => 919,  1430 => 914,  1425 => 911,  1423 => 910,  1419 => 908,  1417 => 907,  1415 => 906,  1412 => 905,  1407 => 902,  1404 => 901,  1400 => 898,  1396 => 895,  1392 => 893,  1387 => 890,  1384 => 889,  1379 => 887,  1376 => 886,  1372 => 884,  1367 => 881,  1364 => 880,  1359 => 878,  1357 => 877,  1353 => 875,  1349 => 873,  1333 => 872,  1331 => 871,  1329 => 870,  1326 => 869,  1323 => 868,  1319 => 865,  1315 => 862,  1308 => 858,  1302 => 856,  1299 => 855,  1292 => 851,  1286 => 849,  1283 => 848,  1276 => 844,  1270 => 842,  1268 => 841,  1264 => 839,  1260 => 837,  1244 => 836,  1242 => 835,  1240 => 834,  1237 => 833,  1234 => 832,  1230 => 829,  1226 => 826,  1219 => 822,  1213 => 820,  1210 => 819,  1203 => 815,  1197 => 813,  1194 => 812,  1187 => 808,  1181 => 806,  1178 => 805,  1171 => 801,  1165 => 799,  1163 => 798,  1159 => 796,  1155 => 794,  1139 => 793,  1137 => 792,  1135 => 791,  1132 => 790,  1129 => 789,  1123 => 784,  1119 => 782,  1114 => 779,  1111 => 778,  1105 => 777,  1103 => 776,  1098 => 775,  1093 => 773,  1090 => 772,  1086 => 770,  1081 => 767,  1078 => 766,  1072 => 765,  1070 => 764,  1065 => 763,  1060 => 761,  1058 => 760,  1051 => 759,  1047 => 757,  1042 => 754,  1039 => 753,  1033 => 752,  1031 => 751,  1026 => 750,  1021 => 748,  1019 => 747,  1014 => 746,  1010 => 744,  1005 => 741,  1002 => 740,  996 => 739,  994 => 738,  989 => 737,  984 => 735,  981 => 734,  977 => 732,  972 => 729,  969 => 728,  963 => 727,  961 => 726,  956 => 725,  951 => 723,  949 => 722,  943 => 719,  927 => 718,  925 => 717,  923 => 716,  919 => 714,  917 => 713,  913 => 711,  910 => 710,  906 => 707,  902 => 704,  898 => 702,  893 => 699,  890 => 698,  885 => 696,  882 => 695,  878 => 693,  873 => 690,  870 => 689,  865 => 687,  863 => 686,  859 => 684,  853 => 683,  851 => 682,  846 => 681,  842 => 679,  825 => 678,  823 => 677,  821 => 676,  818 => 675,  814 => 673,  809 => 669,  803 => 664,  798 => 661,  795 => 660,  789 => 655,  785 => 653,  778 => 652,  767 => 644,  763 => 643,  756 => 639,  753 => 638,  748 => 636,  746 => 635,  743 => 634,  740 => 633,  736 => 630,  728 => 624,  722 => 620,  716 => 619,  714 => 618,  709 => 617,  705 => 615,  690 => 614,  688 => 613,  686 => 612,  683 => 611,  680 => 610,  676 => 607,  668 => 601,  662 => 597,  656 => 596,  654 => 595,  649 => 594,  645 => 592,  630 => 591,  628 => 590,  626 => 589,  623 => 588,  620 => 587,  616 => 584,  608 => 578,  602 => 574,  596 => 573,  594 => 572,  589 => 571,  585 => 569,  570 => 568,  568 => 567,  566 => 566,  563 => 565,  560 => 564,  556 => 561,  548 => 555,  542 => 551,  536 => 550,  534 => 549,  529 => 548,  525 => 546,  510 => 545,  508 => 544,  506 => 543,  503 => 542,  500 => 541,  496 => 538,  488 => 532,  482 => 528,  476 => 527,  474 => 526,  469 => 525,  465 => 523,  450 => 522,  448 => 521,  446 => 520,  443 => 519,  440 => 518,  436 => 515,  428 => 509,  422 => 505,  416 => 504,  414 => 503,  409 => 502,  405 => 500,  390 => 499,  388 => 498,  386 => 497,  383 => 496,  380 => 495,  376 => 492,  368 => 486,  362 => 482,  356 => 481,  354 => 480,  349 => 479,  345 => 477,  330 => 476,  328 => 475,  326 => 474,  323 => 473,  320 => 472,  316 => 469,  312 => 466,  308 => 464,  303 => 461,  300 => 460,  295 => 458,  292 => 457,  288 => 455,  283 => 452,  280 => 451,  275 => 449,  273 => 448,  269 => 446,  263 => 445,  261 => 444,  256 => 443,  252 => 441,  237 => 440,  235 => 439,  233 => 438,  230 => 437,  228 => 436,  225 => 390,  222 => 388,  219 => 387,  215 => 384,  207 => 378,  201 => 374,  195 => 373,  193 => 372,  188 => 371,  184 => 369,  169 => 368,  167 => 367,  165 => 366,  162 => 365,  159 => 364,  155 => 361,  147 => 355,  141 => 351,  135 => 350,  133 => 349,  128 => 348,  124 => 346,  111 => 345,  109 => 344,  107 => 343,  104 => 342,  95 => 336,  89 => 332,  87 => 331,  84 => 330,  82 => 104,  78 => 102,  75 => 100,  71 => 97,  68 => 95,  65 => 93,  59 => 89,  55 => 87,  48 => 85,  46 => 84,  44 => 83,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/teamplus/templates/page.html.twig", "/var/www/selkirk.lp.ca/public_html/themes/custom/teamplus/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 83, "block" => 104, "trans" => 920);
        static $filters = array("escape" => 85);
        static $functions = array("attach_library" => 636, "url" => 924);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block', 'trans'],
                ['escape'],
                ['attach_library', 'url']
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
