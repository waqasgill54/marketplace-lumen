<?php

namespace App\Repository\Order;
use App\Models\Order;
use App\Models\DataPackageType;
use function is;
use function is_null;

class OrderRepository implements OrderInterface{
    
    public function getAllDataPackageType(){
        return DataPackageType::all();
    }

    public function getAllData(){
        return Order::latest()->with('dataPackageType')->get();
    }

    public function storeOrUpdate($id = null,$data){
        if(is_null($id)){
            $order = new Order();
            $order->name = $data['name'];
            $order->max_bid_price = $data['max_bid_price'];
            $order->data_package_type_id = $data['data_package_type_id'];
            return $order->save();
        }else{
            $order = Order::find($id);
            if(!is_null($order)){
                $order->name = $data['name'];
                $order->max_bid_price = $data['max_bid_price'];
                $order->data_package_type_id = $data['data_package_type_id'];
                return $order->save();
            }else{
                return false;
            }
        }
    }

    public function view($id){
        return Order::find($id);
    }
    public function delete($id){
        $order = Order::find($id);
        if(!is_null($order)){
            return $order->delete();
        }else{
            return false;
        }
    }
}