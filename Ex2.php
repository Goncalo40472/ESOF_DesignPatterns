<?php

    class DatabaseExample {

        public $host;
        private $port;
        private $username;
        private $password;

        public function __construct(string $host, int $port, string $username, string $password) {

            $this->host = $host;
            $this->port = $port;
            $this->username = $username;
            $this->password = $password;

        }

        public function getHost(): string {

            return $this->host;

        }

        public function getPort(): int {

            return $this->port;

        }

        public function getUsername(): string {

            return $this->username;

        }

        public function getPassword(): string {

            return $this->password;

        }

    }   

    class DBConnector {

        private static $instance;

        private function __construct(){}

        public static function getDBInstance() : DatabaseExample {

            if(null === static::$instance) {

                static::$instance = new DatabaseExample('$host', 1, '$username', '$password');

            }

            return static::$instance;

        }

    }