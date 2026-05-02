public function category($slug)
{
    // আপাতত আমরা ডামি ডাটা পাঠাচ্ছি, পরে ডাটাবেস থেকে আনব
    return view('shop', ['category_name' => str_replace('-', ' ', $slug)]);
}