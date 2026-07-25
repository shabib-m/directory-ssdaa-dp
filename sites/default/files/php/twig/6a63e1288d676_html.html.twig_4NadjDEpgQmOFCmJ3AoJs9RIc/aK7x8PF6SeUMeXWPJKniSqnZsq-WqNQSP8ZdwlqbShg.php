<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/directory_ssdaa/templates/html.html.twig */
class __TwigTemplate_8766e63f76c0a42e46c260dec87411e3 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 28
        $context["body_classes"] = [(((($tmp =         // line 29
($context["logged_in"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("user-logged-in") : ("")), (( !(($tmp =         // line 30
($context["root_path"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass(($context["root_path"] ?? null))))), (((($tmp =         // line 31
($context["node_type"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("node--type-" . \Drupal\Component\Utility\Html::getClass(($context["node_type"] ?? null)))) : ("")), (((($tmp =         // line 32
($context["db_offline"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("db-offline") : (""))];
        // line 35
        yield "<!DOCTYPE html>
<html";
        // line 36
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["html_attributes"] ?? null), "html", null, true);
        yield ">
  <head>
    <head-placeholder token=\"";
        // line 38
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["placeholder_token"] ?? null));
        yield "\">
    <title>";
        // line 39
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, ($context["head_title"] ?? null), " | "));
        yield "</title>
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
<link href=\"https://fonts.googleapis.com/css2?family=Readex+Pro:wght@300&display=swap\" rel=\"stylesheet\"> 
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">

    <css-placeholder token=\"";
        // line 45
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["placeholder_token"] ?? null));
        yield "\">
    <js-placeholder token=\"";
        // line 46
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["placeholder_token"] ?? null));
        yield "\">
  </head>
  <body";
        // line 48
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["body_classes"] ?? null)], "method", false, false, true, 48), "html", null, true);
        yield ">
  <?php print \$site_name; ?>
    <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
      ";
        // line 51
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        yield "
    </a>
    ";
        // line 53
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["page_top"] ?? null), "html", null, true);
        yield "
    ";
        // line 54
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["page"] ?? null), "html", null, true);
        yield "
    ";
        // line 55
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["page_bottom"] ?? null), "html", null, true);
        yield "
    <js-bottom-placeholder token=\"";
        // line 56
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["placeholder_token"] ?? null));
        yield "\">
  </body>
</html>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["logged_in", "root_path", "node_type", "db_offline", "html_attributes", "placeholder_token", "head_title", "attributes", "page_top", "page", "page_bottom"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/directory_ssdaa/templates/html.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  103 => 56,  99 => 55,  95 => 54,  91 => 53,  86 => 51,  80 => 48,  75 => 46,  71 => 45,  62 => 39,  58 => 38,  53 => 36,  50 => 35,  48 => 32,  47 => 31,  46 => 30,  45 => 29,  44 => 28,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/directory_ssdaa/templates/html.html.twig", "C:\\laragon6-1\\www\\directory-ssdaa-dev-1\\themes\\directory_ssdaa\\templates\\html.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 28];
        static $filters = ["clean_class" => 30, "escape" => 36, "raw" => 38, "safe_join" => 39, "t" => 51];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set"],
                [0 => "clean_class", 1 => "escape", 2 => "raw", 3 => "safe_join", 4 => "t"],
                [],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            } elseif ($e instanceof SecurityNotAllowedTestError && isset($tests[$e->getTestName()])) {
                $e->setTemplateLine($tests[$e->getTestName()]);
            }

            throw $e;
        }

    }
}
