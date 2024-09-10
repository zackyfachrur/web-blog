const NavbarScroll = document.getElementById("navbar");
window.onscroll = () => {
    NavbarScrolled();
};
const NavbarScrolled = () => {
    document.documentElement.scrollTop >= 70
        ? NavbarScroll.classList.add("navbar-stick")
        : NavbarScroll.classList.remove("navbar-stick");
};

const buttonPrimaryRight = document.getElementById("button-primary-right");
const buttonPrimaryLeft = document.getElementById("button-primary-left");
const wrapperPrimary = document.getElementById("wrapper-primary-scroll");

buttonPrimaryRight.addEventListener("click", () => {
    wrapperPrimary.scrollLeft -= 600;
});
buttonPrimaryLeft.addEventListener("click", () => {
    wrapperPrimary.scrollLeft += 600;
});

const buttonSecondaryRight = document.getElementById("button-secondary-right");
const buttonSecondaryLeft = document.getElementById("button-secondary-left");
const wrapperSecondary = document.getElementById("wrapper-secondary-scroll");

buttonSecondaryRight.addEventListener("click", () => {
    wrapperSecondary.scrollLeft -= 600;
});

buttonSecondaryLeft.addEventListener("click", () => {
    wrapperSecondary.scrollLeft += 600;
});
