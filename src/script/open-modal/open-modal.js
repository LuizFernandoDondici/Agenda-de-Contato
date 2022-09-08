
// Eventos para abrir e fechar modal de confirmação que deleta contato.

const modal = document.querySelector(".modal");
const btnDelete = document.querySelector('#link-delete-contato');

export const openModal = () =>{

    btnDelete.addEventListener("click", ()=>{
        modal.style.display = "block";
    })
}

export const closeModal = () =>{

    modal.addEventListener("click", ()=>{
        modal.style.display = "none";
    })
}
