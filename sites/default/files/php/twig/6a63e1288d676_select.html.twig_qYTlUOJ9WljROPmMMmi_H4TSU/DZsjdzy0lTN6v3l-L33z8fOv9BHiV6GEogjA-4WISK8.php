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

/* themes/bootstrap_barrio/templates/form/select.html.twig */
class __TwigTemplate_894ff718b8919df50e061a28642f987a extends Template
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
        // line 14
        $context["classes"] = ["form-select"];
        // line 18
        yield "
";
        // line 19
        $_v0 = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            // line 20
            yield "  <select";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 20), "html", null, true);
            yield ">
    ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 22
                yield "      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, true, 22) == "optgroup")) {
                    // line 23
                    yield "        <optgroup label=\"";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["option"], "label", [], "any", false, false, true, 23), "html", null, true);
                    yield "\">
          ";
                    // line 24
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "options", [], "any", false, false, true, 24));
                    foreach ($context['_seq'] as $context["_key"] => $context["sub_option"]) {
                        // line 25
                        yield "            <option value=\"";
                        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["sub_option"], "value", [], "any", false, false, true, 25), "html", null, true);
                        yield "\"";
                        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["sub_option"], "selected", [], "any", false, false, true, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" selected=\"selected\"") : ("")));
                        yield ">";
                        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["sub_option"], "label", [], "any", false, false, true, 25), "html", null, true);
                        yield "</option>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['sub_option'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent);
                    $context += $_parent;
                    // line 27
                    yield "        </optgroup>
      ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 28
$context["option"], "type", [], "any", false, false, true, 28) == "option")) {
                    // line 29
                    yield "        <option value=\"";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, true, 29), "html", null, true);
                    yield "\"";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "selected", [], "any", false, false, true, 29)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" selected=\"selected\"") : ("")));
                    yield ">";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["option"], "label", [], "any", false, false, true, 29), "html", null, true);
                    yield "</option>
      ";
                }
                // line 31
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 32
            yield "  </select>
";
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 19
        yield (string) Twig\Extension\CoreExtension::spaceless($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $_v0, "html", null, true));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "options"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/bootstrap_barrio/templates/form/select.html.twig";
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
        return array (  113 => 19,  108 => 32,  101 => 31,  91 => 29,  89 => 28,  86 => 27,  72 => 25,  68 => 24,  63 => 23,  60 => 22,  56 => 21,  51 => 20,  49 => 19,  46 => 18,  44 => 14,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/bootstrap_barrio/templates/form/select.html.twig", "C:\\laragon6-1\\www\\directory-ssdaa-dev-1\\themes\\bootstrap_barrio\\templates\\form\\select.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 14, "apply" => 19, "for" => 21, "if" => 22];
        static $filters = ["escape" => 20, "spaceless" => 19];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "apply", 2 => "for", 3 => "if"],
                [0 => "escape", 1 => "spaceless"],
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
