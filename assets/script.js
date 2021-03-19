const message =
    "Nous vous remercions pour votre message. Nous reviendrons vers vous dès que possible.";

document
    .getElementById("contact")
    .addEventListener("submit", function(event) {
        event.preventDefault();
        alert(message);
    });