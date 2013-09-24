<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Jura
 * Date: 23.09.13
 * Time: 12:33
 * To change this template use File | Settings | File Templates.
 */
namespace Body;

class BodyPart
{
    protected $brain;

    public function __construct($brain)
    {
        $this->brain = $brain;
    }

    public function changed()
    {
        $this->brain->somethingHappened($this);
    }
}
