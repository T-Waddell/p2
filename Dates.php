<?php
namespace p2;
class Dates
{
    # Properties
    private $daysToAdd;

    # Methods
    public function __construct()
    {
    }

    public function dateCalculate($startDate, $cadence, $duration)
    {
        if ($cadence == 'weeks') {
            $this->daysToAdd = $duration * 7;
        } else if ($cadence == 'months') {
            $this->daysToAdd = $duration * 30;
        }

        #Add days to the start date:
        $completeDate = date('m-d-y', strtotime("$startDate +$this->daysToAdd days"));

        return $completeDate;
    }

} #eoc