<?php

require_once dirname(__FILE__).'/../CaliperEntity.php';
require_once dirname(__FILE__).'/../schemadotorg/Thing.php';

/**
 * 
 *
 *         The super-class of all Annotation types.
 *
 *         Direct sub-types can include - Hilight, Attachment, etc. - all of
 *         which are specified in the Caliper Annotation Metric Profile
 *
 */
class Annotation extends CaliperEntity implements Thing {

	private $target;

	public function  __construct($id) {
		$this->setId($id);
		$this->setType("http://purl.imsglobal.org/caliper/v1/Annotation");
	}

	/**
	 * @return the target
	 */
	public function  getTarget() {
		return $this->target;
	}

	/**
	 * @param target
	 *            the target to set
	 */
	public function setTarget($target) {
		$this->target = $target;
	}
}
