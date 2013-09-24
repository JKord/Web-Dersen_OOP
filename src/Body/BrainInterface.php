<?php
namespace Body;

interface BrainInterface
{
    public function createBodyParts();

    public function somethingHappened(BodyPart $bodyPart);
}