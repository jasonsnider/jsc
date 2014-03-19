<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    /**
     * Set the default theme for the site
     */
    public $theme;
    
    /**
     * Calls the application wide components
     * @var array $components
     */
    public $components = array(
        'Auth' => array(
            //Force a central login (1 login per prefix by default).
            'loginAction' => array(
                'admin' => false,
                'plugin' => 'users',
                'controller' => 'users',
                'action' => 'login'
            ),
            'authError' => 'You are not allowed to do that.',
            'authenticate' => array(
                'Form' => array(
                    'fields' => array(
                        'username' => 'username',
                        'password' => 'hash'
                    )
                )
            )
        ),
        'Users.Authorize',
        'Security',
        'Session'
    );
    
    /**
     * Executes logic prior to the execution of the invoked action
     * - Sets the theme to the value specified by the Configure class
     * @return void
     */
    public function beforeFilter() {
        $this->setTheme(); 
        $this->request->isEmployee = $this->isEmployee();
    }
    
    /**
     * Sets the theme to a Configured value
     * @return void
     */
    public function setTheme(){
        if(Configure::check('Parbake.Themed.default')){
            $this->theme = Configure::read('Parbake.Themed.default');
        }

        //Set path segments to allow for easy reuse and improved readability
        $root = 'Parbake.Themed.Controller';
        $controller = $this->request->controller;
        $action = $this->request->action;
        
        //Check the config file for controller specific themes
        if(Configure::check('Parbake.Themed.Controller')){
            //Is the current controller named?
            if(array_key_exists($controller, Configure::read($root))){
                //Is the current action named
                if(array_key_exists($action, Configure::read("{$root}.{$controller}"))){
                        
                        //Set the theme and layout paths for easy reuse and improved readability
                        $themePath = "{$root}.{$controller}.{$action}.theme";
                        $layoutPath = "{$root}.{$controller}.{$action}.layout";
                        
                        //Set the controller/action specific theme
                        if(Configure::check($themePath)){
                            $this->theme = Configure::read($themePath);
                        }
                        
                        //Set the controller/action specific layout
                        if(Configure::check($layoutPath)){
                            $this->layout = Configure::read($layoutPath);
                        }
                  
                }
            }
        }

		if ($this->name == 'CakeError') {
            $this->theme = Configure::read('Parbake.Themed.error.theme');
            $this->layout = Configure::read('Parbake.Themed.error.layout');
		}
		
		if($this->request->prefix == 'admin'){
            $this->theme = Configure::read('Parbake.Themed.admin.theme');
            $this->layout = Configure::read('Parbake.Themed.admin.layout');
		}

    }    
    
    /**
     * Returns true if a user is an employee and/or root user.
     * @return boolean
     */
    function isEmployee(){
        $user = $this->Session->read('Auth.User');
        if($user['root'] || $user['employee']){
            return true;
        }
        return false;
    }
}