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

/* themes/bootstrap_barrio/templates/navigation/links.html.twig */
class __TwigTemplate_4b1b3c03ac0d572f2c290f1cf3842045 extends Template
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
        // line 35
        if ((($tmp = ($context["links"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 36
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("bootstrap_barrio/links"), "html", null, true);
            // line 38
            if ((($tmp = ($context["heading"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 39
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["heading"] ?? null), "level", [], "any", false, false, true, 39)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 40
                    yield "<";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["heading"] ?? null), "level", [], "any", false, false, true, 40), "html", null, true);
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["heading"] ?? null), "attributes", [], "any", false, false, true, 40), "html", null, true);
                    yield ">";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["heading"] ?? null), "text", [], "any", false, false, true, 40), "html", null, true);
                    yield "</";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["heading"] ?? null), "level", [], "any", false, false, true, 40), "html", null, true);
                    yield ">";
                } else {
                    // line 42
                    yield "<h2";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["heading"] ?? null), "attributes", [], "any", false, false, true, 42), "html", null, true);
                    yield ">";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["heading"] ?? null), "text", [], "any", false, false, true, 42), "html", null, true);
                    yield "</h2>";
                }
            }
            // line 45
            yield "<ul";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true);
            yield ">";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["links"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 47
                yield "<li";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 47), "addClass", [\Drupal\Component\Utility\Html::getClass($context["key"])], "method", false, false, true, 47), "html", null, true);
                yield ">";
                // line 48
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 49
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 49), "html", null, true);
                } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,                 // line 50
$context["item"], "text_attributes", [], "any", false, false, true, 50)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 51
                    yield "<span";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text_attributes", [], "any", false, false, true, 51), "html", null, true);
                    yield ">";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 51), "html", null, true);
                    yield "</span>";
                } else {
                    // line 53
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 53), "html", null, true);
                }
                // line 55
                yield "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 57
            yield "</ul>";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["links", "heading", "attributes"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/bootstrap_barrio/templates/navigation/links.html.twig";
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
        return array (  105 => 57,  98 => 55,  95 => 53,  88 => 51,  86 => 50,  84 => 49,  82 => 48,  78 => 47,  74 => 46,  70 => 45,  62 => 42,  52 => 40,  50 => 39,  48 => 38,  46 => 36,  44 => 35,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/bootstrap_barrio/templates/navigation/links.html.twig", "C:\\laragon6-1\\www\\directory-ssdaa-dev-1\\themes\\bootstrap_barrio\\templates\\navigation\\links.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 35, "for" => 46];
        static $filters = ["escape" => 36, "clean_class" => 47];
        static $functions = ["attach_library" => 36];
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
