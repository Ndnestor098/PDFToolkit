"use strict";

async function fileGet() {
    const fileInput = document.getElementById('file');
    const file = fileInput.files[0];
    const load = document.getElementById("loading");

    await getJSON(file, load);
}

// Manejar la selección de archivo por botón
document.getElementById('uploadButton-3').addEventListener('click', fileGet);

// Manejar el evento de arrastrar y soltar
const dropArea = document.querySelector('.file-upload-label-update');
const nameFile = document.getElementById("file");
const clickButton = document.getElementById('upload-click');
let file = '';

clickButton.addEventListener("click", ()=>{
    document.getElementById("content-update").classList.remove('hidden');
})

document.getElementById("close-update").addEventListener("click", ()=>{
    document.getElementById("content-update").classList.add('hidden');
})

nameFile.addEventListener("change", (e) => {
    file = e.target.files[0];
    document.getElementById('error-update').style.color = '#495b71';
    document.getElementById('error-update').innerText = file['name'];
})

dropArea.addEventListener('dragover', (event) => {
    event.preventDefault();
    dropArea.classList.add('drag-over');
});

dropArea.addEventListener('dragleave', () => {
    dropArea.classList.remove('drag-over');
});

dropArea.addEventListener('drop', async (event) => {
    event.preventDefault();
    dropArea.classList.remove('drag-over');
    const file = event.dataTransfer.files[0];
    console.log(file);
    document.getElementById('error-update').style.color = '#495b71';
    document.getElementById('error-update').innerText = file['name'];

    document.getElementById('uploadButton-3').removeEventListener('click', fileGet); 

    document.getElementById('uploadButton-3').addEventListener('click', async function() {
        await getJSON(file);
    });
});

async function getJSON(file) {
    const formData = new FormData();

    if(!file){
        document.getElementById('error-update').style.color = '#e64747';
        document.getElementById('error-update').innerText = 'Sube un archivo excel para la lectura.';
        return ;
    } else {
        document.getElementById('error-update').style.color = '#495b71';
        document.getElementById('error-update').innerText = file['name'];      
        formData.append('file', file);
    }

    const selectInput = document.getElementById('pdf-update');

    if(!selectInput.value){
        document.getElementById('error-update').style.color = '#e64747';
        document.getElementById('error-update').innerText = 'Selecciona una Plantilla Guia.';
        return ;
    } else {
        document.getElementById('error-update').style.color = '#495b71';
        document.getElementById('error-update').innerText = file['name'];    
        // Obtén el valor del select
        formData.append('pdf', selectInput.value);    
    }

    let options = {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
        },
        body: formData
    };

    try {
        const response = await fetch('/excel', options);
        if (!response.ok) {
            throw new Error('La respuesta de la red no fue correcta');
        }
        console.log(await response.json())
        document.getElementById("content-update").classList.add('hidden');

    } catch (error) {
        console.error('Error:', error);
    }
}
