<?php defined('SYSPATH') or die('No direct access allowed');
/**
 * Created by PhpStorm.
 * User: oscoder
 * Date: 9/15/14
 * Time: 17:42
 */

class Model_User extends Model_Auth_User {

    public function labels() {
        return array(
            'username' =>  'User Name',
            'email' =>  'Email',
            'password'  =>  'Password',
        );
    }

    public static function get_password_validation($values) {
        return Validation::factory($values)
            ->rule('password', 'min_length', array(':value', 5))
            ->rule('password_confirm', 'matches', array(':validation', ':field', 'password'))
            ->labels(array(
                'password' => 'Password',
                'password_confirm' => 'Password Confirmation'
            ));
    }
} 