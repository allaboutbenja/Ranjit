<?php
class Brand{
    private int $id;
    private string $name;

    function __construct($id,$name) {
        $this->id = $id;
        $this->name = $name;
    }
    public function getId():int {
        return $this->id;
    }
    public function getName():string {
        return $this->name;
    }
}
?>