@extends('layouts.webtemplate')

@section('title', 'Diseño Web Profesional en Uruguay | MR Soluciones Digitales')
@section('description', 'Creamos sitios web modernos, rápidos y optimizados para Google. Diseño web a medida, landing
    pages, sitios corporativos y tiendas online para empresas en Uruguay.')
@section('keywords', 'diseño web, diseño web uruguay, páginas web, sitio corporativo, tienda online, landing page, MR
    Soluciones Digitales')
@section('image', 'https://images.unsplash.com/photo-1525186402429-b4ff38bedbec?auto=format&fit=crop&w=1200&q=80')

@section('content')

    {{-- HERO --}}
    <section class="bg-dark text-white min-vh-70 d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-7">
                    <h1 class="display-5 fw-bold mb-3">Diseño Web Profesional en Uruguay</h1>
                    <p class="lead mb-4">Convierte visitantes en clientes con un sitio web moderno, rápido y optimizado para
                        Google. Nosotros diseñamos, desarrollamos y dejamos tu web lista para vender.</p>
                    <div class="d-flex flex-wrap gap-2">
                        <a href="#contacto" class="btn btn-light btn-lg">Solicitar presupuesto</a>
                        <a href="#planes" class="btn btn-outline-light btn-lg">Ver planes</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="position-relative text-center">
                        <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=500&h=500"
                            class="img-fluid rounded-circle shadow-lg" alt="Diseño web profesional" style="width: 400px; height: 400px; object-fit: cover;">

                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- BENEFICIOS DIFERENCIALES --}}
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-6 fw-bold mb-3">Sitios que venden: diseño, velocidad y SEO</h2>
                <p class="lead text-muted">Todo lo que necesitas para salir a competir online desde el día uno.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <h3 class="h5 fw-bold mb-2">Diseño a medida</h3>
                            <p class="text-muted mb-0">UI/UX acorde a tu marca y sector. Sin plantillas rígidas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <h3 class="h5 fw-bold mb-2">SEO desde el inicio</h3>
                            <p class="text-muted mb-0">Arquitectura, metatags y contenido preparado para Google.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <h3 class="h5 fw-bold mb-2">Rápido & seguro</h3>
                            <p class="text-muted mb-0">Optimización de carga, buenas prácticas y SSL/HTTPS.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <h3 class="h5 fw-bold mb-2">Listo para vender</h3>
                            <p class="text-muted mb-0">Formularios, WhatsApp, Analytics y conversiones configuradas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- TIPOS DE SITIO --}}
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-6 fw-bold mb-3">El tipo de sitio que tu negocio necesita</h2>
                <p class="lead text-muted">Elegí el formato y lo adaptamos a tus objetivos.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <h3 class="h5 fw-bold">Landing Page</h3>
                            <p class="text-muted">Ideal para campañas y lanzamientos. Una página orientada a conversión con
                                CTA claro.</p>
                            <ul class="text-muted small mb-3">
                                <li>Secciones clave y copy persuasivo</li>
                                <li>Formulario + WhatsApp</li>
                                <li>Medición de conversiones</li>
                            </ul>
                            <a href="#contacto" class="btn btn-outline-dark btn-sm">Quiero cotizar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <h3 class="h5 fw-bold">Sitio Corporativo</h3>
                            <p class="text-muted">Presencia sólida para empresas. Páginas de servicios, nosotros, blog y
                                contacto.</p>
                            <ul class="text-muted small mb-3">
                                <li>Estructura escalable y SEO on-page</li>
                                <li>Integraciones (Maps, RRSS, chat)</li>
                                <li>Velocidad y seguridad</li>
                            </ul>
                            <a href="#contacto" class="btn btn-outline-dark btn-sm">Quiero cotizar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <h3 class="h5 fw-bold">Tienda Online</h3>
                            <p class="text-muted">Catálogo, carrito y medios de pago locales. Pensada para vender 24/7.</p>
                            <ul class="text-muted small mb-3">
                                <li>Gestión de productos y stock</li>
                                <li>Checkout optimizado</li>
                                <li>Analytics y remarketing</li>
                            </ul>
                            <a href="#contacto" class="btn btn-outline-dark btn-sm">Quiero cotizar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- PROCESO --}}
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-6 fw-bold mb-3">Nuestro proceso</h2>
                <p class="lead text-muted">Transparente, ágil y orientado a resultados.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="card h-100 border-0 shadow-sm text-center">
                        <div class="card-body">
                            <h3 class="h6 fw-bold mb-1">1. Descubrimiento</h3>
                            <p class="text-muted small mb-0">Objetivos, marca, público y propuesta de valor.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card h-100 border-0 shadow-sm text-center">
                        <div class="card-body">
                            <h3 class="h6 fw-bold mb-1">2. Diseño</h3>
                            <p class="text-muted small mb-0">Wireframe y UI/UX alineado a conversión.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card h-100 border-0 shadow-sm text-center">
                        <div class="card-body">
                            <h3 class="h6 fw-bold mb-1">3. Desarrollo</h3>
                            <p class="text-muted small mb-0">Código limpio, velocidad y SEO on-page.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card h-100 border-0 shadow-sm text-center">
                        <div class="card-body">
                            <h3 class="h6 fw-bold mb-1">4. Lanzamiento & Soporte</h3>
                            <p class="text-muted small mb-0">Publicación, Analytics, conversiones y mantenimiento.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- PLANES (reutiliza tu include si quieres mostrar packs específicos) --}}
    <section id="planes" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-6 fw-bold mb-3">Planes de Diseño Web</h2>
                <p class="lead text-muted">Elegí un punto de partida y lo adaptamos a tu negocio.</p>
            </div>


            @isset($packs)
                <div class="row d-flex justify-content-center">
                    @foreach ($packs as $pack)
                        <div id="pack_{{ $pack->id }}" class="col-md-4 mb-4">
                            @include('layouts.cards.pack-style-1', ['pack' => $pack])
                        </div>
                    @endforeach
                </div>
            @else
                {{-- Fallback simple si no se pasan $packs --}}
                <div class="row g-4 d-flex justify-content-center">
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body">
                                <h3 class="h5 fw-bold mb-2">Landing Page</h3>
                                <p class="text-muted">Una página enfocada en captar leads. Ideal para campañas.</p>
                                <ul class="small text-muted mb-3">
                                    <li>Secciones clave</li>
                                    <li>Formulario + WhatsApp</li>
                                    <li>SEO básico</li>
                                </ul>
                                <a href="#contacto" class="btn btn-dark btn-sm">Solicitar presupuesto</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body">
                                <h3 class="h5 fw-bold mb-2">Sitio Corporativo</h3>
                                <p class="text-muted">Presencia sólida con varias páginas y blog.</p>
                                <ul class="small text-muted mb-3">
                                    <li>Arquitectura SEO</li>
                                    <li>Blog</li>
                                    <li>Integraciones</li>
                                </ul>
                                <a href="#contacto" class="btn btn-dark btn-sm">Solicitar presupuesto</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body">
                                <h3 class="h5 fw-bold mb-2">Tienda Online</h3>
                                <p class="text-muted">Vende con medios de pago locales y gestión de stock.</p>
                                <ul class="small text-muted mb-3">
                                    <li>Checkout optimizado</li>
                                    <li>Analytics</li>
                                    <li>Soporte</li>
                                </ul>
                                <a href="#contacto" class="btn btn-dark btn-sm">Solicitar presupuesto</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endisset
        </div>
    </section>

    {{-- CASOS DE ÉXITO (reutiliza los que ya tienes) --}}
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-6 fw-bold mb-3">Casos de éxito</h2>
                <p class="lead text-muted">Algunos proyectos que reflejan nuestro enfoque en resultados.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm portfolio-card">
                        <div class="card-body">
                            <img src="/img/ab.webp" class="img-fluid rounded mb-3" alt="AB Estudio Jurídico">
                            <h5>AB Estudio Jurídico</h5>
                            <p class="text-muted small mb-3">Sitio corporativo con enfoque en captación por WhatsApp y blog.</p>
                            <a href="https://abestudiojuridico.com" class="btn btn-outline-dark btn-sm" target="_blank" rel="nofollow noopener">Visitar</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm portfolio-card">
                        <div class="card-body">
                            <img src="/img/duran.webp" class="img-fluid rounded mb-3" alt="Terapia Holística">
                            <h5>Terapia Holística</h5>
                            <p class="text-muted small mb-3">Landing con diseño de marca y textos orientados a conversión.</p>
                            <a href="https://terapiaholistica.uy" class="btn btn-outline-dark btn-sm" target="_blank" rel="nofollow noopener">Visitar</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm portfolio-card">
                        <div class="card-body">
                            <img src="/img/340-1.webp" class="img-fluid rounded mb-3" alt="Vamos por más">
                            <h5>Vamos por más</h5>
                            <p class="text-muted small mb-3">Web flexible con blog y plan de mejora continua.</p>
                            <a href="https://vamospormas.uy" class="btn btn-outline-dark btn-sm" target="_blank" rel="nofollow noopener">Visitar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-6 fw-bold mb-3">Preguntas frecuentes</h2>
                <p class="lead text-muted">Resolvemos dudas antes de empezar.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <h3 class="h6 fw-bold mb-2">¿En cuánto tiempo estará mi web?</h3>
                            <p class="text-muted small mb-0">Entre 7 y 15 días hábiles según el alcance y los contenidos.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <h3 class="h6 fw-bold mb-2">¿Incluye SEO?</h3>
                            <p class="text-muted small mb-0">Configuramos SEO on-page (metatags, estructura y performance)
                                para que Google te encuentre.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <h3 class="h6 fw-bold mb-2">¿Pueden gestionar dominio y hosting?</h3>
                            <p class="text-muted small mb-0">Sí. Te entregamos todo funcionando con SSL y correos si los
                                necesitás.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <h3 class="h6 fw-bold mb-2">¿Configuran Analytics y conversiones?</h3>
                            <p class="text-muted small mb-0">Sí, dejamos GA4 y eventos de conversión listos para tus
                                campañas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- SCHEMA ORG: Service + Organization para SEO y Ads --}}
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Diseño Web Profesional",
  "provider": {
    "@type": "Organization",
    "name": "MR Soluciones Digitales",
    "url": "{{ url('/') }}"
  },
  "areaServed": "Uruguay",
  "serviceType": "Web Design",
  "offers": {
    "@type": "Offer",
    "availability": "https://schema.org/InStock",
    "priceCurrency": "USD"
  }
}
</script>

@endsection
