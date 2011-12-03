<?php
/**
 * Testimonial Widget
 * by Takashi Sano
 * Harvest Time Ministries
 */
class TestimonialWidget extends Widget {
	static $db = array(
		'Title' => 'Varchar',
    'Num' => "Enum('1, 2, 3, 4, 5', '2')",
	);
  static $has_one = array(
    'TestimonialPage' => 'TestimonialPage',
  );
  static $defaults = array(
		'Title' => 'Testimonials',
	);

	static $cmsTitle = "Testimonials";
  static $description = "Show the testimonials registered in the specified Testimonial Page.";

	function getCMSFields() {
		$fields = parent::getCMSFields(); 
		$fields->merge( 
			new FieldSet(
        new TextField(
          'Title', 
          _t('TestimonialWidget.TILE', 'Title')
        ),
        new DropdownField(
          'TestimonialPageID',
          _t('TestimonialWidget.PAGE', 'Please choose a Testimonial Page'),
          $this->getTestimonialPages()
        ),
        new DropdownField(
        'Num',
        'Choose the number of testimonials to show',
        $this->dbObject('Num')->enumValues())
      )	
		);
		$this->extend('updateCMSFields', $fields);
		return $fields;
	}
  function Title() {
		return $this->Title ? $this->Title : 'Testimonials';
	}
  function getTestimonialPages() {
    if($Pages = DataObject::get('TestimonialPage')) {
      return $Pages->map('ID', 'Title', 'Please Select');
    } else {
      return array('No Testimonial page found');
    }
  }
  function getTestimonials() {
    return DataObject::get("Testimonial","`TestimonialPageID` = {$this->TestimonialPage()->ID}", "RAND()", false, $this->Num); 
  }
  
}
