<?php
/**
 * Class Authority
 *
 * Author   JE.Xie
 * Date     2017.01.16
 *
 */

class Authority
{
    /**
     * Encrypt password (use MD5)
     * @param $password
     * @return string
     */
    public static function EncryptPassword($password,$salt=''){
        $encrypt = false;//如果没填写配置，默认为false；
        $secure = C('secure');
        if(is_array($secure) && isset($secure['encryptPassword'])){
            $encrypt = $secure['encryptPassword'];
        }
        if($encrypt){
            if(empty($salt)) $salt=getRandomString(6);
            $password = md5($salt.$password);
        }
        return array('password'=>$password,'salt'=>$salt);
    }

    /**
     * Login operator
     * @param $username
     * @param $password
     * @param bool $remember
     * @return bool
     * 将user信息存入session，如果记住密码则把username和password存入cookie
     */
    public static function Login($username, $password, $remember=false){
        //暂时提到前面调用 观察会不会出错。为了解决的bug：登录第一个用户记住账号写入cookie，登录第二个账户不记住，第一个账户cookie仍然存在。17-01-19
        self::Logout();

        $model = new UsersModel();
        $user = $model->queryFirstBy('username',$username);
        if(is_array($user)){
            $salt=$user['salt'];

            //兼容不开启安全模式时注册的用户
            $password = empty($salt)?$password:self::EncryptPassword($password,$salt)['password'];

            if($password === $user['password']){
                $_SESSION['user'] = $user;
                if($remember){
                    setcookie(COOKIE_PREFIX.'username', $username, time()+3600*24*15, '/'); //15天
                    setcookie(COOKIE_PREFIX.'password', md5($password.$salt), time()+3600*24*15, '/');
                }
                return true;
            }
        }
        //删除Cookie(已经提到函数开头17-01-19)
        //setcookie(COOKIE_PREFIX.'username', '', time()-3600*24*15, '/');
        //setcookie(COOKIE_PREFIX.'password', '', time()-3600*24*15, '/');
        //self::Logout();
        return false;
    }

    /**
     * Logout operator
     */
    public static function Logout(){
        unset($_SESSION['user']);
        setcookie(COOKIE_PREFIX.'username', '', time()-3600*24*15, '/');
        setcookie(COOKIE_PREFIX.'password', '', time()-3600*24*15, '/');
    }
    /**
     * Get user from session
     * @return array | null
     */
    public static function GetUser(){
        if(self::CheckLogin())
            return $_SESSION['user'];
        return null;
    }

    /**
     * Check login status, and login automatically from cookie.
     * @return bool
     */
    public static function CheckLogin(){
        //检查Session
        $user = $_SESSION['user'];
        if($user)
            return true;
        //从Cookie中恢复登录
        $username = $_COOKIE[COOKIE_PREFIX.'username'];
        $password = $_COOKIE[COOKIE_PREFIX.'password'];
        if($username && $password){
            $model = new UsersModel();
            $user = $model->queryFirstBy('username',$username);
            if(is_array($user)){
                if($password === md5($user['password'].$user['salt'])){
                    $_SESSION['user'] = $user;
                    return true;
                }
            }
            //删除Cookie
            //setcookie(COOKIE_PREFIX.'username', '', time()-3600*24*15, '/');
            //setcookie(COOKIE_PREFIX.'password', '', time()-3600*24*15, '/');
            self::Logout();
        }
        return false;
    }

    /**
     * 测试用户登录状态
     * 不登录则抛出异常
     */
    public static function TestLogin(){
        if(!self::CheckLogin())
            throw new JException("You haven't login!",403);
    }

    /**
     * Check privilege
     * @param $privilege
     * @return bool
     */
    public static function CheckPrivilege($privilege){
        if(self::CheckLogin()){
            $user = $_SESSION['user'];
            $privileges = explode(',', $user['privilege']);
            foreach($privileges as $pri){
                if(trim($pri) == trim($privilege))
                    return true;
                if(trim($pri) == 'all')
                    return true;
            }
        }
        return false;
    }
    /*
     * 测试用户权限，不用过则抛出异常
     */
    public static function TestPrivilege($privilege){
        if(!self::CheckPrivilege($privilege))
            throw new JException( "You are unauthorised",403);
    }

    /**
     * 获取和鉴定表单校验散列
     * note:一定要先测试token再登录，切记切记
     */
    public static function CSRF_Token()
    {
        if (self::CheckLogin())
            $generated_token= substr(md5(SITE_NAME . $_SESSION['user']['password'].$_SESSION['user']['salt']. SALT), 8, 8);
        else
            $generated_token= substr(md5(SITE_NAME . SALT), 8, 8);
        return $generated_token;
    }
    public static function TestCSRF(){
        if(MVC::$request->input_post('csrf_token')!=self::CSRF_Token())
            throw new JException('csrf_token error.',403);
    }

    //来源检查
    public static function CheckRefer()
    {
        if (empty($_SERVER['HTTP_REFERER'] || preg_replace("/https?:\/\/([^\:\/]+).*/i", "\\1", $_SERVER['HTTP_REFERER']) !== preg_replace("/([^\:]+).*/", "\\1", $_SERVER['HTTP_HOST'])))
            return false;
        else
            return true;
    }
    public static function TestRefer(){
        if(!self::CheckRefer())
            throw new JException( "you have use an error refer.",403);
    }
}