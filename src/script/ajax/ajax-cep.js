
// Ajax para buscar CEP em uma API externa e preencher automaticamente os campos de endereço.

export const findCep = (formCep) =>{    

    const cep = document.querySelector('[name=cep]');
    const street = document.querySelector('[name=street]');
    const district = document.querySelector('[name=district]');
    const city = document.querySelector('[name=city]');
    const uf = document.querySelector('[name=uf]');

    cep.addEventListener('blur', async (e)=>{

        const form = new FormData(formCep);
        
        const url = `https://viacep.com.br/ws/${form.get('cep')}/json/`;
        const options = {
            method: 'GET',
            mode: 'cors',
            cache: 'default'
        }
    
        const response = await fetch(url, options);
        const data = await response.json();
        
        street.value = data.logradouro;
        district.value = data.bairro;
        city.value = data.localidade;
        uf.value = data.uf; 
    })
}
