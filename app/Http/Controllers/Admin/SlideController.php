<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateFormSlide;
use App\Http\Requests\ValidateFormUpdateSlide;
use App\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SlideController extends Controller
{
    public function list(){
          $slide = Slide::all();
        return view('admin.slide.list',compact('slide'));
    }
    public function add(){
        return view('admin.slide.add');
    }
    public function save(ValidateFormSlide $request){
        $data = array();
        $data['slide_title'] = $request->slide_title;
        $data['slide_desc'] = $request->slide_desc;
        $data['slide_status'] = $request->slide_status;
        $get_image = $request->file('slide_image');
        if ($get_image){
            $get_name_image = $get_image ->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image . rand(0,99) . '.' .$get_image->getClientOriginalExtension();
            $get_image->move('slide',$new_image);
            $data['slide_image']=$new_image;
            DB::table('slides')->insert($data);
            Alert()->success('Thêm thành công !')->autoClose(1500);
            return \redirect()->route('slide.list');
        }
        $data['slide_image'] = '';
        DB::table('slide')->insert($data);
        Alert()->success('Thêm thành công !')->autoClose(1500);
        return \redirect()->route('slide.list');
    }
    public function edit($id){
          $slide  = Slide::where('id',$id)->get();
        return view('admin.slide.edit',compact('slide'));
    }
    public function update(ValidateFormUpdateSlide $request,$id){
        $data = array();
        $data['slide_title'] = $request->slide_title;
        $data['slide_desc'] = $request->slide_desc;
        $data['slide_status'] = $request->slide_status;
        $get_image = $request->file('slide_image');
        if ($get_image){
            $get_name_image = $get_image ->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image . rand(0,99) . '.' .$get_image->getClientOriginalExtension();
            $get_image->move('slide',$new_image);
            $data['slide_image']=$new_image;
            DB::table('slides')->where('id',$id)->update($data);
            Alert()->success('cập nhật thành công !')->autoClose(1500);
            return \redirect()->route('slide.list');
        }else {
            DB::table('slides')->where('id',$id)->update($data);
            Alert()->success('Cập nhật thành công !')->autoClose(1500);
            return \redirect()->route('slide.list');
        }
    }
    public function remove($id)
    {
        $slide =Slide::find($id)->delete();
        return response()->json($slide);
    }
    public function active($id){
        DB::beginTransaction();
        Slide::find($id)->update(['slide_status'=>0]);
        DB::commit();
        Alert()->success('Hủy kích hoạt thành công!')->autoClose(1500);
        return \redirect()->route('slide.list');
    }
    public function unactive($id){
        DB::beginTransaction();
        $slide = Slide::find($id)->update(['slide_status'=>1]);
        DB::commit();
        Alert()->success('Kích hoạt thành công!')->autoClose(1500);
        Alert()->success(' Kích hoạt thành công!')->autoClose(1500);
        return \redirect()->route('slide.list');    }

    public function search(){
            return view('admin.slide.search');
    }
    public function action(Request $request)
    {
        if($request->ajax())
        {
            $output = '';
            $query = $request->get('query');
            if($query != '')
            {
                $data = DB::table('slides')
                    ->orWhere('slide_title', 'like', '%'.$query.'%')
                    ->orWhere('slide_desc', 'like', '%'.$query.'%')
                    ->orderBy('id', 'desc')
                    ->get();
            }
            else
            {
                $data = DB::table('slides')
                    ->orderBy('id', 'desc')
                    ->get();
            }
            $total_row = $data->count();
            if($total_row > 0)
            {
                foreach($data as $key => $row)
                {
                    $output .= '
        <tr id=item_'.$row->id.'>
        <td>'.++$key.'</td>
         <td><img width="50px" src=" /slide/'.$row->slide_image.' " alt=""></td>
         <td>'.$row->slide_title.'</td>
         <td>'.$row->slide_desc.'</td>
         ';
           if ($row->slide_status == 0) {
               $output .= '
         <td><a href='.route('slide.unactive',$row->id).'><button id="unactive" data-id="'.$row->id.'"  class="btn btn-danger"> Ẩn </button></a></td>
';
           }else{
               $output .= '
         <td><a href='.route('slide.active',$row->id).'><button class="btn btn-primary">Hiện</button></a></td>
';
           }
           $output .= '
         <td><a href='.route('slide.edit',$row->id).'><button class="btn  btn-dark" type="submit">sửa</button></a>  <button id="delete"  data-id="'.$row->id .'" class="btn  btn-danger delete" type="submit">xóa</button> </td>
        </tr>
        ';
                }
            }
            else
            {
                $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
            }
            $data = array(
                'table_data'  => $output,
                'total_data'  => $total_row
            );

            echo json_encode($data);
        }
    }



}
