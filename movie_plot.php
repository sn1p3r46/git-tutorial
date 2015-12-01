<?php
class MoviePlotGenerator {
	public static $adjectives = array('sadistic',
									  'diminuitive',
									  'fat',
									  'determined',
									  'girsly');
						
	public static $occupations = array('movie-critic',
									   'goat wrangler',
									   'entrepreneur',
									   'construction worker',
									   'dentist',
									   'archaeologist',
									   'investment banker',
									   'baker',
									   'swimsuit model');
						 
	public static $quirks = array('penchant for melodrama',
								  'murky past',
								  'love for puppies',
								  'taste for blood',
								  'lust for antiques',
								  'background in Kung Fu',
								  'baby on the way',
								  '57\' Chevy',
								  'family back in Mexico');
					
	/**
	 *
	 * Get the plot of the next blockbuster action flick.
	 * 
	 * @return string
	 */
	//ma che cazz
	public function getPlot()
	{
		$his_adjective = $this->getRandom(self::$adjectives);
		$his_occupation = $this->getRandom(self::$occupations);
		$his_quirk = $this->getRandom(self::$quirks);
		
		$her_adjective = $this->getRandom(self::$adjectives);
		$her_occupation = $this->getRandom(self::$occupations);
		$her_quirk = $this->getRandom(self::$quirks);		
		
		$plot  = "\n He's a $his_adjective $his_occupation with a $his_quirk. ";
		$plot .= "She's a $her_adjective\n$her_occupation with a $her_quirk.";
		$plot .= "They fight crime.";
		return $plot;
	}

	// added some random features
	/**
	 *
	 * Return a random element from the array $arr.
	 * 
	 * @param array $arr
	 * @return mixed
	 */	
	protected function getRandom($arr)
	{
		return $arr[rand(0, count($arr) - 1)];
	}
		
}
//this tutorial is amazing 
//created ciaone branch
$generator = new MoviePlotGenerator();
print $generator->getPlot() . "\n"; 
?>
