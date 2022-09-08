
// Alerta de mensagem de erro.

const alert = document.querySelector('.alert');
const msgAlert = document.querySelector('.msg-alert');

export const alertContato = (msg) =>{
    
    alert.style.display = 'block';
    msgAlert.innerHTML = msg;

    setTimeout((e) => {
        alert.style.display = 'none';
    }, 4000); 
}
