<?php session_start(); ?>
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->

<html>
    <head>
        <meta charset="UTF-8">

<?php include './cabecalho.php' ?>

    <script src="localizacao.js"></script>
</head>

<body onload="getLocation();">
    <div id="app">

            <?php
            include './menu_superior.php';
            include './menu_lateral.php';
            ?>

            <!------ SESSÃO QUE MOSTRA A PÁGINA ONDE O USUÁRIO ESTÁ ------>
            <section class="is-title-bar">
                <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
                    <ul>
                        <li>Cadê o lixo que estava aqui?</li>
                        <li>Histórico da denúncia</li>
                    </ul>
                </div>
            </section>
            <!---------------------------------------------------------->    

            <!----------------- AQUI O CONTEÚDO DA PÁGINA -------------->

            <!-- INICIO DA SEÇÃO PRINCIPAL DA PÁGINA -->
            <section class="section main-section">
                
                    <header class="card-header">
                        <p class="card-header-title">
                            <span class="icon"><i class="mdi mdi-ballot"></i></span>
                            <!-- NOME DO FORMULÁRIO -->
                           Histórico da denúncia 
                        </p>
                    </header>

                    <!---------  AQUI COMEÇA UM CAMPO DO FORMULÁRIO ------------->
                    <form enctype="multipart/form-data" name="denuncia_historico_inserir" action="denuncia__historico_inserir_salvar.php" method="POST">

                    <div class="field">
                        <label class="label">Status</label>

                        <div class="control">
                            <select class="input" name="selectStatus">
                                <option value="Em análise ">Em análise </option>
                                <option value="Analisado">Analisado</option>
                                <option value="Em andamento">Em andamento</option>
                                <option value="Coletado">Coletado</option>
                                 
                            </select>
                              
                        </div>
                    </div>

                    <div class="field space">
                        <label  class="label" for="observação">Observação da denúncia </label>          
                        <textarea class="textarea" placeholder="Descreva os pontos importantes da coleta" name="txtObservacao"></textarea>                    
                    </div>
                     

       <div class="field">
            <label class="label">Data </label>

            <div class="control">
                <input type="date" class="input" name="txtDataHistorico" value="<?php echo date("Y-m-d"); ?>">
            </div>
        </div>

                     
                        <div class="field grouped">
                            <div class="control">
                                <button type="submit" class="button button-confirm" name="">
                                    Analisar
                                </button>
                            </div>
                        </div>

                        <div class="field grouped">
                        <div class="control">
                            <a href="denuncia_exibir.php">
                            <button type="button" class="button" name="">
                                Voltar
                            </button>
                            </a>

                        </div>
                    </div>



                    </form>    
               
            </section> 

            <!---------------------------------------------------------->
            <?php include 'rodape.php' ?>

        </div>
    </div>
    </body>
</html>