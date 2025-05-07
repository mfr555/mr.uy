<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-E74EGK7DSD"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-E74EGK7DSD');
    </script>
    <meta name="google-site-verification" content="mewSjhOo7feycgafwDZRMxYkEpPf-xUI8RedZjC0wkA">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=10.0, user-scalable=yes">
    <meta name="google-site-verification" content="mewSjhOo7feycgafwDZRMxYkEpPf-xUI8RedZjC0wkA">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <title>@yield('title')</title>
    <link rel="icon" href="img/isotipo.svg" type="image/x-icon">

    <!-- SEO Tags -->
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="MR Soluciones Digitales">
    <meta name="robots" content="index, follow">

    <!-- Open Graph (Meta) Meta Tags -->
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:site_name" content="MR Soluciones Digitales">
    <meta property="og:image" content="@yield('image')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:locale" content="es_ES">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title')">
    <meta name="twitter:description" content="@yield('description')">
    <meta name="twitter:image" content="@yield('image')">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoY9CUG9s2eM4A2e3zU2KkEcqIw1xg9UjErz7P5gqWoK7hZ" crossorigin="anonymous"></script>
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <i class="lucide-code-2 me-2"></i>
                MR Soluciones Digitales</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                            Contacto
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="https://www.linkedin.com/company/mr-soluciones-digitales" target="_blank"><i class="fab fa-linkedin-in pr-2"></i>
                                LinkedIn</a>
                            </li>
                            <li><a class="dropdown-item" href="https://www.instagram.com/solucionesdigitalesmr" target="_blank"><i class="fab fa-instagram pr-2"></i>
                                Instagram</a
                                ></li>
                            <li><a class="dropdown-item" href="https://www.facebook.com/mrsolucionesdigitales" target="_blank"><i class="fab fa-facebook-f pr-2"></i>
                                Facebook</a>
                            </li>
                            <li><a class="dropdown-item" href="https://twitter.com/mrsolucionesdig" target="_blank"><i class="fab fa-x-twitter pr-2"></i>
                                Twitter</a>
                            </li>
                            <li><a class="dropdown-item" href="https://api.whatsapp.com/send?phone=59897807023" target="_blank"><i class="fab fa-whatsapp pr-2"></i>
                                WhatsApp</a>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#contact">Contacto</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <!--section id="social-top" class="bg-dark text-white py-2">
            <div class="container">
                <div class="row mt-4">
                    <div class="col-lg-6"></div>
                    <div class="col-lg-6">
                        <div class="d-flex justify-content-center">
                            <a href="https://www.linkedin.com/company/mr-soluciones-digitales" target="_blank"
                                class="btn btn-outline-light btn-lg me-3">

                            </a>
                            <a href="https://www.instagram.com/solucionesdigitalesmr" target="_blank"
                                class="btn btn-outline-light btn-lg me-3">

                            </a>
                            <a href="https://www.facebook.com/mrsolucionesdigitales" target="_blank"
                                class="btn btn-outline-light btn-lg me-3">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://twitter.com/mrsolucionesdig" target="_blank"
                                class="btn btn-outline-light btn-lg me-3">

                            </a>
                            <a href="https://api.whatsapp.com/send?phone=59897807023" target="_blank"
                                class="btn btn-outline-success btn-lg me-3">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </section-->

        @yield('content')

        <section id="contact" class="py-5 bg-dark text-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-6 mb-4 mb-lg-0">
                        <h2 class="mb-4">Contacto</h2>
                        <p class="mb-4">
                            ¿Listo para comenzar su próximo proyecto?
                            Contáctenos para una consulta gratuita.
                        </p>
                        <div class="d-flex align-items-center mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail me-3">
                                <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                            </svg>
                            <a class="text-white" href="mailto:contacto@mr.uy" target="_blank">
                                contacto@mr.uy</a>
                            </div>
                        <div class="d-flex align-items-center mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone me-3">
                                <path
                                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                </path>
                            </svg>
                            <span>+598 97730244</span>
                        </div>
                        <div class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin me-3">
                                <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                            <span>
                                Rio Negro y Av. 18 de julio - Montevideo, Uruguay
                            </span>
                        </div>

                        <hr>
                        <div class="d-flex align-items-center">
                            <span class="mr-3">Social </span>
                            <div class="d-flex justify-content-center">
                                <a href="https://www.linkedin.com/company/mr-soluciones-digitales" target="_blank"
                                    class="btn btn-link p-2 m-2 text-light">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="https://www.instagram.com/solucionesdigitalesmr" target="_blank"
                                    class="btn btn-link p-2 m-2 text-light">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="https://www.facebook.com/mrsolucionesdigitales" target="_blank"
                                    class="btn btn-link p-2 m-2 text-light">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://twitter.com/mrsolucionesdig" target="_blank"
                                    class="btn btn-link p-2 m-2 text-light">
                                    <i class="fab fa-x-twitter"></i>
                                </a>
                                <a href="https://api.whatsapp.com/send?phone=59897807023" target="_blank"
                                    class="btn btn-link p-2 m-2 text-light">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <form>
                            <div class="mb-3">
                                <textarea id="mensaje" class="form-control mb-2" rows="5" placeholder="Su mensaje"></textarea>
                                <input id="nombre" type="text" class="form-control" placeholder="Su nombre">
                            </div>

                            <script src="js/whatsappform.js"></script>
                            <div class="d-flex justify-content-end">
                                <a id="enviarwpp" href="https://wa.me/59897807023" target="_blank" class="btn btn-success">
                                    Enviar WhatsApp</a>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-dark text-white text-center py-4">
        <p class="mb-0">© 2025 MR Soluciones Digitales. Todos los derechos reservados.</p>
        <p class="mb-0 small my-3">Razón Social: Rodriguez Díaz, Matías Fabian</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="js/main.js"></script>
    <script>
        lucide.createIcons();
    </script>
</body>

</html>
