<?php

class Testimonial extends DataObject {
	static $db = array (
		'Date' => 'Date',
		'Name' => 'Text',
		'Quote' => 'Text',
    'FullText' => 'HTMLText'
	);
 
	static $has_one = array (
		'TestimonialPage' => 'TestimonialPage'
	);
 
	public function getCMSFields_forPopup()	{
		return new FieldSet(
      new DatePickerField('Date', _t("Testimonials.DATE", "Date")),
			new TextField('Name', _t("Testimonials.NAME", "Name")),
			new TextareaField('Quote', _t("Testimonials.QUOTE", "Quote")),
      new SimpleTinyMCEField('FullText', _t("Testimonials.FULLTEXT", "Full Text"))
		);
	}
}
