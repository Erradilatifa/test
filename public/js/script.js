
        function createParticles() {
            const particlesContainer = document.getElementById('particles');
            const particleCount = 25;
            
            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.classList.add('particle');
    
                const size = Math.random() * 10 + 5;
                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;
                
                
                const posX = Math.random() * 100;
                const posY = Math.random() * 100;
                particle.style.left = `${posX}%`;
                particle.style.top = `${posY}%`;
               
                particle.style.opacity = Math.random() * 0.5 + 0.1;
                
                
                const duration = Math.random() * 20 + 10;
                const delay = Math.random() * 10;
                particle.style.animationDuration = `${duration}s`;
                particle.style.animationDelay = `${delay}s`;
                
                particlesContainer.appendChild(particle);
            }
        }
        
        
        const launchDate = new Date("2025-04-15T00:00:00").getTime();
        
        
        const countdown = setInterval(function() {
            const now = new Date().getTime();
            const distance = launchDate - now;
            
            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
            
            document.getElementById("days").textContent = days.toString().padStart(2, '0');
            document.getElementById("hours").textContent = hours.toString().padStart(2, '0');
            document.getElementById("minutes").textContent = minutes.toString().padStart(2, '0');
            document.getElementById("seconds").textContent = seconds.toString().padStart(2, '0');
            
           
            if (distance < 0) {
                clearInterval(countdown);
                document.querySelector(".counter").textContent = "Notre site est en cours de lancement !";
                document.querySelector(".countdown").style.display = "none";
            }
        }, 1000);
        window.addEventListener('load', createParticles);
        // Animation des chiffres au défilement
        document.addEventListener('DOMContentLoaded', function() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const statItems = document.querySelectorAll('.arena-stat-item');
                        statItems.forEach((item, index) => {
                            setTimeout(() => {
                                item.querySelector('.arena-stat-value').classList.add('arena-animate');
                            }, index * 200);
                        });
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1 });
            
            observer.observe(document.querySelector('.arena-statistics-grid'));
        });