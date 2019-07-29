<?php
    //iniciar a sessao
	session_start();
	
	include("layout.php");
    include("conexao.php");

	Inicio("true");
?>

      <div class="prod_box_big">
        <div class="center_prod_box_big">
          <div class="contact_form">
            <div class="form_row">
              <label class="contact"><strong>Nome:</strong></label>
              <input type="text" class="contact_input" />
            </div>
            <div class="form_row">
              <label class="contact"><strong>Email:</strong></label>
              <input type="text" class="contact_input" />
            </div>
            <div class="form_row">
              <label class="contact"><strong>Telefone:</strong></label>
              <input type="text" class="contact_input" />
            </div>
            <div class="form_row">
              <label class="contact"><strong>Cidade:</strong></label>
              <input type="text" class="contact_input" />
            </div>
			<div class="form_row">
              <label class="contact"><strong>Produto:</strong></label>
              <input type="text" class="contact_input" />
            </div>
            <div class="form_row">
              <label class="contact"><strong>Descrição:</strong></label>
              <textarea class="contact_textarea" ></textarea>
            </div><br>
            <br>
            <center><input type='button' value='Enviar'></center>
          </div>
        </div>
      </div>
<?php
	//RODAPÉ
	Fim()
?>
