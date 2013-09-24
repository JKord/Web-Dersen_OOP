<?php
namespace Body;

class Eye extends BodyPart
{
    private $obj = '';

    public function getObj()
    {
        return $this->obj;
    }

    public function seeSomething($obj)
    {
        echo 'Eye: see ' . $obj . '<br>';
        $this->obj = $obj;
        $this->changed();
    }
}