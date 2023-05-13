<?php

/**
 * Class Person
 * 
 * @author Yudi Setiadi Permana
 * 
 */
class Person
{	

	private $_age;
	private $_death;

	/**
	 * Constructor in generate class
	 * 
	 * @param number $age : age of person
	 * @param number $death : year of death person
	 * 
	 * @return void
	 * 
	 */
	public function __construct($age, $death){
		$this->_age = $age;
		$this->_death = $death;
	}
	
	/**
	 * Get year of birth
	 * 
	 * @return number
	 * 
	 */
	public function getYear(){

		return $this->_death - $this->_age;

	}
}

