<!DOCTYPE html>
<html>
<body style="font-size: 50px;">
    <?php
       class person
       {
        public $name;
        public $mob_no;

        function set_name($name)
        {
            $this->name = $name;

        function set_mob_no($mob_no)
        {
            $this->mob_no = $mob_no;
        }
        
        function get_name()
        {
            return $this->name;
        }
       }

       $person1 = new person();
       $person2 = new person();

       $person1->set_name('Namra');
       $person2->set_name('Hiren');
       
       echo $person1->get_name();
       echo "<br>";
       echo $person2->get_name();
    }
    ?>
</body>
</html>
