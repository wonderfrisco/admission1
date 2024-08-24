$(document).ready(function () {
    $(".btn").on("click", function () {
        if (!($(".form-input").val() === "")) {
            $(".loading-icon").removeClass("hide");
            $(".btn").attr("disabled", true);
            $(".btn-txt").text("Loading Payment...");
            $(".form").submit();

            setTimeout(function () {
                $(".loading-icon").addClass("hide");
                $(".btn").attr("disabled", false);
                $(".btn-txt").text("Check Status");
            }, 100000);
        }
    });
});
