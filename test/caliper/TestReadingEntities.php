<?php
use IMSGlobal\Caliper\entities\reading;
use IMSGlobal\Caliper\entities\reading\Frame;

class TestReadingEntities {
    /** @return reading\EPubVolume */
    public static function makeEPubVolume() {
        return (new reading\EPubVolume('https://example.com/viewer/book/34843#epubcfi(/4/3)'))
            ->setName('The Glorious Cause: The American Revolution, 1763-1789 (Oxford History of the United States)')
            ->setDateCreated(TestTimes::createdTime())
            ->setDateModified(TestTimes::modifiedTime())
            ->setVersion('2nd ed.');
    }

    /** @return Frame */
    public static function makeFrame1() {
        return (new Frame('https://example.com/viewer/book/34843#epubcfi(/4/3/1)'))
            ->setName('Key Figures: George Washington')
            ->setDateCreated(TestTimes::createdTime())
            ->setDateModified(TestTimes::modifiedTime())
            ->setIsPartOf(self::makeEPubVolume())
            ->setVersion('2nd ed.')
            ->setIndex(1);
    }

    /** @return Frame */
    public static function makeFrame2() {
        return (new Frame('https://example.com/viewer/book/34843#epubcfi(/4/3/2)'))
            ->setName('Key Figures: Lord North')
            ->setDateCreated(TestTimes::createdTime())
            ->setDateModified(TestTimes::modifiedTime())
            ->setIsPartOf(self::makeEPubVolume())
            ->setVersion('2nd ed.')
            ->setIndex(2);
    }

    /** @return Frame */
    public static function makeFrame3() {
        return (new Frame('https://example.com/viewer/book/34843#epubcfi(/4/3/3)'))
            ->setName('Key Figures: John Adams')
            ->setDateCreated(TestTimes::createdTime())
            ->setDateModified(TestTimes::modifiedTime())
            ->setIsPartOf(self::makeEPubVolume())
            ->setVersion('2nd ed.')
            ->setIndex(3);
    }

    /** @return Frame */
    public static function makeFrame4() {
        return (new Frame('https://example.com/viewer/book/34843#epubcfi(/4/3/4)'))
            ->setName('The Stamp Act Crisis')
            ->setDateCreated(TestTimes::createdTime())
            ->setDateModified(TestTimes::modifiedTime())
            ->setIsPartOf(self::makeEPubVolume())
            ->setVersion('2nd ed.')
            ->setIndex(4);
    }

    /** @return reading\WebPage */
    public static function makeWebPage() {
        return (new reading\WebPage('https://example.edu/politicalScience/2015/american-revolution-101/index.html'))
            ->setName('American Revolution 101 Landing Page')
            ->setDateCreated(TestTimes::createdTime())
            ->setDateModified(TestTimes::modifiedTime())
            ->setVersion('1.0');
    }
}