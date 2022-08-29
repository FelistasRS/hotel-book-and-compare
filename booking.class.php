<?php

class Booking {

    private $startDate;
    private $endDate;

    public function __construct($startInput, $endInput)
    {
        $this->startDate = $startInput;
        $this->endDate = $endInput;
    }

    // ====== Business Logic ======

    public function calculateDays() {
        
    }

    // ====== Getters and Setters ======

    /**
     * Get the value of startDate
     */ 
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set the value of startDate
     *
     * @return  self
     */ 
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get the value of endDate
     */ 
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set the value of endDate
     *
     * @return  self
     */ 
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }
}