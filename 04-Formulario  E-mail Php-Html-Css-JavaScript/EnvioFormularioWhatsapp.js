const evento = document.getElementById('send')
const enviarFormulario =() => {
        let nome = document.getElementById('nome').value;
        let email = document.getElementById('email').value;
        let telefone = document.getElementById('telefone').value;
        let assunto = document.getElementById('assunto').value;
        let mensagem = document.getElementById('mensagem').value;
        let numero= 5562998190130;
var win= window.open(`https://wa.me/${numero}?text=Ola%20, Segue dados:  %20Nome%20 : %20${nome}
%20 E-mail: ${email}, Telefone:%20${telefone}, Assunto:%20${assunto}, Mensagem: %20${mensagem}`,'_blank');       
}
evento.addEventListener('click', enviarFormulario)