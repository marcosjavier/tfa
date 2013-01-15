<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = urldecode($pathinfo);

        // UsuarioInscripcionBundle_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'UsuarioInscripcionBundle_homepage');
            }
            return array (  '_controller' => 'Usuario\\InscripcionBundle\\Controller\\DefaultController::indexAction',  '_route' => 'UsuarioInscripcionBundle_homepage',);
        }

        // inscripcion
        if ($pathinfo === '/inscripcion') {
            return array (  '_controler' => 'UsuarioInscripcionBundle:Default:inscripcion',  '_route' => 'inscripcion',);
        }

        // otracosa
        if ($pathinfo === '/otracosa') {
            return array (  '_controler' => 'UsuarioInscripcionBundle:Default:otracosa',  '_route' => 'otracosa',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
