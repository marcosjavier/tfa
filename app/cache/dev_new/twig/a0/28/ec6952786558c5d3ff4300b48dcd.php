<?php

/* WebProfilerBundle:Profiler:bag.html.twig */
class __TwigTemplate_a028ec6952786558c5d3ff4300b48dcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<table>
<thead>
    <tr>
        <th scope=\"col\">Key</th>
        <th scope=\"col\">Value</th>
    </tr>
</thead>
<tbody>
    ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->getAttribute($this->getContext($context, "bag"), "keys")));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 10
            echo "        <tr>
            <th>";
            // line 11
            echo twig_escape_filter($this->env, $this->getContext($context, "key"), "html", null, true);
            echo "</th>
            <td>";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('yaml')->dump($this->getAttribute($this->getContext($context, "bag"), "get", array(0 => $this->getContext($context, "key")), "method")), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 15
        echo "</tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:bag.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 137,  329 => 136,  323 => 135,  321 => 134,  314 => 133,  310 => 132,  306 => 130,  304 => 129,  301 => 128,  298 => 127,  296 => 126,  288 => 124,  286 => 123,  282 => 121,  276 => 117,  238 => 99,  236 => 98,  231 => 95,  229 => 94,  222 => 90,  217 => 87,  213 => 85,  203 => 81,  201 => 80,  194 => 76,  183 => 69,  180 => 68,  175 => 66,  118 => 36,  150 => 43,  170 => 63,  157 => 55,  130 => 48,  66 => 15,  271 => 114,  262 => 111,  258 => 110,  255 => 109,  250 => 108,  248 => 107,  235 => 107,  228 => 103,  221 => 99,  214 => 95,  207 => 83,  164 => 59,  154 => 45,  151 => 53,  143 => 49,  140 => 52,  119 => 34,  106 => 35,  100 => 27,  83 => 26,  68 => 20,  76 => 27,  56 => 14,  136 => 40,  114 => 34,  85 => 28,  61 => 17,  65 => 18,  36 => 8,  45 => 9,  21 => 3,  209 => 84,  205 => 82,  196 => 77,  192 => 78,  189 => 73,  178 => 71,  176 => 70,  165 => 63,  161 => 58,  152 => 58,  148 => 57,  145 => 49,  141 => 55,  134 => 50,  132 => 43,  127 => 46,  123 => 38,  109 => 36,  93 => 33,  90 => 36,  54 => 13,  133 => 49,  124 => 41,  111 => 33,  80 => 25,  60 => 16,  52 => 13,  97 => 26,  95 => 30,  88 => 29,  78 => 25,  71 => 21,  25 => 4,  72 => 17,  64 => 24,  53 => 9,  34 => 11,  92 => 23,  86 => 27,  79 => 28,  19 => 2,  42 => 10,  40 => 7,  29 => 4,  26 => 3,  224 => 91,  215 => 90,  211 => 88,  204 => 84,  200 => 87,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 75,  179 => 72,  177 => 67,  171 => 67,  162 => 63,  158 => 57,  156 => 56,  153 => 59,  146 => 55,  142 => 48,  137 => 46,  126 => 39,  120 => 37,  117 => 44,  103 => 28,  74 => 21,  47 => 15,  32 => 6,  24 => 3,  22 => 3,  23 => 29,  17 => 1,  69 => 21,  63 => 18,  58 => 16,  49 => 12,  43 => 12,  37 => 8,  20 => 2,  139 => 47,  131 => 48,  128 => 43,  125 => 36,  121 => 40,  115 => 39,  107 => 36,  99 => 34,  96 => 34,  91 => 31,  82 => 20,  77 => 24,  75 => 18,  57 => 13,  50 => 12,  46 => 13,  44 => 10,  39 => 12,  33 => 9,  30 => 3,  27 => 9,  135 => 41,  129 => 38,  122 => 46,  116 => 33,  113 => 43,  108 => 28,  104 => 40,  102 => 6,  94 => 32,  89 => 22,  87 => 44,  84 => 29,  81 => 28,  73 => 23,  70 => 24,  67 => 20,  62 => 22,  59 => 21,  55 => 15,  51 => 11,  48 => 10,  41 => 9,  38 => 12,  35 => 7,  31 => 10,  28 => 7,);
    }
}
