<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Yajra\DataTables\DataTables;


use Intervention\Image\Facades\Image as Image;

class AdminController extends Controller
{
    //
    public function admin_login()
    {
        return view('admin.signin');
    }

    public function admin_login_store(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $user = User::where('email', '=', $email)->first();
        if (Hash::check($password, $user->password) && $user->is_admin == 1) { // password matched
            Session::put('userid', $user->id);
            Session::put('useremail', $user->email);
            return redirect()->to('admin/dashboard');
        } else {
            return redirect()->to('login');
        }
    }

    public function index()
    {
        return view('admin.dashboard');
    }

    public function logout()
    {
        session::flush();
        return redirect()->to('admin/login');
    }

    public function categoryIndex()
    {

        return view('admin.categories.index');
    }
    public function allCategories(Request $request)
    {
        if ($request->ajax()) {

            $categories = Category::orderby('title', 'asc')->get();

            return DataTables::of($categories)

                ->addColumn('action', function ($section) {
                    $html = '<div class="btn-group">';
                    $html .= '<a data-toggle="tooltip"  id="' . $section->id . '" class="btn btn-success mr-1 view" title="View"><i class="lni lni-eye"></i> </a>';
                    $html .= '<a data-toggle="tooltip"  id="' . $section->id . '" class="btn btn-info mr-1 edit" title="Edit"><i class="lni lni-pencil-alt"></i> </a>';
                    $html .= '<a data-toggle="tooltip"  id="' . $section->id . '" class="btn btn-danger delete" title="Delete"><i class="lni lni-trash"></i> </a>';
                    $html .= '</div>';
                    return $html;
                })
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        } else {
            return response()->json(['status' => 'false', 'message' => "Access only ajax request"]);
        }
    }

    public function createCategory(Request $request)
    {
        if ($request->ajax()) {
            $view = View::make('admin.categories.create')->render();
            return response()->json(['html' => $view]);
        } else {
            return response()->json(['status' => 'false', 'message' => "Access only ajax request"]);
        }
    }

    public function storeCategory(Request $request)
    {
        if ($request->ajax()) {
            $rules = [
                'title' => 'required',
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return response()->json([
                    'type' => 'error',
                    'errors' => $validator->getMessageBag()->toArray()
                ]);
            } else {
                DB::beginTransaction();
                try {
                    $category  = new Category();
                    $title =  $request->title;

                    $category->title = $title;
                    $category->save();
                    DB::commit();
                    return response()->json(['type' => 'success', 'message' => "Successfully Inserted"]);
                } catch (Exception $e) {
                    DB::rollback();
                    dd($e->getMessage());
                    return response()->json(['type' => 'error', 'message' => "Please Fill With Correct data"]);
                }
            }
        } else {
            return response()->json(['status' => 'false', 'message' => "Access only ajax request"]);
        }
    }

    public function editCategory($id, Request $request)
    {
        $category  = Category::where('id', $id)->first();
        if ($request->ajax()) {
            $view = View::make('admin.categories.edit', compact('category'))->render();
            return response()->json(['html' => $view]);
        } else {
            return response()->json(['status' => 'false', 'message' => "Access only ajax request"]);
        }
    }

    public function updateCategory($id, Request $request)
    {
        if ($request->ajax()) {
            $category  = Category::where('id', $id)->first();

            $rules = [
                'title' => 'required',
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return response()->json([
                    'type' => 'error',
                    'errors' => $validator->getMessageBag()->toArray()
                ]);
            } else {

                DB::beginTransaction();
                try {
                    $category->title = $request->input('title');
                    $category->save(); //
                    DB::commit();
                    return response()->json(['type' => 'success', 'message' => "Successfully Inserted"]);
                } catch (Exception $e) {
                    DB::rollback();
                    dd($e->getMessage());
                    return response()->json(['type' => 'error', 'message' => "Please Fill With Correct data"]);
                }
            }
        } else {
            return response()->json(['status' => 'false', 'message' => "Access only ajax request"]);
        }
    }

    public function productIndex()
    {

        return view('admin.products.index');
    }


    public function getallProducts(Request $request)
    {
        if ($request->ajax()) {

            $products = Product::orderby('title', 'asc')->get();

            return DataTables::of($products)

                ->addColumn('action', function ($product) {
                    $html = '<div class="btn-group">';
                    $html .= '<a data-toggle="tooltip"  id="' . $product->id . '" class="btn btn-success mr-1 view" title="View"><i class="lni lni-eye"></i> </a>';
                    $html .= '<a data-toggle="tooltip"  id="' . $product->id . '" class="btn btn-info mr-1 edit" title="Edit"><i class="lni lni-pencil-alt"></i> </a>';
                    $html .= '<a data-toggle="tooltip"  id="' . $product->id . '" class="btn btn-danger delete" title="Delete"><i class="lni lni-trash"></i> </a>';
                    $html .= '</div>';
                    return $html;
                })->addColumn('category', function ($product) {
                    $name = Category::where('id', $product->category_id)->value('title');
                    return $name;
                })->addColumn('image', function ($product) {
                    $image = '<img id="logoPreview" src="' . asset($product->image) . '" alt="Image" height="50">';
                    return $image;
                })
                ->rawColumns(['action', 'category', 'image'])
                ->addIndexColumn()
                ->make(true);
        } else {
            return response()->json(['status' => 'false', 'message' => "Access only ajax request"]);
        }
    }


    public function createProduct(Request $request)
    {
        if ($request->ajax()) {
            $category = Category::all();
            $view = View::make('admin.products.create', compact('category'))->render();
            return response()->json(['html' => $view]);
        } else {
            return response()->json(['status' => 'false', 'message' => "Access only ajax request"]);
        }
    }

    public function storeProduct(Request $request)
    {
        if ($request->ajax()) {

            $rules = [
                'title' => 'required',
            ];

            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return response()->json([
                    'type' => 'error',
                    'errors' => $validator->getMessageBag()->toArray()
                ]);
            } else {

                DB::beginTransaction();
                try {
                    $product = new Product();

                    if ($request->hasFile('image')) {
                        $image = $request->file('image');
                        $image_rename = hexdec(uniqid('', false)) . '.' . $image->getClientOriginalExtension();
                        Image::make($image)->resize(600, 599)->save('backend/uploads/images/products/' . $image_rename);
                        $image_url = 'backend/uploads/images/products/' . $image_rename;
                        $img = $image_url;
                        $product->image = $img;
                    }
                    if ($request->hasFile('image')) {
                        $thumbnail_image = $request->file('image');
                        $image_rename = hexdec(uniqid('', false)) . '.' . $thumbnail_image->getClientOriginalExtension();
                        Image::make($thumbnail_image)->resize(600, 599)->save('backend/uploads/images/products/' . $image_rename);
                        $image_url = 'backend/uploads/images/products/' . $image_rename;
                        $img = $image_url;
                        $product->thumb_image = $img;
                    }


                    $product->title = $request->input('title');
                    $product->price = $request->input('price');
                    $product->description = $request->input('description');
                    $product->category_id = $request->input('category');
                    $product->save(); //

                    DB::commit();
                    return response()->json(['type' => 'success', 'message' => "Successfully Inserted"]);
                } catch (\Exception $e) {
                    dd($e->getMessage());
                    DB::rollback();

                    return response()->json(['type' => 'error', 'message' => "Please Fill With Correct data"]);
                }
                // }
            }
        } else {
            return response()->json(['status' => 'false', 'message' => "Access only ajax request"]);
        }
    }
}
