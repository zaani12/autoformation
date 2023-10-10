<?php
namespace html;
class Table {
    public table {
        public $title ="";
        public $numRows = 0;
        public function message(){
            echo "<p> table'{$this->title}' has {$this->numRows} rows. </p>"
        }
    }
}
$table = new table();
$table->titel ="my table";
$table-> = 5;
?>

<!DOCTYPE html>
<html>
<body>

<?php
$table->message();
?>

</body>
</html>

<!-- Declare a namespace called Html inside a namespace called Code -->
<?php
namespace Code\Html;
?>
