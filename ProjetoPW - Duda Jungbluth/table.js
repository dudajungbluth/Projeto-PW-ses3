let prodnome = document.querySelector('.tablenome')
let prodid = document.querySelector('.tableid')
let tabeladiv = document.querySelector('.tabelaprodutos')



// CHAMAR ESSA FUNÇÃO NO CADASTRO JS PARA ATUALIZAR A TABELA 
fetch('tabelaprodutos.php').then(res => res.json().then(data => {

    console.log(data);
    
    prodnome.innerHTML = data.nome
    prodid.innerHTML = data.nome
    
    }));