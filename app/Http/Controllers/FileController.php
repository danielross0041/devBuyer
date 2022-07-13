<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Exports\SalesOrderExport;
use Maatwebsite\Excel\Excel;
use Illuminate\Support\Facades\Validator;

use App\Models\product;
use App\Models\brand;
use App\Models\category;
use App\Models\sub_category;

// use Excel;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function file_generator(Request $request){
        try{
            $this->validate($request,[
                'file' =>'required|mimes:xls,xlsx'
            ]);
            if ($request->file) {
                $file = $request->file;
                $file_name = $request->file->getClientOriginalName();
                $file_name = substr($file_name, 0, strpos($file_name, "."));
                $name = "uploads/file/" .$file_name."_".time().'.'.$file->getClientOriginalExtension();
                $destinationPath = public_path().'/uploads/file/';
                $share = $request->file->move($destinationPath,$name);
                $path = public_path($name);
                $rows = \Excel::toArray(new SalesOrderExport, $path);
                $flag = $this->upload_sheet($rows);
                if ($flag) {
                    $msg = "File has been uploaded";
                    return redirect()->back()->with('message', $msg);
                }
            }
            $msg = "File could not be uploaded";
            return redirect()->back()->with('error', $msg);
        } catch(Exception $e) {
          $error = $e->getMessage();
          return redirect()->back()->with('error', "Error Code: ".$error);
        }
    }
    public function upload_sheet($collection){
        try{
            foreach ($collection[0] as $key => $value) {
                if ($key>0) {
                    $brand_id = $this->check_brand($value[1]);
                    $category_id = $this->check_category($value[11]);
                    $sub_category_id = $this->check_sub_category($value[12]);
                    $post_feilds['brand_id'] = $brand_id;
                    $post_feilds['category_id'] = $category_id;
                    $post_feilds['sub_category_id'] = $sub_category_id;
                    $post_feilds['mpn'] = $value[0];
                    $post_feilds['name'] = $value[2];
                    $post_feilds['short_description'] = $value[3];
                    $post_feilds['meta_description'] = $value[4];
                    $post_feilds['meta_title'] = $value[5];
                    $post_feilds['price'] = ($value[6]=='Call for price')?0:$value[6];
                    $post_feilds['old_price'] = ($value[7]=='Call for price')?0:$value[7];
                    $post_feilds['condition'] = $value[8];
                    $post_feilds['weight'] = $value[9];
                    $post_feilds['quantity'] = $value[10];
                    $post_feilds['gfeed_cat'] = $value[13];
                    $post_feilds['upc'] = $value[14];
                    $post_feilds['stock'] = $value[15];
                    $post_feilds['url'] = $value[16];
                    $post_feilds['image_url'] = $value[17];
                    $post_feilds['status'] = $value[18];
                    $post_feilds['google_feed'] = $value[19];
                    $check = product::where('mpn',$value[0])->first();
                    if ($check) {
                        $create = product::where('mpn', (string)$value[0])->update($post_feilds);
                    } else{
                        $create = product::create($post_feilds);
                    }
                }
            }
            return true;
        } catch(Exception $e){
            return false;
        }
    }

    public function check_brand($name)
    {
        $check_brand = brand::where('name',$name)->first();
        $slug = strtolower(str_replace(' ', '-', $name));
        if ($check_brand) {
            return $check_brand->id;
        } else{
            $create_brand = brand::create(array('name' => $name,'slug' => $slug));
            return $create_brand->id;
        }
    }
    public function check_category($name)
    {
        $check_category = category::where('name',$name)->first();
        $slug = strtolower(str_replace(' ', '-', $name));
        if ($check_category) {
            return $check_category->id;
        } else{
            $create_category = category::create(array('name' => $name,'slug' => $slug));
            return $create_category->id;
        }
    }
    public function check_sub_category($name)
    {
        $check_sub_category = sub_category::where('name',$name)->first();
        $slug = strtolower(str_replace(' ', '-', $name));
        if ($check_sub_category) {
            return $check_sub_category->id;
        } else{
            $create_sub_category = sub_category::create(array('name' => $name,'slug' => $slug));
            return $create_sub_category->id;
        }
    }
}
