if (window.innerWidth < 768) {
    [].slice
        .call(document.querySelectorAll("[data-bss-disabled-mobile]"))
        .forEach(function (elem) {
            elem.classList.remove("animated");
            elem.removeAttribute("data-bss-hover-animate");
            elem.removeAttribute("data-aos");
            elem.removeAttribute("data-bss-parallax-bg");
            elem.removeAttribute("data-bss-scroll-zoom");
        });
}

document.addEventListener(
    "DOMContentLoaded",
    function () {
        var hoverAnimationTriggerList = [].slice.call(
            document.querySelectorAll("[data-bss-hover-animate]")
        );
        var hoverAnimationList = hoverAnimationTriggerList.forEach(function (
            hoverAnimationEl
        ) {
            hoverAnimationEl.addEventListener("mouseenter", function (e) {
                e.target.classList.add(
                    "animated",
                    e.target.dataset.bssHoverAnimate
                );
            });
            hoverAnimationEl.addEventListener("mouseleave", function (e) {
                e.target.classList.remove(
                    "animated",
                    e.target.dataset.bssHoverAnimate
                );
            });
        });
    },
    false
);

document.addEventListener("DOMContentLoaded", function () {
    const passwordInput = document.getElementById("password");
    const togglePassword = document.getElementById("toggle-password");
    const passwordToggleIcon = document.getElementById("password-toggle-icon");

    togglePassword.addEventListener("click", function () {
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            passwordToggleIcon.classList.remove("bi-eye-slash");
            passwordToggleIcon.classList.add("bi-eye");
        } else {
            passwordInput.type = "password";
            passwordToggleIcon.classList.remove("bi-eye");
            passwordToggleIcon.classList.add("bi-eye-slash");
        }
    });
});
document.addEventListener("DOMContentLoaded", function () {
    const passwordInput = document.getElementById("password2");
    const togglePassword = document.getElementById("toggle-password2");
    const passwordToggleIcon = document.getElementById("password-toggle-icon2");

    togglePassword.addEventListener("click", function () {
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            passwordToggleIcon.classList.remove("bi-eye-slash");
            passwordToggleIcon.classList.add("bi-eye");
        } else {
            passwordInput.type = "password";
            passwordToggleIcon.classList.remove("bi-eye");
            passwordToggleIcon.classList.add("bi-eye-slash");
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const customIndicators = document.querySelectorAll(".__custom-indicator");
    const carousel = new bootstrap.Carousel(
        document.querySelector("#carousel-1")
    );

    customIndicators.forEach((indicator, index) => {
        indicator.addEventListener("click", () => {
            carousel.to(index);
            updateIndicators(customIndicators, index);
        });
    });

    carousel._element.addEventListener("slide.bs.carousel", (e) => {
        const currentSlide = e.to;
        updateIndicators(customIndicators, currentSlide);
    });

    function updateIndicators(indicators, activeIndex) {
        indicators.forEach((indicator, index) => {
            if (index === activeIndex) {
                indicator.classList.add("active");
                indicator.classList.add("rect");
            } else {
                indicator.classList.remove("active");
                indicator.classList.remove("rect");
            }
        });
    }

    // Set the initial state of the indicators as rectangles
    updateIndicators(customIndicators, 0);
});
