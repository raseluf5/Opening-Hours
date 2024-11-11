<?php
namespace Rasel\OpeningHours\Model;

use Rasel\OpeningHours\Api\Data\OpeningHourInterface;
use Magento\Framework\Model\AbstractModel;

class OpeningHour extends AbstractModel implements OpeningHourInterface
{

    /**
     * Get monday opening time
     *
     * @return string
     */
    public function getMondayOpening(){
        return $this->getData(OpeningHourInterface::MONDAY_OPENING);
    }

    /**
     * Set monday opening time
     *
     * @param string $monday_opening
     * @return $this
     */
    public function setMondayOpening($monday_opening){
        return $this->setData(OpeningHourInterface::MONDAY_OPENING, $monday_opening);
    }

    /**
     * Get monday opening time
     *
     * @return string
     */
    public function getMondayClosing(){
        return $this->getData(OpeningHourInterface::MONDAY_CLOSING);
    }

    /**
     * Set monday opening time
     *
     * @param string $monday_closing
     * @return $this
     */
    public function setMondayClosing($monday_closing){
        return $this->setData(OpeningHourInterface::MONDAY_CLOSING, $monday_closing);
    }

    /**
     * Get tuesday opening time
     *
     * @return string
     */
    public function getTuesdayOpening(){
        return $this->getData(OpeningHourInterface::TUESDAY_OPENING);
    }

    /**
     * Set tuesday opening time
     *
     * @param string $tuesday_opening
     * @return $this
     */
    public function setTuesdayOpening($tuesday_opening){
        return $this->setData(OpeningHourInterface::TUESDAY_OPENING, $tuesday_opening);
    }

    /**
     * Get tuesday opening time
     *
     * @return string
     */
    public function getTuesdayClosing(){
        return $this->getData(OpeningHourInterface::TUESDAY_CLOSING);
    }

    /**
     * Set tuesday opening time
     *
     * @param string $tuesday_closing
     * @return $this
     */
    public function setTuesdayClosing($tuesday_closing){
        return $this->setData(OpeningHourInterface::TUESDAY_CLOSING, $tuesday_closing);
    }

    /**
     * Get wednesday opening time
     *
     * @return string
     */
    public function getWednesdayOpening(){
        return $this->getData(OpeningHourInterface::WEDNESDAY_OPENING); 
    }

    /**
     * Set wednesday opening time
     *
     * @param string $wednesday_opening
     * @return $this
     */
    public function setWednesdayOpening($wednesday_opening){
        return $this->setData(OpeningHourInterface::WEDNESDAY_OPENING, $wednesday_opening);
    }

    /**
     * Get wednesday opening time
     *
     * @return string
     */
    public function getWednesdayClosing(){
        return $this->getData(OpeningHourInterface::WEDNESDAY_CLOSING); 
    }

    /**
     * Set wednesday opening time
     *
     * @param string $wednesday_closing
     * @return $this
     */
    public function setWednesdayClosing($wednesday_closing){
        return $this->setData(OpeningHourInterface::WEDNESDAY_CLOSING, $wednesday_closing);
    }

    /**
     * Get thursday opening time
     *
     * @return string
     */
    public function getThursdayOpening(){
        return $this->getData(OpeningHourInterface::THURSDAY_OPENING);
    }

    /**
     * Set thursday opening time
     *
     * @param string $thursday_opening
     * @return $this
     */
    public function setThursdayOpening($thursday_opening){
        return $this->setData(OpeningHourInterface::THURSDAY_OPENING, $thursday_opening);
    }

    /**
     * Get thursday opening time
     *
     * @return string
     */
    public function getThursdayClosing(){
        return $this->getData(OpeningHourInterface::THURSDAY_CLOSING);
    }

    /**
     * Set thursday opening time
     *
     * @param string $thursday_closing
     * @return $this
     */
    public function setThursdayClosing($thursday_closing){
        return $this->setData(OpeningHourInterface::THURSDAY_CLOSING, $thursday_closing);
    }

    /**
     * Get friday opening time
     *
     * @return string
     */
    public function getFridayOpening(){
        return $this->getData(OpeningHourInterface::FRIDAY_OPENING);
    }

    /**
     * Set friday opening time
     *
     * @param string $friday_opening
     * @return $this
     */
    public function setFridayOpening($friday_opening){
        return $this->setData(OpeningHourInterface::FRIDAY_OPENING, $friday_opening);
    }

    /**
     * Get friday opening time
     *
     * @return string
     */
    public function getFridayClosing(){
        return $this->getData(OpeningHourInterface::FRIDAY_CLOSING);
    }

    /**
     * Set friday opening time
     *
     * @param string $friday_closing
     * @return $this
     */
    public function setFridayClosing($friday_closing){
        return $this->setData(OpeningHourInterface::FRIDAY_CLOSING, $friday_closing);
    }

    /**
     * Get saturday opening time
     *
     * @return string
     */
    public function getSaturdayOpening(){
        return $this->getData(OpeningHourInterface::SATURDAY_OPENING);
    }

    /**
     * Set saturday opening time
     *
     * @param string $saturday_opening
     * @return $this
     */
    public function setSaturdayOpening($saturday_opening){
        return $this->setData(OpeningHourInterface::SATURDAY_OPENING, $saturday_opening);
    }

    /**
     * Get saturday opening time
     *
     * @return string
     */
    public function getSaturdayClosing(){
        return $this->getData(OpeningHourInterface::SATURDAY_CLOSING);
    }

    /**
     * Set saturday opening time
     *
     * @param string $saturday_closing
     * @return $this
     */
    public function setSaturdayClosing($saturday_closing){
        return $this->setData(OpeningHourInterface::SATURDAY_CLOSING, $saturday_closing);
    }

    /**
     * Get sunday opening time
     *
     * @return string
     */
    public function getSundayOpening(){
        return $this->getData(OpeningHourInterface::SUNDAY_OPENING);
    }

    /**
     * Set sunday opening time
     *
     * @param string $sunday_opening
     * @return $this
     */
    public function setSundayOpening($sunday_opening){
        return $this->setData(OpeningHourInterface::SUNDAY_OPENING, $sunday_opening);
    }

    /**
     * Get sunday opening time
     *
     * @return string
     */
    public function getSundayClosing(){
        return $this->getData(OpeningHourInterface::SUNDAY_CLOSING);
    }

    /**
     * Set sunday opening time
     *
     * @param string $sunday_closing
     * @return $this
     */
    public function setSundayClosing($sunday_closing){
        return $this->setData(OpeningHourInterface::SUNDAY_CLOSING, $sunday_closing);
    }

}
