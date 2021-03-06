$(document).ready(function () {

                $("select[name='city']").change(function () {
                    let city_id = $(this).val();
                    let origin = location.origin;
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url:origin+'/cart/district/'+city_id,
                        data: {},
                        dataType: 'json',
                        success:function(data){
                            console.log(data);
                            $("select[name='district']").children().remove();
                            $("select[name='district']").focus();
                            $("select[name='district']").append(
                                "<option value=''>" + "--Quận/Huyện--" + "</option>"
                            );
                            $.each(data, function (key, value) {
                                $("select[name='district']").append(
                                    "<option value=" + value.id + ">" + value.name + "</option>"
                                );
                            })
                        }
                    })
                });
                $("select[name='city_receive']").change(function () {
                    let city_id = $(this).val();
                    let origin = location.origin;
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url:origin+'/cart/district/'+city_id,
                        data: {},
                        dataType: 'json',
                        success:function(data){
                            $("select[name='district_receive']").children().remove();
                            $("select[name='district_receive']").focus();
                            $("select[name='district_receive']").append(
                                "<option value=''>" + "--Quận/Huyện--" + "</option>"
                            );
                            // console.log(result);
                            $.each(data, function (key, value) {
                                $("select[name='district_receive']").append(
                                    "<option value=" + value.id + ">" + value.name + "</option>"
                                );
                            })
                        }
                    })
                });

                            ///duplicate-address
                $('#click_check').on('click',function(){
                    document.getElementById('textBox10').value=document.getElementById('textBox1').value;
                    document.getElementById('textBox6').value=document.getElementById('textBox2').value;
                    document.getElementById('textBox7').value=document.getElementById('textBox3').value;
                    // $('.textBox3').on('change', function() {
                    // $('.textBox7').val($(this).val());
                    // });
                });

                    // document.getElementById('text_12').value=document.getElementById('textBox10').value;
                    // document.getElementById('text_13').value=document.getElementById('textBox6').value;
                    // document.getElementById('text_14').value=document.getElementById('textBox7').value;

                $('#textBox10').on('chang',function (){
                    document.getElementById('textBox10').value=document.getElementById('text_12').value;
                })
   })
$(document).on('click','#district_receive',function () {
    let id = $(this).val();
    let origin = location.origin;
    $.ajax({
        url:origin+'/cart/transportFee/'+id,
        data: {},
        dataType: 'json',
        success:function(data){
            let total = data.total + data.transport[0].fee;
            let totals = new Intl.NumberFormat().format(total);
            console.log(totals)
                $("#fee").html(data.transport[0].fee + 'VNĐ');
                $('#total' +id).html(totals + "VNĐ")

        }
    })
});

