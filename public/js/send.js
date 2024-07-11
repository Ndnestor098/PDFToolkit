"use strict";

const imageInput = document.getElementById('image');
const iconInput = document.getElementById('icon');
const imageForm = document.getElementById('form-image');
const iconForm = document.getElementById('form-icon');

imageInput.addEventListener('change', () => {
    const formData = new FormData(imageForm); // Obtener datos del formulario
    send(formData, imageForm);
});

iconInput.addEventListener('change', () => {
    const formData = new FormData(iconForm); // Obtener datos del formulario
    send(formData, iconForm);
});

function send(data, form) {
    let method = form.getAttribute("method");
    let action = form.getAttribute("action");
    let encabezado = new Headers();

    let config = { 
        method:method,
        header:encabezado,
        mode:"cors",
        cache:'no-cache',
        body:data,
    }

    fetch(action, config)
        .then(response => {
            if (!response.ok) {
                console.log(response)
                throw new Error('Error al subir imágenes');
            }
            return response.text();
        })
        .then(res => console.log(res))
};