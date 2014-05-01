<?php
/**
 * A entry point for the notion of an admin portal
 *
 * Parbake (http://jasonsnider.com)
 * Copyright 2013, Jason D Snider. (http://jasonsnider.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2013, Jason D Snider. (http://jasonsnider.com)
 * @link http://jasonsnider.com
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 * @package	Contents
 */
App::uses('AppController', 'Controller');
/**
 * A entry point for the notion of an admin portal
 *
 * @author Jason D Snider <jason@jasonsnider.com>
 * @package Parbake
 */
class AdminAppController extends AppController {	
    /**
     * Called before action
     */
    public function beforeFilter() {
        parent::beforeFilter();
    }
    
    /**
     * Called after the action
     * Returns the any meta data that has been created for static pages
     * @return void
     */
    public function beforerender() {
        parent::beforeRender();
    }
}