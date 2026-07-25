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

/* core/themes/claro/templates/admin/system-modules-details.html.twig */
class __TwigTemplate_237cd6cf3b40716506c33f83971c8bd1 extends Template
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
        // line 27
        yield "<table class=\"responsive-enabled module-list\">
  <thead>
    <tr>
      <th class=\"checkbox visually-hidden\">";
        // line 30
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Installed"));
        yield "</th>
      <th class=\"name visually-hidden\">";
        // line 31
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Name"));
        yield "</th>
      <th class=\"description visually-hidden priority-low\">";
        // line 32
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Description"));
        yield "</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 37
            yield "      <tr";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, true, 37), "addClass", ["module-list__module"], "method", false, false, true, 37), "html", null, true);
            yield ">
        <td class=\"module-list__checkbox\">
          ";
            // line 39
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["module"], "checkbox", [], "any", false, false, true, 39), "html", null, true);
            yield "
        </td>
        <td class=\"module-list__module\">
          <label id=\"";
            // line 42
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["module"], "id", [], "any", false, false, true, 42), "html", null, true);
            yield "\" for=\"";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["module"], "enable_id", [], "any", false, false, true, 42), "html", null, true);
            yield "\" class=\"module-list__module-name table-filter-text-source\">";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, true, 42), "html", null, true);
            yield "</label>
        </td>
        <td class=\"expand priority-low module-list__description\">
          <details class=\"js-form-wrapper form-wrapper module-list__module-details claro-details\" id=\"";
            // line 45
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["module"], "enable_id", [], "any", false, false, true, 45), "html", null, true);
            yield "-description\">
            <summary aria-controls=\"";
            // line 46
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["module"], "enable_id", [], "any", false, false, true, 46), "html", null, true);
            yield "-description\" role=\"button\" aria-expanded=\"false\" class=\"claro-details__summary module-list__module-summary\"><span class=\"text module-description\">";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["module"], "description", [], "any", false, false, true, 46), "html", null, true);
            yield "</span></summary>
            <div class=\"claro-details__wrapper module-details__wrapper\">
              <div class=\"module-details__description\">
                <div class=\"module-details__requirements\">
                  <div class=\"module-details__requirement\">";
            // line 50
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Machine name: <span dir=\"ltr\" class=\"table-filter-text-source\">@machine-name</span>", ["@machine-name" => CoreExtension::getAttribute($this->env, $this->source, $context["module"], "machine_name", [], "any", false, false, true, 50)]));
            yield "</div>
                  ";
            // line 51
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["module"], "version", [], "any", false, false, true, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 52
                yield "                    <div class=\"module-details__requirement\">";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Version: @module-version", ["@module-version" => CoreExtension::getAttribute($this->env, $this->source, $context["module"], "version", [], "any", false, false, true, 52)]));
                yield "</div>
                  ";
            }
            // line 54
            yield "                  ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["module"], "requires", [], "any", false, false, true, 54)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 55
                yield "                    <div class=\"module-details__requirement\">";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Requires: @module-list", ["@module-list" => CoreExtension::getAttribute($this->env, $this->source, $context["module"], "requires", [], "any", false, false, true, 55)]));
                yield "</div>
                  ";
            }
            // line 57
            yield "                  ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["module"], "required_by", [], "any", false, false, true, 57)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 58
                yield "                    <div class=\"module-details__requirement\">";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Required by: @module-list", ["@module-list" => CoreExtension::getAttribute($this->env, $this->source, $context["module"], "required_by", [], "any", false, false, true, 58)]));
                yield "</div>
                  ";
            }
            // line 60
            yield "                </div>
                ";
            // line 61
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["module"], "links", [], "any", false, false, true, 61)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 62
                yield "                  <div class=\"module-details__links\">
                    ";
                // line 63
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(["help", "permissions", "configure"]);
                foreach ($context['_seq'] as $context["_key"] => $context["link_type"]) {
                    // line 64
                    yield "                      ";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["module"], "links", [], "any", false, false, true, 64)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[(($_v1 = $context["link_type"]) instanceof \Stringable ? (string) $_v1 : $_v1)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["module"], "links", [], "any", false, false, true, 64), $context["link_type"], [], "array", false, false, true, 64)), "html", null, true);
                    yield "
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['link_type'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 66
                yield "                  </div>
                ";
            }
            // line 68
            yield "              </div>
            </div>
          </details>
        </td>
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['module'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 74
        yield "  </tbody>
</table>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["modules"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/themes/claro/templates/admin/system-modules-details.html.twig";
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
        return array (  171 => 74,  159 => 68,  155 => 66,  145 => 64,  141 => 63,  138 => 62,  136 => 61,  133 => 60,  127 => 58,  124 => 57,  118 => 55,  115 => 54,  109 => 52,  107 => 51,  103 => 50,  94 => 46,  90 => 45,  80 => 42,  74 => 39,  68 => 37,  64 => 36,  57 => 32,  53 => 31,  49 => 30,  44 => 27,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/themes/claro/templates/admin/system-modules-details.html.twig", "C:\\laragon6-1\\www\\directory-ssdaa-dev-1\\core\\themes\\claro\\templates\\admin\\system-modules-details.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 36, "if" => 51];
        static $filters = ["t" => 30, "escape" => 37];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "for", 1 => "if"],
                [0 => "t", 1 => "escape"],
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
