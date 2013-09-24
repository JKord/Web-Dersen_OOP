<?php
namespace Body;

class JimmyNetronBrain extends Brain
{
    public function mentalCharge()
    {
        echo 'Jimmy Netron: mental charge!<br>';
        $face = $this->getFace();

        $face->solution();
        $face->smile();
    }
}
