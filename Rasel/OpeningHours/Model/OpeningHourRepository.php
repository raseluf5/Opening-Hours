<?php

/**
 * Created by PhpStorm.
 * User: doanhcn2
 * Date: 11/10/2019
 * Time: 10:40
 */

namespace Rasel\OpeningHours\Model;

use Rasel\OpeningHours\Api\OpeningHourRepositoryInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\Serialize\Serializer\Json;

class OpeningHourRepository implements OpeningHourRepositoryInterface
{
    protected $_scopeConfig;

    /**
     * @var \Rasel\CustomApiSupport\Api\Data\DataMinimumOrderInterfaceFactory
     */
    protected $openingHour;

    protected $_serialize;


    public function __construct(
        ScopeConfigInterface $scopeInterface,
        Json $serialize,
        \Rasel\OpeningHours\Api\Data\OpeningHourInterfaceFactory $openingHour
    )
    {
       $this->_scopeConfig = $scopeInterface;
       $this->openingHour = $openingHour;
       $this->_serialize = $serialize;
    }

    /**
     * @return object
     */
    public function getOpeningHour()
    {
        $monday_opening = $monday_closing = $tuesday_opening = $tuesday_closing = $wednesday_opening = $wednesday_closing
        = $thursday_opening = $thursday_closing = $friday_opening = $friday_closing = $saturday_opening = $saturday_closing
        = $sunday_opening = $sunday_closing = '';
    
        
        $monday_array = $this->_serialize->unserialize($this->_scopeConfig->getValue('general/opening_hours/monday', \Magento\Store\Model\ScopeInterface::SCOPE_STORE));
        $tuesday_array = $this->_serialize->unserialize($this->_scopeConfig->getValue('general/opening_hours/tuesday', \Magento\Store\Model\ScopeInterface::SCOPE_STORE));
        $wednesday_array = $this->_serialize->unserialize($this->_scopeConfig->getValue('general/opening_hours/wednesday', \Magento\Store\Model\ScopeInterface::SCOPE_STORE));
        $thursday_array = $this->_serialize->unserialize($this->_scopeConfig->getValue('general/opening_hours/thursday', \Magento\Store\Model\ScopeInterface::SCOPE_STORE));
        $friday_array = $this->_serialize->unserialize($this->_scopeConfig->getValue('general/opening_hours/friday', \Magento\Store\Model\ScopeInterface::SCOPE_STORE));
        $saturday_array = $this->_serialize->unserialize($this->_scopeConfig->getValue('general/opening_hours/saturday', \Magento\Store\Model\ScopeInterface::SCOPE_STORE));
        $sunday_array = $this->_serialize->unserialize($this->_scopeConfig->getValue('general/opening_hours/sunday', \Magento\Store\Model\ScopeInterface::SCOPE_STORE));

        foreach($monday_array as $monday){
            $monday_opening = $monday['monday_open'];
            $monday_closing = $monday['monday_close'];
        }

        foreach($tuesday_array as $tuesday){
            $tuesday_opening = $tuesday['tuesday_open'];
            $tuesday_closing = $tuesday['tuesday_close'];
        }

        foreach($wednesday_array as $wednesday){
            $wednesday_opening = $wednesday['wednesday_open'];
            $wednesday_closing = $wednesday['wednesday_close'];
        }

        foreach($thursday_array as $thursday){
            $thursday_opening = $thursday['thursday_open'];
            $thursday_closing = $thursday['thursday_close'];
        }

        foreach($friday_array as $friday){
            $friday_opening = $friday['friday_open'];
            $friday_closing = $friday['friday_close'];
        }

        foreach($saturday_array as $saturday){
            $saturday_opening = $saturday['saturday_open'];
            $saturday_closing = $saturday['saturday_close'];
        }

        foreach($sunday_array as $sunday){
            $sunday_opening = $sunday['sunday_open'];
            $sunday_closing = $sunday['sunday_close'];
        }

        $opening_schedule_object = $this->openingHour->create();
        $opening_schedule_object->setMondayOpening(empty($monday_opening) ? '' : $monday_opening)->setMondayClosing(empty($monday_closing) ? '' : $monday_closing)
                                ->setTuesdayOpening(empty($tuesday_opening) ? '' : $tuesday_opening)->setTuesdayClosing(empty($tuesday_closing) ? '' : $tuesday_closing)
                                ->setWednesdayOpening(empty($wednesday_opening) ? '' : $wednesday_opening)->setWednesdayClosing(empty($wednesday_closing) ? '' : $wednesday_closing)
                                ->setThursdayOpening(empty($thursday_opening) ? '' : $thursday_opening)->setThursdayClosing(empty($thursday_closing) ? '' : $thursday_closing)
                                ->setFridayOpening(empty($friday_opening) ? '' : $friday_opening)->setFridayClosing(empty($friday_closing) ? '' : $friday_closing)
                                ->setSaturdayOpening(empty($saturday_opening) ? '' : $saturday_opening)->setSaturdayClosing(empty($saturday_closing) ? '' : $saturday_closing)
                                ->setSundayOpening(empty($sunday_opening) ? '' : $sunday_opening)->setSundayClosing(empty($sunday_closing) ? '' : $sunday_closing);
                               
        
        return $opening_schedule_object;

    }

    
}
