<?php

class TestimonialPage extends Page {
	static $has_many = array (
		'Testimonials' => 'Testimonial'
	);
 
	public function getCMSFields()	{
		$fields = parent::getCMSFields();
    $manager = new DataObjectManager(
			$this,
			'Testimonials',
			'Testimonial',
			array(
        'Date' => 'Date',
        'Name'=> 'Name',
        'Quote' => 'Quote'
      ),
			'getCMSFields_forPopup'
		);
    $manager->setColumnWidths(array(
      'Date' => 10,
      'Name' => 20,
      'Quote' => 70
    ));
    $fields->addFieldToTab("Root.Content.Testimonials", $manager);
		return $fields;
	}

}

class TestimonialPage_Controller extends Page_Controller {

}