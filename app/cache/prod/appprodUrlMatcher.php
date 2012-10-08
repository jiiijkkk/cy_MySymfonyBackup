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
