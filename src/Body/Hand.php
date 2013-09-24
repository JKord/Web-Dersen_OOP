<?php
namespace Body;

class Hand extends BodyPart
{
    public function hitPersonNearYou()
    {
        echo 'HAND: hit Person Near You<br>';
    }

    public function takeObj($obj)
    {
        echo 'HAND: take ' . $obj . '<br>';
    }
}