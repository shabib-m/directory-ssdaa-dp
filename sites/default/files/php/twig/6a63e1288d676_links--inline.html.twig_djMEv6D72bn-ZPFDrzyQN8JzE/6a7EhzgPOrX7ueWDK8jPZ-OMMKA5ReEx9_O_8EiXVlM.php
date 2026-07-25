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

/* themes/bootstrap_barrio/templates/navigation/links--inline.html.twig */
class __TwigTemplate_00cd98caed98d2970b71b80f880f9836 extends Template
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
        // line 37
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("bootstrap_barrio/links"), "html", null, true);
        yield "

";
        // line 39
        if ((($tmp = ($context["links"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 40
            yield "  <div class=\"inline__links\">";
            // line 41
            if ((($tmp = ($context["heading"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 42
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["heading"] ?? null), "level", [], "any", false, false, true, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 43
                    yield "<";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["heading"] ?? null), "level", [], "any", false, false, true, 43), "html", null, true);
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["heading"] ?? null), "attributes", [], "any", false, false, true, 43), "html", null, true);
                    yield ">";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["heading"] ?? null), "text", [], "any", false, false, true, 43), "html", null, true);
                    yield "</";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["heading"] ?? null), "level", [], "any", false, false, true, 43), "html", null, true);
                    yield ">";
                } else {
                    // line 45
                    yield "<h2";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["heading"] ?? null), "attributes", [], "any", false, false, true, 45), "html", null, true);
                    yield ">";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["heading"] ?? null), "text", [], "any", false, false, true, 45), "html", null, true);
                    yield "</h2>";
                }
            }
            // line 48
            yield "<nav";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [["nav", "links-inline"]], "method", false, false, true, 48), "html", null, true);
            yield ">";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["links"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 50
                yield "<span";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 50), "addClass", [\Drupal\Component\Utility\Html::getClass($context["key"]), "nav-link"], "method", false, false, true, 50), "html", null, true);
                yield ">";
                // line 51
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 52
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 52), "html", null, true);
                } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,                 // line 53
$context["item"], "text_attributes", [], "any", false, false, true, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 54
                    yield "<span";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text_attributes", [], "any", false, false, true, 54), "html", null, true);
                    yield ">";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 54), "html", null, true);
                    yield "</span>";
                } else {
                    // line 56
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 56), "html", null, true);
                }
                // line 58
                yield "</span>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 60
            yield "</nav>
  </div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["links", "heading", "attributes"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/bootstrap_barrio/templates/navigation/links--inline.html.twig";
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
        return array (  110 => 60,  103 => 58,  100 => 56,  93 => 54,  91 => 53,  89 => 52,  87 => 51,  83 => 50,  79 => 49,  75 => 48,  67 => 45,  57 => 43,  55 => 42,  53 => 41,  51 => 40,  49 => 39,  44 => 37,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/bootstrap_barrio/templates/navigation/links--inline.html.twig", "C:\\laragon6-1\\www\\directory-ssdaa-dev-1\\themes\\bootstrap_barrio\\templates\\navigation\\links--inline.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 39, "for" => 49];
        static $filters = ["escape" => 37, "clean_class" => 50];
        static $functions = ["attach_library" => 37];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "if", 1 => "for"],
                [0 => "escape", 1 => "clean_class"],
                [0 => "attach_library"],
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
