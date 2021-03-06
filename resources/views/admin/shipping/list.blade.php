@extends('admin_layout')
@section('admin_content')
    <h4 class="header-title">Thông tin giao hàng</h4>
    <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
        <div class="row"><div class="col-sm-12 col-md-6">
               </div><div class="col-sm-12 col-md-6">
                <div id="datatable_filter" class="dataTables_filter">
                    <label>Search:
                        <input name="search" id="search" type="search" class="form-control form-control-sm" placeholder="" aria-controls="datatable">
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <table id="datatable" class="table table-bordered dt-responsive nowrap dataTable no-footer dtr-inline" style="border-collapse: collapse; border-spacing: 0px; width: 100%;" role="grid" aria-describedby="datatable_info">
                    <thead  class="col-sm-12">
                    <tr role="row">
                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 10px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">#</th>
                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 110px;" aria-label="Position: activate to sort column ascending">Tên người gửi</th>
                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 116px;" aria-label="Office: activate to sort column ascending">Số điện thoại</th>
                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 240px;" aria-label="Age: activate to sort column ascending">Địa chỉ</th>
                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 100px;" aria-label="action: activate to sort column ascending">Thành phố</th>
                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 100px;" aria-label="action: activate to sort column ascending">Quận/huyện</th>
                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 100px;" aria-label="action: activate to sort column ascending">Email</th>

                    </tr>
                    </thead>
                    <tbody class="tbody">
                    </tbody>
                </table></div></div>
        <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <div class="row"><div class="col-sm-12 col-md-6">
                    <div class="dataTables_length" id="datatable_length">
                        <label>Show
                            <select name="datatable_length" aria-controls="datatable" class="custom-select custom-select-sm form-control form-control-sm">
                                <option value="10">10</option><option value="25">25</option>
                                <option value="50">50</option><option value="100">100</option>
                            </select> Người nhận</label></div></div><div class="col-sm-12 col-md-6">
                    <div id="datatable_filter" class="dataTables_filter">
                        <label>Search:
                            <input name="search" id="search1" type="search" class="form-control form-control-sm" placeholder="" aria-controls="datatable">
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap dataTable no-footer dtr-inline" style="border-collapse: collapse; border-spacing: 0px; width: 100%;" role="grid" aria-describedby="datatable_info">
                        <thead  class="col-sm-12">
                        <tr role="row">
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 10px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">#</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 110px;" aria-label="Position: activate to sort column ascending">Tên người nhận</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 116px;" aria-label="Office: activate to sort column ascending">Số điện thoại</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 240px;" aria-label="Age: activate to sort column ascending">Địa chỉ</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 100px;" aria-label="action: activate to sort column ascending">Thành phố</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 100px;" aria-label="action: activate to sort column ascending">Quận/huyện</th>
                        </tr>
                        </thead>
                        <tbody class="tbody1">
                        </tbody>
                    </table></div></div>
        <script>
            $(document).ready(function(){
                fetch_customer_data();
                function fetch_customer_data(query = '')
                {
                    $.ajax({
                        url:"{{ route('shipping.search') }}",
                        method:'GET',
                        data:{query:query},
                        dataType:'json',
                        success:function(data)
                        {
                            $('.tbody').html(data.table_data);
                            $('#total_records').text(data.total_data);
                        }
                    })
                }

                $(document).on('keyup', '#search', function(){
                    var query = $(this).val();
                    fetch_customer_data(query);
                });
            });
            $(document).ready(function(){
                fetch_customer_data();
                function fetch_customer_data(query = '')
                {
                    $.ajax({
                        url:"{{ route('shipping.search_1') }}",
                        method:'GET',
                        data:{query:query},
                        dataType:'json',
                        success:function(data)
                        {
                            $('.tbody1').html(data.table_data);
                            $('#total_records').text(data.total_data);
                        }
                    })
                }

                $(document).on('keyup', '#search1', function(){
                    var query = $(this).val();
                    fetch_customer_data(query);
                });
            });
            $(document).on('click', '#delete', function() {
                var id = $(this).data('id');
                console.log(id);
                if (confirm('bạn có muốn xóa không?')) {
                    $.ajax({
                        url: 'shipping/remove/'+id,
                        method: 'get',
                        dataType: 'json',
                        type: 'delete',
                        data: {
                            "id": id,
                        },
                        success: function (data) {
                            $('#item_'+id).remove();
                        }
                    })
                }
            });


        </script>

@endsection
