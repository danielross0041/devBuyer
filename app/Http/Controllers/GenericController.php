<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RequestAttributes;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\Models\User;
use App\Models\attributes;
use App\Models\role_assign;
use App\Models\category;
use App\Models\sub_category;
use App\Models\brand;

use Illuminate\Support\Str;
use Session;
use Helper;

class GenericController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        // $user = Helper::curren_user();

        // $att_tag = attributes::where('is_active' ,1)->select('attribute')->distinct()->get();
        // $role_assign = role_assign::where('is_active' ,1)->where("role_id" ,$user->role_id)->first();
        
        // View()->share('att_tag',$att_tag);
        // View()->share('role_assign',$role_assign);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function roles()
    {
        $user = Auth::user();
        if ($user->role_id != 1) {
            return redirect()->back()->with('error', "No Link found");
        }
        $att_tag = attributes::where('is_active' ,1)->select('attribute')->distinct()->get();
        $attributes = attributes::where('is_active' ,1)->get();
        $role_assign = role_assign::where('is_active' ,1)->where("role_id" ,$user->role_id)->first();
        
        return view('roles/roles')->with(compact('attributes','att_tag','role_assign'));
    }
    
    public function generic_submit(RequestAttributes $request)
    {

        $token_ignore = ['_token' => ''];
        $post_feilds = array_diff_key($_POST , $token_ignore);
        
        try{
            attributes::insert($post_feilds);
            return redirect()->back()->with('message', 'Information updated successfully');
        }
        catch(Exception $e){
            return redirect()->back()->with('error', 'Error will saving record');
        }
    }

    public function role_assign_modal()
    {
        $user = Auth::user();
        $role_assign = role_assign::where('is_active' ,1)->where("role_id" ,$_POST['role_id'])->orderBy('id','desc')->first();
        $att_tag = attributes::where('is_active' ,1)->select('attribute')->distinct()->get();
        $body = "";
        if ($att_tag) {
            $route = route('roleassign_submit');
            $body .= "<input type='hidden' name='role_id' id='fetch-role-id' value='".$_POST['role_id']."'>";
            if ($role_assign && $role_assign->assignee!='N;') {
                $checker = unserialize($role_assign->assignee);
                $body .= "<input type='hidden' name='record_id' value='".$role_assign->id."'>";
            }else{
                $checker = [];
            }
            foreach($att_tag as $key => $role){
                $body .= "<tr><td>".ucwords($role->attribute)."</td><td><div class='custom-control custom-checkbox'>
                                  <input type='checkbox' name='assignee[]' class='custom-control-input' id='customCheck1".$key."' ";
                                   if(in_array($role->attribute."_1", $checker)){ $body .= "checked"; }
                                    $body .= " value='".$role->attribute."_1'>
                                  <label class='custom-control-label' for='customCheck1".$key."'>1</label></div></td>
                            
                            <td><div class='custom-control custom-checkbox'>
                                  <input type='checkbox' name='assignee[]' class='custom-control-input' id='customCheck2".$key."' ";
                                   if(in_array($role->attribute."_2", $checker)){ $body .= "checked"; }
                                    $body .= " value='".$role->attribute."_2'>
                                  <label class='custom-control-label' for='customCheck2".$key."'>2</label></div></td>

                            <td><div class='custom-control custom-checkbox'>
                                  <input type='checkbox' name='assignee[]' class='custom-control-input' id='customCheck3".$key."' ";
                                   if(in_array($role->attribute."_3", $checker)){ $body .= "checked"; }
                                    $body .= " value='".$role->attribute."_3'>
                                  <label class='custom-control-label' for='customCheck3".$key."'>3</label></div></td>

                            <td><div class='custom-control custom-checkbox'>
                                  <input type='checkbox' name='assignee[]' class='custom-control-input' id='customCheck4".$key."' ";
                                   if(in_array($role->attribute."_4", $checker)){ $body .= "checked"; }
                                    $body .= " value='".$role->attribute."_4'>
                                  <label class='custom-control-label' for='customCheck4".$key."'>4</label></div></td></tr>";    
            }
        }

        $bod['body'] = $body;
        $response = json_encode($bod);
        return $response;
    }

    public function roleassign_submit(Request $request)
    {
        if (isset($request->record_id) && $request->record_id != 0) {
            $role_assign = role_assign::where('is_active' ,1)->where("id" ,$request->record_id)->first();
        }else{
            $role_assign = new role_assign;
            $role_assign->role_id = $request->role_id;    
        }
        
        $role_assign->assignee = serialize($request->assignee);
        $role_assign->save();
        return redirect()->back()->with('message', 'Role has been assigned successfully');
    }

    public function listing($slug='')
    {
        if ($slug == 'contact') {
            $slug = "contact_details";
        }
        $user = Auth::user();
        $role_assign = role_assign::where('is_active' ,1)->where("role_id" ,$user->role_id)->first();
        if ($role_assign) {
            $validator = Helper::check_rights($slug);
            if (is_null($validator)) {
                return redirect()->back()->with('error', "Don't have sufficient rights to access this page");
            }
        }else{
            return redirect()->back()->with('error', "Don't have sufficient rights to access this page");
        }
        
        $form = null;
        $table = null;
        $eloquent = '';
        if($slug == "roles"){
            $att_tag = attributes::where('is_active' ,1)->select('attribute')->distinct()->get();

            $attributes = attributes::where('is_active' ,1)->where('attribute' , $slug)->get();
            $is_hide = 0;
        }else{
            $att_tag = attributes::where('is_active' ,1)->select('attribute')->distinct()->get();
            $attributes = attributes::where('is_active' ,1)->where('attribute' , $slug)->get();
            $get_eloquent = attributes::where('is_active' ,1)->where('attribute' , $slug)->first();
            $eloquent = ($get_eloquent->model != '')?$get_eloquent->model:'';
            $is_hide = 1;
            if ($eloquent != '') {
                $form = $this->generated_form($slug);
                $table = $this->generated_table($slug);
            }

        }
        return view('roles/crud')->with(compact('attributes','att_tag','role_assign','validator','slug','is_hide','eloquent','form','table'));
    }
    
    private function generated_form($slug = '')
    {
        $body = '';

        if ($slug == 'testimonials') {
            $route_url = route('crud_generator', $slug);
            $body = '<form class="" id="generic-form" method="POST" action="'.$route_url.'">
                    <input type="hidden" name="_token" value="'.csrf_token().'">
                    <input type="hidden" name="record_id" id="record_id" value="">
                    <div class="row">
                        <div id="assignrole"></div>
                        <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Name:</label>
                                <div class="d-flex">
                                    <input id="name" placeholder="Name" name="name" class="form-control" type="text" autocomplete="off" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-6 col-12" id="role-label">
                            <div class="form-group end-date">
                                <label for="end-date" class="">Description:</label>
                                <div class="d-flex">
                                    <textarea id="description" required name="desc" class="form-control" ></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>';
            return $body;
        } elseif ($slug == 'product') {
            $route_url = route('crud_generator', $slug);
            $body = '<form class="" id="generic-form" enctype="multipart/form-data" method="POST" action="'.$route_url.'">
                    <input type="hidden" name="_token" value="'.csrf_token().'">
                    <input type="hidden" name="record_id" id="record_id" value="">
                    <div class="row">
                        <div id="assignrole"></div>
                        <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Name:</label>
                                <div class="d-flex">
                                    <input id="name" placeholder="Name" name="name" class="form-control" type="text" autocomplete="off" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">MPN:</label>
                                <div class="d-flex">
                                    <input id="mpn" placeholder="MPN" name="mpn" class="form-control" type="text" autocomplete="off" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Price:</label>
                                <div class="d-flex">
                                    <input id="price" placeholder="Price" name="price" class="form-control" type="number" autocomplete="off" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-6" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Brand:</label>
                                <div class="d-flex">
                                    <select name="brand_id" id="brand_id" class="form-control profession" required >
                                        <option selected="true" disabled="disabled" >Select Brand</option>';
                                        $brand= brand::where("is_active",1)->where("is_deleted",0)->get();
                                        if ($brand) {
                                            foreach($brand as $k => $val){
                                            $body.='<option value="'.$val->id.'">'.$val->name.'</option>';
                                            }
                                        }
                            $body.='</select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-6" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Category:</label>
                                <div class="d-flex">
                                    <select name="category_id" id="category_id" class="form-control profession" required>
                                        <option selected="true" disabled="disabled" >Select Category</option>';
                                        $category= category::where("is_active",1)->where("is_deleted",0)->get();
                                        if ($category) {
                                            foreach($category as $k => $val){
                                            $body.='<option value="'.$val->id.'">'.$val->name.'</option>';
                                            }
                                        }
                            $body.='</select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-6" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Sub Category:</label>
                                <div class="d-flex">
                                    <select name="sub_category_id" id="sub_category_id" class="form-control profession" required >
                                        <option selected="true" disabled="disabled" >Select Sub Category</option>';
                                        $sub_category= sub_category::where("is_active",1)->where("is_deleted",0)->get();
                                        if ($sub_category) {
                                            foreach($sub_category as $k => $val){
                                            $body.='<option value="'.$val->id.'">'.$val->name.'</option>';
                                            }
                                        }
                            $body.='</select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-6" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Image:</label>
                                <div class="d-flex">
                                    <input type="file" id="image" accept="image/*" name="image" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-6" id="rank-label">
                        </div>
                        <div class="col-md-6 col-sm-6 col-6" id="rank-label">
                            <div class="form-group start-date">
                                <div class="d-flex">
                                    <td><img id="image-add" style="width:80px;height:80px;display:none;" src=""></td>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-6" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Meta Title:</label>
                                <div class="d-flex">
                                    <input id="meta_title" placeholder="Meta Title" name="meta_title" class="form-control" type="text" autocomplete="off" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-6" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Condition:</label>
                                <div class="d-flex">
                                    <input id="condition" placeholder="Condition" name="condition" class="form-control" type="text" autocomplete="off" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Short Description:</label>
                                <div class="d-flex">
                                    <input id="short_description" placeholder="Short Description" name="short_description" class="form-control" type="text" autocomplete="off" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Meta Description:</label>
                                <div class="d-flex">
                                    <input id="meta_description" placeholder="Meta Description" name="meta_description" class="form-control" type="text" autocomplete="off" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Google Feet Category:</label>
                                <div class="d-flex">
                                    <input id="gfeed_cat" placeholder="Google Feet Category" name="gfeed_cat" class="form-control" type="text" autocomplete="off" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-6" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Weight:</label>
                                <div class="d-flex">
                                    <input id="weight" placeholder="Weight" name="weight" class="form-control" type="text" autocomplete="off" required/>
                                </div>
                            </div>
                        </div>
                        <input id="quantity" name="quantity" value="999" class="form-control" type="hidden" autocomplete="off" required/>
                        <div class="col-md-6 col-sm-6 col-6" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">URL:</label>
                                <div class="d-flex">
                                    <input id="url" placeholder="URL" name="url" class="form-control" type="text" autocomplete="off" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-6" id="rank-label">
                            <div class="form-group start-date">
                                <label for="google_feed" class="">Google Feed:</label>
                                <div class="d-flex">
                                    <input type="checkbox" id="google_feed" name="google_feed" value="1" class="form-control" autocomplete="off" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-6" id="rank-label">
                            <div class="form-group start-date">
                                <label for="stock" class="">In Stock:</label>
                                <div class="d-flex">
                                    <input type="checkbox" id="stock" name="stock" value="1" class="form-control" autocomplete="off" required/>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>';
            return $body;
        } elseif ($slug == 'category') {
            $route_url = route('crud_generator', $slug);
            $body = '<form class="" id="generic-form" enctype="multipart/form-data" method="POST" action="'.$route_url.'">
                    <input type="hidden" name="_token" value="'.csrf_token().'">
                    <input type="hidden" name="record_id" id="record_id" value="">
                    <div class="row">
                        <div id="assignrole"></div>
                        <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Name:</label>
                                <div class="d-flex">
                                    <input id="name" placeholder="Name" name="name" class="form-control" type="text" autocomplete="off" required/>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>';
            return $body;
        } elseif ($slug == 'brand') {
            $route_url = route('crud_generator', $slug);
            $body = '<form class="" id="generic-form" enctype="multipart/form-data" method="POST" action="'.$route_url.'">
                    <input type="hidden" name="_token" value="'.csrf_token().'">
                    <input type="hidden" name="record_id" id="record_id" value="">
                    <div class="row">
                        <div id="assignrole"></div>
                        <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Name:</label>
                                <div class="d-flex">
                                    <input id="name" placeholder="Name" name="name" class="form-control" type="text" autocomplete="off" required/>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>';
            return $body;
        } elseif ($slug == 'sub-category') {
            $slug = 'sub_category';
            $route_url = route('crud_generator', $slug);
            $body = '<form class="" id="generic-form" enctype="multipart/form-data" method="POST" action="'.$route_url.'">
                    <input type="hidden" name="_token" value="'.csrf_token().'">
                    <input type="hidden" name="record_id" id="record_id" value="">
                    <div class="row">
                        <div id="assignrole"></div>
                        <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Name:</label>
                                <div class="d-flex">
                                    <input id="name" placeholder="Name" name="name" class="form-control" type="text" autocomplete="off" required/>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>';
            return $body;
        } elseif ($slug == 'product-csv-uploader') {
            $route_url = route('file_generator');
            $body = '<form class="" id="generic-form" enctype="multipart/form-data" method="POST" action="'.$route_url.'">
                    <input type="hidden" name="_token" value="'.csrf_token().'">
                    <input type="hidden" name="record_id" id="record_id" value="">
                    <div class="row">
                        <div id="assignrole"></div>
                        <div class="col-md-12 col-sm-12 col-12 im" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">File:</label>
                                <div class="d-flex">
                                    <input type="file" name="file" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>';
            return $body;
        } else{
            return $body;
        }
    }

    private function generated_table($slug='')
    {
        

        $body = '';
        if ($slug == "testimonials") {
            $data = 'App\Models\\'.$slug;
            $loop = $data::where("is_active" ,1)->where("is_deleted" ,0)->get();
            if ($loop) {
            $body = '<thead>
                                       <tr>
                                          <th>S. No</th>
                                          <th>Name</th>
                                          <th>Description</th>
                                          <th>Creation Date</th>
                                          <th>Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>';
                                       if($loop) {
                                       foreach($loop as $key => $val){
                                       $body .= '<tr>
                                          <td>'.++$key.'</td> 
                                          <td>'.$val->name.'</td> 
                                          <td>'.$val->desc.'</td>
                                          <td>'.date("M d,Y" ,strtotime($val->created_at)).'</td>
                                          <td>
                                             <button type="button" class="btn btn-primary editor-form" data-edit_id= "'.$val->id.'" data-name= "'.$val->name.'" data-desc= "'.$val->desc.'" >Edit</button>
                                             <button type="button" class="btn btn-danger delete-record" data-model="'.$data.'" data-id= "'.$val->id.'" >Delete</button>
                                          </td>
                                       </tr>';
                                       }
                                   }
                                    $body .= '</tbody>
                                    <tfoot>
                                       <tr>
                                          <th>S. No</th>
                                          <th>Name</th>
                                          <th>Description</th>
                                          <th>Creation Date</th>
                                          <th>Action</th>
                                       </tr>
                                    </tfoot>';
                                }
                                $script = '$("body").on("click" ,".editor-form",function(){
                                                $("#name").val($(this).data("name"))
                                                $("#record_id").val($(this).data("edit_id"))
                                                var texta = $(this).data("desc");
                                                CKEDITOR.instances.description.setData(texta);
                                                $("#addevent").modal("show")
                                            })';
                                $resp['body'] = $body;
                                $resp['script'] = $script;
                                return $resp;
        } elseif ($slug == "category") {
            $data = 'App\Models\\'.$slug;
            $loop = $data::where("is_active" ,1)->where("is_deleted" ,0)->get();
            if ($loop) {
            $body = '<thead>
                                       <tr>
                                          <th>S. No</th>
                                          <th>Name</th>
                                          <th>Creation Date</th>
                                          <th>Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>';
                                       if($loop) {
                                       foreach($loop as $key => $val){
                                       $body .= '<tr>
                                          <td>'.++$key.'</td> 
                                          <td>'.$val->name.'</td> 
                                          <td>'.date("M d,Y" ,strtotime($val->created_at)).'</td>
                                          <td>
                                             <button type="button" class="btn btn-primary editor-form" data-edit_id= "'.$val->id.'" data-name= "'.$val->name.'" >Edit</button>
                                          </td>
                                       </tr>';
                                       }
                                   }
                                    $body .= '</tbody>
                                    <tfoot>
                                       <tr>
                                          <th>S. No</th>
                                          <th>Name</th>
                                          <th>Creation Date</th>
                                          <th>Action</th>
                                       </tr>
                                    </tfoot>';
                                }
                                $script = '$("body").on("click" ,".editor-form",function(){
                                                $("#name").val($(this).data("name"))
                                                $("#record_id").val($(this).data("edit_id"))
                                                $("#addevent").modal("show")
                                            })';
                                $resp['body'] = $body;
                                $resp['script'] = $script;
                                return $resp;
        } elseif ($slug == "product") {
            $data = 'App\Models\\'.$slug;
            $loop = $data::where("is_active" ,1)->where("is_deleted" ,0)->take(100)->get();
            if ($loop) {
            $body = '<thead>
                                       <tr>
                                          <th>S. No</th>
                                          <th>Name</th>
                                          <th>Mpn</th>
                                          <th>Price</th>
                                          <th>Brand</th>
                                          <th>Category</th>
                                          <th>Sub Category</th>
                                          <th>Creation Date</th>
                                          <th>Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>';
                                       if($loop) {
                                       foreach($loop as $key => $val){
                                        $category = category::where('id',$val->category_id)->first();
                                        $sub_category = sub_category::where('id',$val->sub_category_id)->first();
                                        $brand = brand::where('id',$val->brand_id)->first();
                                       $body .= '<tr>
                                          <td>'.++$key.'</td> 
                                          <td>'.$val->name.'</td> 
                                          <td>'.$val->mpn.'</td> 
                                          <td>'.$val->price.'</td> 
                                          <td>'.$brand->name.'</td> 
                                          <td>'.$category->name.'</td> 
                                          <td>'.$sub_category->name.'</td> 
                                          <td>'.date("M d,Y" ,strtotime($val->created_at)).'</td>
                                          <td>
                                             <button type="button" class="btn btn-info show-form" data-name= "'.$val->name.'" data-mpn= "'.$val->mpn.'" data-price= "'.$val->price.'" data-brand_id= "'.$val->brand_id.'" data-category_id= "'.$val->category_id.'" data-sub_category_id= "'.$val->sub_category_id.'" data-meta_title= "'.$val->meta_title.'" data-short_description= "'.$val->short_description.'" data-meta_description= "'.$val->meta_description.'" data-condition= "'.$val->condition.'" data-weight= "'.$val->weight.'" data-gfeed_cat= "'.$val->gfeed_cat.'" data-url= "'.$val->url.'" data-google_feed= "'.$val->google_feed.'" data-stock= "'.$val->stock.'" >Show</button>
                                             <button type="button" class="btn btn-primary editor-form" data-edit_id= "'.$val->id.'" data-name= "'.$val->name.'" data-mpn= "'.$val->mpn.'" data-price= "'.$val->price.'" data-brand_id= "'.$val->brand_id.'" data-category_id= "'.$val->category_id.'" data-sub_category_id= "'.$val->sub_category_id.'" data-meta_title= "'.$val->meta_title.'" data-short_description= "'.$val->short_description.'" data-meta_description= "'.$val->meta_description.'" data-condition= "'.$val->condition.'" data-weight= "'.$val->weight.'" data-gfeed_cat= "'.$val->gfeed_cat.'" data-url= "'.$val->url.'" data-google_feed= "'.$val->google_feed.'" data-stock= "'.$val->stock.'" >Edit</button>
                                             <button type="button" class="btn btn-danger delete-record" data-model="'.$data.'" data-id= "'.$val->id.'" >Delete</button>
                                          </td>
                                       </tr>';
                                       }
                                   }
                                    $body .= '</tbody>
                                    <tfoot>
                                       <tr>
                                          <th>S. No</th>
                                          <th>Name</th>
                                          <th>Mpn</th>
                                          <th>Price</th>
                                          <th>Brand</th>
                                          <th>Category</th>
                                          <th>Sub Category</th>
                                          <th>Creation Date</th>
                                          <th>Action</th>
                                       </tr>
                                    </tfoot>';
                                }
                                $script = '$("body").on("click" ,".editor-form",function(){
                                                $("#name").val($(this).data("name"))
                                                $("#mpn").val($(this).data("mpn"))
                                                $("#price").val($(this).data("price"))
                                                $("#brand_id").val($(this).data("brand_id"))
                                                $("#category_id").val($(this).data("category_id"))
                                                $("#sub_category_id").val($(this).data("sub_category_id"))
                                                $("#meta_title").val($(this).data("meta_title"))
                                                $("#short_description").val($(this).data("short_description"))
                                                $("#meta_description").val($(this).data("meta_description"))
                                                $("#condition").val($(this).data("condition"))
                                                if($(this).data("google_feed") == 1){
                                                    $("#google_feed").prop("checked", true);
                                                }
                                                if($(this).data("stock") == 1){
                                                    $("#stock").prop("checked", true);
                                                }
                                                $("#weight").val($(this).data("weight"))
                                                $("#gfeed_cat").val($(this).data("gfeed_cat"))
                                                $("#url").val($(this).data("url"))
                                                $("#record_id").val($(this).data("edit_id"))
                                                $("#image").removeAttr("required");
                                                $(".eventbutton").css("display","")
                                                $("#addevent").modal("show")
                                            })
                                            $("body").on("click" ,".show-form",function(){
                                                $("#name").val($(this).data("name"))
                                                $("#mpn").val($(this).data("mpn"))
                                                $("#price").val($(this).data("price"))
                                                $("#brand_id").val($(this).data("brand_id"))
                                                $("#category_id").val($(this).data("category_id"))
                                                $("#sub_category_id").val($(this).data("sub_category_id"))
                                                $("#meta_title").val($(this).data("meta_title"))
                                                $("#short_description").val($(this).data("short_description"))
                                                $("#meta_description").val($(this).data("meta_description"))
                                                $("#condition").val($(this).data("condition"))
                                                if($(this).data("google_feed") == 1){
                                                    $("#google_feed").prop("checked", true);
                                                }
                                                if($(this).data("stock") == 1){
                                                    $("#stock").prop("checked", true);
                                                }
                                                $("#weight").val($(this).data("weight"))
                                                $("#gfeed_cat").val($(this).data("gfeed_cat"))
                                                $("#url").val($(this).data("url"))
                                                $("#record_id").val($(this).data("edit_id"))
                                                $(".eventbutton").css("display","none")
                                                $("#addevent").modal("show")
                                            })';
                                $resp['body'] = $body;
                                $resp['script'] = $script;
                                return $resp;
        } elseif ($slug == "sub-category") {
            $slug = 'sub_category';
            $data = 'App\Models\\'.$slug;
            $loop = $data::where("is_active" ,1)->where("is_deleted" ,0)->get();
            if ($loop) {
            $body = '<thead>
                                       <tr>
                                          <th>S. No</th>
                                          <th>Name</th>
                                          <th>Creation Date</th>
                                          <th>Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>';
                                       if($loop) {
                                       foreach($loop as $key => $val){
                                       $body .= '<tr>
                                          <td>'.++$key.'</td> 
                                          <td>'.$val->name.'</td> 
                                          <td>'.date("M d,Y" ,strtotime($val->created_at)).'</td>
                                          <td>
                                             <button type="button" class="btn btn-primary editor-form" data-edit_id= "'.$val->id.'" data-name= "'.$val->name.'" >Edit</button>
                                          </td>
                                       </tr>';
                                       }
                                   }
                                    $body .= '</tbody>
                                    <tfoot>
                                       <tr>
                                          <th>S. No</th>
                                          <th>Name</th>
                                          <th>Creation Date</th>
                                          <th>Action</th>
                                       </tr>
                                    </tfoot>';
                                }
                                $script = '$("body").on("click" ,".editor-form",function(){
                                                $("#name").val($(this).data("name"))
                                                $("#record_id").val($(this).data("edit_id"))
                                                $("#addevent").modal("show")
                                            })';
                                $resp['body'] = $body;
                                $resp['script'] = $script;
                                return $resp;
        } elseif ($slug == "brand") {
            $data = 'App\Models\\'.$slug;
            $loop = $data::where("is_active" ,1)->where("is_deleted" ,0)->get();
            if ($loop) {
            $body = '<thead>
                                       <tr>
                                          <th>S. No</th>
                                          <th>Name</th>
                                          <th>Creation Date</th>
                                          <th>Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>';
                                       if($loop) {
                                       foreach($loop as $key => $val){
                                       $body .= '<tr>
                                          <td>'.++$key.'</td> 
                                          <td>'.$val->name.'</td> 
                                          <td>'.date("M d,Y" ,strtotime($val->created_at)).'</td>
                                          <td>
                                             <button type="button" class="btn btn-primary editor-form" data-edit_id= "'.$val->id.'" data-name= "'.$val->name.'" >Edit</button>
                                          </td>
                                       </tr>';
                                       }
                                   }
                                    $body .= '</tbody>
                                    <tfoot>
                                       <tr>
                                          <th>S. No</th>
                                          <th>Name</th>
                                          <th>Creation Date</th>
                                          <th>Action</th>
                                       </tr>
                                    </tfoot>';
                                }
                                $script = '$("body").on("click" ,".editor-form",function(){
                                                $("#name").val($(this).data("name"))
                                                $("#record_id").val($(this).data("edit_id"))
                                                $("#addevent").modal("show")
                                            })';
                                $resp['body'] = $body;
                                $resp['script'] = $script;
                                return $resp;
        } else{
            return $body;
        }
    }

    public function report_user($slug)
    {
        $user = Auth::user();
        
        $role_assign = role_assign::where('is_active' ,1)->where("role_id" ,$user->role_id)->first();
        if ($role_assign) {
            $validator = Helper::check_rights($slug);
            if (is_null($validator)) {
                return redirect()->back()->with('error', "Don't have sufficient rights to access this page");
            }
        }else{
            return redirect()->back()->with('error', "Don't have sufficient rights to access this page");
        }
        
        $att_tag = attributes::where('is_active' ,1)->select('attribute')->distinct()->get();
        $attributes = attributes::where('is_active' ,1)->where('attribute' , $slug)->get();
        return view('reports/report_generic_user')->with(compact('attributes','att_tag','role_assign','validator','slug'));
    }

    public function custom_report()
    {
        $status['status'] = 0;
        if (isset($_POST['role_id'])) {
            $attributes = attributes::find($_POST['role_id']);
            if ($attributes->attribute == "departments") {
                $status['status'] = 1;
                $status['redirect'] = route('custom_report_user' ,[$attributes->attribute , str::slug($attributes->name)]);

                return json_encode($status);
            }elseif ($attributes->attribute == "designations") {
                $status['status'] = 1;
                $status['redirect'] = route('custom_report_user' ,[$attributes->attribute , str::slug($attributes->name)]);
                return json_encode($status);
            }elseif ($attributes->attribute == "roles") {
                $status['status'] = 1;
                $status['redirect'] = route('custom_report_user' ,[$attributes->attribute , str::slug($attributes->role)]);
                return json_encode($status);
            }else{
                $status['status'] = 0;
                return json_encode($status);
            }
        }else{
            $status['status'] = 0;
            return json_encode($status);
        }
    }

    public function custom_report_user($slug='',$slug2='')
    {
        $attributes = attributes::where("attribute" , $slug)->first();
        $designation = attributes::where("is_active" , 1)->get();
        $project_id = Session::get("project_id");
        if ($attributes) {

            if ($attributes->attribute == "departments") {
                $all_user = User::where("is_active" , 1)->where("department" , $attributes->id)->get();
                return view('reports/custom-user-report')->with(compact('attributes','all_user','slug','designation'));
            }elseif ($attributes->attribute == "designations") {
                $slug2 = ucwords(str_replace('-', ' ', $slug2));
                $attributes = attributes::where("attribute" , $slug)->where("name" , "LIKE" , $slug2)->first();
                $all_user = User::where("is_active" , 1)->where("designation" , $attributes->id)->get();
                return view('reports/custom-user-report')->with(compact('attributes','all_user','slug','designation'));
            }elseif ($attributes->attribute == "roles") {
                $slug2 = ucwords(str_replace('-', ' ', $slug2)); 
                $attributes = attributes::where("attribute" , $slug)->where("role" , "LIKE" , $slug2)->first();
                if (!$attributes) {
                    return redirect()->back()->with('error', "Didn't find any records.!");
                }
                $all_user = User::where("is_active" , 1)->where("role_id" , $attributes->id)->get();
                return view('reports/custom-user-report')->with(compact('attributes','all_user','slug','designation'));
            }else{
                return redirect()->back()->with('error', "Didn't find any records.!");
            }
        }else{
            return redirect()->back()->with('error', "Didn't find any records..");
        }
    }
    public function sale_generator(Request $request){
        $token_ignore = ['_token' => '' ];
        $post_feilds = array_diff_key($_POST , $token_ignore);
        $data = 'App\Models\car_sale';
        $car_feilds['is_sale'] = 1;
        // dd($post_feilds);
        try {
            $check = $data::where('is_active',1)->where('is_deleted',0)->where('product_id',$_POST['product_id'])->first();

            if ($check) {
                $create = $data::where("id" ,$check->id)->update($post_feilds);
                $product_sale = car_details::where("id" ,$_POST['product_id'])->update($car_feilds);
                $msg = "Record has been updated";
            } else{
                $create = $data::create($post_feilds);
                $product_sale = car_details::where("id" ,$_POST['product_id'])->update($car_feilds);
                $msg = "Record has been created";
            }
          return redirect()->back()->with('message', $msg);
        } catch(Exception $e) {
          $error = $e->getMessage();
          return redirect()->back()->with('error', "Error Code: ".$error);
        }
    }
    public function crud_generator($slug='' , Request $request)
    {
        $token_ignore = ['_token' => '' , 'record_id' => '' , 'image' => ''];
        $post_feilds = array_diff_key($_POST , $token_ignore);
        if ($slug == "product") {
            if (!isset($post_feilds['google_feed'])) {
                $post_feilds['google_feed'] = 0;
            }
            if (!isset($post_feilds['stock'])) {
                $post_feilds['stock'] = 0;
            }
        }
        $data = 'App\Models\\'.$slug;
        if ($slug == 'category' || $slug == 'brand' || $slug == 'sub_category') {
            $s = $_POST['name'];
            $s = str_replace(' ', '-', $s);
            $s = strtolower($s);
            $post_feilds['slug'] = $s;
        }
        $extension=array("jpeg","jpg","png","jfif","webp");
        if (isset($request->image)) {
            $file = $request->image;
            $ext = $request->image->getClientOriginalExtension();
            if(in_array($ext,$extension)) {
                $file_name = $request->image->getClientOriginalName();
                $file_name = substr($file_name, 0, strpos($file_name, "."));
                $name = "uploads/product/" .$file_name."_".time().'.'.$file->getClientOriginalExtension();
                $destinationPath = public_path().'/uploads/product/';
                $share = $request->image->move($destinationPath,$name);
                if ($slug == "product") {
                    $post_feilds['image_url'] = $name;
                } else{
                    $post_feilds['image'] = $name;
                }
            } else{
                $msg = "This File type is not Supported!";
                return redirect()->back()->with('error', "Error Code: ".$msg);
            }
        }
        try {
            if (isset($_POST['record_id']) && $_POST['record_id'] != '') {
                $create = $data::where("id" , $_POST['record_id'])->update($post_feilds);
                $msg = "Record has been updated";
            } else{
                if ($slug == 'category' || $slug == 'brand' || $slug == 'sub_category') {
                    $check_record = $data::where('is_active',1)->where('slug',$post_feilds['slug'])->first();
                    if ($check_record) {
                        $msg = "This ".ucwords($slug)." already exists";
                        return redirect()->back()->with('error',$msg);
                    }
                }
                $create = $data::create($post_feilds);
                $msg = "Record has been created";
            }
          return redirect()->back()->with('message', $msg);
        } catch(Exception $e) {
          $error = $e->getMessage();
          return redirect()->back()->with('error', "Error Code: ".$error);
        }
    }
    public function delete_record(Request $request)
    {
        $token_ignore = ['_token' => '' , 'id' => '' , 'model' => ''];
        $post_feilds = array_diff_key($_POST , $token_ignore);
        $data = $_POST['model'];
        try{
            $update = $data::where("id" , $_POST['id'])->update($post_feilds);
            $status['message'] = "Record has been deleted";
            $status['status'] = 1;
            return json_encode($status);
        }catch(Exception $e) {
            $error = $e->getMessage();
            $status['message'] = $error;
            $status['status'] = 0;
            return json_encode($status);
        }
    }

    
}