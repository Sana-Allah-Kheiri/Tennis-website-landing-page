// Theme Toggle
const themeBtn = document.getElementById('theme-toggle');

themeBtn.addEventListener('click', () => {

    document.body.classList.toggle('dark-theme');
    document.body.classList.toggle('light-theme');

    const icon = themeBtn.querySelector('i');

    icon.classList.toggle('fa-moon');
    icon.classList.toggle('fa-sun');
});

// Hamburger menu Button for mobile-responsivity
const mobileBtn = document.getElementById('mobile-menu-btn');
const navMenu = document.querySelector('.nav-menu');

mobileBtn.addEventListener('click', () => {
    navMenu.classList.toggle('active');
});


// Countdown (21 days from now)
const targetDate = new Date().getTime() + (21 * 24 * 60 * 60 * 1000);

function updateCountdown() {
    const now = new Date().getTime();
    const distance = targetDate - now;

    const d = Math.floor(distance / (1000 * 60 * 60 * 24));
    const h = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const m = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const s = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById("countdown").innerHTML = 
        `${d}d &nbsp; ${h}h &nbsp; ${m}m &nbsp; ${s}s`;
}
updateCountdown();
setInterval(updateCountdown, 1000);


// Waitlist Form with AJAX
document.getElementById('waitlist-form').addEventListener('submit', async (e) => {
    e.preventDefault();
    const formData = new FormData(e.target);
    
    try {
        const res = await fetch('save_lead.php', {
            method: 'POST',
            body: formData
        });
        const data = await res.json();
        
        alert(data.message);
        if (data.status === "success") e.target.reset();
    } catch (err) {
        alert("Connection error. Please try again.");
    }
});