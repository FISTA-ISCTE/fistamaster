const nav = document.querySelector("nav");
const img = document.querySelector("img");
const ul = document.querySelector("ul");
img.setAttribute("src", "img/logo_fista_horizontal_branco_2023.png");
ul.style.backgroundColor = "#1EC4BD";

if (document.getElementById("drop") !== null) {
    document.getElementById("drop").style = "background:#1EC4BD";
}
if (document.getElementById("drop1") !== null) {
    document.getElementById("drop1").style = "background:#1EC4BD";
}
if (document.getElementById("drop2") !== null) {
    document.getElementById("drop2").style = "background:#1EC4BD";
}
if (document.getElementById("drop3") !== null) {
    document.getElementById("drop3").style = "background:#1EC4BD";
}
if (document.getElementById("drop4") !== null) {
    document.getElementById("drop4").style = "background:#1EC4BD";
}
ul.style.backgroundColor = "#1EC4BD";
scrollEvent();
window.onscroll = function () {
    scrollEvent();
};

function scrollEvent() {
    const nav = document.querySelector("nav");
    const img = document.querySelector("img");
    const ul = document.querySelector("ul");
    var $nav = $(".welcome");
    var $al = $nav.height();
    var top = window.scrollY;
    if (top >= 0 && top < $al) {
        nav.classList.add("ac");
        img.setAttribute("src", "img/logo_fista_horizontal_branco_2023.png");
        ul.style.backgroundColor = null;
        if (document.getElementById("drop") !== null) {
            document.getElementById("drop").style = "background:#1EC4BD";
        }
        if (document.getElementById("drop1") !== null) {
            document.getElementById("drop1").style = "background:#1EC4BD";
        }
        if (document.getElementById("drop2") !== null) {
            document.getElementById("drop2").style = "background:#1EC4BD";
        }
        if (document.getElementById("drop3") !== null) {
            document.getElementById("drop3").style = "background:#1EC4BD";
        }
        if (document.getElementById("drop4") !== null) {
            document.getElementById("drop4").style = "background:#1EC4BD";
        }
        ul.style.backgroundColor = "#1EC4BD";
    }
    if (top >= $al) {
        nav.classList.add("active");
        img.setAttribute("src", "img/logo_fista_horizontal_azul_2023_v2.png");
        if (document.getElementById("drop1") !== null) {
            document.getElementById("drop1").style =
                "background:white !important";
            if (document.getElementById("drop2") !== null) {
                document.getElementById("drop2").style =
                    "background:white !important";
            }
        }
        if (document.getElementById("drop") !== null) {
            document.getElementById("drop").style =
                "background:white !important";
        }
        if (document.getElementById("drop3") !== null) {
            document.getElementById("drop3").style =
                "background:white !important";
        }
        if (document.getElementById("drop4") !== null) {
            document.getElementById("drop4").style =
                "background:white !important";
        }
        ul.style.backgroundColor = null;
        ul.style.backgroundColor = "white";
    } else {
        if (top < 30) {
            nav.classList.remove("ac");
            if (document.getElementById("drop1") !== null) {
                document.getElementById("drop1").style = "background:#1EC4BD";
                if (document.getElementById("drop2") !== null) {
                    document.getElementById("drop2").style =
                        "background:#1EC4BD";
                }
                if (document.getElementById("drop3") !== null) {
                    document.getElementById("drop3").style =
                        "background:#1EC4BD";
                }
                if (document.getElementById("drop4") !== null) {
                    document.getElementById("drop4").style =
                        "background:#1EC4BD";
                }
            }
            document
                .getElementById("drop")
                .setAttribute("style", "background:#1EC4BD ");
            ul.style.backgroundColor = "#1EC4BD";
        }
        nav.classList.remove("active");
        if (document.getElementById("drop1") !== null) {
            document.getElementById("drop1").style = "background:#1EC4BD";
            if (document.getElementById("drop2") !== null) {
                document.getElementById("drop2").style = "background:#1EC4BD";
            }
            if (document.getElementById("drop3") !== null) {
                document.getElementById("drop3").style = "background:#1EC4BD";
            }
            if (document.getElementById("drop4") !== null) {
                document.getElementById("drop4").style = "background:#1EC4BD";
            }
        }
        document
            .getElementById("drop")
            .setAttribute("style", "background:#1EC4BD !important");
        img.setAttribute("src", "img/logo_fista_horizontal_branco_2023.png");
        ul.style.backgroundColor = null;
        ul.style.backgroundColor = "#1EC4BD";
    }
}
