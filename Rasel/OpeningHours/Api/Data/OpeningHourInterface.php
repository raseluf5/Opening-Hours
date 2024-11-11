<?php
/**
 *
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Rasel\OpeningHours\Api\Data;

/**
 * @api
 */
interface OpeningHourInterface
{
    const MONDAY_OPENING = 'monday_opening';
    const MONDAY_CLOSING = 'monday_closing';

    const TUESDAY_OPENING = 'tuesday_opening';
    const TUESDAY_CLOSING = 'tuesday_closing';

    const WEDNESDAY_OPENING = 'wednesday_opening';
    const WEDNESDAY_CLOSING = 'wednesday_closing';

    const THURSDAY_OPENING = 'thursday_opening';
    const THURSDAY_CLOSING = 'thursday_closing';

    const FRIDAY_OPENING = 'friday_opening';
    const FRIDAY_CLOSING = 'friday_closing';

    const SATURDAY_OPENING = 'saturday_opening';
    const SATURDAY_CLOSING = 'saturday_closing';

    const SUNDAY_OPENING = 'sunday_opening';
    const SUNDAY_CLOSING = 'sunday_closing';



    /**
     * Get monday opening time
     *
     * @return string
     */
    public function getMondayOpening();

    /**
     * Set monday opening time
     *
     * @param string $monday_opening
     * @return $this
     */
    public function setMondayOpening($monday_opening);

    /**
     * Get monday opening time
     *
     * @return string
     */
    public function getMondayClosing();

    /**
     * Set monday opening time
     *
     * @param string $monday_closing
     * @return $this
     */
    public function setMondayClosing($monday_closing);

    /**
     * Get tuesday opening time
     *
     * @return string
     */
    public function getTuesdayOpening();

    /**
     * Set tuesday opening time
     *
     * @param string $tuesday_opening
     * @return $this
     */
    public function setTuesdayOpening($tuesday_opening);

    /**
     * Get tuesday opening time
     *
     * @return string
     */
    public function getTuesdayClosing();

    /**
     * Set tuesday opening time
     *
     * @param string $tuesday_closing
     * @return $this
     */
    public function setTuesdayClosing($tuesday_closing);

    /**
     * Get wednesday opening time
     *
     * @return string
     */
    public function getWednesdayOpening();

    /**
     * Set wednesday opening time
     *
     * @param string $wednesday_opening
     * @return $this
     */
    public function setWednesdayOpening($wednesday_opening);

    /**
     * Get wednesday opening time
     *
     * @return string
     */
    public function getWednesdayClosing();

    /**
     * Set wednesday opening time
     *
     * @param string $wednesday_closing
     * @return $this
     */
    public function setWednesdayClosing($wednesday_closing);

    /**
     * Get thursday opening time
     *
     * @return string
     */
    public function getThursdayOpening();

    /**
     * Set thursday opening time
     *
     * @param string $thursday_opening
     * @return $this
     */
    public function setThursdayOpening($thursday_opening);

    /**
     * Get thursday opening time
     *
     * @return string
     */
    public function getThursdayClosing();

    /**
     * Set thursday opening time
     *
     * @param string $thursday_closing
     * @return $this
     */
    public function setThursdayClosing($thursday_closing);

    /**
     * Get friday opening time
     *
     * @return string
     */
    public function getFridayOpening();

    /**
     * Set friday opening time
     *
     * @param string $friday_opening
     * @return $this
     */
    public function setFridayOpening($friday_opening);

    /**
     * Get friday opening time
     *
     * @return string
     */
    public function getFridayClosing();

    /**
     * Set friday opening time
     *
     * @param string $friday_closing
     * @return $this
     */
    public function setFridayClosing($friday_closing);

    /**
     * Get saturday opening time
     *
     * @return string
     */
    public function getSaturdayOpening();

    /**
     * Set saturday opening time
     *
     * @param string $saturday_opening
     * @return $this
     */
    public function setSaturdayOpening($saturday_opening);

    /**
     * Get saturday opening time
     *
     * @return string
     */
    public function getSaturdayClosing();

    /**
     * Set saturday opening time
     *
     * @param string $saturday_closing
     * @return $this
     */
    public function setSaturdayClosing($saturday_closing);

    /**
     * Get sunday opening time
     *
     * @return string
     */
    public function getSundayOpening();

    /**
     * Set sunday opening time
     *
     * @param string $sunday_opening
     * @return $this
     */
    public function setSundayOpening($sunday_opening);

    /**
     * Get sunday opening time
     *
     * @return string
     */
    public function getSundayClosing();

    /**
     * Set sunday opening time
     *
     * @param string $sunday_closing
     * @return $this
     */
    public function setSundayClosing($sunday_closing);

}
