<?php

class ParaHelper
{

	public function get_pargraphs($no_of_paras)
	{
		# results for array
		$results = Array();
		
		$generator = new Badcow\LoremIpsum\Generator();

		//Generate the number of parargraphs
		$results = $generator->getParagraphs(intval($no_of_paras));

		return $results;
	}	
}