<!DOCTYPE html>
<html lang="pt">
<?php include '../../includes/header.php'; ?>
<?php include '../../includes/nav.php'; ?> 

<!-- Navbar -->

<div class="container-fluid">
    <div class="row">
        <?php include '../../includes/sidebar.php'; ?>

        

        <main class="col-md-9 col-lg-10 p-4">
            <section class="mb-4">
                <h2>Avaliação de Condições de Saúde</h2>
                <p>Utilize este formulário para selecionar as condições de saúde relevantes do
                cliente. As informações escolhidas irão gerar uma recomendação personalizada para o
                plano de treino.</p>
            </section>

            <div>
                <h2><strong><i class="fa-solid fa-file-medical"></i> Avaliação de Condições de Saúde</strong></h2>
                <hr>

                <form oninput="avaliarCondicoes()">
                    <div class="mb-4">
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="temProblemasCostas" name="condicao">
                            <label class="form-check-label" for="temProblemasCostas">Problemas de costas</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="estaGravida" name="condicao">
                            <label class="form-check-label" for="estaGravida">Grávida</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="temDiabetes" name="condicao">
                            <label class="form-check-label" for="temDiabetes">Diabético/a</label>
                        </div>
                    </div>
                
                    <div class="mb-3">
                        <label class="fw-bold">Recomendação:</label>
                        <div id="mensagem" class="alert text-center mt-2" style="min-height: 50px; background-color: #f8f9fa; border: 1px dashed #ccc;"></div>
                    </div>
                </form>
            </div>
        </main> </div> </div> <script src="../../includes/js/funcoes.js"></script>

<?php include '../../includes/footer.php'; ?>