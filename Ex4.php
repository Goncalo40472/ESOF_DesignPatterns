<?php

    class Product {

        private $id;
        private $nome;
        private $dataProducao;
        private $preco;

        public function __construct(int $id, string $nome, string $dataProducao, float $preco) {

            $this->id = $id;
            $this->nome = $nome;
            $this->dataProducao = $dataProducao;
            $this->preco = $preco;

        }

        public function getId() { return $this->id; }

    }

    interface SortStrategy {

        public function sort(array $products);

    }

    class SortById implements SortStrategy {

        public function sort(array $products) {

            uasort($products, array($this, 'sortById'));
            return $products;

        }

        private function sortById($a, $b) {

            $pa = $a->getId();
            $pb = $b->getId();

            if($pa == $pb) return 0;

            return ($a < $b) ? -1 : 1;

        }

    }

    class SortByNome implements SortStrategy {

        public function sort(array $products) {

            //sort by nome

        }

    }

    class SortByData implements SortStrategy {

        public function sort(array $products) {

            //sort by data

        }

    }

    class SortByPreco implements SortStrategy {

        public function sort(array $products) {

            //sort by preço

        }

    }

    $sorter = new SortById();

    $products = array(new Product(3, 'a', '21-2-2000', 5.0),
                      new Product(1, 'a', '21-2-2000', 5.0));

    $sortedProducts = $sorter->sort($products);

    print_r($sortedProducts);