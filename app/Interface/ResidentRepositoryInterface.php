<?php

namespace App\Interfaces;

use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;

interface ResidentRepositoryInterface{
    public function getAllResident();

    public function getResidentById(int $id);

    public function createResident(array $data);

    public function updateResident(array $data, int $id);

    public function deleteResident(int $id);
}