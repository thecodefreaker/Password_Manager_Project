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
use Twig\Source;
use Twig\Template;

/* @Security/Collector/security.html.twig */
class __TwigTemplate_91b67873431f261aa187032f519de0b3363e6c4e6e0aff77e996f102cf36c16d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Security/Collector/security.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Security/Collector/security.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@Security/Collector/security.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        // line 0
        yield "Security";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        return; yield '';
    }

    // line 5
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 6, $this->source); })()), "token", [], "any", false, false, false, 6)) {
            // line 7
            yield "        ";
            $context["is_authenticated"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 7, $this->source); })()), "enabled", [], "any", false, false, false, 7) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 7, $this->source); })()), "authenticated", [], "any", false, false, false, 7));
            // line 8
            yield "        ";
            $context["color_code"] = (( !(isset($context["is_authenticated"]) || array_key_exists("is_authenticated", $context) ? $context["is_authenticated"] : (function () { throw new RuntimeError('Variable "is_authenticated" does not exist.', 8, $this->source); })())) ? ("yellow") : (""));
            // line 9
            yield "    ";
        } elseif (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 9, $this->source); })()), "enabled", [], "any", false, false, false, 9)) {
            // line 10
            yield "        ";
            $context["color_code"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 10, $this->source); })()), "authenticatorManagerEnabled", [], "any", false, false, false, 10)) ? ("yellow") : ("red"));
            // line 11
            yield "    ";
        } else {
            // line 12
            yield "        ";
            $context["color_code"] = "";
            // line 13
            yield "    ";
        }
        // line 14
        yield "
    ";
        // line 15
        $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 16
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@Security/Collector/icon.svg");
            yield "
        <span class=\"sf-toolbar-value\">";
            // line 17
            yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "user", [], "any", true, true, false, 17)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "user", [], "any", false, false, false, 17), "n/a")) : ("n/a")), "html", null, true);
            yield "</span>
    ";
        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 19
        yield "
    ";
        // line 20
        $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 21
            yield "        ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 21, $this->source); })()), "impersonated", [], "any", false, false, false, 21)) {
                // line 22
                yield "            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>Impersonator</b>
                    <span>";
                // line 25
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 25, $this->source); })()), "impersonatorUser", [], "any", false, false, false, 25), "html", null, true);
                yield "</span>
                </div>
            </div>
        ";
            }
            // line 29
            yield "
        <div class=\"sf-toolbar-info-group\">
            ";
            // line 31
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 31, $this->source); })()), "enabled", [], "any", false, false, false, 31)) {
                // line 32
                yield "                ";
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 32, $this->source); })()), "token", [], "any", false, false, false, 32)) {
                    // line 33
                    yield "                    <div class=\"sf-toolbar-info-piece\">
                        <b>Logged in as</b>
                        <span>";
                    // line 35
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "html", null, true);
                    yield "</span>
                    </div>

                    <div class=\"sf-toolbar-info-piece\">
                        <b>Authenticated</b>
                        <span class=\"sf-toolbar-status sf-toolbar-status-";
                    // line 40
                    yield (((isset($context["is_authenticated"]) || array_key_exists("is_authenticated", $context) ? $context["is_authenticated"] : (function () { throw new RuntimeError('Variable "is_authenticated" does not exist.', 40, $this->source); })())) ? ("green") : ("yellow"));
                    yield "\">";
                    yield (((isset($context["is_authenticated"]) || array_key_exists("is_authenticated", $context) ? $context["is_authenticated"] : (function () { throw new RuntimeError('Variable "is_authenticated" does not exist.', 40, $this->source); })())) ? ("Yes") : ("No"));
                    yield "</span>
                    </div>

                    <div class=\"sf-toolbar-info-piece\">
                        <b>Token class</b>
                        <span>";
                    // line 45
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrClass(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 45, $this->source); })()), "tokenClass", [], "any", false, false, false, 45));
                    yield "</span>
                    </div>
                ";
                } else {
                    // line 48
                    yield "                    <div class=\"sf-toolbar-info-piece\">
                        <b>Authenticated</b>
                        <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">No</span>
                    </div>
                ";
                }
                // line 53
                yield "
                ";
                // line 54
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 54, $this->source); })()), "firewall", [], "any", false, false, false, 54)) {
                    // line 55
                    yield "                    <div class=\"sf-toolbar-info-piece\">
                        <b>Firewall name</b>
                        <span>";
                    // line 57
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 57, $this->source); })()), "firewall", [], "any", false, false, false, 57), "name", [], "any", false, false, false, 57), "html", null, true);
                    yield "</span>
                    </div>
                ";
                }
                // line 60
                yield "
                ";
                // line 61
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 61, $this->source); })()), "token", [], "any", false, false, false, 61) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 61, $this->source); })()), "logoutUrl", [], "any", false, false, false, 61))) {
                    // line 62
                    yield "                    <div class=\"sf-toolbar-info-piece\">
                        <b>Actions</b>
                        <span>
                            <a href=\"";
                    // line 65
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 65, $this->source); })()), "logoutUrl", [], "any", false, false, false, 65), "html", null, true);
                    yield "\">Logout</a>
                            ";
                    // line 66
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 66, $this->source); })()), "impersonated", [], "any", false, false, false, 66) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 66, $this->source); })()), "impersonationExitPath", [], "any", false, false, false, 66))) {
                        // line 67
                        yield "                                | <a href=\"";
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 67, $this->source); })()), "impersonationExitPath", [], "any", false, false, false, 67), "html", null, true);
                        yield "\">Exit impersonation</a>
                            ";
                    }
                    // line 69
                    yield "                        </span>
                    </div>
                ";
                }
                // line 72
                yield "            ";
            } else {
                // line 73
                yield "                <div class=\"sf-toolbar-info-piece\">
                    <span>The security is disabled.</span>
                </div>
            ";
            }
            // line 77
            yield "        </div>
    ";
        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 79
        yield "
    ";
        // line 80
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 80, $this->source); })()), "status" => (isset($context["color_code"]) || array_key_exists("color_code", $context) ? $context["color_code"] : (function () { throw new RuntimeError('Variable "color_code" does not exist.', 80, $this->source); })())]);
        yield "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        return; yield '';
    }

    // line 83
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 84
        yield "    <span class=\"label ";
        yield ((( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 84, $this->source); })()), "enabled", [], "any", false, false, false, 84) ||  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 84, $this->source); })()), "token", [], "any", false, false, false, 84))) ? ("disabled") : (""));
        yield "\">
        <span class=\"icon\">";
        // line 85
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@Security/Collector/icon.svg");
        yield "</span>
        <strong>Security</strong>
    </span>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        return; yield '';
    }

    // line 90
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 91
        yield "    <h2>Security Token</h2>

    ";
        // line 93
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 93, $this->source); })()), "enabled", [], "any", false, false, false, 93)) {
            // line 94
            yield "        ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 94, $this->source); })()), "token", [], "any", false, false, false, 94)) {
                // line 95
                yield "            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">";
                // line 97
                (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 97, $this->source); })()), "user", [], "any", false, false, false, 97) == "anon.")) ? (yield "Anonymous") : (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 97, $this->source); })()), "user", [], "any", false, false, false, 97), "html", null, true)));
                yield "</span>
                    <span class=\"label\">Username</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">";
                // line 102
                yield Twig\Extension\CoreExtension::include($this->env, $context, (("@WebProfiler/Icon/" . ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 102, $this->source); })()), "authenticated", [], "any", false, false, false, 102)) ? ("yes") : ("no"))) . ".svg"));
                yield "</span>
                    <span class=\"label\">Authenticated</span>
                </div>
            </div>

            <table>
                <thead>
                    <tr>
                        <th scope=\"col\" class=\"key\">Property</th>
                        <th scope=\"col\">Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Roles</th>
                        <td>
                            ";
                // line 118
                yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 118, $this->source); })()), "roles", [], "any", false, false, false, 118))) ? ("none") : ($this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 118, $this->source); })()), "roles", [], "any", false, false, false, 118), 1)));
                yield "

                            ";
                // line 120
                if (( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 120, $this->source); })()), "authenticated", [], "any", false, false, false, 120) && Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 120, $this->source); })()), "roles", [], "any", false, false, false, 120)))) {
                    // line 121
                    yield "                                <p class=\"help\">User is not authenticated probably because they have no roles.</p>
                            ";
                }
                // line 123
                yield "                        </td>
                    </tr>

                    ";
                // line 126
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 126, $this->source); })()), "supportsRoleHierarchy", [], "any", false, false, false, 126)) {
                    // line 127
                    yield "                    <tr>
                        <th>Inherited Roles</th>
                        <td>";
                    // line 129
                    yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 129, $this->source); })()), "inheritedRoles", [], "any", false, false, false, 129))) ? ("none") : ($this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 129, $this->source); })()), "inheritedRoles", [], "any", false, false, false, 129), 1)));
                    yield "</td>
                    </tr>
                    ";
                }
                // line 132
                yield "
                    ";
                // line 133
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 133, $this->source); })()), "token", [], "any", false, false, false, 133)) {
                    // line 134
                    yield "                    <tr>
                        <th>Token</th>
                        <td>";
                    // line 136
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 136, $this->source); })()), "token", [], "any", false, false, false, 136));
                    yield "</td>
                    </tr>
                    ";
                }
                // line 139
                yield "                </tbody>
            </table>
        ";
            } elseif (CoreExtension::getAttribute($this->env, $this->source,             // line 141
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 141, $this->source); })()), "enabled", [], "any", false, false, false, 141)) {
                // line 142
                yield "            <div class=\"empty\">
                <p>There is no security token.</p>
            </div>
        ";
            }
            // line 146
            yield "

        <h2>Security Firewall</h2>

        ";
            // line 150
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 150, $this->source); })()), "firewall", [], "any", false, false, false, 150)) {
                // line 151
                yield "            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">";
                // line 153
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 153, $this->source); })()), "firewall", [], "any", false, false, false, 153), "name", [], "any", false, false, false, 153), "html", null, true);
                yield "</span>
                    <span class=\"label\">Name</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">";
                // line 157
                yield Twig\Extension\CoreExtension::include($this->env, $context, (("@WebProfiler/Icon/" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 157, $this->source); })()), "firewall", [], "any", false, false, false, 157), "security_enabled", [], "any", false, false, false, 157)) ? ("yes") : ("no"))) . ".svg"));
                yield "</span>
                    <span class=\"label\">Security enabled</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">";
                // line 161
                yield Twig\Extension\CoreExtension::include($this->env, $context, (("@WebProfiler/Icon/" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 161, $this->source); })()), "firewall", [], "any", false, false, false, 161), "stateless", [], "any", false, false, false, 161)) ? ("yes") : ("no"))) . ".svg"));
                yield "</span>
                    <span class=\"label\">Stateless</span>
                </div>
                ";
                // line 164
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 164, $this->source); })()), "authenticatorManagerEnabled", [], "any", false, false, false, 164) == false)) {
                    // line 165
                    yield "                <div class=\"metric\">
                    <span class=\"value\">";
                    // line 166
                    yield Twig\Extension\CoreExtension::include($this->env, $context, (("@WebProfiler/Icon/" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 166, $this->source); })()), "firewall", [], "any", false, false, false, 166), "allows_anonymous", [], "any", false, false, false, 166)) ? ("yes") : ("no"))) . ".svg"));
                    yield "</span>
                    <span class=\"label\">Allows anonymous</span>
                </div>
                ";
                }
                // line 170
                yield "            </div>

            ";
                // line 172
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 172, $this->source); })()), "firewall", [], "any", false, false, false, 172), "security_enabled", [], "any", false, false, false, 172)) {
                    // line 173
                    yield "                <h4>Configuration</h4>

                <table>
                    <thead>
                        <tr>
                            <th scope=\"col\" class=\"key\">Key</th>
                            <th scope=\"col\">Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>provider</th>
                            <td>";
                    // line 185
                    ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 185, $this->source); })()), "firewall", [], "any", false, false, false, 185), "provider", [], "any", false, false, false, 185)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 185, $this->source); })()), "firewall", [], "any", false, false, false, 185), "provider", [], "any", false, false, false, 185), "html", null, true)) : (yield "(none)"));
                    yield "</td>
                        </tr>
                        <tr>
                            <th>context</th>
                            <td>";
                    // line 189
                    ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 189, $this->source); })()), "firewall", [], "any", false, false, false, 189), "context", [], "any", false, false, false, 189)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 189, $this->source); })()), "firewall", [], "any", false, false, false, 189), "context", [], "any", false, false, false, 189), "html", null, true)) : (yield "(none)"));
                    yield "</td>
                        </tr>
                        <tr>
                            <th>entry_point</th>
                            <td>";
                    // line 193
                    ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 193, $this->source); })()), "firewall", [], "any", false, false, false, 193), "entry_point", [], "any", false, false, false, 193)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 193, $this->source); })()), "firewall", [], "any", false, false, false, 193), "entry_point", [], "any", false, false, false, 193), "html", null, true)) : (yield "(none)"));
                    yield "</td>
                        </tr>
                        <tr>
                            <th>user_checker</th>
                            <td>";
                    // line 197
                    ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 197, $this->source); })()), "firewall", [], "any", false, false, false, 197), "user_checker", [], "any", false, false, false, 197)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 197, $this->source); })()), "firewall", [], "any", false, false, false, 197), "user_checker", [], "any", false, false, false, 197), "html", null, true)) : (yield "(none)"));
                    yield "</td>
                        </tr>
                        <tr>
                            <th>access_denied_handler</th>
                            <td>";
                    // line 201
                    ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 201, $this->source); })()), "firewall", [], "any", false, false, false, 201), "access_denied_handler", [], "any", false, false, false, 201)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 201, $this->source); })()), "firewall", [], "any", false, false, false, 201), "access_denied_handler", [], "any", false, false, false, 201), "html", null, true)) : (yield "(none)"));
                    yield "</td>
                        </tr>
                        <tr>
                            <th>access_denied_url</th>
                            <td>";
                    // line 205
                    ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 205, $this->source); })()), "firewall", [], "any", false, false, false, 205), "access_denied_url", [], "any", false, false, false, 205)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 205, $this->source); })()), "firewall", [], "any", false, false, false, 205), "access_denied_url", [], "any", false, false, false, 205), "html", null, true)) : (yield "(none)"));
                    yield "</td>
                        </tr>
                        <tr>
                            <th>listeners</th>
                            <td>";
                    // line 209
                    yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 209, $this->source); })()), "firewall", [], "any", false, false, false, 209), "listeners", [], "any", false, false, false, 209))) ? ("(none)") : ($this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 209, $this->source); })()), "firewall", [], "any", false, false, false, 209), "listeners", [], "any", false, false, false, 209), 1)));
                    yield "</td>
                        </tr>
                    </tbody>
                </table>

                <h4>Listeners</h4>

                ";
                    // line 216
                    if (Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "listeners", [], "any", true, true, false, 216)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "listeners", [], "any", false, false, false, 216), [])) : ([])))) {
                        // line 217
                        yield "                    <div class=\"empty\">
                        <p>No security listeners have been recorded. Check that debugging is enabled in the kernel.</p>
                    </div>
                ";
                    } else {
                        // line 221
                        yield "                    <table>
                        <thead>
                        <tr>
                            <th>Listener</th>
                            <th>Duration</th>
                            <th>Response</th>
                        </tr>
                        </thead>

                        ";
                        // line 230
                        $context["previous_event"] = Twig\Extension\CoreExtension::first($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 230, $this->source); })()), "listeners", [], "any", false, false, false, 230));
                        // line 231
                        yield "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 231, $this->source); })()), "listeners", [], "any", false, false, false, 231));
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
                        foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                            // line 232
                            yield "                            ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 232) || ($context["listener"] != (isset($context["previous_event"]) || array_key_exists("previous_event", $context) ? $context["previous_event"] : (function () { throw new RuntimeError('Variable "previous_event" does not exist.', 232, $this->source); })())))) {
                                // line 233
                                yield "                                ";
                                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 233)) {
                                    // line 234
                                    yield "                                    </tbody>
                                ";
                                }
                                // line 236
                                yield "
                                <tbody>
                                ";
                                // line 238
                                $context["previous_event"] = $context["listener"];
                                // line 239
                                yield "                            ";
                            }
                            // line 240
                            yield "
                            <tr>
                                <td class=\"font-normal\">";
                            // line 242
                            yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["listener"], "stub", [], "any", false, false, false, 242));
                            yield "</td>
                                <td class=\"no-wrap\">";
                            // line 243
                            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, $context["listener"], "time", [], "any", false, false, false, 243) * 1000)), "html", null, true);
                            yield " ms</td>
                                <td class=\"font-normal\">";
                            // line 244
                            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["listener"], "response", [], "any", false, false, false, 244)) ? ($this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["listener"], "response", [], "any", false, false, false, 244))) : ("(none)"));
                            yield "</td>
                            </tr>

                            ";
                            // line 247
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 247)) {
                                // line 248
                                yield "                                </tbody>
                            ";
                            }
                            // line 250
                            yield "                        ";
                            ++$context['loop']['index0'];
                            ++$context['loop']['index'];
                            $context['loop']['first'] = false;
                            if (isset($context['loop']['length'])) {
                                --$context['loop']['revindex0'];
                                --$context['loop']['revindex'];
                                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 251
                        yield "                    </table>
                ";
                    }
                    // line 253
                    yield "            ";
                }
                // line 254
                yield "        ";
            } elseif (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 254, $this->source); })()), "enabled", [], "any", false, false, false, 254)) {
                // line 255
                yield "            <div class=\"empty\">
                <p>This request was not covered by any firewall.</p>
            </div>
        ";
            }
            // line 259
            yield "    ";
        } else {
            // line 260
            yield "        <div class=\"empty\">
            <p>The security component is disabled.</p>
        </div>
    ";
        }
        // line 264
        yield "
    ";
        // line 265
        if ( !Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "voters", [], "any", true, true, false, 265)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "voters", [], "any", false, false, false, 265), [])) : ([])))) {
            // line 266
            yield "        <h2>Security Voters <small>(";
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 266, $this->source); })()), "voters", [], "any", false, false, false, 266)), "html", null, true);
            yield ")</small></h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 270
            yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "voterStrategy", [], "any", true, true, false, 270)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "voterStrategy", [], "any", false, false, false, 270), "unknown")) : ("unknown")), "html", null, true);
            yield "</span>
                <span class=\"label\">Strategy</span>
            </div>
        </div>

        <table class=\"voters\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Voter class</th>
                </tr>
            </thead>

            <tbody>
                ";
            // line 284
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 284, $this->source); })()), "voters", [], "any", false, false, false, 284));
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
            foreach ($context['_seq'] as $context["_key"] => $context["voter"]) {
                // line 285
                yield "                    <tr>
                        <td class=\"font-normal text-small text-muted nowrap\">";
                // line 286
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 286), "html", null, true);
                yield "</td>
                        <td class=\"font-normal\">";
                // line 287
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["voter"]);
                yield "</td>
                    </tr>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 290
            yield "            </tbody>
        </table>
    ";
        }
        // line 293
        yield "
    ";
        // line 294
        if ( !Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "accessDecisionLog", [], "any", true, true, false, 294)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "accessDecisionLog", [], "any", false, false, false, 294), [])) : ([])))) {
            // line 295
            yield "        <h2>Access decision log</h2>

        <table class=\"decision-log\">
            <col style=\"width: 30px\">
            <col style=\"width: 120px\">
            <col style=\"width: 25%\">
            <col style=\"width: 60%\">

            <thead>
                <tr>
                    <th>#</th>
                    <th>Result</th>
                    <th>Attributes</th>
                    <th>Object</th>
                </tr>
            </thead>

            <tbody>
                ";
            // line 313
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 313, $this->source); })()), "accessDecisionLog", [], "any", false, false, false, 313));
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
            foreach ($context['_seq'] as $context["_key"] => $context["decision"]) {
                // line 314
                yield "                    <tr class=\"voter_result\">
                        <td class=\"font-normal text-small text-muted nowrap\">";
                // line 315
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 315), "html", null, true);
                yield "</td>
                        <td class=\"font-normal\">
                            ";
                // line 317
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["decision"], "result", [], "any", false, false, false, 317)) ? ("<span class=\"label status-success same-width\">GRANTED</span>") : ("<span class=\"label status-error same-width\">DENIED</span>"));
                // line 320
                yield "
                        </td>
                        <td>
                            ";
                // line 323
                if ((Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["decision"], "attributes", [], "any", false, false, false, 323)) == 1)) {
                    // line 324
                    yield "                                ";
                    $context["attribute"] = Twig\Extension\CoreExtension::first($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["decision"], "attributes", [], "any", false, false, false, 324));
                    // line 325
                    yield "                                ";
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["attribute"] ?? null), "expression", [], "any", true, true, false, 325)) {
                        // line 326
                        yield "                                    Expression: <pre><code>";
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["attribute"]) || array_key_exists("attribute", $context) ? $context["attribute"] : (function () { throw new RuntimeError('Variable "attribute" does not exist.', 326, $this->source); })()), "expression", [], "any", false, false, false, 326), "html", null, true);
                        yield "</code></pre>
                                ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 327
