<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // homepage
        if ($pathinfo === '/index') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // security_login_form
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'security_login_form',);
        }

        if (0 === strpos($pathinfo, '/register')) {
            // register
            if ($pathinfo === '/register') {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::registerAction',  '_route' => 'register',);
            }

            // registerUser
            if ($pathinfo === '/registerUser') {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::registerUserAction',  '_route' => 'registerUser',);
            }

        }

        // security_logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'security_logout',);
        }

        // app_tvseries_create
        if ($pathinfo === '/series/create') {
            return array (  '_controller' => 'AppBundle\\Controller\\TVSeriesController::createAction',  '_route' => 'app_tvseries_create',);
        }

        // homepage_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage_index');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\TVSeriesController::indexAction',  '_route' => 'homepage_index',);
        }

        // app_tvseries_list
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'app_tvseries_list');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\TVSeriesController::listAction',  '_route' => 'app_tvseries_list',);
        }

        // app_tvseries_ajouterserie
        if ($pathinfo === '/ajouterSerie') {
            return array (  '_controller' => 'AppBundle\\Controller\\TVSeriesController::ajouterSerieAction',  '_route' => 'app_tvseries_ajouterserie',);
        }

        // app_tvseries_deleteserie
        if ($pathinfo === '/deleteSerie') {
            return array (  '_controller' => 'AppBundle\\Controller\\TVSeriesController::deleteSerieAction',  '_route' => 'app_tvseries_deleteserie',);
        }

        if (0 === strpos($pathinfo, '/ajouterSerie')) {
            // app_tvseries_ajouterseriefin
            if ($pathinfo === '/ajouterSerieFin') {
                return array (  '_controller' => 'AppBundle\\Controller\\TVSeriesController::ajouterSerieFinAction',  '_route' => 'app_tvseries_ajouterseriefin',);
            }

            // app_tvseries_ajouterserieperso
            if ($pathinfo === '/ajouterSeriePerso') {
                return array (  '_controller' => 'AppBundle\\Controller\\TVSeriesController::ajouterSeriePersoAction',  '_route' => 'app_tvseries_ajouterserieperso',);
            }

        }

        // app_tvseries_deleteserieperso
        if ($pathinfo === '/deleteSeriePerso') {
            return array (  '_controller' => 'AppBundle\\Controller\\TVSeriesController::deleteSeriePersoAction',  '_route' => 'app_tvseries_deleteserieperso',);
        }

        // app_tvseries_voirserieperso
        if ($pathinfo === '/voirSeriePerso') {
            return array (  '_controller' => 'AppBundle\\Controller\\TVSeriesController::voirSeriePersoAction',  '_route' => 'app_tvseries_voirserieperso',);
        }

        // user_dashboard
        if ($pathinfo === '/account/dashboard') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_user_dashboard;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\UserController::dashboardAction',  '_route' => 'user_dashboard',);
        }
        not_user_dashboard:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
