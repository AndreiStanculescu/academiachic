<?php
require_once "datatables.class.php";

class tabel_utilizatori extends DataTable
{
    public function __construct($link)
    {
        $actions = [
            ['label' => 'Adaugă',  'class' => 'btn-success', 'type' => 'add'],
            ['label' => 'Editează', 'class' => 'btn-warning', 'type' => 'edit'],
            ['label' => 'Șterge',   'class' => 'btn-danger',  'type' => 'delete']
        ];

        parent::__construct($link, "SELECT * FROM utilizatori", "utilizatori", $actions);
    }
}
?>
