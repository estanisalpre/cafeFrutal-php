import { allButtons } from "./functions.js"

// Obtener el formulario y agregar el evento submit
document.addEventListener('DOMContentLoaded', () => {
    allButtons();

    console.log('Entramos al DOM de admin.js')
    //FUNCIONALIDAD FORMULARIO AGREGAR PRODUCTOS
    const form = document.querySelector('form');
    form.addEventListener('submit', function (event) {
        event.preventDefault();

        const prodName = document.querySelector('#productName').value;
        const price = document.querySelector('#price').value;

        // Enviar los datos al servidor
        fetch('/add-product.php', {
            method: 'POST',
            body: new FormData(form)
        })
        .then(response => response.text())
        .then(data => {
            console.log('Éxito');
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });

    // Seleccionar todos los botones "Eliminar"
    const deleteButtons = document.querySelectorAll(".delete-btn");
    deleteButtons.forEach(button => {
        console.log('estamos por entrar al delete-btn for each')
        button.addEventListener("click", (event) => {
            // Obtener el ID del producto del atributo data-id del contenedor padre
            const productElement = event.target.closest(".product");
            const productId = productElement.dataset.id;

            console.log(productId)
            
            // Confirmar eliminación
            if (confirm("¿Seguro que deseas eliminar este producto?")) {
                console.log('entramos al delete_product')
                fetch('/delete_product.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ id: productId })
                })
                .then(response => response.json())
                .then(data => {
                    console.log(data)
                    if (data.success) {
                        productElement.remove(); // Eliminar el producto del DOM
                        alert("Producto eliminado exitosamente.");
                    } else {
                        alert("Error al eliminar el producto.");
                    }
                })
                .catch(error => console.error('Error:', error));
            }
        });
    });

    // Seleccionar todos los botones "Editar"
    const editButtons = document.querySelectorAll(".edit-btn");
    editButtons.forEach(button => {
        button.addEventListener("click", (event) => {
            // Obtener el ID del producto del atributo data-id del contenedor padre
            const productElement = event.target.closest(".product");
            const productId = productElement.dataset.id;

            // Solicitar los nuevos valores al usuario
            const newName = prompt("Introduce el nuevo nombre del producto:");
            const newValue = prompt("Introduce el nuevo precio del producto:");

            if (newName && newValue) {
                fetch('/edit_product.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ id: productId, productName: newName, productValue: newValue })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert("Producto editado exitosamente.");
                        location.reload(); // Recargar la página para reflejar los cambios
                    } else {
                        alert("Error al editar el producto.");
                    }
                })
                .catch(error => console.error('Error:', error));
            }
        });
    });
});