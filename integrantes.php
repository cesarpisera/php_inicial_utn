<?php require('/xampp/htdocs/actividad_integradora_modulo1.1/layout/header.php') ?>

<?php   $integrantes_gatunos = ["Nina", "Vicky", "Negra", "Catramado", "Torito", "Principe"];
        $integrantes_edades = ["8", "5", "3", "5", "5", "5"];
        $integrantes_personalidad = ['Antipática', 'Líder', 'Malhumorada', 'Bruto', 'Rencoroso', 'Mimoso'];
?>

<div class="integrantes-gatunos">
    <div class="integrantes integrante1">
        <div class="container-img">
            <img src="./img/nina.jpg" alt="#">
        </div>
        <div class="detalles">
            <h1>
                    <?php echo $integrantes_gatunos[0]; ?>
            </h1>
            <h2>
                <?php   echo 'Edad: '.$integrantes_edades[0].' años'; ?>
            </h2>
            <h3>
                <?php   echo 'Personalidad: '.$integrantes_personalidad[0]; ?>
            </h3>
        </div>
    </div>
    <div class="integrantes integrante2">
        <div class="container-img">
            <img src="./img/vicky.jpg" alt="#">
        </div>
        <div class="detalles">
        <h1>
                    <?php echo $integrantes_gatunos[1]; ?>
            </h1>
            <h2>
                <?php   echo 'Edad: '.$integrantes_edades[1].' años'; ?>
            </h2>
            <h3>
                <?php   echo 'Personalidad: '.$integrantes_personalidad[1]; ?>
            </h3>
        </div>
    </div>
    <div class="integrantes integrante3">
        <div class="container-img">
            <img src="./img/black.jpg" alt="#">
        </div>
        <div class="detalles">
        <h1>
                    <?php echo $integrantes_gatunos[2]; ?>
            </h1>
            <h2>
                <?php   echo 'Edad: '.$integrantes_edades[2].' años'; ?>
            </h2>
            <h3>
                <?php   echo 'Personalidad: '.$integrantes_personalidad[2]; ?>
            </h3>
        </div>
    </div>
    <div class="integrantes integrante4">
        <div class="container-img">
            <img src="./img/catramado.jpg" alt="#">
        </div>
        <div class="detalles">
        <h1>
                    <?php echo $integrantes_gatunos[3]; ?>
            </h1>
            <h2>
                <?php   echo 'Edad: '.$integrantes_edades[3].' años'; ?>
            </h2>
            <h3>
                <?php   echo 'Personalidad: '.$integrantes_personalidad[3]; ?>
            </h3>
        </div>
    </div>
    <div class="integrantes integrante5">
        <div class="container-img">
            <img src="./img/torito.jpg" alt="#">
        </div>
        <div class="detalles">
        <h1>
                    <?php echo $integrantes_gatunos[4]; ?>
            </h1>
            <h2>
                <?php   echo 'Edad: '.$integrantes_edades[4].' años'; ?>
            </h2>
            <h3>
                <?php   echo 'Personalidad: '.$integrantes_personalidad[4]; ?>
            </h3>
        </div>
    </div>
    <div class="integrantes integrante6">
        <div class="container-img">
            <img src="./img/principe.jpg" alt="#">
        </div>
        <div class="detalles">
        <h1>
                    <?php echo $integrantes_gatunos[5]; ?>
            </h1>
            <h2>
                <?php   echo 'Edad: '.$integrantes_edades[5].' años'; ?>
            </h2>
            <h3>
                <?php   echo 'Personalidad: '.$integrantes_personalidad[5]; ?>
            </h3>
        </div>
    </div>
</div>

<?php require('/xampp/htdocs/actividad_integradora_modulo1.1/layout/footer.php') ?>