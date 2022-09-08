
// Mascaras de formulario.

export const mask = () =>{

    const name = document.querySelector('[name=name]');
    const birthday = document.querySelector('[name=birthday]');
    const tel = document.querySelector('[name=tel]')
    const cel = document.querySelector('[name=cel]');
    const cep = document.querySelector('[name=cep]');
    const num = document.querySelector('[name=num]');

    name.addEventListener('input', (e)=>{
        name.value = e.target.value
            .replace(/([^A-Za-z\s])+/g, '')
            .toLowerCase()
            .replace(/(?:^|\s)\S/g, (a)=>{ 
                return a.toUpperCase(); 
        }) 
    })

    birthday.addEventListener('input', (e)=>{
        birthday.value = e.target.value
            .replace(/\D+/g, '')
            .replace(/(\d{2})(\d)/, '$1/$2')
            .replace(/(\/\d{2})(\d)/, '$1/$2')
            .replace(/(\/\d{4})\d+?$/, '$1')
    })

    tel.addEventListener('input', (e)=>{
        tel.value = e.target.value
            .replace(/\D+/g, '')
            .replace(/(\d{2})(\d)/, '($1) $2')
            .replace(/(\d{4})(\d)/, '$1-$2')
            .replace(/(\d{4})-(\d)(\d{4})/, '$1$2-$3')
            .replace(/(-\d{4})\d+?$/, '$1')   
    })
    
    cel.addEventListener('input', (e)=>{
        cel.value = e.target.value
            .replace(/\D+/g, '')
            .replace(/(\d{2})(\d)/, '($1) $2')
            .replace(/(\d{4})(\d)/, '$1-$2')
            .replace(/(\d{4})-(\d)(\d{4})/, '$1$2-$3')
            .replace(/(-\d{4})\d+?$/, '$1')   
    })
    
    cep.addEventListener('input', (e)=>{
        cep.value = e.target.value
            .replace(/\D+/g, '')
            .replace(/(\d{5})(\d)/, '$1-$2')
            .replace(/(-\d{3})\d+?$/, '$1')    
    })
    
    num.addEventListener('input', (e)=>{
        num.value = e.target.value
            .replace(/\D+/g, '')  
    })

}
