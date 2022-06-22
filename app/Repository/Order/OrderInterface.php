<?php

namespace App\Repository\Order;

use App\Models\Order;

interface OrderInterface{
    public function getAllData();
    public function getAllDataPackageType();
    public function storeOrUpdate($id = null,$data);
    public function view($id);
    public function delete($id);
}