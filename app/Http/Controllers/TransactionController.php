<?php
namespace App\Http\Controllers;
use App\Models\Transaction;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with('product')->get();

        return view('pages.dashboard-transactions', [
            'transactions' => $transactions,
        ]);
    }

    public function getProduct($id)
    {
        $product = Product::find($id);
    
        return response()->json($product);
    }
    

    public function create()
    {
        $users = User::all();
        $products = Product::all();


        return view('pages.dashboard-transactions-create',[
            'users' => $users, 'products'=> $products
        ]);
    }

// Fungsi untuk menghasilkan tanda tangan SHA-256
    function generateSignature($httpMethod, $apiKey, $secretKey) {
        $dataToHash = $httpMethod . ':' . $apiKey;
        return hash('sha256', $dataToHash);
    }

    public function store(Request $request)
{
    $data = $request->all();
    $id_product = $data['product'];
    $p = Product::find($id_product);
     // Fungsi untuk menghasilkan tanda tangan SHA-256
function generateSignature($httpMethod, $apiKey, $secretKey) {
    $dataToHash = $httpMethod . ':' . $apiKey;
    return hash('sha256', $dataToHash);
}

// Data yang diperlukan
$httpMethod = 'POST';
$apiKey = 'DATAUTAMA'; 
$secretKey = 'yangpentingada'; 
$apiUrl = 'http://tes-skill.datautama.com/test-skill/api/v1/transactions';

// Generate tanda tangan
$signature = generateSignature($httpMethod, $apiKey, $secretKey);

// Hitung payment_amount
// $quantity = $request->input('qty');
// $price = $request->input('price');
// $product_id = $request->input('product');
// $paymentAmount = $quantity * $price;

$quantity = $data['qty'];
$price = $p['price'];
$product_id = $p['id'];
echo $paymentAmount = $price * $quantity;

// Buat permintaan ke API dengan tanda tangan
$response = Http::withHeaders([
    'X-API-KEY' => $apiKey,
    'X-SIGNATURE' => $signature,
])->post($apiUrl, [
  'quantity' => $quantity,
    'price' => $price,
    'payment_amount' => $paymentAmount,
]);

    $responseData = $response->json(); 
    if (isset($responseData['code']) && $responseData['message'] === 'OK') {
       
        DB::table('transactions')->insert([
            'reference_no' => $responseData['data']['reference_no'],
            'product_id' => $p['id'], 
            'quantity' => $responseData['data']['quantity'],
            'price' => $responseData['data']['price'],
            'payment_amount' => $responseData['data']['payment_amount']
        ]);
        // Tampilkan respons dari API
        echo $response->body();
        flush();
        sleep(2); 
        // Redirect kembali ke halaman transactions dengan notifikasi berhasil
        return redirect()->route('transaction')->with('success', 'Transaksi berhasil disimpan.');

    } else {
        // Mengambil pesan kesalahan dari respons API
       echo $errorData = $responseData['message']; // Sesuaikan ini dengan struktur respons API sebenarnya
    
        // Redirect kembali ke halaman transactions/create dengan notifikasi gagal dan pesan kesalahan
        return redirect()->route('transactions.create')->with('error', 'Transaksi gagal. ' . $errorData);
    }
    
}

}
