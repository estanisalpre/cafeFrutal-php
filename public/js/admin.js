import { allButtons } from "./functions.js"

console.log('leyendo adminjs')

// Obtener el formulario y agregar el evento submit
document.addEventListener('DOMContentLoaded', () => {
    allButtons();
    console.log('leyendo all buttons')

    const form = document.querySelector('form');
    form.addEventListener('submit', function (event) {
        event.preventDefault();

        const prodName = document.querySelector('#productName').value;
        const price = document.querySelector('#price').value;

        // Enviar los datos al servidor
        fetch('/controllers/add-product.php', {
            method: 'POST',
            body: new FormData(form)
        })
        .then(response => response.text())
        .then(data => {
            console.log(data); // Mostrar mensaje de éxito o error
            loadProductList(); // Actualizar la lista de productos
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });

    loadProductList();  // Cargar la lista de productos al inicio
});

// Función para cargar la lista de productos desde el servidor
function loadProductList() {
    fetch('/product-list.php')
        .then(response => response.json())
        .then(products => {
            const productListSection = document.getElementById('productListSection');
            productListSection.innerHTML = '';  // Limpiar la lista antes de cargarla
            products.forEach(product => {
                const productItem = document.createElement('div');
                productItem.classList.add('product-item');
                productItem.innerHTML = `
                    <h4>${product.name}</h4>
                    <p>Precio: $${product.price}</p>
                    <p>Disponible: ${product.available ? 'Sí' : 'No'}</p>
                `;
                productListSection.appendChild(productItem);
            });
        })
        .catch(error => {
            console.error('Error al cargar productos:', error);
        });
}
