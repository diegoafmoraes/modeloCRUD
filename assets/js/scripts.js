// $(document).ready(function() {});

$(function() {

  $('#telefone').mask('(00) 0000-0000');
  $('#cel').mask('(00) 00000-0000');
  $('#cpf').mask('000.000.000-00');

  $('#bolsa_aux').on('keyup', function() {
    $(this).maskMoney({
      thousands:'.', 
      decimal:',', 
      allowZero:true, 
      suffix: ''
    });
  });
})

  
