"use strict";
async function fileGetIcon() {
    const fileInput = document.getElementById('icon');
    const file = fileInput.files;

    await handleFileUploadIcon(file);
}

// Manejar la selección de archivo por botón
document.getElementById('uploadButton-2').addEventListener('click', fileGetIcon);

// Manejar el evento de arrastrar y soltar
const dropAreaIcons = document.querySelector('.file-upload-label-icon');
const pdfSelectIcon = document.getElementById('pdf-icon');
let selectedValueIcon = "";

// Añade un event listener para el evento change
pdfSelectIcon.addEventListener('change', (event) => {
    selectedValueIcon = event.target.value;
});


dropAreaIcons.addEventListener('dragover', (event) => {
    event.preventDefault();
    dropAreaIcons.classList.add('drag-over');
});

dropAreaIcons.addEventListener('dragleave', () => {
    dropAreaIcons.classList.remove('drag-over');
});

dropAreaIcons.addEventListener('drop', async (event) => {
    event.preventDefault();
    dropAreaIcons.classList.remove('drag-over');
    const file = event.dataTransfer.files;

    document.getElementById('uploadButton-2').removeEventListener('click', fileGetIcon); 

    document.getElementById('uploadButton-2').addEventListener('click', async function() {
        await handleFileUploadIcon(file);
    });
});

async function handleFileUploadIcon(files) {
    if(!selectedValueIcon){
        document.getElementById("error-icon").innerHTML = "Elegir un PDF";
        return;
    }
    if(files.length == 0){
        document.getElementById("error-icon").innerHTML = "Imagen no elegida.";
        return;
    }
    
    document.getElementById("error-icon").innerHTML = "";

    let formData = new FormData();

    // Añadir archivos al FormData
    for (let i = 0; i < files.length; i++) {
        formData.append('icon[]', files[i]);
    }

    formData.append('pdf', selectedValueIcon);

    let options = {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
        },
        body: formData
    };

    try {
        const response = await fetch('/upload/images-icons', options);
        if (!response.ok) {
            throw new Error('La respuesta de la red no fue correcta');
        }

        const result = await response.text();
        if(result == 'true'){
            document.getElementById('content-icons').classList.add('hidden');
            location.reload();
        }else{
            document.getElementById("error-icon").innerHTML = "Hubo un error, intentar de nuevo.";
        }
    } catch (error) {
        console.error('Error:', error);
    }
}