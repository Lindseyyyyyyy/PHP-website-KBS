document.getElementById("nerdy-gadgets").addEventListener("click", function () {
    var text = document.getElementById("nerdy-gadgets").innerText;
    var letters = text.split("").map(function (char, index) {
        return "<span id='letter-" + index + "'>" + char + "</span>";
    });

    document.getElementById("nerdy-gadgets").innerHTML = letters.join("");

    var iconAreaHeight = window.innerHeight * 0.2;
    var gameIcons = [];
    for (var i = 0; i < letters.length * 5; i++) {
        var gameIconElement = document.createElement("i");
        gameIconElement.className = "fas fa-gamepad falling-icon";
        gameIconElement.style.fontSize = "20px";
        gameIconElement.style.left = Math.random() * (window.innerWidth - 20) + "px";
        gameIconElement.style.top = Math.random() * iconAreaHeight + "px";
        gameIconElement.style.animationDelay = Math.random() * 4 + "s";
        gameIconElement.style.animationDuration = (Math.random() * 2 + 2) + "s";
        document.getElementById("nerdy-gadgets").appendChild(gameIconElement);
        gameIcons.push(gameIconElement);
    }

    letters.forEach(function (_, index) {
        var letterElement = document.getElementById("letter-" + index);
        setTimeout(function () {
            letterElement.style.transform = "translateY(300px) rotate(" + (Math.random() * 360) + "deg)";
        }, index * 50);
    });

    setTimeout(function () {
        // Hide the letters
        letters.forEach(function (_, index) {
            var letterElement = document.getElementById("letter-" + index);
            letterElement.style.transform = "translateY(300px) rotate(" + (Math.random() * 360) + "deg)";
        });

        setTimeout(function () {
            gameIcons.forEach(function (gameIcon) {
                gameIcon.remove();
            });

            letters.forEach(function (_, index) {
                var letterElement = document.getElementById("letter-" + index);

                // Reset the styles of the letters
                letterElement.style.transform = "translateY(0) rotate(0)";
                letterElement.style.transition = "transform 0.5s ease-out";
            });
        }, 8000);
    }, letters.length * 50);
});




