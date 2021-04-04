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

/* themes/custom/teamplus/templates/block--block-type--mt-hero-v2.html.twig */
class __TwigTemplate_f8c8f180d0ad0ecbee5720942a3cb76433a08e49e160c98ec32d975ab1fb6864 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("teamplus/hero-v2-block"), "html", null, true);
        echo "
";
        // line 35
        $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 37
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 37), 37, $this->source))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 38
($context["plugin_id"] ?? null), 38, $this->source))), 3 => "block-mt-hero-v2"];
        // line 43
        $context["title_classes"] = [0 => "title"];
        // line 47
        $context["column_first_order"] = null;
        // line 48
        $context["column_second_order"] = null;
        // line 49
        $context["column_first_grid_classes"] = null;
        // line 50
        $context["column_second_grid_classes"] = null;
        // line 51
        $context["mt_vertical_aligment"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["content"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["#block_content"] ?? null) : null), "field_mt_hero_v2_ver_alignment", [], "any", false, false, true, 51), "value", [], "any", false, false, true, 51);
        // line 52
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["content"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["#block_content"] ?? null) : null), "field_mt_hero_v2_hor_alignment", [], "any", false, false, true, 52), "value", [], "any", false, false, true, 52) == "image-right")) {
            // line 53
            echo "  ";
            $context["column_first_order"] = "order-lg-1 order-2";
            // line 54
            echo "  ";
            $context["column_second_order"] = "order-lg-2 text-right";
        } else {
            // line 56
            echo "  ";
            $context["column_first_order"] = "order-lg-2 order-2";
            // line 57
            echo "  ";
            $context["column_second_order"] = "order-lg-1";
        }
        // line 59
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["content"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["#block_content"] ?? null) : null), "field_mt_hero_v2_layout", [], "any", false, false, true, 59), "value", [], "any", false, false, true, 59) == "two-col-33-67")) {
            // line 60
            echo "  ";
            $context["column_first_grid_classes"] = "col-lg-4 pt-xl-4 pt-0 hero-column-first";
            // line 61
            echo "  ";
            $context["column_second_grid_classes"] = "col-lg-8 hero-column-second";
            // line 62
            echo "  ";
            $context["columns"] = "two-columns";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 =         // line 63
($context["content"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["#block_content"] ?? null) : null), "field_mt_hero_v2_layout", [], "any", false, false, true, 63), "value", [], "any", false, false, true, 63) == "two-col-42-58")) {
            // line 64
            echo "  ";
            $context["column_first_grid_classes"] = "col-lg-5 pt-xl-4 pt-0 hero-column-first";
            // line 65
            echo "  ";
            $context["column_second_grid_classes"] = "col-lg-7 hero-column-second";
            // line 66
            echo "  ";
            $context["columns"] = "two-columns";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 =         // line 67
($context["content"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["#block_content"] ?? null) : null), "field_mt_hero_v2_layout", [], "any", false, false, true, 67), "value", [], "any", false, false, true, 67) == "two-col-50-50")) {
            // line 68
            echo "  ";
            $context["column_first_grid_classes"] = "col-lg-6 pt-xl-4 pt-0 hero-column-first";
            // line 69
            echo "  ";
            $context["column_second_grid_classes"] = "col-lg-6 hero-column-second";
            // line 70
            echo "  ";
            $context["columns"] = "two-columns";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 =         // line 71
($context["content"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["#block_content"] ?? null) : null), "field_mt_hero_v2_layout", [], "any", false, false, true, 71), "value", [], "any", false, false, true, 71) == "two-col-58-42")) {
            // line 72
            echo "  ";
            $context["column_first_grid_classes"] = "col-lg-7 pt-xl-4 pt-0 hero-column-first";
            // line 73
            echo "  ";
            $context["column_second_grid_classes"] = "col-lg-5 hero-column-second";
            // line 74
            echo "  ";
            $context["columns"] = "two-columns";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e =         // line 75
($context["content"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["#block_content"] ?? null) : null), "field_mt_hero_v2_layout", [], "any", false, false, true, 75), "value", [], "any", false, false, true, 75) == "two-col-67-33")) {
            // line 76
            echo "  ";
            $context["column_first_grid_classes"] = "col-lg-8 pt-xl-4 pt-0 hero-column-first";
            // line 77
            echo "  ";
            $context["column_second_grid_classes"] = "col-lg-4 hero-column-second";
            // line 78
            echo "  ";
            $context["columns"] = "two-columns";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 =         // line 79
($context["content"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["#block_content"] ?? null) : null), "field_mt_hero_v2_layout", [], "any", false, false, true, 79), "value", [], "any", false, false, true, 79) == "one-col-60")) {
            // line 80
            echo "  ";
            $context["column_first_grid_classes"] = "col-lg-6 pt-lg-4 pt-0 mr-auto ml-auto text-center";
            // line 81
            echo "  ";
            $context["column_second_grid_classes"] = "col-lg-6 pt-lg-4 pt-0 mr-auto ml-auto text-center";
            // line 82
            echo "  ";
            $context["columns"] = "one-column";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 =         // line 83
($context["content"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["#block_content"] ?? null) : null), "field_mt_hero_v2_layout", [], "any", false, false, true, 83), "value", [], "any", false, false, true, 83) == "one-col-80")) {
            // line 84
            echo "  ";
            $context["column_first_grid_classes"] = "col-lg-8 pt-lg-4 pt-0 mr-auto ml-auto text-center";
            // line 85
            echo "  ";
            $context["column_second_grid_classes"] = "col-lg-8 pt-lg-4 pt-0 mr-auto ml-auto text-center";
            // line 86
            echo "  ";
            $context["columns"] = "one-column";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 =         // line 87
($context["content"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["#block_content"] ?? null) : null), "field_mt_hero_v2_layout", [], "any", false, false, true, 87), "value", [], "any", false, false, true, 87) == "one-col-100")) {
            // line 88
            echo "  ";
            $context["column_first_grid_classes"] = "col-lg-12 pt-lg-4 pt-0 mr-auto ml-auto text-center";
            // line 89
            echo "  ";
            $context["column_second_grid_classes"] = "col-lg-12 pt-lg-4 pt-0 mr-auto ml-auto text-center";
            // line 90
            echo "  ";
            $context["columns"] = "one-column";
        }
        // line 92
        echo "
