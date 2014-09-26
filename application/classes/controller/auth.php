<?php defined('SYSPATH') or die('No direct access allowed.');
/**
 * Created by PhpStorm.
 * User: oscoder
 * Date: 9/15/14
 * Time: 17:48
 */

class Controller_Auth extends Controller {

    public function before() {

        try {
            $this->session = Session::instance();
        } catch (ErrorException $e) {
            session_destroy();
        }
        parent::before();
        $this->session = Session::instance();

        $user = ORM::factory('user');
        if ($user->count_all() == 0) {
            $login_role = ORM::factory('role', array('name' => 'login'));
            $admin_role = ORM::factory('role', array('name' => 'admin'));
            $data = array('username' => 'admin',
                'password' => 'admin',
                'password_confirm' => 'admin',
                'email' => 'csauthor@gmail.com');
            $user->create_user($data, array('username', 'password', 'email'));
            $user->add('roles', $login_role)->add('roles', $admin_role);
        }
        $user = NULL;
        $auth = Auth::instance();
        $user = $auth->get_user();

        if (!empty($user) and $user->id === NULL) {
            $auth->logout(TRUE, TRUE);
        }

        $action_name = Request::current()->action();

        if (($this->auth_required != FALSE &&
                $auth->logged_in($this->auth_required) === FALSE)
            || (is_array($this->secure_actions) &&
                array_key_exists($action_name, $this->secure_actions) &&
                $auth->logged_in($this->secure_actions[$action_name]) === FALSE)) {
            if ($auth->logged_in()) {
                $this->access_required();
            } else {
                $this->login_required();
            }
        }
    }
} 