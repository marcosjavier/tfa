<?php

/* WebProfilerBundle:Profiler:layout.html.twig */
class __TwigTemplate_e74e659c2358a1845eb3e920ce9d56d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Profiler:toolbar", array("token" => $this->getContext($context, "token"), "position" => "normal"), array());
        // line 6
        echo "
    <div id=\"content\">
        ";
        // line 8
        $this->env->loadTemplate("WebProfilerBundle:Profiler:header.html.twig")->display(array());
        // line 9
        echo "
        ";
        // line 10
        if ($this->getContext($context, "profile")) {
            // line 11
            echo "            <div id=\"resume\">
                <p>
                    <strong><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "profile"), "url"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "profile"), "url"), "html", null, true);
            echo "</a></strong>
                    <span class=\"date\">
                        <strong>by ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "profile"), "ip"), "html", null, true);
            echo "</strong> at <strong>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "profile"), "time"), "r"), "html", null, true);
            echo "</strong>
                    </span>
                </p>
            </div>
        ";
        }
        // line 20
        echo "
        <div id=\"main\">

            <div class=\"clear_fix\">
                <div id=\"collector_wrapper\">
                    <div id=\"collector_content\">
                        ";
        // line 26
        $this->displayBlock('panel', $context, $blocks);
        // line 27
        echo "                    </div>
                </div>
                <div id=\"navigation\">
                    ";
        // line 30
        if (array_key_exists("templates", $context)) {
            // line 31
            echo "                        <ul id=\"menu_profiler\">
                            ";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "templates"));
            foreach ($context['_seq'] as $context["name"] => $context["template"]) {
                // line 33
                echo "                                ";
                ob_start();
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "template"), "renderBlock", array(0 => "menu", 1 => array("collector" => $this->getAttribute($this->getContext($context, "profile"), "getcollector", array(0 => $this->getContext($context, "name")), "method"))), "method"), "html", null, true);
                $context["menu"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 34
                echo "                                ";
                if (($this->getContext($context, "menu") != "")) {
                    // line 35
                    echo "                                    <li class=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
                    if (($this->getContext($context, "name") == $this->getContext($context, "panel"))) {
                        echo " selected";
                    }
                    echo "\">
                                        <a href=\"";
                    // line 36
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getContext($context, "token"), "panel" => $this->getContext($context, "name"))), "html", null, true);
                    echo "\">";
                    echo $this->getContext($context, "menu");
                    echo "</a>
                                    </li>
                                ";
                }
                // line 39
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 40
            echo "                        </ul>
                    ";
        }
        // line 42
        echo "                    ";
        echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Profiler:searchBar", array(), array());
        // line 43
        echo "                    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:admin.html.twig")->display(array("token" => $this->getContext($context, "token")));
        // line 44
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    // line 26
    public function block_panel($context, array $blocks = array())
    {
        echo "";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 26,  131 => 44,  128 => 43,  125 => 42,  121 => 40,  115 => 39,  107 => 36,  99 => 35,  96 => 34,  91 => 33,  82 => 30,  77 => 27,  75 => 26,  57 => 15,  50 => 13,  46 => 11,  44 => 10,  39 => 8,  33 => 5,  30 => 4,  27 => 3,  135 => 54,  129 => 50,  122 => 46,  116 => 42,  113 => 41,  108 => 40,  104 => 38,  102 => 37,  94 => 32,  89 => 29,  87 => 32,  84 => 31,  81 => 26,  73 => 21,  70 => 20,  67 => 20,  62 => 16,  59 => 15,  55 => 13,  51 => 11,  48 => 10,  41 => 9,  38 => 8,  35 => 6,  31 => 4,  28 => 3,);
    }
}
