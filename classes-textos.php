<?php 
include 'header.php';
echo 'loico';
?>
<!-- Textos -->
	<div class="caixa">
		<div class="conteudo">
			<div class="col12">
				<h2>Trabalhando com Classes para Textos</h2>
				<p>As classes abaixo devem ser aplicadas em elementos de textos em geral.</p>
				<hr>
				
                <h3>Classes de Frases de Destaque</h3>
                <p>Classes usadas para destacar frases.</p>
				<ul>
					<li>.txt - Usada para destacar uma frase de forma simples. Ex.: <span class="txt">Esta classe serve para destacar um texto de forma simples.</span></li>
                    
                    <li>.txt-info - Usada para destacar uma frase informatica. Ex.: <span class="txt-info">Esta classe serve para destacar um texto informativo.</span></li>
                    
                    <li>.txt-alert - Usada para destacar uma frase de alerta. Ex.: <span class="txt-alert">Esta classe serve para destacar um texto de alerta.</span></li>
                    
                    <li>.txt-sucesso - Usada para destacar uma frase de sucesso. Ex.: <span class="txt-sucesso">Esta classe serve para destacar um texto de sucesso.</span></li>
                    
                    <li>.txt-erro - Usada para destacar uma frase de erro. Ex.: <span class="txt-erro">Esta classe serve para destacar um texto de erro.</span></li>
                    
                    <li>.txt-fatal - Usada para destacar uma frase de erro fatal. Ex.: <span class="txt-fatal">Esta classe serve para destacar um texto de erro fatal.</span></li>
                    
                    
				</ul>
                
                <hr>
                
                <h3>Classes de Textos de Destaque</h3>
                <p>Classes usadas para destacar pequenas partes do texto, dando ênfase a algumas palavras.</p>
				<ul>
					<li>.dest - Usada para destacar um texto de forma simples. Ex.: Esta classe serve para <span class="dest">destacar</span> um texto de forma simples.</li>
                    <li>.dest-info - Usada para informar algo ao usuário, deve ser aplicada junto com o parâmetro title. Ex.: Meu sobrinho vai faser prova para a <span class='dest-info' title='Escola de Sargentos da Aeronáutica'>E.S.A.</span> e, se estudar o suficiente, será aprovado.</li>
                    <li>.dest-alert - Usada para exibir um texto como alerta. Ex.: <span class='dest-alert'>Atenção!</span> Suas informações são sigilosas.</li>
                    <li>.dest-sucesso - Usada para exibir um texto de sucesso ao usuário. Ex.: Seu cadastro foi realizado com <span class="dest-sucesso">sucesso</span>.</li>
                    <li>.dest-erro - Usada para exibir um texto de insucesso [erro] ao usuário. Ex.: <span class="dest-erro">Acesso Negado!</span>.</li>
                    <li>.dest-fatal - Usada para exibir um texto de erro fatal ao usuário. Ex.: Sua conta foi <span class="dest-fatal">Bloqueada</span> devido à falta de pagamento.</li>
                    
				</ul>
                
                
                <hr>
				<h3>Classes de Mensagens de Destaque</h3>
                <p>Classes usadas para destacar mensagens enviadas ao usuário. Devem ser usadas em frases inteiras como parágrafos, divs ou spam.</p>
				<p>.msg - Usada para destacar uma frase de forma simples.</p>
               	<p class="msg">Esta frase precisa ser destadada, para que possamos entender sua funcionalidade.</p>
                
                <p>.msg-info - Usada para destacar uma frase informativa.</p>
               	<p class="msg-info">Mensagem informativa que não precisa ser aplicada junto ao parâmetro Title.</p>
                
                <p>.msg-alert - Usada para destacar uma frase de alerta.</p>
               	<p class="msg-alert">Você já se matriculou em um curso, por isso o formulário de matrículas está bloqueado.</p>
                
                <p>.msg-sucesso - Usada para destacar uma frase de sucesso em alguma operação.</p>
               	<p class="msg-sucesso">Seu cadastro foi realizado com sucesso!.</p>
                
                <p>.msg-erro - Usada para destacar uma frase de insucesso [erro] em alguma operação.</p>
               	<p class="msg-erro">Seu cadastro não foi realizado! Verifique uma das opções abaixo.</p>
                
                <p>.msg-fatal - Usada para destacar uma frase de erro fatal em alguma operação.</p>
               	<p class="msg-fatal">O cadastro para este tipo de serviço está temporariamente cancelado!.</p>
                
                <hr>
				<h3>Classes de Blocos de Código</h3>
                <p>.code - Classe usada quando precisarmos escrever blocos de código fonte na página.<br>
                	<strong>Importante!</strong> Só pode ser usada na tag code.</p>
                    <span class='code'>
                        &lt;html&gt;<br>
                        &lt;title&gt;Minha Página HTML&lt;/title&gt;<br>
                        &lt;body&gt;<br>
                        Corpo da página<br>
                        &lt;/body&gt;<br>
                        &lt;/html&gt;<br>
                        
                    </span> 
				
                <h3>Classes de Citações</h3>
                <p>.cite - Classe usada quando precisamos fazer uma citação no código.<br>
                	<strong>Ex.:</strong> Local e data de um artigo, autor, etc.<br>
					Deve ser usada somente na tag cite.</p>
					<p>"Independência ou morte!"<br>
						<cite class='cite'>Grito de Independência dado por D. Pedro II em 7 de setembro de 1500.</cite>
                    </p>
			</div><!--col12-->
		</div>
	</div>


<?php 
include 'footer.php';
?>

