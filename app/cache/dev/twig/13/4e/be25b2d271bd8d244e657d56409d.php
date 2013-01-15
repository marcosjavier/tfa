<?php

/* UsuarioInscripcionBundle:Default:inscripcion.html.twig */
class __TwigTemplate_134ebe25b2d271bd8d244e657d56409d extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Formulario de Inscripcion a pasantías no rentadas";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
<div id=\"contenido\">
    <form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("inscripcion"), "html", null, true);
        echo "\" method=\"post\">
    ";
        // line 8
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
    <input type=\"submit\" />
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "UsuarioInscripcionBundle:Default:inscripcion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  40 => 7,  36 => 5,  33 => 4,  27 => 3,);
    }
}
