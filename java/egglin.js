document.getElementById("nerdy-gadgets").addEventListener("click", function() {
    var text = document.getElementById("nerdy-gadgets").innerText;
    var letters = text.split("").map(function(char, index) {
        return "<span id='letter-" + index + "'>" + char + "</span>";
    });

    document.getElementById("nerdy-gadgets").innerHTML = letters.join("");

    letters.forEach(function(_, index) {
        var letterElement = document.getElementById("letter-" + index);
        setTimeout(function() {
            letterElement.style.transform = "translateY(300px) rotate(" + (Math.random() * 360) + "deg)";
        }, index * 50);
    });

    setTimeout(function() {
        document.getElementById("nerdy-gadgets").innerHTML = text;
    }, 4000);
});