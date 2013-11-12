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
     * Executes logic prior to the execution of the invoked action
     * - Sets the theme to the value specified by the Configure class
     * @return void
     */
    public function beforeFilterr() {
        $this->setTheme();
    }
    
    /**
     * Sets the theme to a Configured value
     * @return void
     */
    public function setTheme(){
        if(Configure::check('Parbake.Themed.default')){
            $this->theme = Configure::read('Parbake.Themed.default');
        }
    }
    
}