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
            <section class="mb-4">
                <h2 onmouseover="console.log('Bem-vindo ao Cálculo de IMC do ISEP')">Cálculo de IMC</h2>
                <p>Esta funcionalidade permite calcular o Índice de Massa Corporal (IMC),
        uma medida utilizada para avaliar se o peso de uma pessoa está adequado à sua
        altura.</p>
            </section>

            <div>
                <h2><strong><i class="fa-solid fa-heart-pulse"></i> Calculadora de IMC</strong></h2>
                <hr>

                <form>
                    <div class="mb-3">
                        <label for="peso" class="form-label">Peso (kg):</label>
                        <input type="number" id="peso" name="peso" class="form-control" style="max-width: 250px;">
                    </div>

                    <div class="mb-3">
                        <label for="altura" class="form-label">Altura (m):</label>
                        <input type="number" id="altura" name="altura" class="form-control" style="max-width: 250px;">
                    </div>
                    
                    <div class="mb-3 mt-4">
                        <label class="fw-bold">Resultado:</label><br>
                        <span id="indicadorIMC" class="badge bg-primary fs-6 mt-2"> </span>
                    </div>
                </form>
            </div>
        </main> </div> </div> <script src="../../includes/js/funcoes.js"></script>

<?php include '../../includes/footer.php'; ?>