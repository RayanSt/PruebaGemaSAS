let archivo = document.querySelector('#myfile');
    archivo.addEventListener('change',()=>{
        document.querySelector('#title').innerText = archivo.files[0].name;
    });