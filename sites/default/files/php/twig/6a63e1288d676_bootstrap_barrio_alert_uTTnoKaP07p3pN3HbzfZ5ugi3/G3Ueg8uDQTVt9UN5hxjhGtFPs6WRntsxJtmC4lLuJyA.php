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

/* bootstrap_barrio:alert */
class __TwigTemplate_ccc9e57f357c62f164ba72d22fb05aaf extends Template
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
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.bootstrap_barrio--alert"));
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "bootstrap_barrio:alert"));
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "bootstrap_barrio:alert"));
        yield "<svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
  <symbol id=\"check-circle-fill\" viewBox=\"0 0 16 16\">
    <path d=\"M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z\"/>
  </symbol>
  <symbol id=\"info-fill\" viewBox=\"0 0 16 16\">
    <path d=\"M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z\"/>
  </symbol>
  <symbol id=\"exclamation-triangle-fill\" viewBox=\"0 0 16 16\">
    <path d=\"M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z\"/>
  </symbol>
</svg>

<div class=\"alert-wrapper\" data-drupal-messages>
";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 15
            yield "  ";
            // line 16
            $context["classes"] = ["alert", "alert-dismissible", "d-flex align-items-center", "fade", "show", "col-12", (((            // line 23
$context["type"] == "status")) ? ("alert-success") : ("")), (((            // line 24
$context["type"] == "warning")) ? ("alert-warning") : ("")), (((            // line 25
$context["type"] == "error")) ? ("alert-danger") : ("")), (((            // line 26
$context["type"] == "info")) ? ("alert-info") : (""))];
            // line 29
            yield "  ";
            // line 30
            $context["role"] = ["status" => "status", "error" => "alert", "warning" => "alert", "info" => "status"];
            // line 37
            yield "  <div aria-label=\"";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v0 = ($context["status_headings"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[(($_v1 = $context["type"]) instanceof \Stringable ? (string) $_v1 : $_v1)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["status_headings"] ?? null), $context["type"], [], "array", false, false, true, 37)), "html", null, true);
            yield "\" ";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(($context["attributes"] ?? null), "role", "aria-label"), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 37), "setAttribute", ["data-drupal-selector", "messages"], "method", false, false, true, 37), "setAttribute", ["role", (($_v2 = ($context["role"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2[(($_v3 = $context["type"]) instanceof \Stringable ? (string) $_v3 : $_v3)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["role"] ?? null), $context["type"], [], "array", false, false, true, 37))], "method", false, false, true, 37), "html", null, true);
            yield ">
    ";
            // line 38
            if (($context["type"] == "error")) {
                // line 39
                yield "      <svg class=\"bi flex-shrink-0 me-4\" role=\"img\" aria-label=\"Danger:\"><use xlink:href=\"#exclamation-triangle-fill\"/></svg>
    ";
            } elseif ((            // line 40
$context["type"] == "warning")) {
                // line 41
                yield "      <svg class=\"bi flex-shrink-0 me-4\" role=\"img\" aria-label=\"Warning:\"><use xlink:href=\"#exclamation-triangle-fill\"/></svg>
    ";
            } elseif ((            // line 42
$context["type"] == "status")) {
                // line 43
                yield "      <svg class=\"bi flex-shrink-0 me-4\" role=\"img\" aria-label=\"Success:\"><use xlink:href=\"#check-circle-fill\"/></svg>
    ";
            } elseif ((            // line 44
$context["type"] == "info")) {
                // line 45
                yield "      <svg class=\"bi flex-shrink-0 me-4\" role=\"img\" aria-label=\"Warning:\"><use xlink:href=\"#exclamation-triangle-fill\"/></svg>
    ";
            }
            // line 47
            yield "    <div>
      <h2 id=\"";
            // line 48
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v4 = ($context["title_ids"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess && in_array($_v4::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v4[(($_v5 = $context["type"]) instanceof \Stringable ? (string) $_v5 : $_v5)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["title_ids"] ?? null), $context["type"], [], "array", false, false, true, 48)), "html", null, true);
            yield "\" class=\"alert-heading\">
        ";
            // line 49
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v6 = ($context["status_headings"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess && in_array($_v6::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v6[(($_v7 = $context["type"]) instanceof \Stringable ? (string) $_v7 : $_v7)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["status_headings"] ?? null), $context["type"], [], "array", false, false, true, 49)), "html", null, true);
            yield "
      </h2>
      ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
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
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 52
                yield "        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 53
                    yield "          ";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["message"], "html", null, true);
                    yield "
        ";
                } else {
                    // line 55
                    yield "          ";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["message"], "html", null, true);
                    yield "
      <hr>
        ";
                }
                // line 58
                yield "      ";
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
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 59
            yield "    </div>
    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 63
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["message_list", "status_headings", "attributes", "title_ids", "loop"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "bootstrap_barrio:alert";
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
        return array (  176 => 63,  166 => 59,  151 => 58,  144 => 55,  138 => 53,  135 => 52,  118 => 51,  113 => 49,  109 => 48,  106 => 47,  102 => 45,  100 => 44,  97 => 43,  95 => 42,  92 => 41,  90 => 40,  87 => 39,  85 => 38,  78 => 37,  76 => 30,  74 => 29,  72 => 26,  71 => 25,  70 => 24,  69 => 23,  68 => 16,  66 => 15,  62 => 14,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "bootstrap_barrio:alert", "C:\\laragon6-1\\www\\directory-ssdaa-dev-1/themes/bootstrap_barrio\\components\\alert\\alert.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 14, "set" => 16, "if" => 38];
        static $filters = ["escape" => 37, "without" => 37];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "for", 1 => "set", 2 => "if"],
                [0 => "escape", 1 => "without"],
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
