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

/* core/modules/navigation/templates/top-bar-page-actions.html.twig */
class __TwigTemplate_064140482ba18124af716c2ab209a2d2 extends Template
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
        // line 11
        $context["dropdown_id"] = \Drupal\Component\Utility\Html::getUniqueId("top-bar-page-actions");
        // line 12
        yield "
";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["featured_page_actions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["featured_page_action"]) {
            // line 14
            yield "  ";
            $context["link"] = (($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["featured_page_action"], "page_action", [], "any", false, false, true, 14)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#link"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["featured_page_action"], "page_action", [], "any", false, false, true, 14), "#link", [], "array", false, false, true, 14));
            // line 15
            yield "  ";
            yield from $this->load("navigation:toolbar-button", 15)->unwrap()->yield(CoreExtension::toArray(["text" => (($_v1 =             // line 16
($context["link"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["#title"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["link"] ?? null), "#title", [], "array", false, false, true, 16)), "html_tag" => "a", "attributes" => CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(((CoreExtension::getAttribute($this->env, $this->source,             // line 18
($context["link"] ?? null), "#attributes", [], "array", true, true, true, 18)) ? (Twig\Extension\CoreExtension::default((($_v2 = ($context["link"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2["#attributes"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["link"] ?? null), "#attributes", [], "array", false, false, true, 18)), [])) : ([]))), "setAttribute", ["href", Twig\Extension\CoreExtension::default($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((($_v3 = ($context["link"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3["#url"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["link"] ?? null), "#url", [], "array", false, false, true, 18))), null)], "method", false, false, true, 18), "modifiers" => ["primary"], "icon" => CoreExtension::getAttribute($this->env, $this->source,             // line 20
$context["featured_page_action"], "icon", [], "any", false, false, true, 20)]));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['featured_page_action'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 23
        yield "
";
        // line 24
        if ((($tmp = ($context["page_actions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 25
            yield "  ";
            yield from $this->load("navigation:toolbar-button", 25)->unwrap()->yield(CoreExtension::toArray(["icon" => ["icon_id" => "dots"], "action" => t("More actions"), "attributes" => $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["aria-expanded" => "false", "aria-controls" =>             // line 31
($context["dropdown_id"] ?? null), "data-drupal-dropdown" => "true"])]));
            // line 36
            yield "
  <div class=\"toolbar-dropdown__menu\" id=";
            // line 37
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["dropdown_id"] ?? null), "html", null, true);
            yield ">
    <ul class=\"toolbar-dropdown__list\">
      ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["page_actions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page_action"]) {
                // line 40
                yield "        ";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["page_action"], "html", null, true);
                yield "
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page_action'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 42
            yield "    </ul>
  </div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["featured_page_actions", "page_actions"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/modules/navigation/templates/top-bar-page-actions.html.twig";
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
        return array (  98 => 42,  88 => 40,  84 => 39,  79 => 37,  76 => 36,  74 => 31,  72 => 25,  70 => 24,  67 => 23,  60 => 20,  59 => 18,  58 => 16,  56 => 15,  53 => 14,  49 => 13,  46 => 12,  44 => 11,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/modules/navigation/templates/top-bar-page-actions.html.twig", "C:\\laragon6-1\\www\\directory-ssdaa-dev-1\\core\\modules\\navigation\\templates\\top-bar-page-actions.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 11, "for" => 13, "include" => 15, "if" => 24];
        static $filters = ["clean_unique_id" => 11, "default" => 18, "render" => 18, "t" => 27, "escape" => 37];
        static $functions = ["create_attribute" => 18];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "for", 2 => "include", 3 => "if"],
                [0 => "clean_unique_id", 1 => "default", 2 => "render", 3 => "t", 4 => "escape"],
                [0 => "create_attribute"],
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
