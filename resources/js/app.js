import "./bootstrap";

// GEC4Green - JavaScript

document.addEventListener("DOMContentLoaded", function () {
    // Mobile Menu Toggle
    const mobileMenuBtn = document.getElementById("mobileMenuBtn");
    const mobileMenu = document.getElementById("mobileMenu");

    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener("click", function (e) {
            e.preventDefault();
            this.classList.toggle("active");
            mobileMenu.classList.toggle("active");
        });
    }

    // Header Scroll Effect
    const header = document.getElementById("header");

    if (header) {
        window.addEventListener("scroll", function () {
            if (window.scrollY > 50) {
                header.classList.add("scrolled");
            } else {
                header.classList.remove("scrolled");
            }
        });
    }

    // Back to Top Button
    const backToTopBtn = document.getElementById("backToTop");

    if (backToTopBtn) {
        window.addEventListener("scroll", function () {
            if (window.scrollY > 300) {
                backToTopBtn.classList.add("visible");
            } else {
                backToTopBtn.classList.remove("visible");
            }
        });

        backToTopBtn.addEventListener("click", function () {
            window.scrollTo({
                top: 0,
                behavior: "smooth",
            });
        });
    }

    // Smooth Scroll for Anchor Links
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
            const targetId = this.getAttribute("href");
            if (targetId === "#") return;

            const target = document.querySelector(targetId);
            if (target) {
                e.preventDefault();
                target.scrollIntoView({
                    behavior: "smooth",
                    block: "start",
                });
            }
        });
    });

    // Animate on Scroll (Simple Implementation)
    const animateElements = document.querySelectorAll(".animate-on-scroll");

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("animated");
                }
            });
        },
        {
            threshold: 0.1,
            rootMargin: "0px 0px -50px 0px",
        }
    );

    animateElements.forEach((el) => observer.observe(el));

    // Form Submission Handler (Placeholder)
    const contactForm = document.getElementById("contactForm");

    if (contactForm) {
        contactForm.addEventListener("submit", function (e) {
            e.preventDefault();

            // Get form data
            const formData = new FormData(this);

            // Here you would typically send the data to the server
            // For now, just show a success message
            alert(
                "Mesajınız başarıyla gönderildi. En kısa sürede size dönüş yapacağız."
            );
            this.reset();
        });
    }

    // Contact Accordion Toggle
    const accordions = document.querySelectorAll(".contact-accordion");

    accordions.forEach((accordion) => {
        accordion.addEventListener("click", function () {
            // Close other accordions
            accordions.forEach((a) => {
                if (a !== this) {
                    a.classList.remove("active");
                }
            });
            // Toggle current
            this.classList.toggle("active");
        });
    });
});
