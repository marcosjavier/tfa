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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "expediente"), "alumno"), "id"), "html", null, true);
            echo "</li>
         <li>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "expediente"), "director"), "id"), "html", null, true);
            echo " </li>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['expediente'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 12
        echo "       ";
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
        return array (  67 => 20,  65 => 12,  57 => 10,  53 => 9,  49 => 8,  44 => 7,  40 => 6,  36 => 4,  33 => 3,  27 => 2,);
    }
}
