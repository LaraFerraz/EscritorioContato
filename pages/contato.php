

<section class="py-5" style="background-color: #f1f1f1;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <form id="form-contato" class="needs-validation p-4 bg-white border rounded shadow" novalidate method="POST" action="enviar.php">
          <h2 class="text-center mb-4">Fale Conosco</h2>

    <div class="mb-3">
      <label for="nome" class="form-label">Nome completo</label>
      <input type="text" class="form-control" id="nome" name="nome" required>
      <div class="invalid-feedback">Digite seu nome completo.</div>
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">E-mail</label>
      <input type="email" class="form-control" id="email" name="email" required>
      <div class="invalid-feedback">Digite um e-mail válido.</div>
    </div>

    <div class="mb-3">
      <label for="telefone" class="form-label">Telefone</label>
      <input type="tel" class="form-control" id="telefone" name="telefone" required>
      <div class="invalid-feedback">Informe seu telefone para contato.</div>
    </div>

    <div class="mb-3">
      <label for="assunto" class="form-label">Assunto</label>
      <select class="form-select" id="assunto" name="assunto" required>
        <option selected disabled value="">Escolha um assunto</option>
        <option>Serviços contábeis</option>
        <option>Imposto de Renda</option>
        <option>Abertura de empresa</option>
        <option>ITR</option>
        <option>Outro</option>
      </select>
      <div class="invalid-feedback">Escolha um assunto.</div>
    </div>

    <div class="mb-3">
      <label for="mensagem" class="form-label">Mensagem</label>
      <textarea class="form-control" id="mensagem" name="mensagem" rows="4" required></textarea>
      <div class="invalid-feedback">Escreva sua mensagem.</div>
    </div>

    <div class="form-check mb-3">
      <input class="form-check-input" type="checkbox" id="termos" name="termos" required>
      <label class="form-check-label" for="termos">Concordo com o envio desse email</label>
      <div class="invalid-feedback">Você deve aceitar o envio.</div>
    </div>

    <button type="submit" class="btn btn-secondary">Enviar</button>
  </form>
</section>

<script>
  (() => {
    'use strict';
    const form = document.querySelector('#form-contato');
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    }, false);
  })();
</script>
</body>