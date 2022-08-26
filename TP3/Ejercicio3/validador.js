//Expresiones regulares para validar
const expresiones = {
    numData: /^[0-9]{1,4}$/,
    strNom: /^[a-zA-Z\s]{4,20}$/,
    titulo: /^[a-zA-Z0-9\s]{3,50}$/,
}

// campos para validaciones
const campos = {
    titulo: false,
    actor: false,
    director: false,
    guion: false,
    produccion: false,
    nacionalidad: false,
    anio: false,
    duracion: false,
    genero: false,
    sinopsis: false,
    archivo: false
}

//captampos el formulario y los inputs
const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');
const genero = document.getElementById('genero');
const archivo = document.getElementById('file_peli');

// Validaciones Expresiones Regulares

const validarCampo = (expresion, input, campo) => {
    if (expresion.test(input.value)) {
        document.getElementById(`grupo__${campo}`).classList.remove('valid-error');
        document.getElementById(`grupo__${campo}`).classList.add('valid-correct');

        document.querySelector(`#grupo__${campo} i`).classList.remove('bi-x-circle');
        document.querySelector(`#grupo__${campo} i`).classList.add('bi-check-circle');

        document.querySelector(`#grupo__${campo} .error`).classList.remove('text-incorrect');
        document.querySelector(`#grupo__${campo} .ok`).classList.add('text-correct');
        console.log(campo, input.value)

        campos[campo] = true;


    } else {
        document.getElementById(`grupo__${campo}`).classList.remove('valid-correct');
        document.getElementById(`grupo__${campo}`).classList.add('valid-error');

        document.querySelector(`#grupo__${campo} i`).classList.remove('bi-check-circle');
        document.querySelector(`#grupo__${campo} i`).classList.add('bi-x-circle');

        document.querySelector(`#grupo__${campo} .error`).classList.add('text-incorrect');
        document.querySelector(`#grupo__${campo} .ok`).classList.remove('text-correct');

        campos[campo] = false;

    }
}

const validarFormulario = (e) => {

    switch (e.target.name) {
        case 'titulo':
            validarCampo(expresiones.titulo, e.target, 'titulo');
            break;
        case 'actor':
            validarCampo(expresiones.strNom, e.target, 'actor');
            break;
        case 'director':
            validarCampo(expresiones.strNom, e.target, 'director');
            break;
        case 'guion':
            validarCampo(expresiones.strNom, e.target, 'guion');
            break;
        case 'produccion':
            validarCampo(expresiones.strNom, e.target, 'produccion');
            break;
        case 'nacionalidad':
            validarCampo(expresiones.strNom, e.target, 'nacionalidad');
            break;
        case 'anio':
            validarCampo(expresiones.numData, e.target, 'anio');
            break;
        case 'duracion':
            validarCampo(expresiones.numData, e.target, 'duracion');
            break;


        default:
            break;
    }
}


inputs.forEach((input) => {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
})

document.getElementById('reset').addEventListener('click', resetInput);

genero.addEventListener('blur', validarGenero)

function resetInput() {
    inputs.forEach((input) => {
        input.classList.remove('valid-error');
        input.classList.remove('valid-correct');
        input.classList.remove('text-incorrect');
        input.classList.remove('text-correct');
    })

}

function validarGenero() {
    switch (genero.value) {
        case 'comedia':
            campos.genero = true;
            document.getElementById('grupo__genero').classList.remove('valid-error');
            document.getElementById('grupo__genero').classList.add('valid-correct');

            document.querySelector('#grupo__genero i').classList.remove('bi-x-circle');
            document.querySelector('#grupo__genero i').classList.add('bi-check-circle');

            document.querySelector('#grupo__genero .error').classList.remove('text-incorrect');
            document.querySelector('#grupo__genero .ok').classList.add('text-correct');
            break;
        case 'drama':
            campos.genero = true;
            document.getElementById('grupo__genero').classList.remove('valid-error');
            document.getElementById('grupo__genero').classList.add('valid-correct');

            document.querySelector('#grupo__genero i').classList.remove('bi-x-circle');
            document.querySelector('#grupo__genero i').classList.add('bi-check-circle');

            document.querySelector('#grupo__genero .error').classList.remove('text-incorrect');
            document.querySelector('#grupo__genero .ok').classList.add('text-correct');
            break;
        case 'terror':
            campos.genero = true;
            document.getElementById('grupo__genero').classList.remove('valid-error');
            document.getElementById('grupo__genero').classList.add('valid-correct');

            document.querySelector('#grupo__genero i').classList.remove('bi-x-circle');
            document.querySelector('#grupo__genero i').classList.add('bi-check-circle');

            document.querySelector('#grupo__genero .error').classList.remove('text-incorrect');
            document.querySelector('#grupo__genero .ok').classList.add('text-correct');
            break;
        case 'romantico':
            campos.genero = true;
            document.getElementById('grupo__genero').classList.remove('valid-error');
            document.getElementById('grupo__genero').classList.add('valid-correct');

            document.querySelector('#grupo__genero i').classList.remove('bi-x-circle');
            document.querySelector('#grupo__genero i').classList.add('bi-check-circle');

            document.querySelector('#grupo__genero .error').classList.remove('text-incorrect');
            document.querySelector('#grupo__genero .ok').classList.add('text-correct');
            break;
        case 'suspenso':
            campos.genero = true;
            document.getElementById('grupo__genero').classList.remove('valid-error');
            document.getElementById('grupo__genero').classList.add('valid-correct');

            document.querySelector('#grupo__genero i').classList.remove('bi-x-circle');
            document.querySelector('#grupo__genero i').classList.add('bi-check-circle');

            document.querySelector('#grupo__genero .error').classList.remove('text-incorrect');
            document.querySelector('#grupo__genero .ok').classList.add('text-correct');
            break;
        case 'otras':
            campos.genero = true;
            document.getElementById('grupo__genero').classList.remove('valid-error');
            document.getElementById('grupo__genero').classList.add('valid-correct');

            document.querySelector('#grupo__genero i').classList.remove('bi-x-circle');
            document.querySelector('#grupo__genero i').classList.add('bi-check-circle');

            document.querySelector('#grupo__genero .error').classList.remove('text-incorrect');
            document.querySelector('#grupo__genero .ok').classList.add('text-correct');
            break;
        default:
            document.getElementById(`grupo__genero`).classList.remove('valid-correct');
            document.getElementById(`grupo__genero`).classList.add('valid-error');

            document.querySelector(`#grupo__genero i`).classList.remove('bi-check-circle');
            document.querySelector(`#grupo__genero i`).classList.add('bi-x-circle');

            document.querySelector(`#grupo__genero .error`).classList.add('text-incorrect');
            document.querySelector(`#grupo__genero .ok`).classList.remove('text-correct');

            campos.genero = false;
            break;
    }
}

//Validacion de que no este vacio el input File

archivo.addEventListener('change', function() {
    alert(archivo.value)
    if (archivo.value == "") {
        archivo.classList.remove('valid-correct');
        archivo.classList.add('valid-error');
        campos.archivo = false;
    } else {
        archivo.classList.add('valid-correct');
        archivo.classList.remove('valid-error');
        campos.archivo = true;
    }
})

// Validacion Submit
function validarSub() {
    var bool = false;

    if (campos.actor && campos.anio && campos.director && campos.duracion && campos.guion && campos.nacionalidad && campos.produccion && campos.genero && campos.titulo && campos.archivo) {
        bool = true;

    }
    return bool;
}