<?php
/**
 * A entry point for the notion of an admin portal
 *
 * JSC (http://jasonsnider.com/jsc)
 * Copyright 2014, Jason D Snider. (http://jasonsnider.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2014, Jason D Snider. (http://jasonsnider.com)
 * @link http://jasonsnider.com
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 * @author Jason D Snider <jason@jasonsnider.com>
 * @package JSC
 */
App::uses('AdminAppController', 'Admin.Controller');

/**
 * A entry point for the notion of an admin portal
 * @author Jason D Snider <jason@jasonsnider.com>
 * @package JSC
 */
class AdminController extends AdminAppController {

    /**
     * Holds the name of the controller
     *
     * @var string
     */
    public $name = 'Admin';

    /**
     * Call the components to be used by this controller
     *
     * @var array
     */
    //public $components = array();

    /**
     * Called before action
     * @return void
     */
    public function beforeFilter() {
        parent::beforeFilter();
    }

    /**
     * Admin uses no model
     * @var array
     */
    public $uses = array();

    /**
     * The landing page for the admin portal.
     * @return void
     */
    public function admin_index() {}
}