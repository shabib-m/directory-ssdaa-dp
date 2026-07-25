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

/* themes/bootstrap_barrio/templates/form/form-element.html.twig */
class __TwigTemplate_7908d89c430b198ae1647326716355d1 extends Template
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
        // line 47
        yield "
";
        // line 49
        $context["label_attributes"] = (((($tmp = ($context["label_attributes"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["label_attributes"] ?? null)) : ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
        // line 51
        yield "
";
        // line 52
        if ((($context["type"] ?? null) == "checkbox")) {
            // line 53
            yield "  ";
            $context["wrapperclass"] = (((($context["checkbox_style"] ?? null) != "form-button")) ? ("form-check") : (""));
            // line 54
            yield "  ";
            $context["labelclass"] = (((($context["checkbox_style"] ?? null) == "form-button")) ? ("btn btn-outline-primary") : ("form-check-label"));
            // line 55
            yield "  ";
            $context["inputclass"] = (((($context["checkbox_style"] ?? null) == "form-button")) ? ("btn-check") : ("form-check-input"));
        }
        // line 57
        yield "
";
        // line 58
        if ((($context["type"] ?? null) == "radio")) {
            // line 59
            yield "  ";
            $context["wrapperclass"] = (((($context["checkbox_style"] ?? null) != "form-button")) ? ("form-check") : (""));
            // line 60
            yield "  ";
            $context["labelclass"] = (((($context["checkbox_style"] ?? null) == "form-button")) ? ("btn btn-outline-primary") : ("form-check-label"));
            // line 61
            yield "  ";
            $context["inputclass"] = (((($context["checkbox_style"] ?? null) == "form-button")) ? ("btn-check") : ("form-check-input"));
        }
        // line 63
        yield "
";
        // line 65
        $context["classes"] = ["js-form-item", ("js-form-type-" . \Drupal\Component\Utility\Html::getClass(        // line 67
($context["type"] ?? null))), ((CoreExtension::inFilter(        // line 68
($context["type"] ?? null), ["checkbox", "radio"])) ? (\Drupal\Component\Utility\Html::getClass(($context["type"] ?? null))) : (("form-type-" . \Drupal\Component\Utility\Html::getClass(($context["type"] ?? null))))), ((CoreExtension::inFilter(        // line 69
($context["type"] ?? null), ["checkbox", "radio"])) ? (($context["wrapperclass"] ?? null)) : ("")), (((        // line 70
($context["checkbox_style"] ?? null) == "form-switch")) ? ("form-switch") : ("")), ((CoreExtension::inFilter(        // line 71
($context["type"] ?? null), ["checkbox"])) ? ("mb-3") : ("")), ("js-form-item-" . \Drupal\Component\Utility\Html::getClass(        // line 72
($context["name"] ?? null))), ("form-item-" . \Drupal\Component\Utility\Html::getClass(        // line 73
($context["name"] ?? null))), ((!CoreExtension::inFilter(        // line 74
($context["title_display"] ?? null), ["after", "before"])) ? ("form-no-label") : ("")), (((        // line 75
($context["disabled"] ?? null) == "disabled")) ? ("disabled") : ("")), (((($tmp =         // line 76
($context["errors"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("has-error") : (""))];
        // line 79
        yield "
";
        // line 80
        if ((($context["title_display"] ?? null) == "invisible")) {
            // line 81
            yield "  ";
            if (array_key_exists("labelclass", $context)) {
                // line 82
                yield "    ";
                $context["labelclass"] = (($context["labelclass"] ?? null) . " visually-hidden");
                // line 83
                yield "  ";
            } else {
                // line 84
                yield "    ";
                $context["labelclass"] = "visually-hidden";
                // line 85
                yield "  ";
            }
        }
        // line 87
        yield "
";
        // line 89
        $context["description_classes"] = ["description", "text-muted", (((        // line 92
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : (""))];
        // line 95
        if (CoreExtension::inFilter(($context["type"] ?? null), ["checkbox", "radio"])) {
            // line 96
            yield "  <div";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 96), "html", null, true);
            yield ">
    ";
            // line 97
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["prefix"] ?? null))) {
                // line 98
                yield "      <span class=\"field-prefix\">";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["prefix"] ?? null), "html", null, true);
                yield "</span>
    ";
            }
            // line 100
            yield "    ";
            if (((($context["description_display"] ?? null) == "before") && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 100)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 101
                yield "      <div";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 101), "html", null, true);
                yield ">
        ";
                // line 102
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 102), "html", null, true);
                yield "
      </div>
    ";
            }
            // line 105
            yield "    ";
            if (CoreExtension::inFilter(($context["label_display"] ?? null), ["before", "invisible"])) {
                // line 106
                yield "      <label ";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["label_attributes"] ?? null), "addClass", [($context["labelclass"] ?? null)], "method", false, false, true, 106), "setAttribute", ["for", CoreExtension::getAttribute($this->env, $this->source, ($context["input_attributes"] ?? null), "id", [], "any", false, false, true, 106)], "method", false, false, true, 106), "html", null, true);
                yield ">
        ";
                // line 107
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["input_title"] ?? null));
                yield "
      </label>
    ";
            }
            // line 110
            yield "    ";
            if ((($context["checkbox_style"] ?? null) == "form-button")) {
                // line 111
                yield "      <input";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["input_attributes"] ?? null), "addClass", [($context["inputclass"] ?? null)], "method", false, false, true, 111), "setAttribute", ["autocomplete", "off"], "method", false, false, true, 111), "html", null, true);
                yield ">
    ";
            } else {
                // line 113
                yield "      <input";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["input_attributes"] ?? null), "addClass", [($context["inputclass"] ?? null)], "method", false, false, true, 113), "html", null, true);
                yield ">
    ";
            }
            // line 115
            yield "    ";
            if ((($context["label_display"] ?? null) == "after")) {
                // line 116
                yield "      <label ";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["label_attributes"] ?? null), "addClass", [($context["labelclass"] ?? null)], "method", false, false, true, 116), "setAttribute", ["for", CoreExtension::getAttribute($this->env, $this->source, ($context["input_attributes"] ?? null), "id", [], "any", false, false, true, 116)], "method", false, false, true, 116), "html", null, true);
                yield ">
        ";
                // line 117
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["input_title"] ?? null));
                yield "
      </label>
    ";
            }
            // line 120
            yield "    ";
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["suffix"] ?? null))) {
                // line 121
                yield "      <span class=\"field-suffix\">";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["suffix"] ?? null), "html", null, true);
                yield "</span>
    ";
            }
            // line 123
            yield "    ";
            if ((($tmp = ($context["errors"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 124
                yield "      <div class=\"invalid-feedback form-item--error-message\">
        ";
                // line 125
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["errors"] ?? null), "html", null, true);
                yield "
      </div>
    ";
            }
            // line 128
            yield "    ";
            if ((CoreExtension::inFilter(($context["description_display"] ?? null), ["after", "invisible"]) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 128)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 129
                yield "      <small";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 129), "addClass", [($context["description_classes"] ?? null)], "method", false, false, true, 129), "html", null, true);
                yield ">
        ";
                // line 130
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 130), "html", null, true);
                yield "
      </small>
    ";
            }
            // line 133
            yield "  </div>
