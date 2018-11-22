<?php
/*
 * Solvature_GoogleCustomerReviews
 * @category   Solvature
 * @package    Solvature_GoogleCustomerReviews
 * @copyright  Copyright (c) 2018 Solvature, Inc.
 * @version    1.0.0
 */
namespace Solvature\GoogleCustomerReviews\Model\Config;

class BadgePosition
{
    public function toOptionArray()
    {
        return [
            ['value' => 'BOTTOM_LEFT' , 'label' => __('Bottom Left')],
            ['value' => 'BOTTOM_RIGHT', 'label' => __('Bottom Right')]
        ];
    }
}