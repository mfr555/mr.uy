// Load HTML content
document.addEventListener('DOMContentLoaded', function() {
    const sections = ['services', 'about', 'technologies', 'portfolio', 'testimonials', 'contact'];
    
    sections.forEach(section => {
        loadSection(section);
    });
});

// Load section content
function loadSection(sectionName) {
    fetch(`sections/${sectionName}.html`)
        .then(response => response.text())
        .then(html => {
            document.getElementById(`${sectionName}-content`).innerHTML = html;
            if (sectionName === 'services') {
                initializeServices();
            } else if (sectionName === 'portfolio') {
                initializePortfolio();
            }
        })
        .catch(error => console.error(`Error loading ${sectionName} section:`, error));
}

// Initialize services section
function initializeServices() {
    const services = [
        {
            icon: 'code-2',
            title: 'Custom Software Development',
            description: 'Tailored solutions designed to meet your specific business needs and challenges.'
        },
        {
            icon: 'globe',
            title: 'Web Development',
            description: 'Responsive and scalable web applications built with modern technologies.'
        },
        // Add other services...
    ];

    const servicesContainer = document.querySelector('#services .row');
    if (servicesContainer) {
        services.forEach(service => {
            const serviceElement = createServiceElement(service);
            servicesContainer.appendChild(serviceElement);
        });
    }
}

// Create service element
function createServiceElement(service) {
    const div = document.createElement('div');
    div.className = 'col-md-6 col-lg-4';
    div.innerHTML = `
        <div class="card h-100 border-0 shadow-sm">
            <div class="card-body text-center">
                <div class="mb-3">
                    <i class="lucide-${service.icon} icon-lg"></i>
                </div>
                <h5 class="card-title">${service.title}</h5>
                <p class="card-text text-muted">${service.description}</p>
            </div>
        </div>
    `;
    return div;
}

// Form handling
document.addEventListener('submit', function(e) {
    if (e.target.matches('#contact-form')) {
        e.preventDefault();
        handleContactForm(e.target);
    }
});

function handleContactForm(form) {
    const formData = new FormData(form);
    // Add form handling logic here
    console.log('Form submitted:', Object.fromEntries(formData));
    // Reset form
    form.reset();
    // Show success message
    alert('Thank you for your message. We will get back to you soon!');
}