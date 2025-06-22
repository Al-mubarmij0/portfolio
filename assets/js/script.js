document.addEventListener("DOMContentLoaded", () => {
    const preloader = document.getElementById("preloader");
    if (preloader) {
        window.addEventListener("load", () => preloader.style.display = "none");
    }

    const toggleBtn = document.getElementById("toggle-dark");
    toggleBtn?.addEventListener("click", () => {
        document.body.classList.toggle("light");
        document.body.classList.toggle("dark");
    });

    const scrollBtn = document.getElementById("scrollTopBtn");
    window.onscroll = () => {
        scrollBtn.style.display = window.scrollY > 100 ? "block" : "none";
        revealOnScroll();
        animateSkillBars();
    };
    scrollBtn.onclick = () => window.scrollTo({ top: 0, behavior: 'smooth' });

    document.querySelectorAll('.lightbox').forEach(img => {
        img.addEventListener('click', () => {
            const overlay = document.createElement('div');
            overlay.style.cssText = "position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.8);display:flex;align-items:center;justify-content:center;z-index:1000";
            const enlarged = new Image();
            enlarged.src = img.src;
            enlarged.style.maxWidth = '90%';
            enlarged.style.maxHeight = '90%';
            overlay.appendChild(enlarged);
            overlay.addEventListener('click', () => overlay.remove());
            document.body.appendChild(overlay);
        });
    });

    const progressBars = document.querySelectorAll('.progress');
    progressBars.forEach(bar => {
        bar.dataset.width = bar.style.width;
        bar.style.width = '0';
    });

    let skillAnimated = false;
    function animateSkillBars() {
        const aboutSection = document.querySelector('.about');
        const sectionTop = aboutSection.getBoundingClientRect().top;
        const trigger = window.innerHeight - 100;
        if (!skillAnimated && sectionTop < trigger) {
            progressBars.forEach(bar => bar.style.width = bar.dataset.width);
            skillAnimated = true;
        }
    }

    const animatedSections = document.querySelectorAll('.animate');
    function revealOnScroll() {
        const triggerBottom = window.innerHeight - 100;
        animatedSections.forEach(section => {
            const sectionTop = section.getBoundingClientRect().top;
            if (sectionTop < triggerBottom) {
                section.classList.add('show');
            }
        });
    }

    // Counter animation
    document.querySelectorAll('.counter-number').forEach(counter => {
        const updateCount = () => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText;
            const increment = target / 200;

            if (count < target) {
                counter.innerText = Math.ceil(count + increment);
                setTimeout(updateCount, 10);
            } else {
                counter.innerText = target;
            }
        };
        updateCount();
    });

    // Project filtering
    document.querySelectorAll('[data-filter]').forEach(button => {
        button.addEventListener('click', () => {
            const filter = button.dataset.filter;
            document.querySelectorAll('.project-item').forEach(item => {
                item.classList.remove('active');
                if (filter === 'all' || item.classList.contains(filter)) {
                    item.classList.add('active');
                }
            });
        });
    });

    revealOnScroll();
    animateSkillBars();
});