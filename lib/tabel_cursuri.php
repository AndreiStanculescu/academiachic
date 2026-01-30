<?php
require_once "datatables.class.php";

class tabel_cursuri extends DataTable
{
    public function __construct($link)
    {
        $actions = [
            ['label' => 'Detalii', 'class' => 'btn-info', 'type' => 'view'],
            ['label' => 'Editează', 'class' => 'btn-warning', 'type' => 'edit'],
            ['label' => 'Șterge',   'class' => 'btn-danger',  'type' => 'delete']
        ];

        parent::__construct($link, "SELECT * FROM cursuri", "cursuri", $actions);
    }
}
?>
