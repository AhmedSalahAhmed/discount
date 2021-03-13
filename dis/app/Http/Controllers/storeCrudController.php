<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\store;
use Illuminate\Support\Facades\Validator;
use Yajra\Datatables\Facades\Datatables;
use Illuminate\Support\Facades\DB ;


class storeCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax())
        {
            return datatables()->of(store::latest()->get())
                    ->addColumn('action', function($data){
                        $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-primary btn-sm">Edit</button>';
                        $button .= '&nbsp;&nbsp;';
                        $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</button>';
                        return $button;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        $store = DB::table('stores')
        ->join('departments','departments.id','=','stores.dept_id')
        ->select('departments.dept_name', 'stores.id' , 'stores.store_img', 'stores.store_name' , 'stores.fb_acc'
        , 'stores.t_acc', 'stores.insta_acc')
        ->get();
        return view('store_index' ,compact('store'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $rules = array(
            'store_name'    =>  'required',
            'fb_acc'    =>  'required',
            't_acc'    =>  'required',
            'insta_acc'    =>  'required',
            'store_img'         =>  'required|image|max:2048'
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $image = $request->file('store_img');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();

        $image->move(public_path('images'), $new_name);

        $form_data = array(
            'store_name'        =>  $request->store_name,
            'fb_acc'        =>  $request->fb_acc,
            't_acc'        =>  $request->t_acc,
            'insta_acc'        =>  $request->insta_acc,
            'store_img'             =>  $image
        );

        store::create($form_data);

        return response()->json(['success' => 'Data Added successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(request()->ajax())
        {
            $data = store::findOrFail($id);
            return response()->json(['data' => $data]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $rules = array(
                'store_name'     =>  'required',
                'fb_acc'     =>  'required',
                't_acc'     =>  'required',
                'insta_acc'     =>  'required',
                'store_img'         =>  'required|image|max:2048'
            );
            $error = Validator::make($request->all(), $rules);
            if($error->fails())
            {
                return response()->json(['errors' => $error->errors()->all()]);
            }

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $rules = array(
                'store_name'     =>  'required',
                'fb_acc'     =>  'required',
                't_acc'     =>  'required',
                'insta_acc'     =>  'required',
            );

            $error = Validator::make($request->all(), $rules);

            if($error->fails())
            {
                return response()->json(['errors' => $error->errors()->all()]);
            }
        }

        $form_data = array(
            'store_name'        =>  $request->store_name,
            'fb_acc'         =>  $request->fb_acc,
            't_acc'         =>  $request->t_acc,
            'insta_acc'         =>  $request->insta_acc,
            'store_img'             =>  $image_name
          );
        store::whereId($request->hidden_id)->update($form_data);

        return response()->json(['success' => 'Data is successfully updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = store::findOrFail($id);
        $data->delete();
    }
}