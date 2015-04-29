<?php
/**
 * @version     1.0.0
 * @package     com_epsg
 * @copyright   Copyright (C) 2015. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Chuyen Trung Tran <chuyentt@gmail.com> - http://www.geomatics.vn
 */

// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.controllerform');

/**
 * Projection controller class.
 */
class EpsgControllerProjection extends JControllerForm
{

    function __construct() {
        $this->view_list = 'projections';
        parent::__construct();
    }

}