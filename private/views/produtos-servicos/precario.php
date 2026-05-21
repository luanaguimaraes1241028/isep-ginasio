<!DOCTYPE html>
<html lang="pt">
<?php include '../../includes/header.php'; ?>
<?php include '../../includes/nav.php'; ?> 
<body>
<!-- Navbar -->


<div class="container-fluid">
    <div class="row">
        <?php include '../../includes/sidebar.php'; ?>

        <main class="col-md-9 col-lg-10 p-4">
            <section>
                <h2>Preçário Interativo</h2>
                <p>Escolha o serviço e a frequência para ver o preço.</p>
            </section>

            <div class="d-flex gap-3 mb-4"> <div class="home-option text-center" onclick="selecionarServico('PT')">
                    <h4>Treino Pers. (PT)</h4>
                    <p>Clique para escolher</p>
                </div>
                <div class="home-option text-center" onclick="selecionarServico('AG')">
                    <h4>Aulas de Grupo (AG)</h4>
                    <p>Clique para escolher</p>
                </div>
            </div>

            <div id="opcoesPT" style="display:none;">
                <div class="home-row d-flex gap-2 flex-wrap">
                    <div class="home-option" onclick="mostrarPrecoPT(1)">1 vez/semana</div>
                    <div class="home-option" onclick="mostrarPrecoPT(2)">2 vezes/semana</div>
                    <div class="home-option" onclick="mostrarPrecoPT(3)">3 vezes/semana</div>
                    <div class="home-option" onclick="mostrarPrecoPT(4)">4 vezes/semana</div>
                </div>
                <p id="resultadoPT" class="text-center mt-3 fw-bold"></p>
            </div>

            <div id="opcoesAG" style="display:none;">
                <div class="home-row d-flex gap-2 flex-wrap">
                    <div class="home-option" onclick="mostrarPrecoAG(1)">1 vez/semana</div>
                    <div class="home-option" onclick="mostrarPrecoAG(2)">2 vezes/semana</div>
                    <div class="home-option" onclick="mostrarPrecoAG('Livre')">Livre</div>
                </div>
                <p id="resultadoAG" class="text-center mt-3 fw-bold"></p>
            </div>
            
        </main> </div> </div> <script src="../../includes/js/funcoes.js"></script>

<?php include '../../includes/footer.php'; ?>
