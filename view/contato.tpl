<form action="envio" method="post">

    <div class="form-group ">
      <label for="nome">Nome</label>
      <input
        name="nome"
        type="text"
        class="form-control"
        id="nome"
        placeholder="Nome...">
    </div>

    <div class="form-group ">
        <label for="email">E-mail</label>
        <input
            name="email"
            type="email"
            class="form-control"
            id="email"
            placeholder="E-mail...">
    </div>

    <div class="form-group ">
        <label for="assunto">Assunto</label>
        <input
            name="assunto"
            type="assunto"
            class="form-control"
            id="assunto"
            placeholder="Assunto...">
    </div>

    <div class="form-group">
    <label for="mensagem">Mensagem</label>
    <textarea
        name="mensagem"
        class="form-control"
        id="mensagem"
        rows="3"
        placeholder="Digite sua mensagem aqui..."></textarea>
    </div>

    <button class="btn btn-lg btn-primary">Enviar</button>

</form>