@extends('layouts.webtemplate')

@section('title', 'Diseño Web | Desarrollo en la nube | Soporte IT | MR Soluciones Digitales')
@section('description', 'MR Soluciones Digitales ofrece desarrollo de software a medida, aplicaciones web y móviles, servicios cloud y ciberseguridad para impulsar el crecimiento empresarial.')
@section('keywords', 'desarrollo de software, aplicaciones web, aplicaciones móviles, soporte IT, servicios cloud, ciberseguridad, MR Soluciones Digitales')
@section('image', 'https://images.unsplash.com/photo-1581472723648-909f4851d4ae?auto=format&fit=crop&w=800&q=80')

@section('content')
<script>
    //pulse
    document.addEventListener('DOMContentLoaded', () => {
        const colors = ['var(--naranja)', 'var(--violeta)', '#ffffff'];
        let index = 0;

        setInterval(() => {
        index = (index + 1) % colors.length;
        document.querySelectorAll('.pulse').forEach(el => {
            el.style.color = colors[index];
        });
        }, 3000);
    });
</script>

<section id="home" class="bg-dark text-white min-vh-90 d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2 class="display-4 fw-bold mb-4">Tecnología al servicio de tu empresa</h2>
                <h1 class="lead pulse">Diseño Web, Desarrollo de aplicaciones y Soporte IT para Empresas</h1>
                <p class="lead mb-4">
                    Creamos soluciones de software innovadoras que impulsan el crecimiento empresarial
                    y el avance tecnológico.
                </p>
                <a href="#contact" class="btn btn-light btn-lg me-3">
                    Solicitar presupuesto gratis</a>
            </div>
            <div class="col-lg-6">
                <div class="d-flex justify-content-center">
                    <div class="position-relative">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48"
                            height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-code position-absolute" style="top: 20%; left: 18%;">
                            <polyline points="16 18 22 12 16 6"></polyline>
                            <polyline points="8 6 2 12 8 18"></polyline>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-database position-absolute"
                            style="top: 40%; right: 10%;">
                            <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                            <path d="M3 5V19A9 3 0 0 0 21 19V5"></path>
                            <path d="M3 12A9 3 0 0 0 21 12"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-globe position-absolute"
                            style="top: 14%; left: 55%;">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                            <path d="M2 12h20"></path>
                        </svg>
                        <img src="https://images.unsplash.com/photo-1581472723648-909f4851d4ae?auto=format&amp;fit=crop&amp;w=800&amp;q=80"
                            alt="Modern Office Space" class="img-fluid rounded-circle shadow-lg"
                            style="width: 400px; height: 400px; object-fit: cover;">

                        <img src="img/logo-blanco.svg" alt="Logo MR" class="position-absolute" style="width: 80px; height: 80px; top: 80%; left: 50%; transform: translate(-50%, -50%);">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about" class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold mb-3 ">Nosotros</h2>
            <p class="lead text-muted">Somos un equipo de desarrolladores apasionados, dedicados a crear soluciones innovadoras</p>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0"><img
                    src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&amp;fit=crop&amp;w=800&amp;q=80"
                    alt="Team collaboration" class="img-fluid rounded shadow-lg"></div>
            <div class="col-lg-6">
                <h3 class="mb-4">Construyendo el mañana con la tecnología de hoy</h3>
                <p class="lead mb-4">En MR Soluciones Digitales, combinamos experiencia técnica con
                    pensamiento innovador, para ofrecer soluciones de software de vanguardia que impulsan el crecimiento empresarial.
                </p>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="text-center">
                            <div class="text-secondary mb-2"><svg xmlns="http://www.w3.org/2000/svg" width="32"
                                    height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-target text-naranja">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <circle cx="12" cy="12" r="6"></circle>
                                    <circle cx="12" cy="12" r="2"></circle>
                                </svg></div>
                            <h4 class="fw-bold mb-1">5+</h4>
                            <p class="text-muted">Años de Experiencia</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center">
                            <div class="text-secondary mb-2"><svg xmlns="http://www.w3.org/2000/svg" width="32"
                                    height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-users text-naranja">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg></div>
                            <h4 class="fw-bold mb-1">1000+</h4>
                            <p class="text-muted">Usuarios Activos</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center">
                            <div class="text-secondary mb-2"><svg xmlns="http://www.w3.org/2000/svg" width="32"
                                    height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-award text-naranja">
                                    <circle cx="12" cy="8" r="6"></circle>
                                    <path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"></path>
                                </svg></div>
                            <h4 class="fw-bold mb-1">50+</h4>
                            <p class="text-muted">Proyectos Completados</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="services" class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold mb-3">Servicios</h2>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <div class="mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-code2 ">
                                <path d="m18 16 4-4-4-4"></path>
                                <path d="m6 8-4 4 4 4"></path>
                                <path d="m14.5 4-5 16"></path>
                            </svg></div>
                        <h5 class="card-title">Desarrollo de Software</h5>
                        <p class="card-text text-muted">Soluciones a medida diseñadas para satisfacer
                            necesidades y desafíos específicos de cada negocio.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <a href="#plans" class="card h-100 border-0 shadow-sm text-decoration-none">
                    <div class="card-body text-center">
                        <div class="mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-globe ">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                                <path d="M2 12h20"></path>
                            </svg></div>
                        <h5 class="card-title">Páginas Web</h5>
                        <p class="card-text text-muted">Diseño e implementación de sitios web profesionales,
                            agrdables de visitar, optimizados para IA y Google.</p>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="4" y="2" width="16" height="20" rx="2" ry="2"/>
                                <path d="M10 22v-5h4v5"/>
                                <line x1="8" y1="6" x2="8" y2="6"/>
                                <line x1="12" y1="6" x2="12" y2="6"/>
                                <line x1="16" y1="6" x2="16" y2="6"/>
                                <line x1="8" y1="10" x2="8" y2="10"/>
                                <line x1="12" y1="10" x2="12" y2="10"/>
                                <line x1="16" y1="10" x2="16" y2="10"/>
                            </svg>
                        </div>
                        <h5 class="card-title">Soporte empresarial</h5>
                        <p class="card-text text-muted">Administración y soporte del capital digital de empresas</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <div class="mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-database ">
                                <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                                <path d="M3 5V19A9 3 0 0 0 21 19V5"></path>
                                <path d="M3 12A9 3 0 0 0 21 12"></path>
                            </svg></div>
                        <h5 class="card-title">Bases de Datos</h5>
                        <p class="card-text text-muted">Diseño y optimización de bases de datos eficientes para
                            mejorar el rendimiento.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <div class="mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-cloud ">
                                <path d="M17.5 19H9a7 7 0 1 1 6.71-9h1.79a4.5 4.5 0 1 1 0 9Z"></path>
                            </svg></div>
                        <h5 class="card-title">Servicios Cloud</h5>
                        <p class="card-text text-muted">Soluciones nativas de la nube y servicios de migración
                            para infraestructura escalable.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <div class="mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield ">
                                <path
                                    d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                                </path>
                            </svg></div>
                        <h5 class="card-title">Ciberseguridad</h5>
                        <p class="card-text text-muted">Soluciones de seguridad integrales para proteger sus
                            activos digitales.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="plans" class="py-5 plans">
    <div class="container">
        <div class="text-center mb-5">
            <h3 class="display-6 fw-bold mb-3">Desarrollo Web</h3>
            <p class="lead text-muted">Planes accesibles de desarrollo e implementación web.</p>
        </div>
        <div class="row d-flex justify-content-center">
            @foreach($packs as $pack)
                <div id="pack_{{ $pack->id }}" class="col-md-4 mb-4">
                    @include('layouts.cards.pack-style-1', ['pack' => $pack])
                </div>
            @endforeach
        </div>
    </div>