(isset($context["attribute"]) || array_key_exists("attribute", $context) ? $context["attribute"] : (function () { throw new RuntimeError('Variable "attribute" does not exist.', 327, $this->source); })()), "type", [], "any", false, false, false, 327) == "string")) {
                        // line 328
                        yield "                                    ";
                        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["attribute"]) || array_key_exists("attribute", $context) ? $context["attribute"] : (function () { throw new RuntimeError('Variable "attribute" does not exist.', 328, $this->source); })()), "html", null, true);
                        yield "
                                ";
                    } else {
                        // line 330
                        yield "                                     ";
                        yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, (isset($context["attribute"]) || array_key_exists("attribute", $context) ? $context["attribute"] : (function () { throw new RuntimeError('Variable "attribute" does not exist.', 330, $this->source); })()));
                        yield "
                                ";
                    }
                    // line 332
                    yield "                            ";
                } else {
                    // line 333
                    yield "                                ";
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["decision"], "attributes", [], "any", false, false, false, 333));
                    yield "
                            ";
                }
                // line 335
                yield "                        </td>
                        <td>";
                // line 336
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["decision"], "seek", ["object"], "method", false, false, false, 336));
                yield "</td>
                    </tr>
                    <tr class=\"voter_details\">
                        <td></td>
                        <td colspan=\"3\">
                        ";
                // line 341
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["decision"], "voter_details", [], "any", false, false, false, 341))) {
                    // line 342
                    yield "                            ";
                    $context["voter_details_id"] = ("voter-details-" . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 342));
                    // line 343
                    yield "                            <div id=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["voter_details_id"]) || array_key_exists("voter_details_id", $context) ? $context["voter_details_id"] : (function () { throw new RuntimeError('Variable "voter_details_id" does not exist.', 343, $this->source); })()), "html", null, true);
                    yield "\" class=\"sf-toggle-content sf-toggle-hidden\">
                                <table>
                                   <tbody>
                                    ";
                    // line 346
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["decision"], "voter_details", [], "any", false, false, false, 346));
                    foreach ($context['_seq'] as $context["_key"] => $context["voter_detail"]) {
                        // line 347
                        yield "                                        <tr>
                                            <td class=\"font-normal\">";
                        // line 348
                        yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["voter_detail"], "class", [], "array", false, false, false, 348));
                        yield "</td>
                                            ";
                        // line 349
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 349, $this->source); })()), "voterStrategy", [], "any", false, false, false, 349) == Twig\Extension\CoreExtension::constant("Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManager::STRATEGY_UNANIMOUS"))) {
                            // line 350
                            yield "                                            <td class=\"font-normal text-small\">attribute ";
                            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["voter_detail"], "attributes", [], "array", false, false, false, 350), 0, [], "array", false, false, false, 350), "html", null, true);
                            yield "</td>
                                            ";
                        }
                        // line 352
                        yield "                                            <td class=\"font-normal text-small\">
                                                ";
                        // line 353
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["voter_detail"], "vote", [], "array", false, false, false, 353) == Twig\Extension\CoreExtension::constant("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface::ACCESS_GRANTED"))) {
                            // line 354
                            yield "                                                    ACCESS GRANTED
                                                ";
                        } elseif ((CoreExtension::getAttribute($this->env, $this->source,                         // line 355
$context["voter_detail"], "vote", [], "array", false, false, false, 355) == Twig\Extension\CoreExtension::constant("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface::ACCESS_ABSTAIN"))) {
                            // line 356
                            yield "                                                    ACCESS ABSTAIN
                                                ";
                        } elseif ((CoreExtension::getAttribute($this->env, $this->source,                         // line 357
$context["voter_detail"], "vote", [], "array", false, false, false, 357) == Twig\Extension\CoreExtension::constant("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface::ACCESS_DENIED"))) {
                            // line 358
                            yield "                                                    ACCESS DENIED
                                                ";
                        } else {
                            // line 360
                            yield "                                                    unknown (";
                            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["voter_detail"], "vote", [], "array", false, false, false, 360), "html", null, true);
                            yield ")
                                                ";
                        }
                        // line 362
                        yield "                                            </td>
                                        </tr>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voter_detail'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 365
                    yield "                                    </tbody>
                                </table>
                            </div>
                            <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                    // line 368
                    yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["voter_details_id"]) || array_key_exists("voter_details_id", $context) ? $context["voter_details_id"] : (function () { throw new RuntimeError('Variable "voter_details_id" does not exist.', 368, $this->source); })()), "html", null, true);
                    yield "\" data-toggle-alt-content=\"Hide voter details\">Show voter details</a>
                        ";
                }
                // line 370
                yield "                        </td>
                    </tr>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['decision'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 373
            yield "            </tbody>
        </table>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Security/Collector/security.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  909 => 373,  893 => 370,  888 => 368,  883 => 365,  875 => 362,  869 => 360,  865 => 358,  863 => 357,  860 => 356,  858 => 355,  855 => 354,  853 => 353,  850 => 352,  844 => 350,  842 => 349,  838 => 348,  835 => 347,  831 => 346,  824 => 343,  821 => 342,  819 => 341,  811 => 336,  808 => 335,  802 => 333,  799 => 332,  793 => 330,  787 => 328,  785 => 327,  780 => 326,  777 => 325,  774 => 324,  772 => 323,  767 => 320,  765 => 317,  760 => 315,  757 => 314,  740 => 313,  720 => 295,  718 => 294,  715 => 293,  710 => 290,  693 => 287,  689 => 286,  686 => 285,  669 => 284,  652 => 270,  644 => 266,  642 => 265,  639 => 264,  633 => 260,  630 => 259,  624 => 255,  621 => 254,  618 => 253,  614 => 251,  600 => 250,  596 => 248,  594 => 247,  588 => 244,  584 => 243,  580 => 242,  576 => 240,  573 => 239,  571 => 238,  567 => 236,  563 => 234,  560 => 233,  557 => 232,  539 => 231,  537 => 230,  526 => 221,  520 => 217,  518 => 216,  508 => 209,  501 => 205,  494 => 201,  487 => 197,  480 => 193,  473 => 189,  466 => 185,  452 => 173,  450 => 172,  446 => 170,  439 => 166,  436 => 165,  434 => 164,  428 => 161,  421 => 157,  414 => 153,  410 => 151,  408 => 150,  402 => 146,  396 => 142,  394 => 141,  390 => 139,  384 => 136,  380 => 134,  378 => 133,  375 => 132,  369 => 129,  365 => 127,  363 => 126,  358 => 123,  354 => 121,  352 => 120,  347 => 118,  328 => 102,  320 => 97,  316 => 95,  313 => 94,  311 => 93,  307 => 91,  297 => 90,  282 => 85,  277 => 84,  267 => 83,  254 => 80,  251 => 79,  247 => 77,  241 => 73,  238 => 72,  233 => 69,  227 => 67,  225 => 66,  221 => 65,  216 => 62,  214 => 61,  211 => 60,  205 => 57,  201 => 55,  199 => 54,  196 => 53,  189 => 48,  183 => 45,  173 => 40,  165 => 35,  161 => 33,  158 => 32,  156 => 31,  152 => 29,  145 => 25,  140 => 22,  137 => 21,  135 => 20,  132 => 19,  127 => 17,  122 => 16,  120 => 15,  117 => 14,  114 => 13,  111 => 12,  108 => 11,  105 => 10,  102 => 9,  99 => 8,  96 => 7,  93 => 6,  83 => 5,  72 => 0,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block page_title 'Security' %}

