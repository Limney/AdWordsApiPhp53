<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\BiddingTransition;


class ConversionOptimizerBiddingTransition extends BiddingTransition
{
    /**
     * Indicate to use the existing bids, if there are previously saved CPA bids
     * for the AdGroup during transition of campaign from
     * {@link ManualCPC} to {@link ConversionOptimizer}.
     * @var string
     */
    public $useSavedBids;
    private $_propertyMap = array (
    );

    /**
     * Set property with php-incompatiable name
     *
     * @param $var attribute name to set
     * @param $value Value to set
     */
    public function __set($var, $value)
    {
        if (isset($this->_propertyMap[$var])) {
            $this->{$this->_propertyMap[$var]} = $value;
        } else if (get_parent_class(__CLASS__)) {
            parent::__set($var, $value);
        }
    }

    /**
     * Get property with php-incompatiable name
     *
     * @param $var attribute name to get.
     * @return mixed Variable value
     */
    public function __get($var)
    {
        if (array_key_exists($var, $this->_propertyMap)) {
            return $this->{$this->_propertyMap[$var]};
        } else if (get_parent_class(__CLASS__)) {
            parent::__get($var);
        } else {
            return null;
        }
    }
}