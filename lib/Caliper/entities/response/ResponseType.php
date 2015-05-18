<?php
require_once 'CaliperSensor.php';
require_once 'Caliper/entities/Type.php';
require_once 'util/BasicEnum.php';

class ResponseType extends BasicEnum implements Type{
    const
        FILLINBLANK = 'http://purl.imsglobal.org/caliper/v1/Response/FillinBlank',
        MULTIPLECHOICE = 'http://purl.imsglobal.org/caliper/v1/Response/MultipleChoice',
        MULTIPLERESPONSE = 'http://purl.imsglobal.org/caliper/v1/Response/MultipleResponse',
        SELECTTEXT = 'http://purl.imsglobal.org/caliper/v1/Response/SelectText',
        TRUEFALSE = 'http://purl.imsglobal.org/caliper/v1/Response/TrueFalse';
}