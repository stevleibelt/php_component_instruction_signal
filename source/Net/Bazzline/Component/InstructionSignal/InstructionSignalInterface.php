<?php

namespace Net\Bazzline\Component\InstructionSignal;

interface InstructionSignalInterface
{
    public function setName($name);
    public function getName();
    public function cancelStart();
    public function isStartRequested();
    public function requestStart();
    public function cancelStop();
    public function isStopRequested();
    public function requestStop();
    public function cancelPause();
    public function isPauseRequested();
    public function requestPause();
}
