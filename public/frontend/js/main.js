const error = document.querySelector(".text-danger");
const btn = document.querySelector(".btn");
const input = document.querySelector(".form-input");
const index = document.querySelector(".form-input");



index.addEventListener("keydown", function (e) {
    error.textContent = "";
});

$(document).ready(function () {
    $(".btn").on("click", function () {
        if (!($(".form-input").val() === "")) {
            $(".loading-icon").removeClass("hide");
            $(".btn").attr("disabled", true);
            $(".btn-txt").text("Checking Status...");
            $(".form").submit();

            setTimeout(function () {
                $(".loading-icon").addClass("hide");
                $(".btn").attr("disabled", false);
                $(".btn-txt").text("Check Status");
            }, 3000);
        }
    });
});
$(document).ready(function () {
    $("#fliving").on("click", function () {
        alert("Please select");
    });
});
