<?php
namespace Swiftriver\Core;

require_once 'PHPUnit/Framework.php';

/**
 * Test class for ParserFactory.
 * Generated by PHPUnit on 2010-03-13 at 09:23:18.
 */
class ParserFactoryTest extends \PHPUnit_Framework_TestCase {
    /**
     * Include the following files:
     * IParser interface
     */
    protected function setUp() {
        include_once(dirname(__FILE__)."/../../../Setup.php");
    }

    /**
     * Tests that give an empty string as a param, the 
     * ParserFactory returns a null
     */
    public function testGetParserWithEmptyStringParam() {
        $this->assertEquals(
                null,
                Modules\SiSPS\ParserFactory::GetParser("")
        );
    }

    /**
     * Tests that given a null parameter, the ParserFactory
     * returns a null
     */
    public function testGetParserWithNullParam() {
        $this->assertEquals(
                null,
                Modules\SiSPS\ParserFactory::GetParser(null)
        );
    }

    /**
     * Tests that, given the name of a parser that does not exist,
     * the ParserFactory returns null
     */
    public function testGetParserWithNoneExistantParserName() {
        $this->assertEquals(
                null,
                Modules\SiSPS\ParserFactory::GetParser("a-none-existant-parser")
        );
    }

    /**
     * Tests that the ParserFactory can return an instance of
     * the TestParser object when given the correct parameters.
     */
    public function testGetParserWithValidTestTypeParam() {
        $parser = Modules\SiSPS\ParserFactory::GetParser("Test");
        $this->assertEquals(true, isset($parser));
    }
}
?>
