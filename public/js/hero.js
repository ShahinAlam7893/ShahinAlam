document.addEventListener("DOMContentLoaded", function () {
    // Apply dynamic background animation
    const header = document.querySelector(".header02");
    let colors = [
        "#6b0f1a",
        "#b91372",
        "#f12711",
        "#f5af19"
    ];
    let i = 0;

    setInterval(() => {
        header.style.background = `linear-gradient(135deg, ${colors[i]}, ${colors[(i + 1) % colors.length]})`;
        i = (i + 1) % colors.length;
    }, 4000);

    // Add scroll animation
    const content = document.querySelector(".content-wrapper");
    window.addEventListener("scroll", () => {
        const scrolled = window.scrollY;
        content.style.opacity = Math.min(1, 1 - scrolled / 300);
    });
});

document.querySelectorAll('.project-card').forEach(card => {
    card.addEventListener('mouseenter', () => {
        card.style.transform = 'translateY(-10px)';
        card.style.boxShadow = '0 12px 20px rgba(0, 0, 0, 0.2)';
    });
    card.addEventListener('mouseleave', () => {
        card.style.transform = 'translateY(0)';
        card.style.boxShadow = '0 4px 8px rgba(0, 0, 0, 0.1)';
    });
});


document.querySelector('.contact-form').addEventListener('submit', async (e) => {
    e.preventDefault();
    
    const formData = new FormData(e.target);
    const data = Object.fromEntries(formData.entries());

    try {
        const response = await fetch('/api/contact', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(data),
        });

        const result = await response.json();
        alert(result.message);
    } catch (error) {
        alert('Failed to send message. Please try again later.');
    }
});

