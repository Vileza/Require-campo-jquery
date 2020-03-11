<style>
  .caixa {
    background:blue;
    color: #fff;
    padding: 1px;
    position: relative;
    width: 130px;
    opacity: 0.70;
    margin: -30px 0 0 370px;
  }
  .triangulo:before {
    border: 10px solid transparent;
    border-bottom-color: blue;
    content: "";
    left: 20px;
    top: -20px;
    position: absolute;
  }
</style>
<h1 style="text-align:center;">FORMULÁRIO DE CADASTRO</h1>
<ul id="mensagem-erro">
</ul>

<form id="formulario">
  <div id="tag" style="width:60%; margin:0 auto">
    <label for="nome">Nome:</label>
      <input name="nome" type="text" placeholder="Nome" id="nome" class="trazer-nome">

    <label for="cpf">CPF:</label>
      <input name="cpf" type="text" placeholder="CPF" id="cpf">

    <label for="email">E-mail:</label>
      <input name="email" type="text" placeholder="Email" id="email">

    <label for="senha">Senha:</label>
      <input type="password" name="senha" id="senha" placeholder="Senha" id="senha">

  </div><br>
  <button id="botao" style="margin-left: 300px;" type="submit">Enviar</button>
</form>
<script src="jquery.js"></script>
<script src="main.js"></script>
