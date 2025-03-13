<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Description de votre site">
    <title>@yield('title') - Nom de votre site</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome pour les icônes -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Votre CSS personnalisé -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    
    @yield('styles')
</head>
<style>
    @font-face {
            font-family: 'Romelio';
            src: url('{{ asset('fonts/Romelio.otf') }}') format('truetype');
            font-weight: normal;
            font-style: normal;
    }
        
        body {
            font-family: 'Romelio', sans-serif;
            text-align: center;
        }

    
    .maintenance-container {
    background: linear-gradient(rgba(0, 51, 102, 0.7), rgba(8, 22, 37, 0.7)),url('images/shutterstock_2161214935.jpg');
    background-size: cover;
    background-position: center;
    height:600px;
    display: flex;
    margin-top:100px ;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    color: white;
    position: relative;
}
.custom-navbar {
    background-color:rgb(15, 12, 68);
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    padding: 15px 0;
    position: fixed; /* Fixe le header en haut de la page */
    top: 0; /* Positionne le header en haut */
    left: 0; /* Aligne le header à gauche */
    width: 100%; /* Prend toute la largeur de la page */
    z-index: 1000; /* Assure que le header reste au-dessus des autres éléments */
}

.custom-navbar .navbar-brand img {
    transition: transform 0.3s ease;
}

.custom-navbar .navbar-brand:hover img {
    transform: scale(1.05);
}

.custom-navbar .nav-link {
    color:#fff;
    font-weight: 600;
    font-size: 16px;
    transition: all 0.3s ease;
    margin-left: 70px; /* Ajoute une marge à gauche pour les liens */
}

.custom-navbar .nav-link:hover {
    color: #007bff;
}

/* Responsive */
@media (max-width: 1002px) {
    .custom-navbar .navbar-nav {
        margin-top: 15px;
    }

    .custom-navbar .nav-link.active:after {
        width: 30px;
    }

    .navbar-brand.logo-margin {
        margin-left: 90px; /* Ajustez la marge pour les petits écrans */
    }
}
</style>
<body>
<header>
        <nav class="navbar navbar-expand-lg custom-navbar">
            <div class="container">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav me-auto">
        <li class="nav-item"><a href="#notre-groupe" class="nav-link">NOTRE GROUPE</a></li>
        <li class="nav-item"><a href="#vision-facteurs" class="nav-link">VISION & FACTEURS</a></li>
        <li class="nav-item"><a href="#nos-metiers" class="nav-link">NOS MÉTIERS</a></li><br><br><br>
        
        <!-- Logo avec une marge à gauche -->
        <li class="nav-item">
            <a class="navbar-brand" href="#" style="margin-left: 90px;">
                <img src="images/arena.png" alt="Logo" width="120">
            </a>
        </li>

        <li class="nav-item"><a href="#marques" class="nav-link">NOS MARQUES</a></li>
        <li class="nav-item"><a href="#actualites" class="nav-link">ACTUALITÉS</a></li>
        <li class="nav-item"><a href="#carriere" class="nav-link">CARRIÈRE</a></li>
        <li class="nav-item"><a href="#contact" class="nav-link">CONTACT</a></li>
    </ul>
</div>
        </nav>
    </header>

    <main>
    <div class="maintenance-container">
    <div class="particles" id="particles"></div>
    <div class="content-area">
        <h1 class="glass-box">ARENA, CATALYSEUR DE CROISSANCE <br><br>
            URBAINE ET ÉCONOMIQUE AU MAROC.</h1>
        <div class="logo-container">
            <img src="images/arena.png" alt="ARENA Property Development" class="logo hover-float">
        </div>
    </div>
