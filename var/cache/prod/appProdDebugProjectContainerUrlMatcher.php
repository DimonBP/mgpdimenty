<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/advertisement')) {
            // homepage
            if (rtrim($pathinfo, '/') === '/advertisement') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'homepage');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            }

            // table
            if ($pathinfo === '/advertisement/table') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::tableAction',  '_route' => 'table',);
            }

            // addreq
            if ($pathinfo === '/advertisement/addreq') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::addreq',  '_route' => 'addreq',);
            }

            // updatereq_n
            if (0 === strpos($pathinfo, '/advertisement/updatereq') && preg_match('#^/advertisement/updatereq/(?P<page>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'updatereq_n')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::updatereqAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
