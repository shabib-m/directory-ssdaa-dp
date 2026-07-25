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

/* navigation:toolbar-button */
class __TwigTemplate_f6f3573a30bdf4d117a1297c0869ef43 extends Template
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
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.navigation--toolbar-button"));
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "navigation:toolbar-button"));
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "navigation:toolbar-button"));
        // line 4
        $context["classes"] = ["toolbar-button", (((($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 6
($context["icon"] ?? null), "icon_id", [], "any", false, false, true, 6)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("toolbar-button--icon--" . CoreExtension::getAttribute($this->env, $this->source, ($context["icon"] ?? null), "icon_id", [], "any", false, false, true, 6))) : (""))];
        // line 9
        yield "
";
        // line 10
        if (is_iterable(($context["modifiers"] ?? null))) {
            // line 11
            yield "  ";
            $context["classes"] = Twig\Extension\CoreExtension::merge(($context["classes"] ?? null), Twig\Extension\CoreExtension::map($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->isSandboxed($this->source), ($context["modifiers"] ?? null), function ($__modifier__) use ($context, $macros) { $context["modifier"] = $__modifier__; return ("toolbar-button--" . ($context["modifier"] ?? null)); }));
        }
        // line 13
        yield "
";
        // line 14
        if (is_iterable(($context["extra_classes"] ?? null))) {
            // line 15
            yield "  ";
            $context["classes"] = Twig\Extension\CoreExtension::merge(($context["classes"] ?? null), ($context["extra_classes"] ?? null));
        }
        // line 17
        yield "
";
        // line 18
        if (((($tmp = ($context["text"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["text"] ?? null)) > 1))) {
            // line 19
            yield "  ";
            // line 21
            yield "  ";
            $context["icon_text"] = Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["text"] ?? null), 0, 2), "");
            // line 22
            yield "  ";
            $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", ["data-index-text", Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["text"] ?? null)))], "method", false, false, true, 22), "setAttribute", ["data-icon-text", ($context["icon_text"] ?? null)], "method", false, false, true, 22);
        }
        // line 24
        yield "
<";
        // line 25
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("html_tag", $context)) ? (Twig\Extension\CoreExtension::default(($context["html_tag"] ?? null), "button")) : ("button")), "html", null, true);
        yield " ";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 25), "html", null, true);
        yield ">

  ";
        // line 27
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["icon"] ?? null), "icon_id", [], "any", false, false, true, 27)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "    ";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\IconsTwigExtension']->getIconRenderable(((CoreExtension::getAttribute($this->env, $this->source, ($context["icon"] ?? null), "pack_id", [], "any", true, true, true, 28)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["icon"] ?? null), "pack_id", [], "any", false, false, true, 28), "navigation")) : ("navigation")), CoreExtension::getAttribute($this->env, $this->source, ($context["icon"] ?? null), "icon_id", [], "any", false, false, true, 28), ((CoreExtension::getAttribute($this->env, $this->source, ($context["icon"] ?? null), "settings", [], "any", true, true, true, 28)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["icon"] ?? null), "settings", [], "any", false, false, true, 28), ["class" => "toolbar-button__icon", "size" => 20])) : (["class" => "toolbar-button__icon", "size" => 20]))), "html", null, true);
            yield "
  ";
        }
        // line 30
        yield "
  ";
        // line 31
        if ((($tmp = ($context["action"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 32
            yield "    <span data-toolbar-action class=\"visually-hidden\">";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["action"] ?? null), "html", null, true);
            yield "</span>
  ";
        }
        // line 34
        yield "  ";
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 39
        yield "
  ";
        // line 40
        if ((is_iterable(($context["modifiers"] ?? null)) && (CoreExtension::inFilter("expand--side", ($context["modifiers"] ?? null)) || CoreExtension::inFilter("expand--down", ($context["modifiers"] ?? null))))) {
            // line 41
            yield "    ";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\IconsTwigExtension']->getIconRenderable("navigation", "chevron", ["class" => "toolbar-button__chevron", "size" => 16]), "html", null, true);
            yield "
  ";
        }
        // line 43
        yield "
</";
        // line 44
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("html_tag", $context)) ? (Twig\Extension\CoreExtension::default(($context["html_tag"] ?? null), "button")) : ("button")), "html", null, true);
        yield ">
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["icon", "modifiers", "modifier", "extra_classes", "text", "html_tag", "action"]);        yield from [];
    }

    // line 34
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 35
        yield "    ";
        if ((($tmp = ($context["text"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 36
            yield "      <span class=\"toolbar-button__label\" data-toolbar-text>";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["text"] ?? null), "html", null, true);
            yield "</span>
    ";
        }
        // line 38
        yield "  ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "navigation:toolbar-button";
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
        return array (  154 => 38,  148 => 36,  145 => 35,  138 => 34,  130 => 44,  127 => 43,  121 => 41,  119 => 40,  116 => 39,  113 => 34,  107 => 32,  105 => 31,  102 => 30,  96 => 28,  94 => 27,  87 => 25,  84 => 24,  80 => 22,  77 => 21,  75 => 19,  73 => 18,  70 => 17,  66 => 15,  64 => 14,  61 => 13,  57 => 11,  55 => 10,  52 => 9,  50 => 6,  49 => 4,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "navigation:toolbar-button", "C:\\laragon6-1\\www\\directory-ssdaa-dev-1/core/modules/navigation\\components\\toolbar-button\\toolbar-button.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 4, "if" => 10, "block" => 34];
        static $filters = ["merge" => 11, "map" => 11, "length" => 18, "join" => 21, "slice" => 21, "lower" => 22, "first" => 22, "escape" => 25, "default" => 25];
        static $functions = ["icon" => 28];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "if", 2 => "block"],
                [0 => "merge", 1 => "map", 2 => "length", 3 => "join", 4 => "slice", 5 => "lower", 6 => "first", 7 => "escape", 8 => "default"],
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
