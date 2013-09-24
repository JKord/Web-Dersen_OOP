<?php
namespace Body;

use Body\BrainInterface;

class Brain implements BrainInterface
{
    private $ear, $eye, $face, $hand, $leg;

    public function getEar()
    {
        return $this->ear;
    }

    public function getEye()
    {
        return $this->eye;
    }

    public function getFace()
    {
        return $this->face;
    }

    public function getHand()
    {
        return $this->hand;
    }

    public function getLeg()
    {
        return $this->leg;
    }

    public function __construct()
    {
        $this->createBodyParts();
    }

    public function createBodyParts()
    {
        $this->ear = new Ear($this);
        $this->eye = new Eye($this);
        $this->face = new Face($this);
        $this->hand = new Hand($this);
        $this->leg = new Leg($this);
    }

    public function somethingHappened(BodyPart $bodyPart)
    {
        $name_bodyPart = get_class($bodyPart);
        switch ($name_bodyPart) {
            case 'Body\Ear':
            {
                switch ($bodyPart->getSound()) {
                    case 'stupid': {
                        $this->leg->stepForward();
                        $this->hand->hitPersonNearYou();
                        $this->leg->kick();
                    } break;
                    case 'cool': {
                        $this->face->smile();
                    } break;
                }
            }
                break;
            case 'Body\Eye':
            {
                switch ($bodyPart->getObj()) {
                    case 'apple': {
                        $this->leg->stepForward();
                        $this->hand->takeObj('apple');
                        $this->face->smile();
                    } break;
                } break;
            }
        }
    }
}
