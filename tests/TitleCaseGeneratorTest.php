<?php

    require_once "src/TitleCaseGenerator.php";

    class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_makeTitleCase_oneWord()
        {
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "i";

            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            $this->assertEquals("I", $result);
        }

        function test_makeTitleCase_multipleWords()
        {
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "i am legend";

            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            $this->assertEquals("I Am Legend", $result);
        }

        function test_makeTitleCase_designatedWords()
        {
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "i am legend 'from the' future";

            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            $this->assertEquals("I Am Legend from the Future", $result);
        }
    }

?>
