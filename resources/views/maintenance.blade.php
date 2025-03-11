<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site en maintenance - ARENA Property Development</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Romelio:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow-x: hidden;
        }
        
        .maintenance-container {
            background: linear-gradient(rgba(0, 51, 102, 0.7), rgba(95, 124, 154, 0.7)),
                        url('images/shutterstock_2161214935.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            position: relative;
        }
        .glass-box {
  background: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(10px);
  padding: 20px;
  border-radius: 15px;
}
        .logo-container {
            position: absolute;
            top: 40px;
            left: 0;
            right: 0;
            text-align: center;
            animation: fadeInDown 1.2s ease-out;
        }
        
        .logo {
            max-width: 200px;
            filter: brightness(0) invert(1);
            transition: transform 0.5s ease;
        }
        
        .logo:hover {
            transform: scale(1.05);
        }
        
        .content-area {
            max-width: 800px;
            padding: 0 20px;
            animation: fadeIn 1.5s ease-out;

        }
        
        h1 {
            font-size: 4rem;
            margin: 0;
            font-weight: 300;
            letter-spacing: 3px;
            margin-bottom: 20px;
            animation: slideInLeft 1s ease-out;
            font-weight: bold;
        }
        
        .subtitle {
            font-size: 1.5rem;
            margin-bottom: 50px;
            letter-spacing: 1px;
            font-weight: 300;
            animation: slideInRight 1s ease-out;
            opacity: 0;
            animation-fill-mode: forwards;
            animation-delay: 0.5s;
        }
        
        .contact-btn {
            display: inline-block;
            padding: 15px 40px;
            border: 2px solid white;
            border-radius: 50px;
            color: white;
            text-decoration: none;
            font-size: 1rem;
            transition: all 0.3s ease;
            font-weight: 600;
            letter-spacing: 1px;
            position: relative;
            overflow: hidden;
            z-index: 1;
            animation: bounceIn 1s ease-out;
            animation-delay: 1.5s;
            opacity: 0;
            animation-fill-mode: forwards;
            margin-top: 30px;
        }
        
        .contact-btn:before {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            width: 0%;
            height: 100%;
            background-color: white;
            transition: all 0.3s ease;
            z-index: -1;
        }
        
        .contact-btn:hover {
            color: #003366;
        }
        
        .contact-btn:hover:before {
            width: 100%;
        }
        
        .counter {
            margin-top: 50px;
            font-size: 1.2rem;
            animation: fadeIn 1.5s ease-out;
            animation-delay: 1s;
            opacity: 0;
            animation-fill-mode: forwards;
        }
        
        .countdown {
            display: flex;
            margin-top: 20px;
            justify-content: center;
            animation: fadeIn 1.5s ease-out;
            animation-delay: 1.2s;
            opacity: 0;
            animation-fill-mode: forwards;
        }
        
        .countdown-item {
            margin: 0 15px;
            animation: pulse 2s infinite;
        }
        
        .countdown-number {
            font-size: 2.5rem;
            font-weight: 600;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 10px 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .countdown-item:hover .countdown-number {
            background-color: rgba(255, 255, 255, 0.2);
            transform: translateY(-5px);
        }
        @font-face {
            font-family: 'Romelio';
            src: url('{{ asset('fonts/Romelio.otf') }}') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
        
        body {
            font-family: 'Romelio', sans-serif;
            text-align: center;
            background-color: #f4f4f4;
        }

        h1 {
            font-size: 4rem;

            color: #fff;
            font-family: 'Romelio', sans-serif;

        }
        
        .countdown-label {
            font-size: 0.9rem;
            text-transform: uppercase;
            margin-top: 10px;
        }
        
        
        .hover-float {
            transition: transform 0.3s ease;
        }
        
        .hover-float:hover {
            transform: translateY(-5px);
        }
        
        .particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
        
        .particle {
            position: absolute;
            background-color: rgba(255, 255, 255, 0.5);
            border-radius: 50%;
            pointer-events: none;
            animation: float 15s infinite linear;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes fadeInDown {
            from { 
                opacity: 0;
                transform: translateY(-50px);
            }
            to { 
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes slideInLeft {
            from { 
                opacity: 0;
                transform: translateX(-100px);
            }
            to { 
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        @keyframes slideInRight {
            from { 
                opacity: 0;
                transform: translateX(100px);
            }
            to { 
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        @keyframes bounceIn {
            0% {
                opacity: 0;
                transform: scale(0.3);
            }
            50% {
                opacity: 1;
                transform: scale(1.05);
            }
            70% { transform: scale(0.9); }
            100% { transform: scale(1); opacity: 1; }
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.03); }
            100% { transform: scale(1); }
        }
        
        @keyframes float {
            0% {
                transform: translateY(0) rotate(0deg);
            }
            100% {
                transform: translateY(-1000px) rotate(720deg);
            }
        }
        
        @media (max-width: 768px) {
            h1 {
                font-size: 3rem;
            }
            
            .subtitle {
                font-size: 1.2rem;
            }
            
            .countdown {
                flex-wrap: wrap;
            }
            
            .countdown-item {
                margin: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="maintenance-container">
        <div class="particles" id="particles"></div>
        
        <div class="logo-container">
            <img src="images/arena.png" alt="ARENA Property Development" class="logo hover-float">
        </div>
        
        <div class="content-area">
            <h1 calss="glass-box">We're Comming</h1><br>
            <p class="subtitle">Stay tuned for something extraordinary!</p>
            
            <div class="counter">We'll be back in</div>
            <div class="countdown">
                <div class="countdown-item">
                    <div class="countdown-number" id="days">00</div>
                    <div class="countdown-label">Days</div>
                </div>
                <div class="countdown-item">
                    <div class="countdown-number" id="hours">00</div>
                    <div class="countdown-label">Hours</div>
                </div>
                <div class="countdown-item">
                    <div class="countdown-number" id="minutes">00</div>
                    <div class="countdown-label">Minutes</div>
                </div>
                <div class="countdown-item">
                    <div class="countdown-number" id="seconds">00</div>
                    <div class="countdown-label">Seconds</div>
                </div>
            </div>
            
            <a href="mailto:contact@arenaproperty.com" class="contact-btn">CONTACT US</a>
        </div>
    </div>
    
    <script>
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
    </script>
</body>
</html>