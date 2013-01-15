<?php

/* UsuarioInscripcionBundle:Default:Listar.html.twig */
class __TwigTemplate_52eb2e1686a1eef9d0e8be8ba86244f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("UsuarioInscripcionBundle:Default:index.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UsuarioInscripcionBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Expedientes en la Base de Datos";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Lista de Expedientes </h1>
<ul>
     ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "expedientes"));
        foreach ($context['_seq'] as $context["_key"] => $context["expediente"]) {
            // line 7
            echo "         <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "expediente"), "id"), "html", null, true);
            echo "</li>
         <li>Fecha de creacion: ";
            // line 8
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "expediente"), "fecha"), "d-m-Y"), "html", null, true);
            echo "</li>
         <li>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "expediente"), "alumno"), "html", null, true);
            echo "</li>
         <li>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "expediente"), "director"), "html", null, true);
            echo " </li>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['expediente'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 12
        echo "        ";
        // line 20
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "UsuarioInscripcionBundle:Default:Listar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 12,  36 => 4,  45 => 12,  21 => 1,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 49,  127 => 46,  123 => 44,  109 => 39,  93 => 33,  90 => 32,  54 => 14,  133 => 44,  124 => 41,  111 => 37,  80 => 26,  60 => 16,  52 => 12,  97 => 34,  95 => 21,  88 => 29,  78 => 25,  71 => 14,  25 => 4,  72 => 16,  64 => 15,  53 => 9,  34 => 5,  92 => 20,  86 => 28,  79 => 40,  19 => 2,  42 => 11,  40 => 6,  29 => 5,  26 => 3,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 46,  120 => 39,  117 => 44,  103 => 36,  74 => 27,  47 => 19,  32 => 11,  24 => 3,  22 => 3,  23 => 3,  17 => 1,  69 => 20,  63 => 18,  58 => 9,  49 => 8,  43 => 15,  37 => 8,  20 => 2,  139 => 26,  131 => 48,  128 => 43,  125 => 42,  121 => 40,  115 => 39,  107 => 36,  99 => 34,  96 => 34,  91 => 33,  82 => 27,  77 => 25,  75 => 24,  57 => 10,  50 => 16,  46 => 10,  44 => 7,  39 => 9,  33 => 3,  30 => 3,  27 => 2,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 40,  108 => 40,  104 => 24,  102 => 37,  94 => 33,  89 => 20,  87 => 32,  84 => 28,  81 => 26,  73 => 21,  70 => 26,  67 => 20,  62 => 10,  59 => 23,  55 => 14,  51 => 5,  48 => 10,  41 => 9,  38 => 6,  35 => 5,  31 => 6,  28 => 3,);
    }
}
