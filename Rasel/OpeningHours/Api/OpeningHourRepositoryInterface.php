<?php

namespace Rasel\OpeningHours\Api;

interface OpeningHourRepositoryInterface
{
    /**
     * @return \Rasel\OpeningHours\Api\Data\OpeningHourInterface containing objects 
     */
    public function getOpeningHour();
}
