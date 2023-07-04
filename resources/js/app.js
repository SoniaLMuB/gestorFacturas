//import './bootstrap';
//Configurar DropZone para subir los archivos
import Dropzone from "dropzone";
Dropzone.autoDiscover = false;
const dropzone = new Dropzone('#dropzone', {
    dictDefaultMessage: "Sube tu factura aquí",
    acceptedFiles: ".png, .jpg, .jpeg, .gif",
    addRemoveLinks: true, // Habilitar enlaces para eliminar archivos
    dictRemoveFile: "Borrar archivo", // Texto para el enlace de eliminar archivo
    maxFiles: 1,
    uploadMultiple: false,
    //TRabajando 
    init: function(){
        if (document.querySelector('[name="imagen"]').value.trim()){
            const imagenPublicada={};
            imagenPublicada.size=1234
            imagenPublicada.name=document.querySelector('[name="imagen"]').value;
            this.options.addedfile.call(this, imagenPublicada);
            this.options.thumbnail.call(this,imagenPublicada,'/upload/${imagenPublicada.name}');
            imagenPublicada.previewElement.classList.add("dz-success","dz-complete");
        }
    }


});


//Eventos de Dropzone
// dropZone.on('sending', function(file,xhr,formdata) {
//     console.log(file);
// });


//Evento de envio  correo correcto de imagen
dropzone.on('success', function(file,response) {
    //console.log(response);
    document.querySelector('[name="imagen"]').value=response.imagen;
});

//Envio por error
dropzone.on('error', function(file,message) {
    console.log(message);
});

//REmover un archivo
dropzone.on('removedfile', function() {
    document.querySelector('[name="image"]').value= '';
});