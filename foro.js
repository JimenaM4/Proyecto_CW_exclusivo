// document.getElementById('imagen').addEventListener('change', function() {
//     var file = this.files[0];
//     var fileType = file.type.toLowerCase();
//     var allowedExtensions = ['jpeg', 'jpg', 'png'];

//     if (allowedExtensions.indexOf(fileType) === -1) {
//         alert('Formato de archivo no válido. Por favor, elige una imagen en formato JPEG o PNG.');
//         this.value = '';
//     }
//   

// });
window.addEventListener("load", ()=>{
    const titulo = document.getElementById("title");
    const descripcion = document.getElementById("describe");
    const tema= document.getElementById("topic");
    const preguntas= document.getElementById("question");
    const publicar= document.getElementById("publicar");

    publicar.addEventListener("click", ()=>{
         //sanitización REGEX
         const title = /^\D{3,25}$/i;
         //titulo de 3 a 30 carácteres, sin números
         let tituloR = title.test(titulo.value);
         if(!tituloR){
             alert("Título invalido: verifica que no tenga números y que no pase de los 25 carácteres");
         }
         const descrip = /^[\D\w]{5,100}$/i;
         //descripción de 5-100 carácteres, si acepta números
         let descripR = descrip.test(descripcion.value);
         if(!descripR){
             alert("Descripción invalida: verifica que no pase de los 100 carácteres");
         }
         const temaT = /^\D{3,70}$/i;
         //tema acepta tema de 70 caracteres
         let topic = temaT.test(tema.value);
         if(!topic){
            alert("Tema invalido: verifica que no pase de los 70 carácteres");
         }
         const preg = /^[\D\w]{5,200}$/i;
        //comentario de 5-100 carácteres, si acepta números
        let preR = preg.test(preguntas.value);
        if(!pregR){
            alert("Pregunta/Comentario invalido: verifica que no pase de los 200 carácteres");
        }
    });

});