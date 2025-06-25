import './bootstrap';


// Import all images at once
const images = import.meta.glob('../images/*.{png,jpg,jpeg,gif,svg}', { 
    eager: true 
});

const testiContainer = [...document.querySelectorAll('.testi-container')];

const nextBtn = [...document.querySelectorAll('.nxt-btn')];

const preBtn = [...document.querySelectorAll('.pre-btn')];

testiContainer.forEach((item, i) =>{
    let containerDimension = item.getBoundingClientRect();
    let containerWidth = containerDimension.width;

    nextBtn[i].addEventListener('click', () => {
        item.scrollLeft += containerWidth;
    })

    preBtn[i].addEventListener('click', () => {
        item.scrollLeft -= containerWidth;
    })
})

document.addEventListener('DOMContentLoaded', function () {
            // Counter animation function
            function animateCounter(element, target, suffix = '', duration = 800) {
                let current = 0;
                const increment = target / (duration / 16); // 60fps

                // Clear any existing animation
                if (element.animationTimer) {
                    clearInterval(element.animationTimer);
                }

                element.animationTimer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        current = target;
                        clearInterval(element.animationTimer);
                    }
                    element.textContent = Math.floor(current) + suffix;
                }, 16);
            }

            // Reset counter function
            function resetCounter(element, suffix = '') {
                if (element.animationTimer) {
                    clearInterval(element.animationTimer);
                }
                element.textContent = '0' + suffix;
            }

            // Get all counter elements
            const counters = document.querySelectorAll('.counter');

            // Add hover event listeners to each stat card
            counters.forEach(counter => {
                const statCard = counter.closest('.group');
                const target = parseInt(counter.getAttribute('data-target'));
                const suffix = counter.getAttribute('data-suffix') || '';

                // Set initial state to 0
                counter.textContent = '0' + suffix;

                // Hover events
                statCard.addEventListener('mouseenter', () => {
                    animateCounter(counter, target, suffix, 600);

                    // Animate progress bar
                    const progressBar = statCard.querySelector('.h-full');
                    if (progressBar) {
                        progressBar.style.transform = 'scaleX(1)';
                    }
                });

                statCard.addEventListener('mouseleave', () => {
                    // Reset counter with smooth animation
                    let current = target;
                    const decrement = target / 30; // Faster reset

                    if (counter.resetTimer) {
                        clearInterval(counter.resetTimer);
                    }

                    counter.resetTimer = setInterval(() => {
                        current -= decrement;
                        if (current <= 0) {
                            current = 0;
                            clearInterval(counter.resetTimer);
                        }
                        counter.textContent = Math.floor(current) + suffix;
                    }, 16);

                    // Reset progress bar
                    const progressBar = statCard.querySelector('.h-full');
                    if (progressBar) {
                        progressBar.style.transform = 'scaleX(0)';
                    }
                });
            });

            // Add staggered animation to stat cards on page load
            const statCards = document.querySelectorAll('.grid > div');
            statCards.forEach((card, index) => {
                card.style.animationDelay = `${index * 0.2}s`;
                card.classList.add('animate-fade-in-up');
            });

            // Add pulse effect on hover for extra wow factor
            counters.forEach(counter => {
                const statCard = counter.closest('.group');

                statCard.addEventListener('mouseenter', () => {
                    counter.style.transform = 'scale(1.1)';
                    counter.style.transition = 'transform 0.3s ease';
                });

                statCard.addEventListener('mouseleave', () => {
                    counter.style.transform = 'scale(1)';
                });
            });
        });

   document.addEventListener('DOMContentLoaded', function () {
        const navLinks = document.querySelectorAll('.nav-link');

        navLinks.forEach(link => {
            link.addEventListener('click', function (e) {
                // Remove active class from all links
                navLinks.forEach(l => l.classList.remove('active'));

                // Add active class to clicked link
                this.classList.add('active');

                // Add click animation
                this.classList.add('clicked');
                setTimeout(() => {
                    this.classList.remove('clicked');
                }, 300);
            });
        });
    });