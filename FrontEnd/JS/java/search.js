document.addEventListener('DOMContentLoaded', function() {
    const cards = [
        {
            id: 1,
            title: "Muñecas Artesanales",
            description: "Coloridas muñecas hechas a mano.",
            image: "images/muñecas.jpg",
            modalId: "modalArtesania1",
            modalTitle: "Detalles de Muñecas Artesanales",
            modalContent: `
                <p><strong>Nombre del Taller:</strong> Taller de Muñecas</p>
                <p><strong>Ubicación:</strong> Ciudad de México, México</p>
                <p><strong>Contacto:</strong> +52 55 1234 5678</p>
            `
        },
        {
            id: 2,
            title: "Cerámica de Barro",
            description: "Vasijas y platos de barro tradicionales.",
            image: "images/barro.jpg",
            modalId: "modalArtesania2",
            modalTitle: "Detalles de Cerámica de Barro",
            modalContent: `
                <p><strong>Nombre del Taller:</strong> Taller de Barro</p>
                <p><strong>Ubicación:</strong> Oaxaca, México</p>
                <p><strong>Contacto:</strong> +52 951 234 5678</p>
            `
        },
        {
            id: 3,
            title: "Tejidos de Lana",
            description: "Chalecos y cobijas tejidas a mano.",
            image: "images/tejidos.jpg",
            modalId: "modalArtesania3",
            modalTitle: "Detalles de Tejidos de Lana",
            modalContent: `
                <p><strong>Nombre del Taller:</strong> Tejidos y Más</p>
                <p><strong>Ubicación:</strong> Chiapas, México</p>
                <p><strong>Contacto:</strong> +52 961 123 4567</p>
            `
        },
        {
            id: 4,
            title: "Alebrijes",
            description: "Figuras fantásticas talladas y pintadas.",
            image: "images/alebrijes.jpg",
            modalId: "modalArtesania4",
            modalTitle: "Detalles de Alebrijes",
            modalContent: `
                <p><strong>Nombre del Taller:</strong> Alebrijes Creativos</p>
                <p><strong>Ubicación:</strong> Oaxaca, México</p>
                <p><strong>Contacto:</strong> +52 951 987 6543</p>
            `
        },
       
        {
            id: 5,
            title: " Bordados",
            description: "Blusas y servilletas con bordados detallados.",
            image: "images/bordados.jpg",
            modalId: "modalArtesania7",
            modalTitle: "Detalles de Textiles Bordados",
            modalContent: `
                <p><strong>Nombre del Taller:</strong> Bordados del Sur</p>
                <p><strong>Ubicación:</strong> Chiapas, México</p>
                <p><strong>Contacto:</strong> +52 961 234 5678</p>
            `
        },
        {
            id: 5,
            title: "Joyería de Plata",
            description: "Exquisitos diseños en plata.",
            image: "images/joyeria.jpg",
            modalId: "modalArtesania5",
            modalTitle: "Detalles de Joyería de Plata",
            modalContent: `
                <p><strong>Nombre del Taller:</strong> Platería Fina</p>
                <p><strong>Ubicación:</strong> Taxco, México</p>
                <p><strong>Contacto:</strong> +52 762 345 6789</p>
            `
        },
        
    ];

    const searchInput = document.getElementById('searchInput');
    const cardsContainer = document.getElementById('cardsContainer');

    function renderCards(cardsToRender) {
        cardsContainer.innerHTML = '';
        cardsToRender.forEach(card => {
            const cardHtml = `
                <div class="col-md-4">
                    <div class="card">
                        <img src="${card.image}" class="card-img-top" alt="Imagen de ${card.title}">
                        <div class="card-body">
                            <h5 class="card-title">${card.title}</h5>
                            <p class="card-text">${card.description}</p>
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#${card.modalId}">Ver Más</a>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="${card.modalId}" tabindex="-1" role="dialog" aria-labelledby="${card.modalId}Label" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="${card.modalId}Label">${card.modalTitle}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                ${card.modalContent}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            `;
            cardsContainer.insertAdjacentHTML('beforeend', cardHtml);
        });
    }

    renderCards(cards);

    searchInput.addEventListener('input', function() {
        const query = searchInput.value.toLowerCase();
        const filteredCards = cards.filter(card => card.title.toLowerCase().includes(query));
        renderCards(filteredCards);
    });
});