";
        } else {
            // line 135
            yield "  <div";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null), "mb-3", (((($tmp = ($context["float_label"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("form-floating") : (""))], "method", false, false, true, 135), "html", null, true);
            yield ">
    ";
            // line 136
            if (CoreExtension::inFilter(($context["label_display"] ?? null), ["before", "invisible"])) {
                // line 137
                yield "      ";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
                yield "
    ";
            }
            // line 139
            yield "    ";
            if (((!Twig\Extension\CoreExtension::testEmpty(($context["prefix"] ?? null))) || (!Twig\Extension\CoreExtension::testEmpty(($context["suffix"] ?? null))))) {
                // line 140
                yield "      <div class=\"input-group";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($tmp = ($context["errors"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-invalid") : ("")));
                yield "\">
    ";
            }
            // line 142
            yield "    ";
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["prefix"] ?? null))) {
                // line 143
                yield "      <div class=\"input-group-prepend\">
        <span class=\"field-prefix input-group-text\">";
                // line 144
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["prefix"] ?? null), "html", null, true);
                yield "</span>
      </div>
    ";
            }
            // line 147
            yield "    ";
            if (((($context["description_display"] ?? null) == "before") && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 147)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 148
                yield "      <div";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 148), "html", null, true);
                yield ">
        ";
                // line 149
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 149), "html", null, true);
                yield "
      </div>
    ";
            }
            // line 152
            yield "    ";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true);
            yield "
    ";
            // line 153
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["suffix"] ?? null))) {
                // line 154
                yield "      <div class=\"input-group-append\">
        <span class=\"field-suffix input-group-text\">";
                // line 155
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["suffix"] ?? null), "html", null, true);
                yield "</span>
      </div>
    ";
            }
            // line 158
            yield "    ";
            if (((!Twig\Extension\CoreExtension::testEmpty(($context["prefix"] ?? null))) || (!Twig\Extension\CoreExtension::testEmpty(($context["suffix"] ?? null))))) {
                // line 159
                yield "      </div>
    ";
            }
            // line 161
            yield "    ";
            if ((($context["label_display"] ?? null) == "after")) {
                // line 162
                yield "      ";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
                yield "
    ";
            }
            // line 164
            yield "    ";
            if ((($tmp = ($context["errors"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 165
                yield "      <div class=\"invalid-feedback form-item--error-message\">
        ";
                // line 166
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["errors"] ?? null), "html", null, true);
                yield "
      </div>
    ";
            }
            // line 169
            yield "    ";
            if ((CoreExtension::inFilter(($context["description_display"] ?? null), ["after", "invisible"]) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 169)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 170
                yield "      <small";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 170), "addClass", [($context["description_classes"] ?? null)], "method", false, false, true, 170), "html", null, true);
                yield ">
        ";
                // line 171
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 171), "html", null, true);
                yield "
      </small>
    ";
            }
            // line 174
            yield "  </div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["type", "checkbox_style", "name", "title_display", "disabled", "errors", "description_display", "attributes", "prefix", "description", "label_display", "input_attributes", "input_title", "suffix", "float_label", "label", "children"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/bootstrap_barrio/templates/form/form-element.html.twig";
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
        return array (  338 => 174,  332 => 171,  327 => 170,  324 => 169,  318 => 166,  315 => 165,  312 => 164,  306 => 162,  303 => 161,  299 => 159,  296 => 158,  290 => 155,  287 => 154,  285 => 153,  280 => 152,  274 => 149,  269 => 148,  266 => 147,  260 => 144,  257 => 143,  254 => 142,  248 => 140,  245 => 139,  239 => 137,  237 => 136,  232 => 135,  228 => 133,  222 => 130,  217 => 129,  214 => 128,  208 => 125,  205 => 124,  202 => 123,  196 => 121,  193 => 120,  187 => 117,  182 => 116,  179 => 115,  173 => 113,  167 => 111,  164 => 110,  158 => 107,  153 => 106,  150 => 105,  144 => 102,  139 => 101,  136 => 100,  130 => 98,  128 => 97,  123 => 96,  121 => 95,  119 => 92,  118 => 89,  115 => 87,  111 => 85,  108 => 84,  105 => 83,  102 => 82,  99 => 81,  97 => 80,  94 => 79,  92 => 76,  91 => 75,  90 => 74,  89 => 73,  88 => 72,  87 => 71,  86 => 70,  85 => 69,  84 => 68,  83 => 67,  82 => 65,  79 => 63,  75 => 61,  72 => 60,  69 => 59,  67 => 58,  64 => 57,  60 => 55,  57 => 54,  54 => 53,  52 => 52,  49 => 51,  47 => 49,  44 => 47,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/bootstrap_barrio/templates/form/form-element.html.twig", "C:\\laragon6-1\\www\\directory-ssdaa-dev-1\\themes\\bootstrap_barrio\\templates\\form\\form-element.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 49, "if" => 52];
        static $filters = ["clean_class" => 67, "escape" => 96, "raw" => 107];
        static $functions = ["create_attribute" => 49];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "if"],
                [0 => "clean_class", 1 => "escape", 2 => "raw"],
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
