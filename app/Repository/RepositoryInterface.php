<?php

namespace App\Repository;

interface RepositoryInterface
{
    public function all();

    public function find(int $id);

    public function create(array $data);

    public function update(array $data, int $id);

    public function delete (int $id);

    public function where(array $criteria, array $with = [],  array $attributes = ["*"]);

    public function increment(string $field, int $amount = 1, array $conditions = []);

    public function decrement(string $field, int $amount = 1, array $conditions = []);
}
