@extends('admin_layout')
@section('admin_content')
    <h4 class="header-title">Đơn hàng</h4>
    <a href="{{route('order.add')}}"><i class="ion ion-md-add"></i><span>Thêm mới</span></a>
    <div class="table-responsive">
        <table class="table mb-0">
            <thead>
            <tr>
                <th>#</th>
                <th>Tên sản phẩm</th>
                <th>Giá sản phẩm</th>
                <th>Số lượng sản phẩm</th>
                <th>Hành động</th>
            </tr>
            </thead>
            <tbody>
            @foreach($order as $key => $list )

                <tr>
                    <th scope="row">{{$key + 1}}</th>
                    <td>{{$list->shipping_name}}</td>
                    <td>{{$list->order_total}}</td>
                    @if($list->order_status==0)
                        <td>Chưa giao</td>
                    @elseif($list->order_status==1)
                        <td>Đang giao</td>
                    @elseif($list->order_status==2)
                        <td>Giao thành công</td>
                    @else
                        <td>Hủy đơn hàng</td>
                    @endif
                    <td><a style="margin-right: 10px" href={{route('order.edit',$list->order_id)}}    ><i class=" ion ion-md-color-filter"></i></a>|<a onclick="return confirm('bạn có thật sự muốn xóa không?')" style="margin-left: 10px" href="{{route('order.remove',$list->order_id)}}"><i class=" ion ion-md-close"></i></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
