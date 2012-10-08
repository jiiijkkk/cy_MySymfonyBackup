<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        // _demo_login
        if ($pathinfo === '/demo/secured/login') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
        }

        // _security_check
        if ($pathinfo === '/demo/secured/login_check') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
        }

        // _demo_logout
        if ($pathinfo === '/demo/secured/logout') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
        }

        // acme_demo_secured_hello
        if ($pathinfo === '/demo/secured/hello') {
            return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
        }

        // _demo_secured_hello
        if (0 === strpos($pathinfo, '/demo/secured/hello') && preg_match('#^/demo/secured/hello/(?P<name>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',)), array('_route' => '_demo_secured_hello'));
        }

        // _demo_secured_hello_admin
        if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',)), array('_route' => '_demo_secured_hello_admin'));
        }

        if (0 === strpos($pathinfo, '/demo')) {
            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]+?)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',)), array('_route' => '_demo_hello'));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        // _assetic_0c193ec
        if ($pathinfo === '/css/0c193ec.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '0c193ec',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_0c193ec',);
        }

        // _assetic_0c193ec_0
        if ($pathinfo === '/css/0c193ec_Default_1.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '0c193ec',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_0c193ec_0',);
        }

        // _assetic_4d2908e
        if ($pathinfo === '/css/4d2908e.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '4d2908e',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_4d2908e',);
        }

        // _assetic_4d2908e_0
        if ($pathinfo === '/css/4d2908e_Black_in_White_1.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '4d2908e',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_4d2908e_0',);
        }

        // _assetic_7d12c70
        if ($pathinfo === '/css/7d12c70.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '7d12c70',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_7d12c70',);
        }

        // _assetic_7d12c70_0
        if ($pathinfo === '/css/7d12c70_White_in_Black_1.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '7d12c70',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_7d12c70_0',);
        }

        // _assetic_d293c98
        if ($pathinfo === '/images/d293c98.png') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'd293c98',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_d293c98',);
        }

        // _assetic_d293c98_0
        if ($pathinfo === '/images/d293c98_mobile_1.png') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'd293c98',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_d293c98_0',);
        }

        // _assetic_b9e9ba7
        if ($pathinfo === '/images/b9e9ba7.gif') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'b9e9ba7',  'pos' => NULL,  '_format' => 'gif',  '_route' => '_assetic_b9e9ba7',);
        }

        // _assetic_b9e9ba7_0
        if ($pathinfo === '/images/b9e9ba7_ip_1.gif') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'b9e9ba7',  'pos' => 0,  '_format' => 'gif',  '_route' => '_assetic_b9e9ba7_0',);
        }

        // _assetic_862f2a6
        if ($pathinfo === '/js/862f2a6.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '862f2a6',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_862f2a6',);
        }

        // _assetic_862f2a6_0
        if ($pathinfo === '/js/862f2a6_datetimepicker_1.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '862f2a6',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_862f2a6_0',);
        }

        // _assetic_862f2a6_1
        if ($pathinfo === '/js/862f2a6_jquery.min_2.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '862f2a6',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_862f2a6_1',);
        }

        // _assetic_1728085
        if ($pathinfo === '/images/1728085.gif') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 1728085,  'pos' => NULL,  '_format' => 'gif',  '_route' => '_assetic_1728085',);
        }

        // _assetic_1728085_0
        if ($pathinfo === '/images/1728085_cal_1.gif') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 1728085,  'pos' => 0,  '_format' => 'gif',  '_route' => '_assetic_1728085_0',);
        }

        // _assetic_9aed30b
        if ($pathinfo === '/js/9aed30b.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '9aed30b',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_9aed30b',);
        }

        // _assetic_9aed30b_0
        if ($pathinfo === '/js/9aed30b_highcharts_1.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '9aed30b',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_9aed30b_0',);
        }

        // _assetic_9aed30b_1
        if ($pathinfo === '/js/9aed30b_exporting_2.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '9aed30b',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_9aed30b_1',);
        }

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        if (0 === strpos($pathinfo, '/msgb')) {
            // AcmeMsgbBundle_homepage
            if (preg_match('#^/msgb(?:/(?P<page_size>\\d+)(?:/(?P<page>\\d+))?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\MsgbBundle\\Controller\\DefaultController::indexAction',  'page_size' => 10,  'page' => 1,)), array('_route' => 'AcmeMsgbBundle_homepage'));
            }

            // AcmeMsgbBundle_single
            if (0 === strpos($pathinfo, '/msgb/single') && preg_match('#^/msgb/single/(?P<page_size>\\d+)/(?P<page>\\d+)/(?P<id>[^/]+?)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\MsgbBundle\\Controller\\Admin_MessageController::singleAction',  'page_size' => 10,  'page' => 1,)), array('_route' => 'AcmeMsgbBundle_single'));
            }

            // AcmeMsgbBundle_kill
            if (0 === strpos($pathinfo, '/msgb/kill') && preg_match('#^/msgb/kill/(?P<page_size>[^/]+?)/(?P<id>[^/]+?)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\MsgbBundle\\Controller\\Admin_MessageController::killAction',)), array('_route' => 'AcmeMsgbBundle_kill'));
            }

            // AcmeMsgbBundle_reply
            if (0 === strpos($pathinfo, '/msgb/reply') && preg_match('#^/msgb/reply/(?P<page_size>[^/]+?)/(?P<page>[^/]+?)/(?P<id>[^/]+?)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\MsgbBundle\\Controller\\Admin_MessageController::replyAction',)), array('_route' => 'AcmeMsgbBundle_reply'));
            }

            // AcmeMsgbBundle_quick_reply
            if (0 === strpos($pathinfo, '/msgb/quick_reply') && preg_match('#^/msgb/quick_reply/(?P<page_size>[^/]+?)/(?P<page>[^/]+?)/(?P<id>[^/]+?)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\MsgbBundle\\Controller\\Admin_MessageController::quick_replyAction',)), array('_route' => 'AcmeMsgbBundle_quick_reply'));
            }

            // AcmeMsgbBundle_multikill
            if (0 === strpos($pathinfo, '/msgb/multikill') && preg_match('#^/msgb/multikill(?:/(?P<page_size>\\d+)(?:/(?P<page>\\d+))?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\MsgbBundle\\Controller\\Admin_MessageController::multikillAction',  'page_size' => 10,  'page' => 1,)), array('_route' => 'AcmeMsgbBundle_multikill'));
            }

            // AcmeMsgbBundle_kill_reply
            if (0 === strpos($pathinfo, '/msgb/kill_reply') && preg_match('#^/msgb/kill_reply/(?P<page_size>[^/]+?)/(?P<page>[^/]+?)/(?P<id>[^/]+?)/(?P<action>[^/]+?)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\MsgbBundle\\Controller\\Admin_MessageController::kill_replyAction',)), array('_route' => 'AcmeMsgbBundle_kill_reply'));
            }

            // AcmeMsgbBundle_signup
            if (0 === strpos($pathinfo, '/msgb/signup') && preg_match('#^/msgb/signup(?:/(?P<page_size>\\d+)(?:/(?P<page>\\d+))?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\MsgbBundle\\Controller\\DefaultController::signupAction',  'page_size' => 10,  'page' => 1,)), array('_route' => 'AcmeMsgbBundle_signup'));
            }

            // AcmeMsgbBundle_login
            if (0 === strpos($pathinfo, '/msgb/login') && preg_match('#^/msgb/login(?:/(?P<page_size>\\d+)(?:/(?P<page>\\d+))?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\MsgbBundle\\Controller\\DefaultController::loginAction',  'page_size' => 10,  'page' => 1,)), array('_route' => 'AcmeMsgbBundle_login'));
            }

            // AcmeMsgbBundle_logout
            if (0 === strpos($pathinfo, '/msgb/logout') && preg_match('#^/msgb/logout(?:/(?P<page_size>\\d+)(?:/(?P<page>\\d+))?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\MsgbBundle\\Controller\\AdminController::logoutAction',  'page_size' => 10,  'page' => 1,)), array('_route' => 'AcmeMsgbBundle_logout'));
            }

            // AcmeMsgbBundle_disaccount
            if (0 === strpos($pathinfo, '/msgb/disaccount') && preg_match('#^/msgb/disaccount(?:/(?P<page_size>\\d+)(?:/(?P<page>\\d+))?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\MsgbBundle\\Controller\\AdminController::disaccountAction',  'page_size' => 10,  'page' => 1,)), array('_route' => 'AcmeMsgbBundle_disaccount'));
            }

            // AcmeMsgbBundle_admin_ctrl
            if ($pathinfo === '/msgb/admin_ctrl') {
                return array (  '_controller' => 'Acme\\MsgbBundle\\Controller\\AdminController::admin_ctrlAction',  '_route' => 'AcmeMsgbBundle_admin_ctrl',);
            }

            // AcmeMsgbBundle_admin_edit
            if (0 === strpos($pathinfo, '/msgb/admin_edit') && preg_match('#^/msgb/admin_edit/(?P<id>[^/]+?)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\MsgbBundle\\Controller\\AdminController::admin_editAction',)), array('_route' => 'AcmeMsgbBundle_admin_edit'));
            }

            // AcmeMsgbBundle_admin_delete
            if (0 === strpos($pathinfo, '/msgb/admin_delete') && preg_match('#^/msgb/admin_delete/(?P<id>[^/]+?)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\MsgbBundle\\Controller\\AdminController::admin_deleteAction',)), array('_route' => 'AcmeMsgbBundle_admin_delete'));
            }

            // AcmeMsgbBundle_admin_log
            if (0 === strpos($pathinfo, '/msgb/log') && preg_match('#^/msgb/log(?:/(?P<page_size>\\d+)(?:/(?P<page>\\d+)(?:/(?P<account>[^/]+?))?)?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\MsgbBundle\\Controller\\AdminController::admin_logAction',  'page_size' => 20,  'page' => 1,  'account' => '',)), array('_route' => 'AcmeMsgbBundle_admin_log'));
            }

            // AcmeMsgbBundle_admin_analyze
            if (0 === strpos($pathinfo, '/msgb/analyze') && preg_match('#^/msgb/analyze(?:/(?P<page_size>\\d+)(?:/(?P<page>\\d+))?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\MsgbBundle\\Controller\\AdminController::admin_analyzeAction',  'page_size' => 20,  'page' => 1,)), array('_route' => 'AcmeMsgbBundle_admin_analyze'));
            }

            // AcmeMsgbBundle_admin_edit_classes
            if ($pathinfo === '/msgb/edit_classes') {
                return array (  '_controller' => 'Acme\\MsgbBundle\\Controller\\AdminController::admin_edit_classesAction',  '_route' => 'AcmeMsgbBundle_admin_edit_classes',);
            }

            // AcmeMsgbBundle_admin_menu
            if ($pathinfo === '/msgb/menu') {
                return array (  '_controller' => 'Acme\\MsgbBundle\\Controller\\AdminController::admin_menuAction',  '_route' => 'AcmeMsgbBundle_admin_menu',);
            }

        }

        // AcmeMsgBundle_homepage
        if (rtrim($pathinfo, '/') === '/msg') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'AcmeMsgBundle_homepage');
            }
            return array (  '_controller' => 'Acme\\MsgBundle\\Controller\\DefaultController::indexAction',  '_route' => 'AcmeMsgBundle_homepage',);
        }

        // AcmeTestBundle_homepage
        if ($pathinfo === '/test') {
            return array (  '_controller' => 'Acme\\TestBundle\\Controller\\DefaultController::indexAction',  '_route' => 'AcmeTestBundle_homepage',);
        }

        // AcmeTestBundle_create
        if ($pathinfo === '/create') {
            return array (  '_controller' => 'Acme\\TestBundle\\Controller\\DefaultController::createAction',  '_route' => 'AcmeTestBundle_create',);
        }

        // AcmeTestBundle_showAll
        if ($pathinfo === '/showAll') {
            return array (  '_controller' => 'Acme\\TestBundle\\Controller\\DefaultController::showAllAction',  '_route' => 'AcmeTestBundle_showAll',);
        }

        // AcmeTestBundle_query
        if ($pathinfo === '/query') {
            return array (  '_controller' => 'Acme\\TestBundle\\Controller\\DefaultController::queryAction',  '_route' => 'AcmeTestBundle_query',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
