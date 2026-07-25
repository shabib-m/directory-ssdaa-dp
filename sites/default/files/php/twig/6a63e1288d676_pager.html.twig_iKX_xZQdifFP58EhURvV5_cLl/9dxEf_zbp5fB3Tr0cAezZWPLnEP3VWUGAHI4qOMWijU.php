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

/* themes/bootstrap_barrio/templates/navigation/pager.html.twig */
class __TwigTemplate_539cdeac76c7e162e33c150b662cf3f0 extends Template
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
        // line 34
        if ((($tmp = ($context["items"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 35
            yield "  <nav aria-label=\"";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_id"] ?? null), "html", null, true);
            yield "\">
    <";
            // line 36
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["pagination_heading_level"] ?? null), "html", null, true);
            yield " id=\"";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_id"] ?? null), "html", null, true);
            yield "\" class=\"visually-hidden\">";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
            yield "</";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["pagination_heading_level"] ?? null), "html", null, true);
            yield ">
    <ul class=\"pagination js-pager__items\">
      ";
            // line 39
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 39)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 40
                yield "        <li class=\"page-item\">
          <a href=\"";
                // line 41
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 41), "href", [], "any", false, false, true, 41), "html", null, true);
                yield "\" title=\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to first page"));
                yield "\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 41), "attributes", [], "any", false, false, true, 41), "href", "title"), "html", null, true);
                yield " class=\"page-link\">
            <span aria-hidden=\"true\">";
                // line 42
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, true, true, 42), "text", [], "any", true, true, true, 42)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 42), "text", [], "any", false, false, true, 42), t("«"))) : (t("«"))), "html", null, true);
                yield "</span>
            <span class=\"visually-hidden\">";
                // line 43
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("First page"));
                yield "</span>
          </a>
        </li>
      ";
            }
            // line 47
            yield "      ";
            // line 48
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 49
                yield "        <li class=\"page-item\">
          <a href=\"";
                // line 50
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 50), "href", [], "any", false, false, true, 50), "html", null, true);
                yield "\" title=\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to previous page"));
                yield "\" rel=\"prev\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 50), "attributes", [], "any", false, false, true, 50), "href", "title", "rel"), "html", null, true);
                yield " class=\"page-link\">
            <span aria-hidden=\"true\">";
                // line 51
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 51), "text", [], "any", true, true, true, 51)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 51), "text", [], "any", false, false, true, 51), t("‹"))) : (t("‹"))), "html", null, true);
                yield "</span>
            <span class=\"visually-hidden\">";
                // line 52
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous page"));
                yield "</span>
          </a>
        </li>
      ";
            }
            // line 56
            yield "      ";
            // line 57
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ellipses"] ?? null), "previous", [], "any", false, false, true, 57)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 58
                yield "        <li class=\"page-item\" role=\"presentation\"><span class=\"page-link\">&hellip;</span></li>
      ";
            }
            // line 60
            yield "      ";
            // line 61
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "pages", [], "any", false, false, true, 61));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 62
                yield "        <li class=\"page-item ";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? ("active") : ("")));
                yield "\">
          ";
                // line 63
                if ((($context["current"] ?? null) == $context["key"])) {
                    // line 64
                    yield "            <span class=\"page-link\">";
                    // line 65
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["key"], "html", null, true);
                    // line 66
                    yield "</span>
          ";
                } else {
                    // line 68
                    yield "            <a href=\"";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, true, 68), "html", null, true);
                    yield "\" title=\"";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
                    yield "\"";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 68), "href", "title"), "html", null, true);
                    yield " class=\"page-link\">";
                    // line 69
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["key"], "html", null, true);
                    // line 70
                    yield "</a>
          ";
                }
                // line 72
                yield "        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 74
            yield "      ";
            // line 75
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ellipses"] ?? null), "next", [], "any", false, false, true, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 76
                yield "        <li class=\"page-item\" role=\"presentation\"><span class=\"page-link\">&hellip;</span></li>
      ";
            }
            // line 78
            yield "      ";
            // line 79
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 79)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 80
                yield "        <li class=\"page-item\">
          <a href=\"";
                // line 81
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 81), "href", [], "any", false, false, true, 81), "html", null, true);
                yield "\" title=\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to next page"));
                yield "\" rel=\"next\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 81), "attributes", [], "any", false, false, true, 81), "href", "title", "rel"), "html", null, true);
                yield " class=\"page-link\">
            <span aria-hidden=\"true\">";
                // line 82
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 82), "text", [], "any", true, true, true, 82)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 82), "text", [], "any", false, false, true, 82), t("›"))) : (t("›"))), "html", null, true);
                yield "</span>
            <span class=\"visually-hidden\">";
                // line 83
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next page"));
                yield "</span>
          </a>
        </li>
      ";
            }
            // line 87
            yield "      ";
            // line 88
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 88)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 89
                yield "        <li class=\"page-item\">
          <a href=\"";
                // line 90
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 90), "href", [], "any", false, false, true, 90), "html", null, true);
                yield "\" title=\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to last page"));
                yield "\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 90), "attributes", [], "any", false, false, true, 90), "href", "title"), "html", null, true);
                yield " class=\"page-link\">
            <span aria-hidden=\"true\">";
                // line 91
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, true, true, 91), "text", [], "any", true, true, true, 91)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 91), "text", [], "any", false, false, true, 91), t("»"))) : (t("»"))), "html", null, true);
                yield "</span>
            <span class=\"visually-hidden\">";
                // line 92
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Last page"));
                yield "</span>
          </a>
        </li>
      ";
            }
            // line 96
            yield "    </ul>
  </nav>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["items", "heading_id", "pagination_heading_level", "ellipses", "current", "title"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/bootstrap_barrio/templates/navigation/pager.html.twig";
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
        return array (  230 => 96,  223 => 92,  219 => 91,  211 => 90,  208 => 89,  205 => 88,  203 => 87,  196 => 83,  192 => 82,  184 => 81,  181 => 80,  178 => 79,  176 => 78,  172 => 76,  169 => 75,  167 => 74,  159 => 72,  155 => 70,  153 => 69,  145 => 68,  141 => 66,  139 => 65,  137 => 64,  135 => 63,  130 => 62,  125 => 61,  123 => 60,  119 => 58,  116 => 57,  114 => 56,  107 => 52,  103 => 51,  95 => 50,  92 => 49,  89 => 48,  87 => 47,  80 => 43,  76 => 42,  68 => 41,  65 => 40,  62 => 39,  51 => 36,  46 => 35,  44 => 34,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/bootstrap_barrio/templates/navigation/pager.html.twig", "C:\\laragon6-1\\www\\directory-ssdaa-dev-1\\themes\\bootstrap_barrio\\templates\\navigation\\pager.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 34, "for" => 61];
        static $filters = ["escape" => 35, "t" => 36, "without" => 41, "default" => 42];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "if", 1 => "for"],
                [0 => "escape", 1 => "t", 2 => "without", 3 => "default"],
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
