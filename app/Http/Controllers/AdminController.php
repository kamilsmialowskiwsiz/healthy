<?php
   
namespace App\Http\Controllers;
  
use App\Models\Product;
use App\Models\Diet;
use Illuminate\Http\Request;
   
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     $products = Product::all();
    //     return view('home', compact('products'));
    // }
  
    public function productsList(Request $request)
    {
        $products = Product::where([
            ['name', '!=', Null],
            [function ($query) use ($request){
                if (($term = $request->term)){
                    $query->orWhere('name', 'LIKE', '%' . $term . '%')->get();
                }
            }]
        ])
            ->orderBy("id", "asc")
            ->paginate(50);

        return view('adminProducts', compact('products'))->with('i', (request()->input('page', 1) - 1) * 5);       
    }

    public function createProducts()
    {
        return view('adminCreate');
    }

    public function storeProducts(Request $request)
    {
         $request->validate([
            'name' => 'required',
            'calorie' => 'required',
            'image' => 'required',
            'description' => 'required',
        ]);
    
        Product::create($request->all());
     
        return redirect()->route('admin.createProducts')
                        ->with('success','Produkt dodany pomyślnie.');
    }

    public function editProduct(Product $product)
    {
        return view('adminEditProduct',compact('product'));
    }

    public function updateProduct(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'calorie' => 'required',
            'image' => 'required',
            'description' => 'required',
        ]);
    
        $product->update($request->all());
    
        return redirect()->route('admin.productsList')
                        ->with('success','Produkt zaktualizowany pomyślnie');
    }

    public function destroyProduct(Product $product)
    {
        $product->delete();

        return redirect()->route('admin.productsList')
            ->with('success', 'Produkt został usunięty pomyślnie.');
    }

    public function dietList()
    {
        $diets = Diet::all();

        return view('adminDiets', compact('diets'));
    }

    public function changeFilePath(Request $request, Diet $diet)
    {
        $request->validate([
            'filepath' => 'required',
        ]);
    
        $diet->update($request->all());

        return redirect()->route('admin.dietList')
            ->with('success', 'Ścieżka do planu została zmieniona.');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('adminHome');
    }
    
}