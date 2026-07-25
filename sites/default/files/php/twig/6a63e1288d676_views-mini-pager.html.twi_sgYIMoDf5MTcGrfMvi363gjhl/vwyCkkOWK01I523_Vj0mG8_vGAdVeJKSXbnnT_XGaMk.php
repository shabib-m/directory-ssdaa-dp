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

/* themes/bootstrap_barrio/templates/views/views-mini-pager.html.twig */
class __TwigTemplate_89dd029b440153242e69f6497f4bb83e extends Template
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
        // line 1
        yield "    ";
        // line 14
        yield "    ";
        if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 15
            yield "      <nav aria-label=\"Page navigation\">
        <h4 class=\"visually-hidden\">";
            // line 16
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
            yield "</h4>
        <ul class=\"js-pager__items pagination\">
          ";
            // line 18
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 19
                yield "            <li class=\"page-item\">
              <a class=\"page-link\" href=\"";
                // line 20
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 20), "href", [], "any", false, false, true, 20), "html", null, true);
                yield "\" title=\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to previous page"));
                yield "\" rel=\"prev\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 20), "attributes", [], "any", false, false, true, 20), "href", "title", "rel"), "html", null, true);
                yield ">
                <span class=\"visually-hidden\">";
                // line 21
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous page"));
                yield "</span>
                <span aria-hidden=\"true\">";
                // line 22
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 22), "text", [], "any", true, true, true, 22)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 22), "text", [], "any", false, false, true, 22), t("‹‹"))) : (t("‹‹"))), "html", null, true);
                yield "</span>
              </a>
            </li>
          ";
            }
            // line 26
            yield "          ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "current", [], "any", false, false, true, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 27
                yield "            <li class=\"page-item\">
              <span class=\"page-link\">
                ";
                // line 29
                yield t("Page @items.current", ["@items.current" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(CoreExtension::getAttribute($this->env, $this->source,                 // line 30
($context["items"] ?? null), "current", [], "any", false, false, true, 30)), ]);
                // line 32
                yield "              </span>
            </li>
          ";
            }
            // line 35
            yield "          ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 36
                yield "            <li class=\"page-item\">
              <a class=\"page-link\" href=\"";
                // line 37
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 37), "href", [], "any", false, false, true, 37), "html", null, true);
                yield "\" title=\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to next page"));
                yield "\" rel=\"next\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 37), "attributes", [], "any", false, false, true, 37), "href", "title", "rel"), "html", null, true);
                yield ">
                <span class=\"visually-hidden\">";
                // line 38
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next page"));
                yield "</span>
                <span aria-hidden=\"true\">";
                // line 39
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 39), "text", [], "any", true, true, true, 39)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 39), "text", [], "any", false, false, true, 39), t("››"))) : (t("››"))), "html", null, true);
                yield "</span>
              </a>
            </li>
          ";
            }
            // line 43
            yield "        </ul>
      </nav>
    ";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["items"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/bootstrap_barrio/templates/views/views-mini-pager.html.twig";
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
        return array (  121 => 43,  114 => 39,  110 => 38,  102 => 37,  99 => 36,  96 => 35,  91 => 32,  89 => 30,  88 => 29,  84 => 27,  81 => 26,  74 => 22,  70 => 21,  62 => 20,  59 => 19,  57 => 18,  52 => 16,  49 => 15,  46 => 14,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/bootstrap_barrio/templates/views/views-mini-pager.html.twig", "C:\\laragon6-1\\www\\directory-ssdaa-dev-1\\themes\\bootstrap_barrio\\templates\\views\\views-mini-pager.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 14, "trans" => 29];
        static $filters = ["t" => 16, "escape" => 20, "without" => 20, "default" => 22];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "if", 1 => "trans"],
                [0 => "t", 1 => "escape", 2 => "without", 3 => "default"],
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
