<?php
/**
 * This is the PHP base ACL configuration file.
 *
 * Configure access control of your Cake application.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 2.1
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
/**
 * The role map defines how to resolve the user record from the application
 * to the roles defined in the roles configuration.
 */
$config['map'] = array(
	'User' => 'User/username',
	'Role' => 'User/group_id',
);

/**
 * define aliases to map model information to
 * the roles defined in role configuration.
 */
$config['alias'] = array(
	'Role/4' => 'Role/editor',
);

/**
 * role configuration
 */
$config['roles'] = array(
	'Role/admin' => null,
);

/**
 * rule configuration
 */
$config['rules'] = array(
	'allow' => array(
		'*' => 'Role/admin',
	),
	'deny' => array(),
);
