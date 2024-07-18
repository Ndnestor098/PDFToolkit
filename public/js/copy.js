"use strict";

// Obtener todos los elementos con la clase 'copy-value'
const copyElements = document.querySelectorAll('.fa-copy');

// Iterar sobre cada elemento y agregar un evento clic
copyElements.forEach(element => {
    element.addEventListener('click', () => {
        // Obtener el valor del atributo 'data-value'
        const valueToCopy = element.getAttribute('data-value');

        // Crear un elemento temporal para copiar el texto al portapapeles
        const tempElement = document.createElement('textarea');
        tempElement.value = valueToCopy;
        tempElement.setAttribute('readonly', '');
        tempElement.style.position = 'absolute';
        tempElement.style.left = '-9999px';
        document.body.appendChild(tempElement);

        // Seleccionar todo el texto en el elemento temporal
        tempElement.select();
        tempElement.setSelectionRange(0, tempElement.value.length);

        // Copiar el texto seleccionado al portapapeles
        try {
            const successful = document.execCommand('copy');
            const message = successful ? 'Valor ('+valueToCopy+') copiado al portapapeles.' : 'Error al intentar copiar el valor.';

            document.getElementById('alert-message').classList.remove('hidden');
            document.getElementById('message').innerHTML = message;
            setTimeout(()=>{
                document.getElementById('alert-message').classList.add('hidden');
                document.getElementById('message').innerHTML = '';
            }, 3000);

        } catch (err) {
            console.error('Error al intentar copiar el valor:', err);
        }

        // Remover el elemento temporal
        document.body.removeChild(tempElement);
    });
});