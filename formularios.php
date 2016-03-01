<?php 
include 'header.php';
?>
<!-- Textos -->
	<div class="caixa">
		<div class="conteudo">
			<div class="col12">
				<h2>Trabalhando com Formulários</h2>
				<p>As formatações abaixo devem ser aplicadas a elementos de formulários.</p>
				<hr>
                <h3>Formulários</h3>
                <p>Todos os formulários terão 100% de largura do elemento pai, em todas as resoluções.</p>
                <form action="" method="post">
                	Formulário
                </form>
                
                <h3>Caixas de texto simples</h3>
                <p>Terão 4 tamanhos: 100%, 75%, 50% e 25% em relação ao elemento form.<br>
				.form-25, .form-50, .form-75, .form-100</p>
                <form action="" method="post">
                	<label>Caixas de texto</label><br>
                    <input type="text" class="form-25"><br>
                    
                    <label>Caixas de texto</label><br>
                    <input type="text" class="form-50"><br>
                    
                    <label>Caixas de texto</label><br>
                    <input type="text" class="form-75"><br>
                    
                    <label>Caixas de texto</label><br>
                    <input type="text" class="form-100"><br>

                </form>
                
                <h3>Select simples</h3>
                <p>Terão 4 tamanhos: 100%, 75%, 50% e 25% em relação ao elemento form .</p>
                <form action="" method="post">
                	<label>Caixas de Opções [select]</label><br>
                    <select class="form-25">
                    	<option>Opção 1</option>
                        <option>Opção 2</option>
                        <option>Opção 3</option>
                     </select><br>
                     
                     <label>Caixas de Opções [select]</label><br>
                    <select class="form-50">
                    	<option>Opção 1</option>
                        <option>Opção 2</option>
                        <option>Opção 3</option>
                     </select><br>
                     
                     <label>Caixas de Opções [select]</label><br>
                    <select class="form-75">
                    	<option>Opção 1</option>
                        <option>Opção 2</option>
                        <option>Opção 3</option>
                     </select><br>
                     
                       <label>Caixas de Opções [select]</label><br>
                    <select class="form-100">
                    	<option>Opção 1</option>
                        <option>Opção 2</option>
                        <option>Opção 3</option>
                     </select><br>
                 </form>
                 
                 
                <h3>Textarea simples</h3>
                <p>Terão 4 tamanhos: 100%, 75%, 50% e 25% em relação ao elemento form.<br>
				   .txtarea-25, .txtarea-50, .txtarea-75, .txtarea-100</p>
                <form action="" method="post">
                	<label>Textarea</label><br>
                    <textarea placeholder="Meu texto aqui" class='txtarea-100'></textarea>
                </form>
                
                <h3>Botões de Radio</h3>
                <p>Terão os mesmos efeitos de sombreamento das caixas de texto<br>
                <form action="" method="post">
                	<label>Botões de Radio [radiogroup]</label><br>
                    <input type="radio" name="radio"> Opção 1<br>
                    <input type="radio" name="radio"> Opção 2<br>
                    <input type="radio" name="radio"> Opção 3<br>
                </form>
                
                
                <h3>Checkboxes</h3>
                <p>Terão os mesmos efeitos de sombreamento das caixas de texto<br>
                <form action="" method="post">
                	<label>Opções [checkbox]</label><br>
                    <input type="checkbox" name="radio[]"> Opção 1<br>
                    <input type="checkbox" name="radio[]"> Opção 2<br>
                    <input type="checkbox" name="radio[]"> Opção 3<br>
                </form>
                
                <h3>Botões [input button, input submit, input reset, button]</h3>
                <p>Terão os mesmos efeitos de sombreamento das caixas de texto e poderão ser aplicadas as classes .form-25, .form-50, etc.<br>
                <form action="" method="post">
                	<label>Botões [input button, input submit, input reset, button]</label><br>
                    
                    <input type="button" value='Elemento Button'><br>
                    <input type="submit" value='Elemento Submit'><br>
                    <input type="reset" value='Elemento Reset'><br>
                    <button>Este é um botão simples</button><br>                                        
                </form>
                <br>
                <form action="" method="post">
                	<label>Classes nos Botões [input button, input submit, input reset, button]</label><br>
                    <table>
                    	<tr>
                        	<td>.btn</td>
                            <td><input type="button" value='Elemento Button' class='btn'></td>
                        </tr>
                        <tr>
                        	<td>[usa-se junto da classe btn].btn-info</td>
                            <td><input type="button" value='Cadastrar' class='btn btn-info'></td>
                        </tr>
                        <tr>
                        	<td>.btn-alert</td>
                            <td><input type="button" value='Elemento Button' class='btn btn-alert'></td>
                        </tr>
                        <tr>
                        	<td>.btn-sucesso</td>
                            <td><input type="button" value='Elemento Button' class='btn btn-sucesso'></td>
                        </tr>
                        <tr>
                        	<td>.btn-erro</td>
                            <td><input type="button" value='Elemento Button' class='btn btn-erro'></td>
                        </tr>
                        <tr>
                        	<td>.btn-fatal</td>
                            <td><input type="button" value='Elemento Button' class='btn btn-fatal'></td>
                        </tr>
                    </table>
                    
                  </form>

                <h3>Grupos de elementos [label + input]</h3>
                <p>Usada em um elemento externo [como uma div] para alinhamento de todo o contexto.<br>
                    Classe .grupo - Coloca label e input, um acima do outro.</p>

                <form action="" method='post'>
                    <div class="grupo">
                        <label>Nome</label>
                        <input type="text">
                    </div>
                    <div class="grupo">
                        <label>E-mail</label>
                        <input type="email">
                    </div>
                    <div class="grupo">
                        <label>Senha</label>
                        <input type="password">
                    </div>
                </form>


                <p>Usada em um elemento externo [como uma div] para alinhamento de todo o contexto.<br>
                    Classe .grupo-inline - Coloca label e input um ao lado do outro. Deve-se tomar cuidado com o tamanho do input, não devendo se usar a classe form-100</p>

                <form action="" method='post'>
                    <div class="grupo-inline">
                        <label>Nome</label>
                        <input type="text">
                    </div>
                    <div class="grupo-inline">
                        <label>E-mail</label>
                        <input type="email">
                    </div>
                    <div class="grupo-inline">
                        <label>Senha</label>
                        <input type="password" class='form-75'>
                    </div>
                </form>

                <h3>Caixas de texto com elementos internos</h3>
                <p>Usadas para inserir elementos dentro da caixa de texto, não sendo placeholders.</p>

                <div class="grupo-interno">
                    <label>Endereço</label>
                    <input type="text">
                </div>
                
                
			</div><!--col12-->
		</div>
	</div>


<?php 
include 'footer.php';
?>

