import './bootstrap';
import.meta.glob([
    '../images/**',
    '../fonts/!**',
]);

window.addEventListener("load", function () {
    console.log(document.querySelector("#showMenu"));
    document
        .querySelector("#showMenu")
        .addEventListener("click", function (event) {
            document.querySelector("#mobileNav").classList.remove("hidden");
        });

    document
        .querySelector("#hideMenu")
        .addEventListener("click", function (event) {
            document.querySelector("#mobileNav").classList.add("hidden");
        });

    document.querySelectorAll('[toggleElement]').forEach((toggle) => {
        toggle.addEventListener("click", function (event) {
            console.log(toggle);
            const answerElement = toggle.querySelector("[answer]");
            const caretElement = toggle.querySelector("img");
            console.log(answerElement);
            if (answerElement.classList.contains("hidden")) {
                answerElement.classList.remove("hidden");
                caretElement.classList.add("rotate-90");
            } else {
                answerElement.classList.add("hidden");
                caretElement.classList.remove("rotate-90");
            }
        });
    });
});
/*document
    .querySelector("input[id='toggle']")
    .addEventListener("change", function() {
        let span = document.querySelector("label[for='toggle']")
        span.ariaChecked = this.checked ? "true" : "false";
        if (!this.checked) {
            span.classList.remove("translate-x-3.5")
            span.classList.add("translate-x-0")
        } else {
            span.classList.remove("translate-x-0")
            span.classList.add("translate-x-3.5")
        }

    });*/