{% block toolbar %}
    {% if collector.token %}
        {% set is_authenticated = collector.enabled and collector.authenticated  %}
        {% set color_code = not is_authenticated ? 'yellow' %}
    {% elseif collector.enabled %}
        {% set color_code = collector.authenticatorManagerEnabled ? 'yellow' : 'red' %}
    {% else %}
        {% set color_code = '' %}
    {% endif %}

    {% set icon %}
        {{ include('@Security/Collector/icon.svg') }}
        <span class=\"sf-toolbar-value\">{{ collector.user|default('n/a') }}</span>
    {% endset %}

    {% set text %}
        {% if collector.impersonated %}
            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>Impersonator</b>
                    <span>{{ collector.impersonatorUser }}</span>
                </div>
            </div>
        {% endif %}

        <div class=\"sf-toolbar-info-group\">
            {% if collector.enabled %}
                {% if collector.token %}
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Logged in as</b>
                        <span>{{ collector.user }}</span>
                    </div>

                    <div class=\"sf-toolbar-info-piece\">
                        <b>Authenticated</b>
                        <span class=\"sf-toolbar-status sf-toolbar-status-{{ is_authenticated ? 'green' : 'yellow' }}\">{{ is_authenticated ? 'Yes' : 'No' }}</span>
                    </div>

                    <div class=\"sf-toolbar-info-piece\">
                        <b>Token class</b>
                        <span>{{ collector.tokenClass|abbr_class }}</span>
                    </div>
                {% else %}
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Authenticated</b>
                        <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">No</span>
                    </div>
                {% endif %}

                {% if collector.firewall %}
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Firewall name</b>
                        <span>{{ collector.firewall.name }}</span>
                    </div>
                {% endif %}

                {% if collector.token and collector.logoutUrl %}
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Actions</b>
                        <span>
                            <a href=\"{{ collector.logoutUrl }}\">Logout</a>
                            {% if collector.impersonated and collector.impersonationExitPath %}
                                | <a href=\"{{ collector.impersonationExitPath }}\">Exit impersonation</a>
                            {% endif %}
                        </span>
                    </div>
                {% endif %}
            {% else %}
                <div class=\"sf-toolbar-info-piece\">
                    <span>The security is disabled.</span>
                </div>
            {% endif %}
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: color_code }) }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ not collector.enabled or not collector.token ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@Security/Collector/icon.svg') }}</span>
        <strong>Security</strong>
    </span>
{% endblock %}

