<?php

require __DIR__ . '/../vendor/autoload.php';

use Doctrine\Common\Collections\ArrayCollection;

function hoge(array $entities)
{
    foreach ($entities as $entity) {
        var_dump($entity);
    }
}

function fuga(Traversable $entities)
{
    foreach ($entities as $entity) {
        var_dump($entity);
    }
}

function vaa(iterable $entities)
{
    foreach ($entities as $entity) {
        var_dump($entity);
    }
}


$array = [
  ['name' => 'a'],
  ['name' => 'b'],
  ['name' => 'c'],
];

$collection = new ArrayCollection([
  ['name' => 'a'],
  ['name' => 'b'],
  ['name' => 'c'],
]);

# hoge($array);
# hoge($collection);

# fuga($array);
# fuga($collection);

vaa($array);
vaa($collection);

