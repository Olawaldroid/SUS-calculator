/* Form validation script to ensure all questions are answered */
function validateForm() {
    var formValid = true;
    for (var i = 1; i <= 10; i++) {
        var questionAnswered = false;
        var options = document.getElementsByName("q" + i);
        for (var j = 0; j < options.length; j++) {
            if (options[j].checked) {
                questionAnswered = true;
                break;
            }
        }
        if (!questionAnswered) {
            formValid = false;
            break;
        }
    }
    if (!formValid) {
        alert("Please answer all the questions.");
    }
    return formValid;
}
