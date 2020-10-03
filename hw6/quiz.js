$(function() {
    var category;
    let score = 0;
    let i = 0;
    let attempted = "";
    let arr = [];
    let totalScore = 0;
    $(document.getElementById("q1A")).text("Please Select a Question Set Below");
    $(document.getElementById("l4")).hide();
    $(document.getElementById("l1")).hide();

    $("#home").click(function () {
        score = 0;
        i = 0;
        $(document.getElementById("next").disabled = false);
        $(document.getElementById("l1")).text("Question: ").show();
        $(document.getElementById("l4")).show();
        $(document.getElementById("l5")).hide();
        window.category = {
            questions: ['A Pits Model 12 is an aerobatic biplane', 'An RV-6 has two seats in tandem', 'A Piper Cub is commonly painted yellow'],
            answers: ['1', '0', '1']
        }
        $(document.getElementById("q1A")).text(window.category.questions[i]);
        attempted = "Home Built Q: ";
    });

    $("#military").click(function () {
        score = 0;
        i = 0;
        $(document.getElementById("next").disabled = false);
        $(document.getElementById("l1")).text("Question: ").show();
        $(document.getElementById("l4")).show();
        $(document.getElementById("l5")).hide();
        window.category = {
            questions: ['An F-16 has two vertical tails', 'A T-6 Texan is a nose wheel military trainer', 'The A-10 Thunderbolt II is commonly referred to as the "Warthog"'],
            answers: ['0', '0', '1']
        }
        $(document.getElementById("q1A")).text(window.category.questions[i]);
        attempted = "Military Q: ";
    });

    $("#common").click(function () {
        score = 0;
        i = 0;
        $(document.getElementById("next").disabled = false);
        $(document.getElementById("l1")).text("Question: ").show();
        $(document.getElementById("l4")).show();
        $(document.getElementById("l5")).hide();
        window.category = {
            questions: ['The most common commercial aircraft is the Boeing 737', 'The most common private aircraft is the Cessna 172', 'A Cessna is an example of an "experimental" aircraft'],
            answers: ['1', '1', '0']
        }
        $(document.getElementById("q1A")).text(window.category.questions[i]);
        attempted = "Common Q: ";
    });

    $("#custom").click(function () {
        score = 0;
        i = 0;
        $(document.getElementById("next").disabled = false);
        $(document.getElementById("l1")).text("Question: ").show();
        $(document.getElementById("l4")).show();
        $(document.getElementById("l5")).hide();
        window.category = {
            questions: ['The only living exact replica of the Gee Bee Z was built by Jeff Eicher', 'The P-51 Mustang was built for air racing', 'The B-2 Spirit Bomber is still in service'],
            answers: ['1', '0', '1']
        }
        $(document.getElementById("q1A")).text(window.category.questions[i]);
        attempted = "Custom Q: ";
    });

    $("#next").click(function () {
        if(document.getElementById("Radio1").checked == false && document.getElementById("Radio2").checked == false){
            alert("Please Select True or False Before Proceeding");
            return
        }

        $(document.getElementById("l2")).text("");
        $(document.getElementById("l3")).text("");
        if(i > window.category.questions.length - 1){
            $(document.getElementById("q1A")).text("Score:" + score);
            return;
        }

        let n = i + 1;
        attempted = attempted + n.toString() + ",";
        $(document.getElementById("side")).text("Questions Attempted: \n" + attempted);

        if ((document.getElementById("Radio1").checked) && (window.category.answers[i]) == 1){
            score = score + 1;
            $(document.getElementById("l2")).text("Correct!");
        }
        if ((document.getElementById("Radio2").checked) && (window.category.answers[i]) == 0){
            score = score + 1;
            $(document.getElementById("l2")).text("Correct!");
        }
        if ((document.getElementById("Radio1").checked) && (window.category.answers[i]) == 0){
            $(document.getElementById("l3")).text("Incorrect");
        }
        if ((document.getElementById("Radio2").checked) && (window.category.answers[i]) == 1){
            $(document.getElementById("l3")).text("Incorrect");
        }
        $(document.getElementById("Radio1")).checked = false;
        $(document.getElementById("Radio2")).checked = false;
        i = i + 1;
        if(i > window.category.questions.length - 1){
            $(document.getElementById("q1A")).text("Score: " + score);
            i = 0;
            totalScore = totalScore + score;
            score = 0;
            arr.push(attempted);
            attempted = "";
            $(document.getElementById("next").disabled = true);
            return;
        }
        $(document.getElementById("q1A")).text(window.category.questions[i]);
    });

    $("#results").click(function () {
        $(document.getElementById("l1")).show().text("Your total score is: ").css("font-weight","Bold");
        $(document.getElementById("l2")).text("");
        $(document.getElementById("l3")).text("");
        $(document.getElementById("q1A")).text(totalScore).css("fontSize", "50px").css('color', 'orange').animate({"margin-left": '450'}, { easing: 'swing',
            duration: 1500, complete: function(){
                alert('Game Over. Press "Play Again" to Repeat the Quiz');
            }});
        $(document.getElementById("l4")).hide();
        var printer = "";
        for (i = 0; i < arr.length; i++) {
           printer = printer + "\n" + arr[i];
        }
        $(document.getElementById("side")).text("Questions Answered:" + printer);
        $(document.getElementById("common").disabled = true);
        $(document.getElementById("custom").disabled = true);
        $(document.getElementById("military").disabled = true);
        $(document.getElementById("home").disabled = true);
    });

    $("#reset").click(function () {
        location.reload();
    });

});