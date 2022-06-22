<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Repository\Order\OrderInterface;
use Illuminate\Http\Request;
use function is_null;
use function redirect;

class OrderController extends Controller
{
    protected $order;
    public function __construct(OrderInterface $order)
    {
        $this->order = $order;
    }

    public function getAllDataPackageType(){
        $data_package_types = $this->order->getAllDataPackageType();
        return response()->json([
            "success" => true,
            "message" => "DataPackageType List",
            "data" => $data_package_types
        ]);
    }

    public function showAllOrders(){
        $orders = $this->order->getAllData();
        return response()->json([
            "success" => true,
            "message" => "Order List",
            "data" => $orders
        ]);
    }

    public function storeOrUpdate(Request $request,$id = null){

        $this->validate($request, [
            'name' => 'required|unique:orders,name,'.$id,
            'max_bid_price' => "required|regex:/^\d*(\.\d{1,2})?$/",
            'data_package_type_id' => 'required'
        ]);
        $data = $request->all();
        if(!is_null($id)){ //update
            $response = $this->order->storeOrUpdate($id,$data);
            if($response){
                return response()->json([
                    "success" => true,
                    "message" => "Data Updated!"
                ]);
            }else{
                return response()->json([
                    "success" => false,
                    "message" => "Record not found!"
                ]);
            }
        }else{//insert
            $this->order->storeOrUpdate($id = null,$data);
            return response()->json([
                "success" => true,
                "message" => "Data Inserted!"
            ]);
        }
    }

    public function view($id){
        $order = $this->order->view($id);
        return response()->json([
            "success" => true,
            "message" => "Order",
            "data" => $order
        ]);
    }

    public function delete($id){
        $response = $this->order->delete($id);
            if($response){
                return response()->json([
                    "success" => true,
                    "message" => "Data Deleted!"
                ]);
            }else{
                return response()->json([
                    "success" => false,
                    "message" => "Record not found!"
                ]);
            }
    }
}