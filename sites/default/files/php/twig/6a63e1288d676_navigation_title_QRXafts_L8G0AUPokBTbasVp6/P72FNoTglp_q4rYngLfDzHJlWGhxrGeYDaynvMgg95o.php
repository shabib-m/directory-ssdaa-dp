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

/* navigation:title */
class __TwigTemplate_4c45d2348b3d113d6b6a472ef6566ee7 extends Template
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
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.navigation--title"));
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "navigation:title"));
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "navigation:title"));
        // line 2
        $context["classes"] = ["toolbar-title"];
        // line 6
        if (is_iterable(($context["modifiers"] ?? null))) {
            // line 7
            yield "  ";
            $context["classes"] = Twig\Extension\CoreExtension::merge(($context["classes"] ?? null), Twig\Extension\CoreExtension::map($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->isSandboxed($this->source), ($context["modifiers"] ?? null), function ($__modifier__) use ($context, $macros) { $context["modifier"] = $__modifier__; return ("toolbar-title--" . ($context["modifier"] ?? null)); }));
        }
        // line 9
        yield "
";
        // line 10
        if (is_iterable(($context["extra_classes"] ?? null))) {
            // line 11
            yield "  ";
            $context["classes"] = Twig\Extension\CoreExtension::merge(($context["classes"] ?? null), ($context["extra_classes"] ?? null));
        }
        // line 13
        yield "
<";
        // line 14
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("html_tag", $context)) ? (Twig\Extension\CoreExtension::default(($context["html_tag"] ?? null), "h2")) : ("h2")), "html", null, true);
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 14), "html", null, true);
        yield ">
  ";
        // line 15
        if ((($tmp = ($context["icon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 16
            yield "    ";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\IconsTwigExtension']->getIconRenderable("navigation", ($context["icon"] ?? null), ["class" => "toolbar-title__icon", "size" => 16]), "html", null, true);
            yield "
  ";
        }
        // line 18
        yield "  <span class=\"toolbar-title__label\">
    ";
        // line 19
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 22
        yield "  </span>
</";
        // line 23
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("html_tag", $context)) ? (Twig\Extension\CoreExtension::default(($context["html_tag"] ?? null), "h2")) : ("h2")), "html", null, true);
        yield ">
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["modifiers", "modifier", "extra_classes", "html_tag", "attributes", "icon", "content"]);        yield from [];
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 20
        yield "      ";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true);
        yield "
    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "navigation:title";
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
        return array (  105 => 20,  98 => 19,  90 => 23,  87 => 22,  85 => 19,  82 => 18,  76 => 16,  74 => 15,  69 => 14,  66 => 13,  62 => 11,  60 => 10,  57 => 9,  53 => 7,  51 => 6,  49 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "navigation:title", "C:\\laragon6-1\\www\\directory-ssdaa-dev-1/core/modules/navigation\\components\\title\\title.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 2, "if" => 6, "block" => 19];
        static $filters = ["merge" => 7, "map" => 7, "escape" => 14, "default" => 14];
        static $functions = ["icon" => 16];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "if", 2 => "block"],
                [0 => "merge", 1 => "map", 2 => "escape", 3 => "default"],
                [0 => "icon"],
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
