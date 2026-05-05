function applySavedMode() {
    const savedMode = localStorage.getItem("mode");

    if (savedMode === "dark") {
        document.documentElement.classList.add("dark-mode");
    } else {
        document.documentElement.classList.remove("dark-mode");
    }
}

applySavedMode();

function toggleMode() {
    document.documentElement.classList.toggle("dark-mode");

    if (document.documentElement.classList.contains("dark-mode")) {
        localStorage.setItem("mode", "dark");
    } else {
        localStorage.setItem("mode", "light");
    }
}

function filterRegions(category) {
    const cards = document.querySelectorAll(".region-card");
    const buttons = document.querySelectorAll(".filter-btn");

    buttons.forEach(button => {
        button.classList.remove("active-filter");
    });

    const selectedButton = document.querySelector('[data-filter="' + category + '"]');
    if (selectedButton) {
        selectedButton.classList.add("active-filter");
    }

    cards.forEach(card => {
        const cardCategory = card.getAttribute("data-category");

        if (category === "all" || cardCategory === category) {
            card.style.display = "block";
        } else {
            card.style.display = "none";
        }
    });
}

function confirmDelete() {
    return confirm("هل أنتِ متأكدة من حذف هذا المحتوى؟");
}
