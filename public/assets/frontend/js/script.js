const text = ["Full Stack Developer", "Laravel Developer", "Frontend Developer"];
let index = 0;
let charIndex = 0;
let currentText = "";
let isDeleting = false;

function typeEffect() {
    currentText = text[index];

    if (!isDeleting) {
        document.querySelector(".typing-text").textContent = currentText.substring(0, charIndex++);
        if (charIndex > currentText.length) {
            isDeleting = true;
            setTimeout(typeEffect, 1200);
            return;
        }
    } else {
        document.querySelector(".typing-text").textContent = currentText.substring(0, charIndex--);
        if (charIndex < 0) {
            isDeleting = false;
            index = (index + 1) % text.length;
        }
    }
    setTimeout(typeEffect, isDeleting ? 60 : 100);
}

typeEffect();

// 2nd section
const tabs = document.querySelectorAll(".tab-btn");
const contents = document.querySelectorAll(".content");

tabs.forEach(tab => {
    tab.addEventListener("click", () => {

        // Remove active class from all tabs
        tabs.forEach(t => t.classList.remove("active"));

        // Add active to clicked
        tab.classList.add("active");

        // Hide all contents
        contents.forEach(c => c.classList.remove("active"));

        // Show the selected tab content
        document.getElementById(tab.dataset.tab).classList.add("active");
    });
});


// 3rd section
const cards = document.querySelectorAll(".service-card");

const observer = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
            } else {
                entry.target.classList.remove("visible");
            }
        });
    },
    {
        threshold: 0.25,
    }
);

cards.forEach((card) => {
    observer.observe(card);
});

// Counter Script

const counters = document.querySelectorAll('.counter');

counters.forEach(counter => {
    const updateCount = () => {
        const target = +counter.getAttribute('data-target');
        const count = +counter.innerText;

        const speed = 50; // Lower = faster

        const increment = target / speed;

        if (count < target) {
            counter.innerText = Math.ceil(count + increment);
            setTimeout(updateCount, 30);
        } else {
            counter.innerText = target;
        }
    };

    updateCount();
});

// 4th section
document.querySelectorAll(".filter-btn").forEach(button => {
    button.addEventListener("click", () => {

        document.querySelectorAll(".filter-btn").forEach(btn =>
            btn.classList.remove("active")
        );
        button.classList.add("active");

        const filter = button.getAttribute("data-filter");

        document.querySelectorAll(".p-item").forEach(item => {
            if (filter === "all" || item.dataset.category === filter) {
                item.style.display = "block";
                item.style.animation = "fadeIn 0.5s ease";
            } else {
                item.style.display = "none";
            }
        });
    });
});

toggle.onclick = () => {
    document.body.classList.toggle("dark");
};

