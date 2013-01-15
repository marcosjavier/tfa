<?php

/* UsuarioInscripcionBundle:Default:Expediente.html.twig */
class __TwigTemplate_f128149e7f2fdf569406e2b20f175248 extends Twig_Template
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
        echo "<h1>Expediente con ID ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "expediente"), "id"), "html", null, true);
        echo "</h1>
<ul>
    
    <li>Fecha de creacion: ";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "expediente"), "fechaExpediente"), "d-m-Y"), "html", null, true);
        echo "</li>
</ul>";
    }

    public function getTemplateName()
    {
        return "UsuarioInscripcionBundle:Default:Expediente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  17 => 1,);
    }
}
