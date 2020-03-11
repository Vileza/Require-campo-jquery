$('#nome').blur(function(event){
    event.preventDefault();
      if($('.triangulo').length){
      return;
    }
    if($(this).val().length <= 0){
      var p = $("<p>").text("Campo obrigatório").attr("class", "triangulo").addClass('caixa').attr("id","remover");

      p.click(function(e){
     $(this).remove();
    });
    var nome = $("form");
    nome.append(p);
    }
});

/*$('form').click(function(e){
  var removerCampoRequerido = $("p");
  console.log(removerCampoRequerido);
  var nom = removerCampoRequerido.attr('id');
  console.log(nom);


  if("remover" == removerCampoRequerido){
    console.log(removerCampoRequerido);
    e.target.remove();
  }
});*/
