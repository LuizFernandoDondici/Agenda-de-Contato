
// Ajax para salvar contato.

import { alertContato } from "../alert/alert.js";

export const saveContato = (formRegister) =>{

    const btnSaveContato = document.querySelector('#btn-save-contato');

    btnSaveContato.addEventListener('click', async (e)=>{
        e.preventDefault();
        
        const form = new FormData(formRegister);

        const url = '/salvar-contato';
        const options = {
            headers: {'Content-Type' : 'application/x-www-form-urlencoded'},
            method: 'POST',
            body: 
                'name='+form.get('name')+'&'+
                'tel='+form.get('tel')+'&'+
                'cel='+form.get('cel')+'&'+
                'email='+form.get('email')+'&'+
                'birthday='+form.get('birthday')+'&'+
                'cep='+form.get('cep')+'&'+
                'street='+form.get('street')+'&'+
                'num='+form.get('num')+'&'+
                'comp='+form.get('comp')+'&'+
                'district='+form.get('district')+'&'+
                'city='+form.get('city')+'&'+
                'uf='+form.get('uf')
        }
        
        const response = await fetch(url, options);
        const res = await response.json();
    
        if (res.success == 1) {
            window.location.href = '/lista-contato';
        } else if (res.success == 0){
            alertContato(res.msg)    
        } else {
            window.location.href = '/erro';
        }
    })
}
