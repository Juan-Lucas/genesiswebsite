// Animations pour Genesis Website

document.addEventListener('DOMContentLoaded', function() {
    // Animation au scroll (fade-in, slide-up)
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-in');
                entry.target.classList.remove('opacity-0', 'translate-y-10');
            }
        });
    }, observerOptions);

    // Observer tous les éléments avec la classe animate-on-scroll
    document.querySelectorAll('.animate-on-scroll').forEach(el => {
        el.classList.add('opacity-0', 'translate-y-10', 'transition-all', 'duration-700');
        observer.observe(el);
    });

    // Animation de compteur pour les statistiques
    function animateCounter(element, target, duration = 2000) {
        const start = 0;
        const increment = target / (duration / 16);
        let current = start;

        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                element.textContent = target;
                clearInterval(timer);
            } else {
                element.textContent = Math.floor(current);
            }
        }, 16);
    }

    // Observer pour les compteurs de stats
    const statsObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !entry.target.dataset.animated) {
                const counterElement = entry.target.querySelector('[data-count]');
                if (counterElement) {
                    const target = parseInt(counterElement.dataset.count);
                    animateCounter(counterElement, target);
                    entry.target.dataset.animated = 'true';
                }
            }
        });
    }, { threshold: 0.5 });

    document.querySelectorAll('.stat-card').forEach(card => {
        statsObserver.observe(card);
    });

    // Parallax effect pour les éléments décoratifs
    let ticking = false;

    function updateParallax() {
        const scrolled = window.pageYOffset;

        document.querySelectorAll('.parallax-slow').forEach(element => {
            const speed = element.dataset.speed || 0.5;
            element.style.transform = `translateY(${scrolled * speed}px)`;
        });

        document.querySelectorAll('.parallax-fast').forEach(element => {
            const speed = element.dataset.speed || 0.8;
            element.style.transform = `translateY(${scrolled * speed}px)`;
        });

        ticking = false;
    }

    window.addEventListener('scroll', () => {
        if (!ticking) {
            window.requestAnimationFrame(updateParallax);
            ticking = true;
        }
    });

    // Hover 3D effect pour les cartes
    document.querySelectorAll('.card-3d').forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            const centerX = rect.width / 2;
            const centerY = rect.height / 2;

            const rotateX = (y - centerY) / 10;
            const rotateY = (centerX - x) / 10;

            card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.05)`;
        });

        card.addEventListener('mouseleave', () => {
            card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) scale(1)';
        });
    });

    // Stagger animation pour les éléments en liste
    document.querySelectorAll('.stagger-parent').forEach(parent => {
        const children = parent.querySelectorAll('.stagger-child');
        const staggerObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    children.forEach((child, index) => {
                        setTimeout(() => {
                            child.classList.add('animate-in');
                            child.classList.remove('opacity-0', 'translate-x-10');
                        }, index * 100);
                    });
                    staggerObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.2 });

        staggerObserver.observe(parent);
    });

    // Floating animation pour certains éléments
    document.querySelectorAll('.float-animation').forEach((element, index) => {
        element.style.animation = `float ${3 + (index * 0.5)}s ease-in-out infinite`;
        element.style.animationDelay = `${index * 0.2}s`;
    });

    // Pulse animation pour les badges et notifications
    document.querySelectorAll('.pulse-glow').forEach(element => {
        setInterval(() => {
            element.classList.add('scale-105');
            setTimeout(() => {
                element.classList.remove('scale-105');
            }, 200);
        }, 3000);
    });

    // Gradient text animation
    const gradientTexts = document.querySelectorAll('.gradient-text-animate');
    gradientTexts.forEach(text => {
        let hue = 0;
        setInterval(() => {
            hue = (hue + 1) % 360;
            text.style.filter = `hue-rotate(${hue}deg)`;
        }, 50);
    });

    // Typewriter effect (optional, pour certains titres)
    function typeWriter(element, text, speed = 100) {
        let i = 0;
        element.textContent = '';

        function type() {
            if (i < text.length) {
                element.textContent += text.charAt(i);
                i++;
                setTimeout(type, speed);
            }
        }

        type();
    }

    // Shimmer effect au chargement
    document.querySelectorAll('.shimmer').forEach(element => {
        element.addEventListener('mouseenter', () => {
            element.classList.add('shimmer-active');
            setTimeout(() => {
                element.classList.remove('shimmer-active');
            }, 1000);
        });
    });
});

// Keyframes CSS pour les animations personnalisées
const style = document.createElement('style');
style.textContent = `
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }

    @keyframes shimmer {
        0% { background-position: -1000px 0; }
        100% { background-position: 1000px 0; }
    }

    .shimmer-active {
        animation: shimmer 1s forwards;
        background: linear-gradient(
            90deg,
            transparent 0%,
            rgba(14, 165, 233, 0.2) 50%,
            transparent 100%
        );
        background-size: 1000px 100%;
    }

    .animate-in {
        animation: fadeInUp 0.7s ease-out forwards;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInLeft {
        from {
            opacity: 0;
            transform: translateX(-30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fadeInRight {
        from {
            opacity: 0;
            transform: translateX(30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .card-3d {
        transition: transform 0.1s ease-out;
        will-change: transform;
    }

    .parallax-slow,
    .parallax-fast {
        will-change: transform;
    }
`;
document.head.appendChild(style);
