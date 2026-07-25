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

/* themes/directory_ssdaa/templates/page.html.twig */
class __TwigTemplate_4c48e952bb5c97ef972c90a3a4655ab7 extends Template
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
            'head' => [$this, 'block_head'],
            'featured' => [$this, 'block_featured'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 70
        yield "<div id=\"page-wrapper\">
  <div id=\"page\">
    <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        // line 72
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Site header"));
        yield "\">
     <div class=\"headop\">
      ";
        // line 74
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 125
        yield "               ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_bottom", [], "any", false, false, true, 125)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 126
            yield "               <div class=\"container\">
                  <div class=\"header-bottom justify-content-end\">
                    ";
            // line 128
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_bottom", [], "any", false, false, true, 128), "html", null, true);
            yield "
                  </div>
                  </div>
                ";
        }
        // line 131
        yield "      
      </div>
    </header>
    ";
        // line 134
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 134)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 135
            yield "      <div class=\"highlighted\">
        <aside class=\"";
            // line 136
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true);
            yield " section clearfix\" role=\"complementary\">
          ";
            // line 137
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 137), "html", null, true);
            yield "
        </aside>
      </div>
    ";
        }
        // line 141
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 141)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 142
            yield "      ";
            yield from $this->unwrap()->yieldBlock('featured', $context, $blocks);
            // line 149
            yield "    ";
        }
        // line 150
        yield "    <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
      ";
        // line 151
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 180
        yield "    </div>
    ";
        // line 181
        if ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 181)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 181)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 181)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 182
            yield "      <div class=\"featured-bottom\">
        <aside class=\"";
            // line 183
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true);
            yield " clearfix\" role=\"complementary\">
          ";
            // line 184
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 184), "html", null, true);
            yield "
          ";
            // line 185
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 185), "html", null, true);
            yield "
          ";
            // line 186
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 186), "html", null, true);
            yield "
        </aside>
      </div>
    ";
        }
        // line 190
        yield "    <footer class=\"site-footer\">
      ";
        // line 191
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 208
        yield "    </footer>
  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "container", "navbar_top_attributes", "container_navbar", "navbar_attributes", "navbar_collapse_btn_data", "navbar_collapse_class", "navbar_offcanvas", "sidebar_collapse", "is_front", "content_attributes", "sidebar_first_attributes", "sidebar_second_attributes"]);        yield from [];
    }

    // line 74
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 75
        yield "        ";
        if ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 76
            yield "          <nav";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["navbar_top_attributes"] ?? null), "html", null, true);
            yield ">
          ";
            // line 77
            if ((($tmp = ($context["container_navbar"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 78
                yield "          <div class=\"container\">
          ";
            }
            // line 80
            yield "              ";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 80), "html", null, true);
            yield "
              ";
            // line 81
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 81), "html", null, true);
            yield "
              ";
            // line 82
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 82)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 83
                yield "                <div class=\"form-inline navbar-form ms-auto\">
                  ";
                // line 84
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 84), "html", null, true);
                yield "
                </div>
              ";
            }
            // line 87
            yield "          ";
            if ((($tmp = ($context["container_navbar"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 88
                yield "          </div>
          ";
            }
            // line 90
            yield "          </nav>
        ";
        }
        // line 92
        yield "        <nav";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["navbar_attributes"] ?? null), "html", null, true);
        yield ">
          ";
        // line 93
        if ((($tmp = ($context["container_navbar"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 94
            yield "          <div class=\"container\">
          ";
        }
        // line 96
        yield "            ";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 96), "html", null, true);
        yield "
            ";
        // line 97
        if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 97)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 97)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 98
            yield "              <button class=\"navbar-toggler collapsed\" type=\"button\" data-bs-toggle=\"";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["navbar_collapse_btn_data"] ?? null), "html", null, true);
            yield "\" data-bs-target=\"#CollapsingNavbar\" aria-controls=\"CollapsingNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
              <div class=\"";
            // line 99
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["navbar_collapse_class"] ?? null), "html", null, true);
            yield "\" id=\"CollapsingNavbar\">
                ";
            // line 100
            if ((($tmp = ($context["navbar_offcanvas"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 101
                yield "                  <div class=\"offcanvas-header\">
                    <button type=\"button\" class=\"btn-close text-reset\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
                  </div>
                  <div class=\"offcanvas-body\">
                ";
            }
            // line 106
            yield "                ";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 106), "html", null, true);
            yield "
                ";
            // line 107
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 107)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 108
                yield "                  <div class=\"form-inline navbar-form justify-content-end\">
                    ";
                // line 109
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 109), "html", null, true);
                yield "
                  </div>
                ";
            }
            // line 112
            yield "                ";
            if ((($tmp = ($context["navbar_offcanvas"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 113
                yield "                  </div>
                ";
            }
            // line 115
            yield "\t            </div>
            ";
        }
        // line 117
        yield "            ";
        if ((($tmp = ($context["sidebar_collapse"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 118
            yield "              <button class=\"navbar-toggler navbar-toggler-left collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#CollapsingLeft\" aria-controls=\"CollapsingLeft\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>
            ";
        }
        // line 120
        yield "          ";
        if ((($tmp = ($context["container_navbar"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 121
            yield "          </div>
          ";
        }
        // line 123
        yield "        </nav>
      ";
        yield from [];
    }

    // line 142
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_featured(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 143
        yield "        <div class=\"featured-top\">
          <aside class=\"featured-top__inner section ";
        // line 144
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true);
        yield " clearfix\" role=\"complementary\">
            ";
        // line 145
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 145), "html", null, true);
        yield "
          </aside>
        </div>
      ";
        yield from [];
    }

    // line 151
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 152
        yield "        <div id=\"main\" class=\"";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true);
        yield "\">
        ";
        // line 153
        if ( !(($tmp = ($context["is_front"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 154
            yield "          ";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 154), "html", null, true);
            yield "
        ";
        }
        // line 155
        yield "  
          <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
              <main";
        // line 157
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_attributes"] ?? null), "html", null, true);
        yield ">
                <section class=\"section\">
                  <a id=\"main-content\" tabindex=\"-1\"></a>
                  ";
        // line 160
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 160), "html", null, true);
        yield "
                </section>
              </main>
            ";
        // line 163
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 163)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 164
            yield "              <div";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_first_attributes"] ?? null), "html", null, true);
            yield ">
                <aside class=\"section\" role=\"complementary\">
                  ";
            // line 166
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 166), "html", null, true);
            yield "
                </aside>
              </div>
            ";
        }
        // line 170
        yield "            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 170)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 171
            yield "              <div";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_second_attributes"] ?? null), "html", null, true);
            yield ">
                <aside class=\"section\" role=\"complementary\">
                  ";
            // line 173
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 173), "html", null, true);
            yield "
                </aside>
              </div>
            ";
        }
        // line 177
        yield "          </div>
        </div>
      ";
        yield from [];
    }

    // line 191
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 192
        yield "        <div class=\"";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true);
        yield "\">
          ";
        // line 193
        if (((((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 193)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 193)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 193)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 193)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 194
            yield "            <div class=\"site-footer__top clearfix\">
              ";
            // line 195
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 195), "html", null, true);
            yield "
              ";
            // line 196
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 196), "html", null, true);
            yield "
              ";
            // line 197
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 197), "html", null, true);
            yield "
              ";
            // line 198
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 198), "html", null, true);
            yield "
            </div>
          ";
        }
        // line 201
        yield "          ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 201)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 202
            yield "            <div class=\"site-footer__bottom\">
              ";
            // line 203
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 203), "html", null, true);
            yield "
            </div>
          ";
        }
        // line 206
        yield "        </div>
      ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/directory_ssdaa/templates/page.html.twig";
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
        return array (  428 => 206,  422 => 203,  419 => 202,  416 => 201,  410 => 198,  406 => 197,  402 => 196,  398 => 195,  395 => 194,  393 => 193,  388 => 192,  381 => 191,  374 => 177,  367 => 173,  361 => 171,  358 => 170,  351 => 166,  345 => 164,  343 => 163,  337 => 160,  331 => 157,  327 => 155,  321 => 154,  319 => 153,  314 => 152,  307 => 151,  298 => 145,  294 => 144,  291 => 143,  284 => 142,  278 => 123,  274 => 121,  271 => 120,  267 => 118,  264 => 117,  260 => 115,  256 => 113,  253 => 112,  247 => 109,  244 => 108,  242 => 107,  237 => 106,  230 => 101,  228 => 100,  224 => 99,  219 => 98,  217 => 97,  212 => 96,  208 => 94,  206 => 93,  201 => 92,  197 => 90,  193 => 88,  190 => 87,  184 => 84,  181 => 83,  179 => 82,  175 => 81,  170 => 80,  166 => 78,  164 => 77,  159 => 76,  156 => 75,  149 => 74,  140 => 208,  138 => 191,  135 => 190,  128 => 186,  124 => 185,  120 => 184,  116 => 183,  113 => 182,  111 => 181,  108 => 180,  106 => 151,  103 => 150,  100 => 149,  97 => 142,  94 => 141,  87 => 137,  83 => 136,  80 => 135,  78 => 134,  73 => 131,  66 => 128,  62 => 126,  59 => 125,  57 => 74,  52 => 72,  48 => 70,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/directory_ssdaa/templates/page.html.twig", "C:\\laragon6-1\\www\\directory-ssdaa-dev-1\\themes\\directory_ssdaa\\templates\\page.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["block" => 74, "if" => 125];
        static $filters = ["t" => 72, "escape" => 128];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "block", 1 => "if"],
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