<div";
        // line 93
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 93), 93, $this->source), "html", null, true);
        echo ">
  ";
        // line 94
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 94, $this->source), "html", null, true);
        echo "
  ";
        // line 95
        if (($context["label"] ?? null)) {
            // line 96
            echo "    <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method", false, false, true, 96), 96, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 96, $this->source), "html", null, true);
            echo "</h2>
  ";
        }
        // line 98
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 98, $this->source), "html", null, true);
        echo "
  ";
        // line 99
        $this->displayBlock('content', $context, $blocks);
        // line 147
        echo "</div>
";
    }

    // line 99
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 100
        echo "    <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "content"], "method", false, false, true, 100), "addClass", [0 => ($context["columns"] ?? null)], "method", false, false, true, 100), "addClass", [0 => ($context["mt_vertical_aligment"] ?? null)], "method", false, false, true, 100), 100, $this->source), "html", null, true);
        echo ">
      <div class=\"container\">
        <div class=\"row ";
        // line 102
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mt_vertical_aligment"] ?? null), 102, $this->source), "html", null, true);
        echo "\">
          <div class=\"";
        // line 103
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["column_first_grid_classes"] ?? null), 103, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["column_first_order"] ?? null), 103, $this->source), "html", null, true);
        echo "\">
            ";
        // line 104
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 104, $this->source), "field_mt_hero_v2_image", "field_mt_hero_v2_layout"), "html", null, true);
        echo "
            ";
        // line 105
        if (((($context["columns"] ?? null) == "one-column") && $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_hero_v2_image", [], "any", false, false, true, 105)))) {
            // line 106
            echo "              <div class=\"mt-4 pt-5\">
                ";
            // line 107
            if (($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_hero_v2_action", [], "any", false, false, true, 107)) && twig_get_attribute($this->env, $this->source, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = twig_get_attribute($this->env, $this->source, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["content"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["#block_content"] ?? null) : null), "field_mt_hero_v2_action", [], "any", false, false, true, 107)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["0"] ?? null) : null), "uri", [], "any", false, false, true, 107))) {
                // line 108
                echo "                  <div class=\"overlay-container\">
                    <span class=\"overlay\">
                      ";
                // line 110
                if (twig_get_attribute($this->env, $this->source, (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_hero_v2_action", [], "any", false, false, true, 110)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["0"] ?? null) : null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["#url"] ?? null) : null), "isExternal", [], "method", false, false, true, 110)) {
                    // line 111
                    echo "                        <a target=\"_blank\" class=\"overlay-target-link\" href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = twig_get_attribute($this->env, $this->source, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["content"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["#block_content"] ?? null) : null), "field_mt_hero_v2_action", [], "any", false, false, true, 111)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["0"] ?? null) : null), "uri", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
                    echo "\"></a>
                      ";
                } else {
                    // line 113
                    echo "                        <a class=\"overlay-target-link\" href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_hero_v2_action", [], "any", false, false, true, 113)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["0"] ?? null) : null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["#url"] ?? null) : null), "getRouteName", [], "method", false, false, true, 113), 113, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_hero_v2_action", [], "any", false, false, true, 113)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["0"] ?? null) : null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["#url"] ?? null) : null), "getRouteParameters", [], "method", false, false, true, 113), 113, $this->source)), "html", null, true);
                    echo "\"></a>
                      ";
                }
                // line 115
                echo "                    </span>
                    ";
                // line 116
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_hero_v2_image", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
                echo "
                  </div>
                ";
            } else {
                // line 119
                echo "                  ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_hero_v2_image", [], "any", false, false, true, 119), 119, $this->source), "html", null, true);
                echo "
                ";
            }
            // line 121
            echo "              </div>
            ";
        }
        // line 123
        echo "          </div>
          ";
        // line 124
        if (((($context["columns"] ?? null) == "two-columns") && $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_hero_v2_image", [], "any", false, false, true, 124)))) {
            // line 125
            echo "            <div class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["column_second_grid_classes"] ?? null), 125, $this->source), "html", null, true);
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["column_second_order"] ?? null), 125, $this->source), "html", null, true);
            echo "\">
                ";
            // line 126
            if (($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_hero_v2_action", [], "any", false, false, true, 126)) && twig_get_attribute($this->env, $this->source, (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = twig_get_attribute($this->env, $this->source, (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["content"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["#block_content"] ?? null) : null), "field_mt_hero_v2_action", [], "any", false, false, true, 126)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["0"] ?? null) : null), "uri", [], "any", false, false, true, 126))) {
                // line 127
                echo "                  <div class=\"overlay-container\">
                    <span class=\"overlay\">
                      ";
                // line 129
                if (twig_get_attribute($this->env, $this->source, (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_hero_v2_action", [], "any", false, false, true, 129)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["0"] ?? null) : null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["#url"] ?? null) : null), "isExternal", [], "method", false, false, true, 129)) {
                    // line 130
                    echo "                        <a target=\"_blank\" class=\"overlay-target-link\" href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = twig_get_attribute($this->env, $this->source, (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["content"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["#block_content"] ?? null) : null), "field_mt_hero_v2_action", [], "any", false, false, true, 130)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["0"] ?? null) : null), "uri", [], "any", false, false, true, 130), 130, $this->source), "html", null, true);
                    echo "\"></a>
                      ";
                } else {
                    // line 132
                    echo "                        <a class=\"overlay-target-link\" href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_hero_v2_action", [], "any", false, false, true, 132)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["0"] ?? null) : null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["#url"] ?? null) : null), "getRouteName", [], "method", false, false, true, 132), 132, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_hero_v2_action", [], "any", false, false, true, 132)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["0"] ?? null) : null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["#url"] ?? null) : null), "getRouteParameters", [], "method", false, false, true, 132), 132, $this->source)), "html", null, true);
                    echo "\"></a>
                      ";
                }
                // line 134
                echo "                    </span>
                    ";
                // line 135
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_hero_v2_image", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
                echo "
                  </div>
                ";
            } else {
                // line 138
                echo "                  ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_hero_v2_image", [], "any", false, false, true, 138), 138, $this->source), "html", null, true);
                echo "
                ";
            }
            // line 140
            echo "            </div>
          ";
        }
        // line 142
        echo "        </div>
      </div>

    </div>
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/teamplus/templates/block--block-type--mt-hero-v2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 142,  313 => 140,  307 => 138,  301 => 135,  298 => 134,  292 => 132,  286 => 130,  284 => 129,  280 => 127,  278 => 126,  271 => 125,  269 => 124,  266 => 123,  262 => 121,  256 => 119,  250 => 116,  247 => 115,  241 => 113,  235 => 111,  233 => 110,  229 => 108,  227 => 107,  224 => 106,  222 => 105,  218 => 104,  212 => 103,  208 => 102,  202 => 100,  198 => 99,  193 => 147,  191 => 99,  186 => 98,  178 => 96,  176 => 95,  172 => 94,  168 => 93,  165 => 92,  161 => 90,  158 => 89,  155 => 88,  153 => 87,  150 => 86,  147 => 85,  144 => 84,  142 => 83,  139 => 82,  136 => 81,  133 => 80,  131 => 79,  128 => 78,  125 => 77,  122 => 76,  120 => 75,  117 => 74,  114 => 73,  111 => 72,  109 => 71,  106 => 70,  103 => 69,  100 => 68,  98 => 67,  95 => 66,  92 => 65,  89 => 64,  87 => 63,  84 => 62,  81 => 61,  78 => 60,  76 => 59,  72 => 57,  69 => 56,  65 => 54,  62 => 53,  60 => 52,  58 => 51,  56 => 50,  54 => 49,  52 => 48,  50 => 47,  48 => 43,  46 => 38,  45 => 37,  44 => 35,  40 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/teamplus/templates/block--block-type--mt-hero-v2.html.twig", "/var/www/selkirk.lp.ca/public_html/themes/custom/teamplus/templates/block--block-type--mt-hero-v2.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 35, "if" => 52, "block" => 99);
        static $filters = array("escape" => 33, "clean_class" => 37, "without" => 104, "render" => 105);
        static $functions = array("attach_library" => 33, "path" => 113);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['escape', 'clean_class', 'without', 'render'],
                ['attach_library', 'path']
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
