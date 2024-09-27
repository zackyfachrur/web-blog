const descValueFirst = document.getElementById("desc-value-first");
const descValueSecond = document.getElementById("desc-value-second");
const descValueThird = document.getElementById("desc-value-third");

// Wrapper
const buttonSecondaryRight = document.getElementById("button-secondary-right");
const buttonSecondaryLeft = document.getElementById("button-secondary-left");
const wrapperSecondary = document.getElementById("wrapper-secondary-scroll");
const buttonPrimaryRight = document.getElementById("button-primary-right");
const buttonPrimaryLeft = document.getElementById("button-primary-left");
const wrapperPrimary = document.getElementById("wrapper-primary-scroll");
// End Wrapper

const NavbarScroll = document.getElementById("navbar");
window.onscroll = () => {
    NavbarScrolled();
    return;
};
const NavbarScrolled = () => {
    document.documentElement.scrollTop >= 70
        ? NavbarScroll.classList.add("navbar-stick")
        : NavbarScroll.classList.remove("navbar-stick");
    return;
};

buttonPrimaryRight.addEventListener("click", () => {
    wrapperPrimary.scrollLeft -= 600;
    return;
});
buttonPrimaryLeft.addEventListener("click", () => {
    wrapperPrimary.scrollLeft += 600;
    return;
});

buttonSecondaryRight.addEventListener("click", () => {
    wrapperSecondary.scrollLeft -= 600;
    return;
});

buttonSecondaryLeft.addEventListener("click", () => {
    wrapperSecondary.scrollLeft += 600;
    return;
});

function descValueShow(e) {
    if (e == descValueFirst) {
        descValueFirst.classList.toggle("hidden");
        return;
    } else if (e == descValueSecond) {
        descValueSecond.classList.toggle("hidden");
        return;
    } else if (e == descValueThird) {
        descValueThird.classList.toggle("hidden");
        return;
    } else {
        return;
    }
}