</section>

<section id="technologies" class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold mb-3 ">Tecnologías</h2>
            <p class="lead text-muted">Utilizamos tecnologías de vanguardia para construir soluciones modernas</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm ">
                    <div class="card-body">
                        <h4 class="text-center mb-4">Frontend</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2 text-center">HTML5</li>
                            <li class="mb-2 text-center">CSS3</li>
                            <li class="mb-2 text-center">Bootstrap</li>
                            <li class="mb-2 text-center">Javascript</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm ">
                    <div class="card-body">
                        <h4 class="text-center mb-4">Backend</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2 text-center">Java</li>
                            <li class="mb-2 text-center">PHP</li>
                            <li class="mb-2 text-center">Laravel</li>
                            <li class="mb-2 text-center">.NET</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm ">
                    <div class="card-body">
                        <h4 class="text-center mb-4">Cloud & Database</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2 text-center">AWS</li>
                            <li class="mb-2 text-center">Hostinger</li>
                            <li class="mb-2 text-center">MySQL</li>
                            <li class="mb-2 text-center">Google Looker</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm ">
                    <div class="card-body">
                        <h4 class="text-center mb-4">Strategic Connections</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2 text-center">WhatsApp Business API</li>
                            <li class="mb-2 text-center">z.uy API</li>
                            <li class="mb-2 text-center">Web Services Poder Judicial</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="portfolio" class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold mb-3 ">Portfolio</h2>
            <p class="lead text-muted">Explora nuestros proyectos destacados y recientes</p>
        </div>

        <!-- Páginas Web -->
        <h3 class="mt-5 text-center">Páginas Web</h3>
        <div class="row g-4 d-flex justify-content-around">

            <div class="col-md-6 col-lg-5">
                <div class="card h-100 border-0 shadow-sm portfolio-card">
                    <div class="card-body">
                        <img src="img/ab.webp" alt="Web AB Estudio Jurídico" class="img-fluid rounded mb-3">
                        <h5>AB Estudio Jurídico</h5>
                        <p class="text-muted mb-3">
                            Sitio web corporativo del Estudio Jurídico AB especializado en Derecho de Familia,
                            centrado en la interacción inmediata de potenciales clientes a través de WhatsApp.
                        </p>
                        <div class="d-flex flex-wrap gap-2 mb-3">
                            <a href="#web-corporativa" class="badge bg-light text-dark">Web Corporativa</a>
                            <span class="badge bg-light text-dark">Laravel</span>
                            <span class="badge bg-light text-dark">Blog</span>
                            <span class="badge bg-light text-dark">Mejora contínua</span>
                        </div>
                        <a href="https://abestudiojuridico.com" target="_blank" class="btn btn-outline-dark btn-sm">
                            abestudiojuridico.com
                            <svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-external-link ms-1">
                                <path d="M15 3h6v6"></path>
                                <path d="M10 14 21 3"></path>
                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                            </svg></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-5">
                <div class="card h-100 border-0 shadow-sm portfolio-card">
                    <div class="card-body">
                        <img src="img/duran.webp" alt="Web terapiaholistica.uy" class="img-fluid rounded mb-3">
                        <h5>Terapia Holística - Sebastián Durán</h5>
                        <p class="text-muted mb-3">
                            Sitio web sencillo con mucho estilo destinado a dar a conocer la terapia floral
                            integral ofrecida por el cliente.
                        </p>
                        <div class="d-flex flex-wrap gap-2 mb-3">
                            <a href="#web-starter" class="badge bg-light text-dark">Web Starter</a>
                            <span class="badge bg-light text-dark">Bootstrap</span>
                            <span class="badge bg-light text-dark">Diseño de marca</span>
                        </div>
                        <a href="https://terapiaholistica.uy" target="_blank" class="btn btn-outline-dark btn-sm">
                            terapiaholistica.uy
                            <svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-external-link ms-1">
                                <path d="M15 3h6v6"></path>
                                <path d="M10 14 21 3"></path>
                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                            </svg></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-5">
                <div class="card h-100 border-0 shadow-sm portfolio-card">
                    <div class="card-body">
                        <img src="img/340-1.webp" alt="Web Vamos por Mas" class="img-fluid rounded mb-3">
                        <h5>Vamos por más - Lista 340</h5>
                        <p class="text-muted mb-3">
                            Págna web de una agrupación política, que luego de la elección optó por un plan en mejora
                            contínua iterativa.
                        </p>
                        <div class="d-flex flex-wrap gap-2 mb-3">
                            <a href="#web-corporativa" class="badge bg-light text-dark">Web estándar flexible</a>
                            <span class="badge bg-light text-dark">Laravel</span>
                            <span class="badge bg-light text-dark">Blog</span>
                            <span class="badge bg-light text-dark">Mejora contínua</span>
                        </div>
                        <a href="https://vamospormas.uy" target="_blank" class="btn btn-outline-dark btn-sm">
                            vamospormas.uy
                            <svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-external-link ms-1">
                                <path d="M15 3h6v6"></path>
                                <path d="M10 14 21 3"></path>
                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                            </svg></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-5">
                <div class="card h-100 border-0 shadow-sm portfolio-card">
                    <div class="card-body">
                        <img src="img/adh.webp" alt="Web adh.uy" class="img-fluid rounded mb-3">
                        <h5>ADH</h5>
                        <p class="text-muted mb-3">
                            Sitio web estilo landing de Alianza por La Dignidad Humana, ONG de Uruguay.
                        </p>
                        <div class="d-flex flex-wrap gap-2 mb-3">
                            <a href="#web-starter" class="badge bg-light text-dark">Web Starter</a>
                            <span class="badge bg-light text-dark">Bootstrap</span>
                            <span class="badge bg-light text-dark">UI Deck</span>
                        </div>
                        <a href="https://adh.uy" target="_blank" class="btn btn-outline-dark btn-sm">
                            adh.uy
                            <svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-external-link ms-1">
                                <path d="M15 3h6v6"></path>
                                <path d="M10 14 21 3"></path>
                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                            </svg></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Aplicaciones -->
        <h3 class="mt-5 text-center">Aplicaciones web</h3>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm portfolio-card">
                    <div class="card-body">
                        <img src="img/frutas.jpg" alt="Frutas Del Plata" class="img-fluid rounded mb-3">
                        <h5>Frutas Del Plata</h5>
                        <p class="text-muted mb-3">
                            Aplicación desarrollada a medida para optimizar la gestión de la empresa Frutas Del Plata SA,
                            conectándose con la aplicación de facturación electrónica de ZetaSoftware mediante la API de z.uy.
                        </p>
                        <div class="d-flex flex-wrap gap-2 mb-3">
                            <span class="badge bg-light text-dark">ZetaSoftware API</span>
                            <span class="badge bg-light text-dark">Bootstrap</span>
                            <span class="badge bg-light text-dark">Cloud API</span>
                        </div>
                        <!--a href="#" class="btn btn-outline-dark btn-sm">View Details <svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-external-link ms-1">
                                <path d="M15 3h6v6"></path>
                                <path d="M10 14 21 3"></path>
                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                            </svg></a-->
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm portfolio-card">
                    <div class="card-body">
                        <img src="img/corcel.jpg" alt="CORCEL" class="img-fluid rounded mb-3">
                        <h5>CORCEL</h5>
                        <p class="text-muted mb-1">
                            Control de Resultados de Circuitos Electorales.
                        </p>
                        <p class="text-muted mb-3">
                            Aplicación web usada por 2500 usuarios en simultáneo
                            para el control de resultados del balotage de 2024.
                        </p>
                        <div class="d-flex flex-wrap gap-2 mb-3">
                            <span class="badge bg-light text-dark">Full Responsive</span>
                            <span class="badge bg-light text-dark">Chart.js</span>
                            <span class="badge bg-light text-dark">Tables.js</span>
                        </div>
                        <!--a href="#" class="btn btn-outline-dark btn-sm">View Details <svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-external-link ms-1">
                                <path d="M15 3h6v6"></path>
                                <path d="M10 14 21 3"></path>
                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                            </svg></a-->
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm portfolio-card">
                    <div class="card-body">
                        <img src="img/sima.jpg" alt="SIMA" class="img-fluid rounded mb-3">
                        <h5>SIMA</h5>
                        <p class="text-muted mb-1">
                            Sistema Integral de Mensajería Automática.
                        </p>
                        <p class="text-muted mb-3">
                            CRM para la gestión de contactos con clientes, seguimiento de ventas y análisis de datos
                        </p>
                        <div class="d-flex flex-wrap gap-2 mb-3">
                            <span class="badge bg-light text-dark">Cloud APP</span>
                            <span class="badge bg-light text-dark">WhatsApp</span>
                            <span class="badge bg-light text-dark">Tables.js</span>
                        </div>
                        <!--a href="#" class="btn btn-outline-dark btn-sm">View Details <svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-external-link ms-1">
                                <path d="M15 3h6v6"></path>
                                <path d="M10 14 21 3"></path>
                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                            </svg></a-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <section id="testimonials" class="py-5 bg-dark text-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold mb-3 text-white">Testimonios</h2>
            <p class="lead text-white-50">Qué dicen nuestros clientes sobre nosotros</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm bg-dark text-white border border-secondary">
                    <div class="card-body">
                        <div class="d-flex mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 24 24" fill="#ffc107" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-star text-warning">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                </polygon>
                            </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 24 24" fill="#ffc107" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-star text-warning">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                </polygon>
                            </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 24 24" fill="#ffc107" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-star text-warning">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                </polygon>
                            </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 24 24" fill="#ffc107" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-star text-warning">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                </polygon>
                            </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 24 24" fill="#ffc107" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-star text-warning">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                </polygon>
                            </svg></div>
                        <p class="mb-4">TechForge delivered an exceptional solution that transformed our
                            business operations. Their expertise and professionalism are unmatched.</p>
                        <div class="d-flex align-items-center"><img src="img/ignacio.jpg" alt="Ignacio de Lisa" class="rounded-circle me-3" width="50" height="50">
                            <div>
                                <h6 class="mb-1">Ignacio De Lisa</h6>
                                <p class="text-secondary mb-0">Director, Frutas del Plata SA</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm bg-dark text-white border border-secondary">
                    <div class="card-body">
                        <div class="d-flex mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 24 24" fill="#ffc107" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-star text-warning">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                </polygon>
                            </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 24 24" fill="#ffc107" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-star text-warning">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                </polygon>
                            </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 24 24" fill="#ffc107" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-star text-warning">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                </polygon>
                            </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 24 24" fill="#ffc107" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-star text-warning">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                </polygon>
                            </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 24 24" fill="#ffc107" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-star text-warning">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                </polygon>
                            </svg></div>
                        <p class="mb-4">Working with TechForge was a game-changer for our startup. They
                            understood our vision and executed it perfectly.</p>
                        <div class="d-flex align-items-center"><img src="img/analaura.jpg" alt="Dra. Ana Laura Benavides" class="rounded-circle me-3" width="50" height="50">
                            <div>
                                <h6 class="mb-1">Dra. Ana Laura Benavides</h6>
                                <p class="text-secondary mb-0">Abogada, AB Estudio Jurídico</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm bg-dark text-white border border-secondary">
                    <div class="card-body">
                        <div class="d-flex mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 24 24" fill="#ffc107" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-star text-warning">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                </polygon>
                            </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 24 24" fill="#ffc107" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-star text-warning">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                </polygon>
                            </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 24 24" fill="#ffc107" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-star text-warning">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                </polygon>
                            </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 24 24" fill="#ffc107" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-star text-warning">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                </polygon>
                            </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 24 24" fill="#ffc107" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-star text-warning">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                </polygon>
                            </svg></div>
                        <p class="mb-4">The teams attention to detail and commitment to quality made our project
                            a huge success. Highly recommended!</p>
                        <div class="d-flex align-items-center"><img
                                src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?auto=format&amp;fit=crop&amp;w=150&amp;q=80"
                                alt="Emily Rodriguez" class="rounded-circle me-3" width="50" height="50">
                            <div>
                                <h6 class="mb-1">Usuario</h6>
                                <p class="text-secondary mb-0">Comisión Electoral 2024</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
@endsection
