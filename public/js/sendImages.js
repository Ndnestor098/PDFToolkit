"use strict";
async function fileGet() {
    const fileInput = document.getElementById('image');
    const file = fileInput.files;

    await handleFileUpload(file);
}

// Manejar la selección de archivo por botón
document.getElementById('uploadButton-1').addEventListener('click', fileGet);

// Manejar el evento de arrastrar y soltar
const dropAreaImages = document.querySelector('.file-upload-label-images');
const pdfSelect = document.getElementById('pdf-images');
let selectedValue = "";

// Añade un event listener para el evento change
pdfSelect.addEventListener('change', (event) => {
    selectedValue = event.target.value;
});


dropAreaImages.addEventListener('dragover', (event) => {
    event.preventDefault();
    dropAreaImages.classList.add('drag-over');
});

dropAreaImages.addEventListener('dragleave', () => {
    dropAreaImages.classList.remove('drag-over');
});

dropAreaImages.addEventListener('drop', async (event) => {
    event.preventDefault();
    dropAreaImages.classList.remove('drag-over');
    const file = event.dataTransfer.files;

    document.getElementById('uploadButton-1').removeEventListener('click', fileGet); 

    document.getElementById('uploadButton-1').addEventListener('click', async function() {
        await handleFileUpload(file);
    });
});

async function handleFileUpload(files) {
    if(!selectedValue){
        document.getElementById("error-image").innerHTML = "Elegir un PDF";
        return;
    }
    if(files.length == 0){
        document.getElementById("error-image").innerHTML = "Imagen no elegida.";
        return;
    }
    
    document.getElementById("error-image").innerHTML = "";

    let formData = new FormData();

    // Añadir archivos al FormData
    for (let i = 0; i < files.length; i++) {
        formData.append('image[]', files[i]);
    }

    formData.append('pdf', selectedValue);

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
            document.getElementById('content-images').classList.add('hidden');
            location.reload();
        }else{
            document.getElementById("error-image").innerHTML = "Hubo un error, intentar de nuevo.";
        }
    } catch (error) {
        console.error('Error:', error);
    }
}