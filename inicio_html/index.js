console.log("esto es un mensaje para Borja");

let nombre = document.querySelector("#id_nombre");
let botonenviar = document.querySelector("#id_botonenviar");
let botonborrar = document.querySelector("#id_botonborrar");

botonenviar.addEventListener("click", ()=>{ 
    Swal.fire({
        title: "Enhorabuena, registro completado " + nombre.value,
        icon: "success",
        draggable: true
      });
    });

botonborrar.addEventListener("click", ()=>{
    Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Empecemos de nuevo",
        footer: '<a href="#">Por qué no empiezas de nuevo?</a>'
      });
});
