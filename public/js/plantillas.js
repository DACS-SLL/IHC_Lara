const templates = [
    { name: 'Plantilla 1', image: 'teacher.png' }   
];

let currentTemplateIndex = 0;

function updateCarousel() {
    const carousel = document.getElementById('template-carousel');
    carousel.innerHTML = `
        <div class="template-card">
            <img src="/images/templates/${templates[currentTemplateIndex].image}" alt="${templates[currentTemplateIndex].name}" class="h-full w-full object-cover">
        </div>
    `;
}

function prevTemplate() {
    currentTemplateIndex = (currentTemplateIndex - 1 + templates.length) % templates.length;
    updateCarousel();
}

function nextTemplate() {
    currentTemplateIndex = (currentTemplateIndex + 1) % templates.length;
    updateCarousel();
}

function personalizarPlantilla() {
    alert(`Personalizando la ${templates[currentTemplateIndex].name}`);
}