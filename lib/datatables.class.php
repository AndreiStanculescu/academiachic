<?php
require_once "config.php";

class DataTable
{
    protected $link;
    protected $query;
    protected $tableId;
    protected $actions = []; // <-- listă de butoane

    public function __construct($link, $query, $tableId = "table", $actions = [])
    {
        $this->link = $link;
        $this->query = $query;
        $this->tableId = $tableId;
        $this->actions = $actions; // array de acțiuni
    }

    public function render()
    {
        $result = mysqli_query($this->link, $this->query);
        if (!$result) {
            echo "Eroare query: " . mysqli_error($this->link);
            return;
        }

        $fields = mysqli_fetch_fields($result);

        echo "<table id='" . htmlspecialchars($this->tableId) . "' class='table table-striped table-bordered display' style='width:100%'>";
        echo "<thead><tr>";

        foreach ($fields as $field) {
            echo "<th>" . htmlspecialchars($field->name) . "</th>";
        }

        if (!empty($this->actions)) {
            echo "<th>Operațiuni</th>";
        }

        echo "</tr></thead><tbody>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";

            foreach ($fields as $field) {
                $col = $field->name;
                echo "<td>" . htmlspecialchars($row[$col]) . "</td>";
            }

            if (!empty($this->actions)) {
                $idValue = htmlspecialchars($row[array_keys($row)[0]]);
                echo "<td>";

                foreach ($this->actions as $action) {
                    $label = htmlspecialchars($action['label']);
                    $class = htmlspecialchars($action['class']);
                    $type = htmlspecialchars($action['type']);
                    //$btnId =htmlspecialchars($action['btnId']);
                    echo "<button class='btn btn-sm {$class} action-btn' data-id='{$idValue}' data-action='{$type}' data-table='{$this->tableId}'>{$label}</button> ";
                }

                echo "</td>";
            }

            echo "</tr>";
        }

        echo "</tbody></table>";
    }
}
?>
