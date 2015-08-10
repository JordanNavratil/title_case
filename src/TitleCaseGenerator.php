<?php

    class TitleCaseGenerator
    {
        function makeTitleCase($input_title)
        {
            $lowercase_ignore = array("from", "the");

            $input_array_of_words = explode(" ", $input_title);

            $output_titlecased = array();
            foreach ($input_array_of_words as $word) {

                if($word == $input_array_of_words[0]) {

                    array_push($output_titlecased, ucfirst($word));

                }

                else if(in_array($word, $lowercase_ignore)) {

                    array_push($output_titlecased, $word);

                }    

                else {

                    array_push($output_titlecased, ucfirst($word));

                }
            }
        return implode(" ", $output_titlecased);

        }
    }

?>