</div>
    
    </main>
    <section id="carriere">
    <div class="about-section">
        <div class="container">
            <div class="about-content">
                <h1 class="nous">Qui sommes-nous?</h1>
                <p>Arena Property Development est une société marocaine de promotion immobilière qui s'impose comme un acteur clé du secteur. Née avec une ambition claire de redéfinir les standards de l'immobilier, Arena combine innovation, qualité et engagement envers la durabilité pour transformer les espaces de vie au Maroc.</p>
                
                <p>Le groupe se distingue par sa capacité à conjuguer des visions locales et internationales grâce à des partenariats stratégiques solides.</p>
                
                <a href="#" class="btn">En savoir plus</a>
            </div>
            <div class="watermark"></div>
        </div>
    </div>
    </section>
    <section class="arena-key-metrics">
        <div class="arena-bg-pattern"></div>
        <div class="arena-wrapper">
            <h1 class="arena-heading">Chiffres Clés</h1>
            
            <div class="arena-statistics-grid">
                <div class="arena-stat-item" data-count="100">
                    <div class="arena-stat-value" id="arena-stat1">100</div>
                    <p class="arena-stat-text">Développements sur plus de 100 hectares de terrain, marquant l'empreinte d'ARENA dans le secteur de l'immobilier</p>
                </div>
                
                <div class="arena-stat-item" data-count="80">
                    <div class="arena-stat-value" id="arena-stat2">80</div>
                    <p class="arena-stat-text">Une équipe de 80 professionnels hautement qualifiés et dédiés à l'excellence</p>
                </div>
                
                <div class="arena-stat-item" data-count="20000">
                    <div class="arena-stat-value" id="arena-stat3">20K</div>
                    <p class="arena-stat-text">Construction de plus de 20 000 unités résidentielles, contribuant à façonner des communautés dynamiques</p>
                </div>
            </div>
        </div>
    </section>
    <section id="nos-metiers">
    <div class="container" id="nos-marques">
        <h2 class="title">NOS METIERS</h2>
        <div class="metiers-grid">
            <div class="metier">
                <img src="images/VistaCreate-152897154-stock-photo-professional-architect-in-hard-hat.jpg" alt="Promotion Immobilière">
                <div class="overlay">
                    <h3>PROMOTION IMMOBILIERE</h3>
                    <a href="#">voir détails</a>
                </div>
            </div>
            <div class="metier">
                <img src="images/shutterstock_2259342275.jpg" alt="Maîtrise d'Ouvrage Déléguée">
                <div class="overlay">
                    <h3>MAITRISE D’OUVRAGE DELEGUEE</h3>
                    <a href="#">voir détails</a>
                </div>
            </div>
            <div class="metier">
                <img src="images/shutterstock_736171885.jpg" alt="Conseil en Investissement">
                <div class="overlay">
                    <h3>CONSEIL EN INVESTISSEMENT</h3>
                    <a href="#">voir détails</a>
                </div>
            </div>
        </div>
    </div>
    </section>
    <section id="marques" class="marque">
        <h2>NOS MARQUES</h2>
        <div class="logos-container">
            <div class="logos">              
                <img src="/images/Nos-marques-logos-al-alia.png" alt="WORK in Center">
                <img src="/images/Nos-marques-logos-Palms.png" alt="PALMS"> 
                <img src="/images/Nos-marques-logos-Workin.png" alt="AL ALIA Immobilier">
                <img src="/images/Nos-marques-logos-al-alia.png" alt="WORK in Center">
                <img src="/images/Nos-marques-logos-Palms.png" alt="PALMS"> 
                <img src="/images/Nos-marques-logos-Workin.png" alt="AL ALIA Immobilier">
                <img src="/images/Nos-marques-logos-al-alia.png" alt="WORK in Center">
                <img src="/images/Nos-marques-logos-Palms.png" alt="PALMS"> 
                <img src="/images/Nos-marques-logos-Workin.png" alt="AL ALIA Immobilier">
            
            </div>
        </div>
    </section>
    <section id="actualites" class="actualites-section">
    <h2 class="actualites-title">ACTUALITÉS</h2>
    <div class="container">
    <div class="row justify-content-center">
        <!-- Carte 1 -->
        <div class="col-md-4">
            <div class="actualite-card">
                <div class="card-images">
                    <img src="images/Nos-marques-logos-workin.jpg" alt="WORKIN Logo" class="img-fluid">
                    <img src="images/Nos-marques-logos-Palms.jpg" alt="PALMS Logo" class="img-fluid">
                    <img src="images/Nos-marques-logos-Al-Alia.jpg" alt="AL ALIA Logo" class="img-fluid">
                </div>
                <p class="actualite-text"><strong>WORKLID:</strong> Immobilier: Arena lance un programme durable de 5 milliards de dirhams à Casablanca</p>
            </div>
        </div>

        <!-- Carte 2 -->
        <div class="col-md-4">
            <div class="actualite-card">
                <img src="images/Sanam holding.png" alt="Actualité 2" class="actualite-image">
                <p class="actualite-text"><strong>Immobilier :</strong> Le groupe Sanam s’associe avec Aevitas, gestionnaire de fonds de pension américains</p>
                <p class="actualite-date"><strong>le360</strong> - 11/06/2020</p>
            </div>
        </div>

        <!-- Carte 3 -->
        <div class="col-md-4">
            <div class="actualite-card">
                <img src="images/article1.jpg" alt="Actualité 3" class="actualite-image3">
                <p class="actualite-text"><strong>Covid-19 :</strong> Al Alia immobilier se mobilise pour aider financièrement ses acquéreurs</p>
                <p class="actualite-date"><strong>MEDIAS24</strong> - 22/07/2020</p>
            </div>
        </div>
    </div>
</div>
    </div>
</section>
<section id="contact">
<div class="background" id="contact">
        <button class="button">Contactez-Nous</button>
    </div>
</section>

    <footer style="background-color:rgb(1, 25, 39); color: white; padding: 30px 0; text-align: center;">
    <div class="container">
        <img src="images/images.png" alt="Arena Logo" width="120">
        <p>© 2025 ARENA PROPERTY DEVELOPMENT. All rights reserved.</p>
<div class="social-links">
                        <a href="#" class="text-light me-2"><i class="fab fa-facebook fa-lg"></i></a>
                        <a href="#" class="text-light me-2"><i class="fab fa-twitter fa-lg"></i></a>
                        <a href="#" class="text-light me-2"><i class="fab fa-instagram fa-lg"></i></a>
                        <a href="#" class="text-light me-2"><i class="fab fa-linkedin fa-lg"></i></a>
                    </div>
        <nav>
            <ul style="list-style: none; padding: 0;">
                <li><a href="#accueil" style="color: white;">ACCUEIL</a></li>
                <li><a href="#notre-groupe" style="color: white;">NOTRE GROUPE</a></li>
                <li><a href="#vision-valeurs" style="color: white;">VISION & VALEURS</a></li>
                <li><a href="#nos-metiers" style="color: white;">NOS MÉTIERS</a></li>
                <li><a href="#nos-marques" style="color: white;">NOS MARQUES</a></li>
                <li><a href="#actualites" style="color: white;">ACTUALITÉS</a></li>
                <li><a href="#carriere" style="color: white;">CARRIÈRE</a></li>
                <li><a href="#contact" style="color: white;">CONTACT</a></li>
            </ul>
        </nav>
    </div>
</footer>

    
    <!-- Bootstrap Bundle avec Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Votre JS personnalisé -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/script.js')}}"></script>
    <script>
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
    </script>

    
    @yield('scripts')
</body>
</html>