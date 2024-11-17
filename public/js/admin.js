import { allButtons } from "./functions.js"

// Obtener el formulario y agregar el evento submit
document.addEventListener('DOMContentLoaded', () => {
    allButtons();

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

    //FUNCIONALIDAD BOTON EDITAR
    
});

//ELIMINAR PRODUCTOS
function deleteProduct(id) {
    if (confirm("¿Seguro que deseas eliminar este producto?")) {
        fetch('delete_product.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ id })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                document.querySelector(`.product[data-id="${id}"]`).remove();
                alert("Producto eliminado exitosamente.");
            } else {
                alert("Error al eliminar el producto.");
            }
        })
        .catch(error => console.error('Error:', error));
    }
}

//EDITAR PRODUCTOS
function editProduct(id) {
    const newName = prompt("Introduce el nuevo nombre del producto:");
    const newValue = prompt("Introduce el nuevo precio del producto:");
    if (newName && newValue) {
        fetch('edit_product.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ id, productName: newName, productValue: newValue })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert("Producto editado exitosamente.");
                location.reload();
            } else {
                alert("Error al editar el producto.");
            }
        })
        .catch(error => console.error('Error:', error));
    }
}