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

/* themes/bootstrap_barrio/templates/views/views-view-grid.html.twig */
class __TwigTemplate_ab39cc9f9ee64e060fc6194f471915fd extends Template
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
        $context["classes"] = ["views-view-grid", CoreExtension::getAttribute($this->env, $this->source,         // line 30
($context["options"] ?? null), "alignment", [], "any", false, false, true, 30), ("cols-" . CoreExtension::getAttribute($this->env, $this->source,         // line 31
($context["options"] ?? null), "columns", [], "any", false, false, true, 31)), "clearfix", "col"];
        // line 36
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "row_class_default", [], "any", false, false, true, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "  ";
            // line 38
            $context["row_classes"] = ["views-row", (((CoreExtension::getAttribute($this->env, $this->source,             // line 40
($context["options"] ?? null), "alignment", [], "any", false, false, true, 40) == "horizontal")) ? ("clearfix") : (""))];
        }
        // line 44
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "col_class_default", [], "any", false, false, true, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 45
            yield "  ";
            // line 46
            $context["col_classes"] = ["views-col", (((CoreExtension::getAttribute($this->env, $this->source,             // line 48
($context["options"] ?? null), "alignment", [], "any", false, false, true, 48) == "vertical")) ? ("clearfix") : (""))];
        }
        // line 52
        if ((($tmp = ($context["title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 53
            yield "  <h3>";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
            yield "</h3>
";
        }
        // line 55
        yield "<div";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 55), "html", null, true);
        yield ">
  ";
        // line 56
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "alignment", [], "any", false, false, true, 56) == "horizontal")) {
            // line 57
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 58
                yield "      <div";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 58), "addClass", [($context["row_classes"] ?? null), (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "row_class_default", [], "any", false, false, true, 58)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("row-" . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 58))) : (""))], "method", false, false, true, 58), "html", null, true);
                yield ">
        ";
                // line 59
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 59));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 60
                    yield "          <div";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "attributes", [], "any", false, false, true, 60), "addClass", [($context["col_classes"] ?? null), (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "col_class_default", [], "any", false, false, true, 60)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("col-" . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 60))) : (""))], "method", false, false, true, 60), "html", null, true);
                    yield ">
            ";
                    // line 61
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 61), "html", null, true);
                    yield "
          </div>
        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 64
                yield "      </div>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 66
            yield "  ";
        } else {
            // line 67
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 68
                yield "      <div";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "attributes", [], "any", false, false, true, 68), "addClass", [($context["col_classes"] ?? null), (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "col_class_default", [], "any", false, false, true, 68)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("col-" . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 68))) : (""))], "method", false, false, true, 68), "html", null, true);
                yield ">
        ";
                // line 69
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 69));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 70
                    yield "          <div";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 70), "addClass", [($context["row_classes"] ?? null), (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "row_class_default", [], "any", false, false, true, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("row-" . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 70))) : (""))], "method", false, false, true, 70), "html", null, true);
                    yield ">
            ";
                    // line 71
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 71), "html", null, true);
                    yield "
          </div>
        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 74
                yield "      </div>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 76
            yield "  ";
        }
        // line 77
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["options", "title", "attributes", "items", "loop"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/bootstrap_barrio/templates/views/views-view-grid.html.twig";
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
        return array (  243 => 77,  240 => 76,  224 => 74,  206 => 71,  201 => 70,  184 => 69,  179 => 68,  161 => 67,  158 => 66,  142 => 64,  124 => 61,  119 => 60,  102 => 59,  97 => 58,  79 => 57,  77 => 56,  72 => 55,  66 => 53,  64 => 52,  61 => 48,  60 => 46,  58 => 45,  56 => 44,  53 => 40,  52 => 38,  50 => 37,  48 => 36,  46 => 31,  45 => 30,  44 => 28,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/bootstrap_barrio/templates/views/views-view-grid.html.twig", "C:\\laragon6-1\\www\\directory-ssdaa-dev-1\\themes\\bootstrap_barrio\\templates\\views\\views-view-grid.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 28, "if" => 36, "for" => 57];
        static $filters = ["escape" => 53];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "if", 2 => "for"],
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
