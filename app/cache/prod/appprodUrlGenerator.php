<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
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