{% block panel %}
    <h2>Security Token</h2>

    {% if collector.enabled %}
        {% if collector.token %}
            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.user == 'anon.' ? 'Anonymous' : collector.user }}</span>
                    <span class=\"label\">Username</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.authenticated ? 'yes' : 'no') ~ '.svg') }}</span>
                    <span class=\"label\">Authenticated</span>
                </div>
            </div>

            <table>
                <thead>
                    <tr>
                        <th scope=\"col\" class=\"key\">Property</th>
                        <th scope=\"col\">Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Roles</th>
                        <td>
                            {{ collector.roles is empty ? 'none' : profiler_dump(collector.roles, maxDepth=1) }}

                            {% if not collector.authenticated and collector.roles is empty %}
                                <p class=\"help\">User is not authenticated probably because they have no roles.</p>
                            {% endif %}
                        </td>
                    </tr>

                    {% if collector.supportsRoleHierarchy %}
                    <tr>
                        <th>Inherited Roles</th>
                        <td>{{ collector.inheritedRoles is empty ? 'none' : profiler_dump(collector.inheritedRoles, maxDepth=1) }}</td>
                    </tr>
                    {% endif %}

                    {% if collector.token %}
                    <tr>
                        <th>Token</th>
                        <td>{{ profiler_dump(collector.token) }}</td>
                    </tr>
                    {% endif %}
                </tbody>
            </table>
        {% elseif collector.enabled %}
            <div class=\"empty\">
                <p>There is no security token.</p>
            </div>
        {% endif %}


        <h2>Security Firewall</h2>

        {% if collector.firewall %}
            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.firewall.name }}</span>
                    <span class=\"label\">Name</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.firewall.security_enabled ? 'yes' : 'no') ~ '.svg') }}</span>
                    <span class=\"label\">Security enabled</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.firewall.stateless ? 'yes' : 'no') ~ '.svg') }}</span>
                    <span class=\"label\">Stateless</span>
                </div>
                {% if collector.authenticatorManagerEnabled == false %}
                <div class=\"metric\">
                    <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.firewall.allows_anonymous ? 'yes' : 'no') ~ '.svg') }}</span>
                    <span class=\"label\">Allows anonymous</span>
                </div>
                {% endif %}
            </div>

            {% if collector.firewall.security_enabled %}
                <h4>Configuration</h4>

                <table>
                    <thead>
                        <tr>
                            <th scope=\"col\" class=\"key\">Key</th>
                            <th scope=\"col\">Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>provider</th>
                            <td>{{ collector.firewall.provider ?: '(none)' }}</td>
                        </tr>
                        <tr>
                            <th>context</th>
                            <td>{{ collector.firewall.context ?: '(none)' }}</td>
                        </tr>
                        <tr>
                            <th>entry_point</th>
                            <td>{{ collector.firewall.entry_point ?: '(none)' }}</td>
                        </tr>
                        <tr>
                            <th>user_checker</th>
                            <td>{{ collector.firewall.user_checker ?: '(none)' }}</td>
                        </tr>
                        <tr>
                            <th>access_denied_handler</th>
                            <td>{{ collector.firewall.access_denied_handler ?: '(none)' }}</td>
                        </tr>
                        <tr>
                            <th>access_denied_url</th>
                            <td>{{ collector.firewall.access_denied_url ?: '(none)' }}</td>
                        </tr>
                        <tr>
                            <th>listeners</th>
                            <td>{{ collector.firewall.listeners is empty ? '(none)' : profiler_dump(collector.firewall.listeners, maxDepth=1) }}</td>
                        </tr>
                    </tbody>
                </table>

                <h4>Listeners</h4>

                {% if collector.listeners|default([]) is empty %}
                    <div class=\"empty\">
                        <p>No security listeners have been recorded. Check that debugging is enabled in the kernel.</p>
                    </div>
                {% else %}
                    <table>
                        <thead>
                        <tr>
                            <th>Listener</th>
                            <th>Duration</th>
                            <th>Response</th>
                        </tr>
                        </thead>

                        {% set previous_event = (collector.listeners|first) %}
                        {% for listener in collector.listeners %}
                            {% if loop.first or listener != previous_event %}
                                {% if not loop.first %}
                                    </tbody>
                                {% endif %}

                                <tbody>
                                {% set previous_event = listener %}
                            {% endif %}

                            <tr>
                                <td class=\"font-normal\">{{ profiler_dump(listener.stub) }}</td>
                                <td class=\"no-wrap\">{{ '%0.2f'|format(listener.time * 1000) }} ms</td>
                                <td class=\"font-normal\">{{ listener.response ? profiler_dump(listener.response) : '(none)' }}</td>
                            </tr>

                            {% if loop.last %}
                                </tbody>
                            {% endif %}
                        {% endfor %}
                    </table>
                {% endif %}
            {% endif %}
        {% elseif collector.enabled %}
            <div class=\"empty\">
                <p>This request was not covered by any firewall.</p>
            </div>
        {% endif %}
    {% else %}
        <div class=\"empty\">
            <p>The security component is disabled.</p>
        </div>
    {% endif %}

    {% if collector.voters|default([]) is not empty %}
        <h2>Security Voters <small>({{ collector.voters|length }})</small></h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ collector.voterStrategy|default('unknown') }}</span>
                <span class=\"label\">Strategy</span>
            </div>
        </div>

        <table class=\"voters\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Voter class</th>
                </tr>
            </thead>

            <tbody>
                {% for voter in collector.voters %}
                    <tr>
                        <td class=\"font-normal text-small text-muted nowrap\">{{ loop.index }}</td>
                        <td class=\"font-normal\">{{ profiler_dump(voter) }}</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}

    {% if collector.accessDecisionLog|default([]) is not empty %}
        <h2>Access decision log</h2>

        <table class=\"decision-log\">
            <col style=\"width: 30px\">
            <col style=\"width: 120px\">
            <col style=\"width: 25%\">
            <col style=\"width: 60%\">

            <thead>
                <tr>
                    <th>#</th>
                    <th>Result</th>
                    <th>Attributes</th>
                    <th>Object</th>
                </tr>
            </thead>

            <tbody>
                {% for decision in collector.accessDecisionLog %}
                    <tr class=\"voter_result\">
                        <td class=\"font-normal text-small text-muted nowrap\">{{ loop.index }}</td>
                        <td class=\"font-normal\">
                            {{ decision.result
                                ? '<span class=\"label status-success same-width\">GRANTED</span>'
                                : '<span class=\"label status-error same-width\">DENIED</span>'
                            }}
                        </td>
                        <td>
                            {% if decision.attributes|length == 1 %}
                                {% set attribute = decision.attributes|first %}
                                {% if attribute.expression is defined %}
                                    Expression: <pre><code>{{ attribute.expression }}</code></pre>
                                {% elseif attribute.type == 'string' %}
                                    {{ attribute }}
                                {% else %}
                                     {{ profiler_dump(attribute) }}
                                {% endif %}
                            {% else %}
                                {{ profiler_dump(decision.attributes) }}
                            {% endif %}
                        </td>
                        <td>{{ profiler_dump(decision.seek('object')) }}</td>
                    </tr>
                    <tr class=\"voter_details\">
                        <td></td>
                        <td colspan=\"3\">
                        {% if decision.voter_details is not empty %}
                            {% set voter_details_id = 'voter-details-' ~ loop.index %}
                            <div id=\"{{ voter_details_id }}\" class=\"sf-toggle-content sf-toggle-hidden\">
                                <table>
                                   <tbody>
                                    {% for voter_detail in decision.voter_details %}
                                        <tr>
                                            <td class=\"font-normal\">{{ profiler_dump(voter_detail['class']) }}</td>
                                            {% if collector.voterStrategy == constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\AccessDecisionManager::STRATEGY_UNANIMOUS') %}
                                            <td class=\"font-normal text-small\">attribute {{ voter_detail['attributes'][0] }}</td>
                                            {% endif %}
                                            <td class=\"font-normal text-small\">
                                                {% if voter_detail['vote'] == constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\VoterInterface::ACCESS_GRANTED') %}
                                                    ACCESS GRANTED
                                                {% elseif voter_detail['vote'] == constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\VoterInterface::ACCESS_ABSTAIN') %}
                                                    ACCESS ABSTAIN
                                                {% elseif voter_detail['vote'] == constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\VoterInterface::ACCESS_DENIED') %}
                                                    ACCESS DENIED
                                                {% else %}
                                                    unknown ({{ voter_detail['vote'] }})
                                                {% endif %}
                                            </td>
                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                            <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ voter_details_id }}\" data-toggle-alt-content=\"Hide voter details\">Show voter details</a>
                        {% endif %}
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}
{% endblock %}
", "@Security/Collector/security.html.twig", "/home/kaliuser/test/api/vendor/symfony/security-bundle/Resources/views/Collector/security.html.twig");
    }
}
