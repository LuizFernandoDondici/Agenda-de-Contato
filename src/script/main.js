
import { findCep } from "./ajax/ajax-cep.js";
import { saveContato } from "./ajax/ajax-save-contato.js";
import { updateContato } from "./ajax/ajax-update-contato.js";
import { mask } from "./mask/mask.js";
import { closeModal, openModal } from "./open-modal/open-modal.js";

const form = document.querySelector('.form-contato');

const url_string = new URL( window.location.href);
const id = url_string.searchParams.get("id");
const path = url_string.pathname;

if (path == '/formulario-contato') {

    mask();
    findCep(form);
    saveContato(form);
} 

if (path == '/editar-contato') {

    mask();
    findCep(form);
    updateContato(id, form);
}

if (path == '/visualizar-contato') {
  
    openModal();
    closeModal();
}
