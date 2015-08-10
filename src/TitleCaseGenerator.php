<?php

    class TitleCaseGenerator
    {
        function makeTitleCase($input_title)
        {
            $lowercase_ignore = array("from", "the");

            $input_array_of_words = explode(" ", $input_title);

            $output_titlecased = array();
            foreach ($lowercase_ignore as $word) {

                if($in_array($word, $lowercase_ignore)) {

                array_push($output_titlecased, $word);

                } else {

                array_push($output_titlecased, ucfirst($word));

                }
        }
        return implode(" ", $output_titlecased);

        }
    }

?>
