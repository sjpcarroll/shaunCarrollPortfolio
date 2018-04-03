$(document).ready(function () {
    // Add smooth scrolling to all links
    $("a").on('click', function (event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            var offset = 100;
            $('html, body').animate({
                scrollTop: $(hash).offset().top + -50
            }, 800, function () {
                window.location.hash = hash;
            });
        } // @if
    });


 /*   $("#name, #email, #message").bind("change keyup",
        function () {
            if ($("#name").val() != "" && $("#email").val() != "" && $("#message").val() != "") {
                //$("#submitBtn").addClass("disabledBtn");
                $("#submitBtn").removeClass("disabledBtn");
                $("#formPrompt").addClass("hideMe");
            } else {
                //$("#submitBtn").removeClass("disabledBtn");
                $("#submitBtn").addClass("disabledBtn");
                $("#formPrompt").addClass("showMe");
            }
        });*/
});


