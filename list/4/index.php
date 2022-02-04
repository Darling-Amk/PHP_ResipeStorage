<a href="../../index.php">Назад </a>
    <hr>
<ol>
<?php
    echo "<li>Описать класс NotePad<br>";
    class NotePad{
        private $phone;
        public $name;
        public $surname;
        const TEXT_SIZE = 20;

        function __construct($phone="not set",$name="not set",$surname="not set"){
            $this->name = $name;
            $this->surname = $surname;
            $this->setPhone($phone);
        }
        function __clone(){
            $this->name = "not set";
            $this->surname = "not set";
            $this->setPhone("not set");
        }

        function setPhone($string){
            $this->phone = $string;
        }
        function getPhone(){
            return $this->phone;
        }

        function note_show(){
            echo "phone:{$this->getPhone()}<br>";
            echo "name:{$this->name}<br>";
            echo "surname:{$this->surname}<br>";
            echo "TEXT_SIZE:". $this::TEXT_SIZE ."<br>";
        }
        
    }
    echo "</li>";

    echo '<li>note_show TEXT_SIZE br>';
    $note1 = new NotePad();
    $note1->note_show();
    echo "TEXT_SIZE = ". $note1::TEXT_SIZE ."<br>";
    echo '</li>';

    echo '<li>конструктор<br>';
    $note2 = new NotePad("891141121**","Никита","Кручинин") ;
    $note2->note_show();
    echo '</li>';

    echo '<li>	 __clone() <br>';
    $note2_copy = clone $note2;
    $note2_copy->note_show();
    echo '</li>';

    echo '<li>NoteChild<br>';
    class NoteChild extends Notepad {
        //перегрузка функции
        function note_show() {
            echo "Текущий класс ". __CLASS__ . "<br>";
            echo "Вызов родительского метода note_show <br>";
            parent::note_show();
        }
    
        //функция обрезки значений до TEXT_SIZE байт
        function cut_note() {
            $this->setPhone(mb_strcut($this->getPhone(), 0, $this::TEXT_SIZE, 'UTF-8'));
            $this->name = mb_strcut($this->name, 0, $this::TEXT_SIZE, 'UTF-8');
            $this->surname = mb_strcut($this->surname, 0, $this::TEXT_SIZE, 'UTF-8');
        }
    }
    echo '</li>';

    echo '<li>child1<br>';
    $child1 = new NoteChild("1","2","3");
    $child1->note_show();
    
    $child1_copy = clone $child1;
    $child1_copy->note_show();
    echo '</li>';

    echo '<li>cut_note<br>';
    $child2 = new NoteChild("11111111111111111111111111111","1111111111111111111111111","11111111111111111111111");
    $child2->cut_note();
    $child2->note_show();
    echo '</li>';
    echo '<li>child1<br></li>';
    echo '<li>child1<br></li>';

    echo '<li>child1<br></li>';

    echo '<li>child1<br></li>';

    echo '<li>child1<br></li>';

?>
</ol>