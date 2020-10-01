<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateFormOrder;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function list(){
         $order = DB::table('orders')
             ->join('users','users.id','=','orders.order_id')
             ->join('shippings','shippings.id','=','order_id')
             ->get();
        return view('admin.order.list',['order'=>$order]);
    }
    public function add(){
      $shipping = DB::table('shippings')->get();
        return view('admin.order.add',['shipping'=>$shipping]);
    }
    public function save(ValidateFormOrder $request){
        DB::beginTransaction();
            Order::create([
                'shipping_id' => $request->shipping_order,
                'order_total' => $request->order_total,
                'order_status' => $request->order_status,
            ]);
        DB::commit();
        Alert()->success('Thêm thành công !')->autoClose(1500);
        return \redirect()->route('order.list');

    }
    public function edit($id){
        $shipping = DB::table('shippings')->get();
        $order = Order::where('order_id',$id)->get();
   return view('admin.order.edit',compact('shipping','order'));

    }
    public function update(ValidateFormOrder $request,$id){
        DB::beginTransaction();
            Order::where('order_id',$id)->update([
                'shipping_id' => $request->shipping_order,
                'order_total' => $request->order_total,
                'order_status' => $request->order_status,
            ]);
        DB::commit();
        Alert()->success('Sửa  thành công !')->autoClose(1500);
        return \redirect()->route('order.list');

    }
    public function remove($id){
        DB::beginTransaction();
        Order::where('order_id',$id)->delete();
        DB::commit();
        Alert()->success('Xóa  thành công !')->autoClose(1500);
        return \redirect()->route('order.list');    }
}