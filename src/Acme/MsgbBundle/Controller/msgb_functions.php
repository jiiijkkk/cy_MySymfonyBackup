<?php

namespace Acme\MsgbBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\SessionStorage\PdoSessionStorage;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\MsgbBundle\Entity\msgb_log;

class msgb_functions extends Controller
{
    static public function write_log($em,$admin_id,$account,$nickname,$target_id,$action)
    {
        //IP
        $ip="";
        if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
            $ip=$_SERVER['HTTP_CLIENT_IP'];
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
            $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
        else
            $ip=$_SERVER['REMOTE_ADDR'];
        //End of IP

        $log = new msgb_log();
        $log->setAdminid($admin_id);
        $log->setAccount($account);
        $log->setNickname($nickname);
        $log->setAction($action);
        $log->setTargetId($target_id);
        $log->setIp($ip);
        $log->setTime(new \DateTime('now',new \DateTimeZone('Asia/Taipei')));
        $em->persist($log);
        $em->flush();
    }
    static public function get_stylesheet($request)
    {        
        $stylesheet = "";
        $cookies = $request->cookies;
        if(!$cookies->has('SYMFONY2_MSGB_THEME')){
            msgb_functions::set_cookie('SYMFONY2_MSGB_THEME',"Default");
            $stylesheet = "Default";
        }
        else{
            $stylesheet = $cookies->get('SYMFONY2_MSGB_THEME');
        }
        return $stylesheet;
    }
    static public function pdo_clear(){
        $storage = new PdoSessionStorage(
            new \PDO("mysql:dbname=symfony","root","root") ,
            array() ,
            array(
                'db_table' => 'session' ,
                'db_id_col' => 'session_id' ,
                'db_data_col' => 'session_value' ,
                'db_time_col' => 'session_time'
            )
        );
        $storage->start();
        $storage->sessionGC(msgb_enviroment::session_timeout());
        $storage->sessionClose();
    }
    static public function pdo_get_admin_id($id){
        $storage = new PdoSessionStorage(
            new \PDO("mysql:dbname=symfony","root","root") ,
            array() ,
            array(
                'db_table' => 'session' ,
                'db_id_col' => 'session_id' ,
                'db_data_col' => 'session_value' ,
                'db_time_col' => 'session_time'
            )
        );
        $storage->start();
        $str = $storage->sessionRead($id);
        $storage->sessionClose();
        preg_match("/login\|i:\d+/", $str , $matches);
        if(isset($matches[0]))
            preg_match("/\d+/", $matches[0] , $matches);
        if(isset($matches[0]))return $matches[0];
        return 0;
    }
    static public function islogin($em){
        if(isset($_SESSION['login'])){
            $account = $em
                ->getRepository('AcmeMsgbBundle:msgb_admin')
                ->find($_SESSION['login']);                
            if(!$account)unset($_SESSION['login']);
            else return true;
        }
        return false;
    }
    static public function set_cookie($key, $value){
        $cookie = new Cookie($key, $value);
        $response = new Response();
        $response->headers->setCookie($cookie);
        $response->send();
    }
}
