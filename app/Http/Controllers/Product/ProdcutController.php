<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product\Product;
use App\Models\Product\ProductImage;
use App\Models\RowMaterials\ProductFabric;
use App\Models\RowMaterials\ProductModel;
use App\Models\RowMaterials\ProductSize;
use App\Models\RowMaterials\ProductTimber;
use App\Models\RowMaterials\ProductType;
use Illuminate\Http\Request;

class ProdcutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products = Product::join('product_sizes as ps', 'products.size_id' ,'=', 'ps.id')
        //     ->select('products.*', 'ps.size as product_size')
        //     ->first();

        $products = Product::get();

        return view('dashboard.owner.product.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $models = ProductModel::all();
        $sizes = ProductSize::all();
        $farics = ProductFabric::all();
        $timbers = ProductTimber::all();
        $types = ProductType::all();
        return view(
            'dashboard.owner.product.create',
            [
                'models' => $models,
                'sizes' => $sizes,
                'fabrics' => $farics,
                'timbers' => $timbers,
                'types' => $types,
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'category' => 'required|',
            'model' => 'required|numeric',
            'type' => 'required|numeric',
            'size' => 'required|numeric',
            'fabric' => 'required|numeric',
            'timber' => 'required|numeric',
            'description' => 'required',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric',
            'fileUpload'=> 'required'
        ], [
            'model.numeric' => 'Please select Model',
            'type.numeric' => 'Please select Type',
            'size.numeric' => 'Please select Size',
            'fabric.numeric' => 'Please select Fabric',
            'timber.numeric' => 'Please select Timber',
        ]);

        $product = Product::create([
            'category' => $request->input('category'),
            'model_id' => $request->input('model'),
            'type_id' => $request->input('type'),
            'size_id' => $request->input('size'),
            'fabric_id' => $request->input('fabric'),
            'timber_id' => $request->input('timber'),
            'description' => $request->input('description'),
            'quantity' => $request->input('quantity'),
            'unit_price' => $request->input('price'),
            'date' => date(now()),
        ]);

        if ($product->id != null) {
            if ($request->fileUpload != null) {
                foreach ($request->fileUpload as $key => $file) {
                    $newImageName = $product->id . '-' .  $key . '-' . time()  . '.' . $file->extension();
                    $file->move(public_path('productImages'), $newImageName);
                    $image = ProductImage::create([
                        'product_id' => $product->id,
                        'image_path' => $newImageName
                    ]);
                }
            }
        }

        return redirect()->route('owner.products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function productPage()
    {
        $products = Product::where('is_remove', 0)->get();


        return view('dashboard.customer.product_page')->with('products', $products);
    }

    public function productDetailsPage($id)
    {
        $product = Product::find(decrypt($id));

        return view('dashboard.customer.product_details_page')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $updateProduct = Product::find($id);
        $models = ProductModel::all();
        $sizes = ProductSize::all();
        $farics = ProductFabric::all();
        $timbers = ProductTimber::all();
        $types = ProductType::all();

        return view(
            'dashboard.owner.product.edit',
            [
                'updateProduct' => $updateProduct,
                'models' => $models,
                'sizes' => $sizes,
                'fabrics' => $farics,
                'timbers' => $timbers,
                'types' => $types,
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'category' => 'required|',
            'model' => 'required|numeric',
            'type' => 'required|numeric',
            'size' => 'required|numeric',
            'fabric' => 'required|numeric',
            'timber' => 'required|numeric',
            'description' => 'required',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric'
        ], [
            'model.numeric' => 'Please select Model',
            'type.numeric' => 'Please select Type',
            'size.numeric' => 'Please select Size',
            'fabric.numeric' => 'Please select Fabric',
            'timber.numeric' => 'Please select Timber',
        ]);


        $product = Product::where('id', $id)->update([
            'category' => $request->input('category'),
            'model_id' => $request->input('model'),
            'type_id' => $request->input('type'),
            'size_id' => $request->input('size'),
            'fabric_id' => $request->input('fabric'),
            'timber_id' => $request->input('timber'),
            'description' => $request->input('description'),
            'quantity' => $request->input('quantity'),
            'unit_price' => $request->input('price'),
        ]);

        return redirect()->route('owner.products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::where('id', $id)->update(['is_remove' => 1]);
        return redirect()->route('owner.products.index');
    }
}
