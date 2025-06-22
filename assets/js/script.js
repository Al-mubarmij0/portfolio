document.addEventListener("DOMContentLoaded", () => {
    // Theme toggle
    const toggleBtn = document.getElementById("toggle-dark");
    toggleBtn.addEventListener("click", () => {
        document.body.classList.toggle("light");
        document.body.classList.toggle("dark");
        
    });

    // Scroll to top button
    const scrollBtn = document.getElementById("scrollTopBtn");
    window.onscroll = () => {
        scrollBtn.style.display = window.scrollY > 100 ? "block" : "none";
        animateSkillBars(); // Check if bars are visible
    };
    scrollBtn.onclick = () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    };

    // Lightbox for images
    document.querySelectorAll('.lightbox').forEach(img => {
        img.addEventListener('click', () => {
            const overlay = document.createElement('div');
            overlay.style.cssText = `
                position:fixed;top:0;left:0;width:100%;height:100%;
                background:rgba(0,0,0,0.8);display:flex;align-items:center;justify-content:center;
                z-index:1000;
            `;
            const enlarged = new Image();
            enlarged.src = img.src;
            enlarged.style.maxWidth = '90%';
            enlarged.style.maxHeight = '90%';
            overlay.appendChild(enlarged);
            overlay.addEventListener('click', () => overlay.remove());
            document.body.appendChild(overlay);
        });
    });

    // Animate progress bars when they come into view
    const progressBars = document.querySelectorAll('.progress');
    let animated = false;

    function animateSkillBars() {
        const aboutSection = document.querySelector('.about');
        const sectionTop = aboutSection.getBoundingClientRect().top;
        const sectionVisible = window.innerHeight - 100;

        if (!animated && sectionTop < sectionVisible) {
            progressBars.forEach(bar => {
                const target = bar.dataset.width;
                bar.style.width = target;
            });
            animated = true;
        }
    }

    // Reset widths to 0 initially
    progressBars.forEach(bar => {
        bar.dataset.width = bar.style.width;
        bar.style.width = '0';
    });

    animateSkillBars(); // in case it's already visible
});
