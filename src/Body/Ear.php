<?php
namespace Body;

class Ear extends BodyPart
{
    private $sound = '';

    public function getSound()
    {
        return $this->sound;
    }

    public function hearSomething($sound)
    {
        echo 'EAR: ' . $sound . '<br>';
        $this->sound = $sound;
        $this->changed();
    }
}