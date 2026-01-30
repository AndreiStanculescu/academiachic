<!-- Bootstrap CSS/JS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<?php
require_once "config.php";
require_once "lib/datatables.class.php";
require_once "lib/tabel_utilizatori.php";
require_once "lib/tabel_cursuri.php";
?>

<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <title>Două Tabele</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.4/css/dataTables.dataTables.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.3.4/js/dataTables.js"></script>

    <!-- Stil personalizat -->
    <link rel="stylesheet" href="lib/table-style.css">
</head>
<body class="bg-light">

<div class="container">
    <h2 class="text-center mt-4">Două tabele independente</h2>

    <!-- Tabel 1 -->
    <div class="table-container mx-auto mt-4">
        <h4>Tabel din baza 1 (Utilizatori)</h4>
        <?php
        $t1 = new tabel_utilizatori($link);
        $t1->render();
        ?>
    </div>

    <!-- Tabel 2 -->
    <div class="table-container mx-auto mt-4">
        <h4>Tabel din baza 2 (Cursuri)</h4>
        <?php
        $t2 = new tabel_cursuri($link);
        $t2->render();
        ?>
    </div>
</div>

<script>
$(document).ready(function() {
    $('#utilizatori').DataTable();
    $('#cursuri').DataTable();

    $(document).on('click', '.action-btn', function() {
        const id = $(this).data('id');          // ID-ul rândului
        const action = $(this).data('action');  // tipul acțiunii (add, edit, delete, etc.)
        const table = $(this).data('table');    // ID-ul tabelului (utilizatori, produse, etc.)

        console.log(`Tabel: ${table} | Acțiune: ${action} | ID: ${id}`);


        // alegem fișierul AJAX în funcție de tabel
        let ajaxUrl = '';
        switch(table) {
            case 'utilizatori':
                ajaxUrl = 'ajax/actiuni_utilizatori.php';
                break;
            case 'cursuri':
                ajaxUrl = 'ajax/actiuni_cursuri.php';
                break;
            default:
                console.error('Tabel necunoscut:', table);
                return; // nu face nimic dacă tabelul nu e definit
        }

        // trimitem datele prin AJAX
        $.ajax({
            url: ajaxUrl,
            type: 'POST',
            data: { id: id, action: action },
            success: function(response) {
                console.log('Ajax success: \n File: ' +ajaxUrl+ '\n Id: '+ id + '\n Action: ' +action);
                // eventual poți reîmprospăta DataTable sau actualiza rândul
            },
            error: function(xhr, status, error) {
                console.error('Eroare AJAX:', error);
            }
        });

    });


});
</script>

</body>
</html>