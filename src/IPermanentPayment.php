<?php
/**
 * Created by PhpStorm.
 * User: jam
 * Date: 20.8.15
 * Time: 11:48
 */

namespace Trejjam\ThePay;


interface IPermanentPayment
{
	/**
	 * @return PermanentPayment
	 */
	function create();
}
