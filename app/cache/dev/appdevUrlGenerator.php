<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_welcome' => true,
       '_demo_login' => true,
       '_security_check' => true,
       '_demo_logout' => true,
       'acme_demo_secured_hello' => true,
       '_demo_secured_hello' => true,
       '_demo_secured_hello_admin' => true,
       '_demo' => true,
       '_demo_hello' => true,
       '_demo_contact' => true,
       '_assetic_0c193ec' => true,
       '_assetic_0c193ec_0' => true,
       '_assetic_4d2908e' => true,
       '_assetic_4d2908e_0' => true,
       '_assetic_7d12c70' => true,
       '_assetic_7d12c70_0' => true,
       '_assetic_d293c98' => true,
       '_assetic_d293c98_0' => true,
       '_assetic_b9e9ba7' => true,
       '_assetic_b9e9ba7_0' => true,
       '_assetic_862f2a6' => true,
       '_assetic_862f2a6_0' => true,
       '_assetic_862f2a6_1' => true,
       '_assetic_1728085' => true,
       '_assetic_1728085_0' => true,
       '_assetic_9aed30b' => true,
       '_assetic_9aed30b_0' => true,
       '_assetic_9aed30b_1' => true,
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       'AcmeMsgbBundle_homepage' => true,
       'AcmeMsgbBundle_single' => true,
       'AcmeMsgbBundle_kill' => true,
       'AcmeMsgbBundle_reply' => true,
       'AcmeMsgbBundle_quick_reply' => true,
       'AcmeMsgbBundle_multikill' => true,
       'AcmeMsgbBundle_kill_reply' => true,
       'AcmeMsgbBundle_signup' => true,
       'AcmeMsgbBundle_login' => true,
       'AcmeMsgbBundle_logout' => true,
       'AcmeMsgbBundle_disaccount' => true,
       'AcmeMsgbBundle_admin_ctrl' => true,
       'AcmeMsgbBundle_admin_edit' => true,
       'AcmeMsgbBundle_admin_delete' => true,
       'AcmeMsgbBundle_admin_log' => true,
       'AcmeMsgbBundle_admin_analyze' => true,
       'AcmeMsgbBundle_admin_edit_classes' => true,
       'AcmeMsgbBundle_admin_menu' => true,
       'AcmeMsgBundle_homepage' => true,
       'AcmeTestBundle_homepage' => true,
       'AcmeTestBundle_create' => true,
       'AcmeTestBundle_showAll' => true,
       'AcmeTestBundle_query' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_welcomeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function get_demo_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/login',  ),));
    }

    private function get_security_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/login_check',  ),));
    }

    private function get_demo_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/logout',  ),));
    }

    private function getacme_demo_secured_helloRouteInfo()
    {
        return array(array (), array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_hello_adminRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello/admin',  ),));
    }

    private function get_demoRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/',  ),));
    }

    private function get_demo_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/hello',  ),));
    }

    private function get_demo_contactRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/contact',  ),));
    }

    private function get_assetic_0c193ecRouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '0c193ec',  'pos' => NULL,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/0c193ec.css',  ),));
    }

    private function get_assetic_0c193ec_0RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '0c193ec',  'pos' => 0,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/0c193ec_Default_1.css',  ),));
    }

    private function get_assetic_4d2908eRouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '4d2908e',  'pos' => NULL,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/4d2908e.css',  ),));
    }

    private function get_assetic_4d2908e_0RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '4d2908e',  'pos' => 0,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/4d2908e_Black_in_White_1.css',  ),));
    }

    private function get_assetic_7d12c70RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '7d12c70',  'pos' => NULL,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/7d12c70.css',  ),));
    }

    private function get_assetic_7d12c70_0RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '7d12c70',  'pos' => 0,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/7d12c70_White_in_Black_1.css',  ),));
    }

    private function get_assetic_d293c98RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'd293c98',  'pos' => NULL,  '_format' => 'png',), array (), array (  0 =>   array (    0 => 'text',    1 => '/images/d293c98.png',  ),));
    }

    private function get_assetic_d293c98_0RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'd293c98',  'pos' => 0,  '_format' => 'png',), array (), array (  0 =>   array (    0 => 'text',    1 => '/images/d293c98_mobile_1.png',  ),));
    }

    private function get_assetic_b9e9ba7RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'b9e9ba7',  'pos' => NULL,  '_format' => 'gif',), array (), array (  0 =>   array (    0 => 'text',    1 => '/images/b9e9ba7.gif',  ),));
    }

    private function get_assetic_b9e9ba7_0RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'b9e9ba7',  'pos' => 0,  '_format' => 'gif',), array (), array (  0 =>   array (    0 => 'text',    1 => '/images/b9e9ba7_ip_1.gif',  ),));
    }

    private function get_assetic_862f2a6RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '862f2a6',  'pos' => NULL,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/862f2a6.js',  ),));
    }

    private function get_assetic_862f2a6_0RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '862f2a6',  'pos' => 0,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/862f2a6_datetimepicker_1.js',  ),));
    }

    private function get_assetic_862f2a6_1RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '862f2a6',  'pos' => 1,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/862f2a6_jquery.min_2.js',  ),));
    }

    private function get_assetic_1728085RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 1728085,  'pos' => NULL,  '_format' => 'gif',), array (), array (  0 =>   array (    0 => 'text',    1 => '/images/1728085.gif',  ),));
    }

    private function get_assetic_1728085_0RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 1728085,  'pos' => 0,  '_format' => 'gif',), array (), array (  0 =>   array (    0 => 'text',    1 => '/images/1728085_cal_1.gif',  ),));
    }

    private function get_assetic_9aed30bRouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '9aed30b',  'pos' => NULL,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/9aed30b.js',  ),));
    }

    private function get_assetic_9aed30b_0RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '9aed30b',  'pos' => 0,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/9aed30b_highcharts_1.js',  ),));
    }

    private function get_assetic_9aed30b_1RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '9aed30b',  'pos' => 1,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/9aed30b_exporting_2.js',  ),));
    }

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
    }

    private function getAcmeMsgbBundle_homepageRouteInfo()
    {
        return array(array (  0 => 'page_size',  1 => 'page',), array (  '_controller' => 'Acme\\MsgbBundle\\Controller\\DefaultController::indexAction',  'page_size' => 10,  'page' => 1,), array (  'page_size' => '\\d+',  'page' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'page',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'page_size',  ),  2 =>   array (    0 => 'text',    1 => '/msgb',  ),));
    }

    private function getAcmeMsgbBundle_singleRouteInfo()
    {
        return array(array (  0 => 'page_size',  1 => 'page',  2 => 'id',), array (  '_controller' => 'Acme\\MsgbBundle\\Controller\\Admin_MessageController::singleAction',  'page_size' => 10,  'page' => 1,), array (  'page_size' => '\\d+',  'page' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'page',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'page_size',  ),  3 =>   array (    0 => 'text',    1 => '/msgb/single',  ),));
    }

    private function getAcmeMsgbBundle_killRouteInfo()
    {
        return array(array (  0 => 'page_size',  1 => 'id',), array (  '_controller' => 'Acme\\MsgbBundle\\Controller\\Admin_MessageController::killAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'page_size',  ),  2 =>   array (    0 => 'text',    1 => '/msgb/kill',  ),));
    }

    private function getAcmeMsgbBundle_replyRouteInfo()
    {
        return array(array (  0 => 'page_size',  1 => 'page',  2 => 'id',), array (  '_controller' => 'Acme\\MsgbBundle\\Controller\\Admin_MessageController::replyAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'page',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'page_size',  ),  3 =>   array (    0 => 'text',    1 => '/msgb/reply',  ),));
    }

    private function getAcmeMsgbBundle_quick_replyRouteInfo()
    {
        return array(array (  0 => 'page_size',  1 => 'page',  2 => 'id',), array (  '_controller' => 'Acme\\MsgbBundle\\Controller\\Admin_MessageController::quick_replyAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'page',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'page_size',  ),  3 =>   array (    0 => 'text',    1 => '/msgb/quick_reply',  ),));
    }

    private function getAcmeMsgbBundle_multikillRouteInfo()
    {
        return array(array (  0 => 'page_size',  1 => 'page',), array (  '_controller' => 'Acme\\MsgbBundle\\Controller\\Admin_MessageController::multikillAction',  'page_size' => 10,  'page' => 1,), array (  'page_size' => '\\d+',  'page' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'page',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'page_size',  ),  2 =>   array (    0 => 'text',    1 => '/msgb/multikill',  ),));
    }

    private function getAcmeMsgbBundle_kill_replyRouteInfo()
    {
        return array(array (  0 => 'page_size',  1 => 'page',  2 => 'id',  3 => 'action',), array (  '_controller' => 'Acme\\MsgbBundle\\Controller\\Admin_MessageController::kill_replyAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'action',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'page',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'page_size',  ),  4 =>   array (    0 => 'text',    1 => '/msgb/kill_reply',  ),));
    }

    private function getAcmeMsgbBundle_signupRouteInfo()
    {
        return array(array (  0 => 'page_size',  1 => 'page',), array (  '_controller' => 'Acme\\MsgbBundle\\Controller\\DefaultController::signupAction',  'page_size' => 10,  'page' => 1,), array (  'page_size' => '\\d+',  'page' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'page',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'page_size',  ),  2 =>   array (    0 => 'text',    1 => '/msgb/signup',  ),));
    }

    private function getAcmeMsgbBundle_loginRouteInfo()
    {
        return array(array (  0 => 'page_size',  1 => 'page',), array (  '_controller' => 'Acme\\MsgbBundle\\Controller\\DefaultController::loginAction',  'page_size' => 10,  'page' => 1,), array (  'page_size' => '\\d+',  'page' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'page',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'page_size',  ),  2 =>   array (    0 => 'text',    1 => '/msgb/login',  ),));
    }

    private function getAcmeMsgbBundle_logoutRouteInfo()
    {
        return array(array (  0 => 'page_size',  1 => 'page',), array (  '_controller' => 'Acme\\MsgbBundle\\Controller\\AdminController::logoutAction',  'page_size' => 10,  'page' => 1,), array (  'page_size' => '\\d+',  'page' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'page',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'page_size',  ),  2 =>   array (    0 => 'text',    1 => '/msgb/logout',  ),));
    }

    private function getAcmeMsgbBundle_disaccountRouteInfo()
    {
        return array(array (  0 => 'page_size',  1 => 'page',), array (  '_controller' => 'Acme\\MsgbBundle\\Controller\\AdminController::disaccountAction',  'page_size' => 10,  'page' => 1,), array (  'page_size' => '\\d+',  'page' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'page',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'page_size',  ),  2 =>   array (    0 => 'text',    1 => '/msgb/disaccount',  ),));
    }

    private function getAcmeMsgbBundle_admin_ctrlRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\MsgbBundle\\Controller\\AdminController::admin_ctrlAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/msgb/admin_ctrl',  ),));
    }

    private function getAcmeMsgbBundle_admin_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Acme\\MsgbBundle\\Controller\\AdminController::admin_editAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/msgb/admin_edit',  ),));
    }

    private function getAcmeMsgbBundle_admin_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Acme\\MsgbBundle\\Controller\\AdminController::admin_deleteAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/msgb/admin_delete',  ),));
    }

    private function getAcmeMsgbBundle_admin_logRouteInfo()
    {
        return array(array (  0 => 'page_size',  1 => 'page',  2 => 'account',), array (  '_controller' => 'Acme\\MsgbBundle\\Controller\\AdminController::admin_logAction',  'page_size' => 20,  'page' => 1,  'account' => '',), array (  'page_size' => '\\d+',  'page' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'account',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'page',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'page_size',  ),  3 =>   array (    0 => 'text',    1 => '/msgb/log',  ),));
    }

    private function getAcmeMsgbBundle_admin_analyzeRouteInfo()
    {
        return array(array (  0 => 'page_size',  1 => 'page',), array (  '_controller' => 'Acme\\MsgbBundle\\Controller\\AdminController::admin_analyzeAction',  'page_size' => 20,  'page' => 1,), array (  'page_size' => '\\d+',  'page' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'page',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'page_size',  ),  2 =>   array (    0 => 'text',    1 => '/msgb/analyze',  ),));
    }

    private function getAcmeMsgbBundle_admin_edit_classesRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\MsgbBundle\\Controller\\AdminController::admin_edit_classesAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/msgb/edit_classes',  ),));
    }

    private function getAcmeMsgbBundle_admin_menuRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\MsgbBundle\\Controller\\AdminController::admin_menuAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/msgb/menu',  ),));
    }

    private function getAcmeMsgBundle_homepageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\MsgBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/msg/',  ),));
    }

    private function getAcmeTestBundle_homepageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\TestBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/test',  ),));
    }

    private function getAcmeTestBundle_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\TestBundle\\Controller\\DefaultController::createAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/create',  ),));
    }

    private function getAcmeTestBundle_showAllRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\TestBundle\\Controller\\DefaultController::showAllAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/showAll',  ),));
    }

    private function getAcmeTestBundle_queryRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\TestBundle\\Controller\\DefaultController::queryAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/query',  ),));
    }
}
