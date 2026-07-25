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

/* core/themes/claro/templates/form/field-multiple-value-form.html.twig */
class __TwigTemplate_7622b5fb7c2b47bd1d76f1023b180c49 extends Template
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
        // line 24
        if ((($tmp = ($context["multiple"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 25
            yield "  ";
            // line 26
            $context["classes"] = ["js-form-item", "form-item", "form-item--multiple", (((($tmp =             // line 30
($context["disabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("form-item--disabled") : (""))];
            // line 33
            yield "  ";
            // line 34
            $context["description_classes"] = ["form-item__description", (((($tmp =             // line 36
($context["disabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-disabled") : (""))];
            // line 39
            yield "  <div";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 39), "html", null, true);
            yield ">
    ";
            // line 40
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["table"] ?? null), "html", null, true);
            yield "
    ";
            // line 41
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 42
                yield "      <div";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 42), "addClass", [($context["description_classes"] ?? null)], "method", false, false, true, 42), "html", null, true);
                yield " >";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 42), "html", null, true);
                yield "</div>
    ";
            }
            // line 44
            yield "    ";
            if ((($tmp = ($context["button"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 45
                yield "      <div class=\"field-actions\">";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["button"] ?? null), "html", null, true);
                yield "</div>
    ";
            }
            // line 47
            yield "  </div>
";
        } else {
            // line 49
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["elements"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 50
                yield "    ";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["element"], "html", null, true);
                yield "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['element'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["multiple", "disabled", "attributes", "table", "description", "button", "elements"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/themes/claro/templates/form/field-multiple-value-form.html.twig";
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
        return array (  93 => 50,  88 => 49,  84 => 47,  78 => 45,  75 => 44,  67 => 42,  65 => 41,  61 => 40,  56 => 39,  54 => 36,  53 => 34,  51 => 33,  49 => 30,  48 => 26,  46 => 25,  44 => 24,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/themes/claro/templates/form/field-multiple-value-form.html.twig", "C:\\laragon6-1\\www\\directory-ssdaa-dev-1\\core\\themes\\claro\\templates\\form\\field-multiple-value-form.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 24, "set" => 26, "for" => 49];
        static $filters = ["escape" => 39];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "if", 1 => "set", 2 => "for"],
                [0 => "escape"],
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
