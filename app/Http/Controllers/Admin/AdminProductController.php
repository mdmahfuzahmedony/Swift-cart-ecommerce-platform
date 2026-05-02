namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // এখানে আপনি ডাটাবেস থেকে সেলস বা অর্ডার কাউন্ট পাঠাতে পারেন
        return view('admin.index'); 
    }
}