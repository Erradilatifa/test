
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