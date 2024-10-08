"use strict";

async function fileGet() {
    const fileInput = document.getElementById('file');
    const file = fileInput.files[0];
    const load = document.getElementById("loading");

    await getJSON(file, load);
}

// Manejar la selección de archivo por botón
document.getElementById('uploadButton').addEventListener('click', fileGet);

// Manejar el evento de arrastrar y soltar
const dropArea = document.querySelector('.file-upload-label');
const nameFile = document.getElementById("file");
let file = '';

nameFile.addEventListener("change", (e) => {
    file = e.target.files[0];
    document.getElementById('name').style.color = '#fff';
    document.getElementById('name').innerText = file['name'];
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
    const load = document.getElementById("loading");

    document.getElementById('name').style.color = '#fff';
    document.getElementById('name').innerText = file['name'];

    document.getElementById('uploadButton').removeEventListener('click', fileGet); 

    document.getElementById('uploadButton').addEventListener('click', async function() {
        await getJSON(file, load);
    });
});

async function handleFileUpload(jsonArray, load) {
    if (Object.prototype.toString.call(jsonArray) === '[object Object]') {
        const aElements = [];

        for (let index in jsonArray) {
            const data = jsonArray[index];
            let selectPDF = document.getElementById("select-pdf").value;

            if(selectPDF){
                selectPDF = "PDF-" + selectPDF;

                if(selectPDF != index){
                    continue;
                }
            }

            let options = {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                },
                body: JSON.stringify(data)
            };
            try {
                const response = await fetch('/FilePDF', options);
                if (!response.ok) {
                    load.classList.add("hidden");
                    throw new Error('La respuesta de la red no fue correcta');
                }
                const blob = await response.blob();
                const url = window.URL.createObjectURL(blob);

                const a = document.createElement('a');
                a.href = url;
                a.download = `template.pdf`;
                aElements.push(a);
            } catch (error) {
                load.classList.add("hidden");
                console.error('Error:', error);
            }
        }

        aElements.forEach(a => {
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
        });

        load.classList.add("hidden");
    } else {
        alert('Error en la estructura del archivo.');
    }
}

async function getJSON(file, load) {
    const formData = new FormData();

    if(!file){
        document.getElementById('name').style.color = '#e64747';
        document.getElementById('name').innerText = 'Sube un archivo excel para la lectura.';
        return ;
    } else {
        document.getElementById('name').style.color = '#fff';
        document.getElementById('name').innerText = file['name'];      
        formData.append('file', file);
    }

    const selectInput = document.getElementById('pdf');

    if(!selectInput.value){
        document.getElementById('name').style.color = '#e64747';
        document.getElementById('name').innerText = 'Selecciona una Plantilla Guia.';
        return ;
    } else {
        document.getElementById('name').style.color = '#fff';
        document.getElementById('name').innerText = file['name'];    
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
        load.classList.remove("hidden");
        const response = await fetch('/excel', options);
        if (!response.ok) {
            load.classList.add("hidden");
            throw new Error('La respuesta de la red no fue correcta');
        }

        const json = await response.json();
        
        handleFileUpload(json, load);
    } catch (error) {
        load.classList.add("hidden");
        console.error('Error:', error);
    }
}
