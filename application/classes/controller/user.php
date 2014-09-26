<?php defined('SYSPATH') or die('NO direct access allowed.');
/**
 * Created by PhpStorm.
 * User: oscoder
 * Date: 9/15/14
 * Time: 17:47
 */

class Controller_User extends Controller_Auth {
    public $auth_required = FALSE;
    public $secure_actions = array(
        'index' => 'login',
        'save' => 'login',
    );
    protected function login_required() {
        $this->action_login();
    }

    public function action_login() {
        $message = NULL;
        $auth = Auth::instance();
        if ($auth->logged_in() != 0) {
            $this->redirect_to_admin();
        }
        if (count($_POST) > 0) {
            $auth->login($this->request->post('username'), $this->request->post('password'));
            if ($auth->logged_in()) {
                $this->redirect_to_admin();
            }
            $message = array('message' => 'Login failed! Please check and try again.');
        }
        $this->show_login($message);
    }
    private function show_login($message) {
        $data = new View_Layout_Login();
        $data->message = $message;

        $renderer = Koace::factory($data);
        $this->response->body($renderer->render());
    }

    public function action_logout() {
        Auth::instance()->logout();
        $this->redirect_to_admin();
    }

    public function action_index() {
        if (Auth::instance()->logged_in() == false) {
            $this->show_profile();
        } else {
            $uri = Route::get('default')->uri(array('controller' => 'admin'));
            $this->request->redirect($uri);
        }
    }

    private function show_profile($user = NULL, $errors = NULL) {
        if ($user === NULL) {
            $user = Auth::instance()->get_user();
        }
        $data = new View_Layout_Login();
        $renderer = Koace::factory($data);
        $this->response->body($renderer->render());
    }

    public function action_save() {
        if (count($_POST) > 0) {
            $errors = NULL;
            try {
                $user = Auth::instance()->get_user();
                $user = $user->update_user($_POST, array('password', 'email'));
                $user->save();
                $this->redirect_to_admin();
            } catch (ORM_Validation_Exception $e) {
                $errors = Arr::flatten($e->errors('hack'));
            }
            $this->show_profile($user, $errors);
        } else {
            $this->redirect_to_admin();
        }
    }

    private function redirect_to_admin() {
        $uri = Route::get('default')->uri(array('controller'=>'admin'));
        $this->request->redirect($uri);
    }
} 