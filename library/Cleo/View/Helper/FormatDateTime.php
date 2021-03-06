<?php
/**
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 * 
 * @category   Cleo
 * @package    Cleo_View_Helper
 * @subpackage FormatDateTime
 * @copyright  2010 Jean-Baptiste MONIN - CLEO Consulting
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id: FormatDateTime.php 03 2010-06-10 12:00:00Z jb $
 */
/** Zend_View_Helper_Abstract.php */
require_once 'Zend/View/Helper/Abstract.php';

class Cleo_View_Helper_FormatDateTime extends Zend_View_Helper_Abstract
{
  /**
     * formatDateTime
     *
     * @return string
     */
    function formatDateTime($timestamp, $format='%d/%m/%Y à %Hh%M')
    {
        if ( $timestamp != '0000-00-00 00:00:00' ) {
            return strftime($format, strtotime($timestamp));
        }
        else {
            return false;
        }
    }
}