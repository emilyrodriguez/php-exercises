<?php
info();

function info () {
    fwrite(STDOUT,"What is your name?\n");
    $student = trim(fgets(STDIN));
    $grades = [];
    inputSubject($grades, $student);
}

    function inputSubject (&$grades, $student) {
        fwrite(STDOUT, "What is the name of the subject?\n");
        $subject = trim(fgets(STDIN));
        inputGrades($grades);

        fwrite(STDOUT, "Do you want to add another subject? Y or N?\n");
        $continue = trim(fgets(STDIN));
        if ($continue == "Y"){
            inputSubject($grades, $student);
        } elseif ($continue == "N") {
            gradeEval($grades, $student);
        }
    }
    function inputGrades(&$grades) {
        do {
            fwrite(STDOUT,"What is your grade?\n");
            $grade = trim(fgets(STDIN));
            var_dump((int) $grade);
            if (!is_numeric($grade)) {
                fwrite(STDERR, "Please use numbers only.\n");
            }  else {
                array_push($grades, $grade);
            }
            fwrite(STDOUT, "Do you have more grades to enter? Y or N?\n");
            $continueGrade = trim(fgets(STDIN));
        } while ($continueGrade == "Y");
    }

    function calculate ($grades) {
        $average = array_sum($grades) / count($grades);
        return $average;
    }

    function gradeEval ($grades, $student) {
        $isAwesome = 80;
        $average = calculate($grades);
        if ($average >= $isAwesome){
            fwrite(STDOUT, $student . ", you're doing awesome! Your average is: " . $average . "!\n");
        }else {
            fwrite(STDOUT, $student . ", you should study more! Your average is: " . $average . "!\n");
        }  
    }
?>