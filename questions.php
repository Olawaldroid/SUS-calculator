<?php
// Array of SUS questions
$questions = [
    "I think that I would like to use this design frequently.",
    "I found the design unnecessarily complex.",
    "I thought the design was easy to use.",
    "I think that I would need the support of a technical person to use this design.",
    "I found the various functions in this design were well integrated.",
    "I thought there was too much inconsistency in this design.",
    "I would imagine that most people would learn to use this design very quickly.",
    "I found the design very cumbersome to use.",
    "I felt very confident using the design.",
    "I needed to learn a lot of things before I could get going with this design."
];

// Generate question form fields dynamically
foreach ($questions as $index => $question) {
    echo '<div class="form-group">';
    echo '<label><b>' . ($index + 1) . '. ' . $question . '</b></label>';
    
    echo '<div class="radio-group">';
    
    for ($i = 1; $i <= 5; $i++) {
        echo '<input class="form-check-input" type="radio" name="q' . ($index + 1) . '" value="' . $i . '" required id="q' . ($index + 1) . 'option' . $i . '">';
        
        // Show text only for Strongly Disagree (1) and Strongly Agree (5)
        $labelText = ($i === 1) ? "Strongly Disagree" : (($i === 5) ? "Strongly Agree" : "");
        $hiddenClass = ($labelText === "") ? "hidden" : ""; 

        echo '<label class="form-check-label ' . $hiddenClass . '" for="q' . ($index + 1) . 'option' . $i . '">' . $labelText . '</label>';
    }
    
    echo '</div>';
    echo '</div>';
}
?>
