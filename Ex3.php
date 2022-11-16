<?php

    interface BiosInterface
    {
        public function execute();
        public function waitForKeyPress();
        public function launch(OsInterface $os);
        public function powerDown();
    }

    interface OSInterface
    {
        public function halt();
        public function getName(): string;
    }

    class Computer
    {

        private $bios;
        private $os;
        public function __construct(BiosInterface $bios, OSInterface $os) {
            
            $this->bios = $bios;
            $this->os = $os;

        }

        public function turnOn()
        {

            $this->bios->execute();
            $this->bios->waitForKeyPress();
            $this->bios->launch($this->os);

        }

        public function turnOff()
        {

            $this->os->halt();
            $this->bios->powerDown();

        }

    }
