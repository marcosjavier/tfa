<?php

/* UsuarioInscripcionBundle:Default:index.html.twig */
class __TwigTemplate_106fad58180b296d47cb04adc6461c14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "Bienvenido a mi página web
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div id=\"layout\">
        <div id=\"encabezado\">
            <h1></h1> 
            
        </div>
            <div id=\"contenido\">
                
            </div>
            
        <div id=\"pie\">
            <p>Pie ";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "m/d/Y"), "html", null, true);
        echo "</p>
        </div>
        
    </div>
";
    }

    public function getTemplateName()
    {
        return "UsuarioInscripcionBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 16,  38 => 6,  35 => 5,  30 => 3,  65 => 12,  57 => 10,  53 => 9,  49 => 8,  44 => 7,  40 => 6,  36 => 4,  33 => 3,  27 => 2,);
    }
}
