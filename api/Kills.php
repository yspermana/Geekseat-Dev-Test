<?php

/**
 * Class Kills
 * 
 * @author Yudi Setiadi Permana
 * 
 */
class Kills
{
	
	/**
	 * Get killed villagers by year
	 * 
	 * @param number $year : number of year
	 * 
	 * @return number
	 * 
	 */
	public function getVillagers($year){

		// Year validation
		if($year < 0){
			return 0;
		}

		// Get villagers has been killed
		$villagerKilled = 0;

		for ($i = 1; $i <= $year ; $i++) { 
			$villagerKilled = $villagerKilled + $this->_fibonacci($i);
		} 

		return $villagerKilled;

	}

	/**
	 * Get fibonacci number
	 * 
	 * @param number $number : number will be calculated
	 * 
	 * @return number
	 * 
	 */
	private function _fibonacci($number){
      
    if ($number == 0){
    	// Generate first numbers
        return 0;    
    }
    else if ($number == 1){
    	// Generate second numbers
        return 1;    
    }
    else{
    	// Recursive Call to get the upcoming numbers
        return ($this->_fibonacci($number-1) + $this->_fibonacci($number-2));
    }
}


}