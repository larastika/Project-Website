<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\MasterHead;
use App\Models\Product;
use Illuminate\Support\Facades\Log; // 
use Illuminate\Database\QueryException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;


class PublicController extends Controller
{
    public function product()
    {
        return view('pages.fe.product');
    }

    public function index()
    {
        return view('pages.fe.index');
    }
    public function getData(): JsonResponse
    {
        $masterHead = MasterHead::select('title', 'subtitle', 'image')->latest()->first();
        $product = Product::select('name', 'category', 'image', 'slug')->get();
        $data = [
            'master_head' => $masterHead,
            'product' => $product,
        ];
        return response()->json($data);
    }
    public function detail(Request $request): JsonResponse
    {
        $res = [];
        $rescode = 200;
        $slug = $request->input('slug');
        $cari = $request->input('search', '');
        $start = $request->input('start', 0);
        $limit = $request->input('limit', 0);
        try {
            $data = Product::select('category', 'image', 'name', 'description')->where('slug', $slug)->first();
            if ($data) {
                $res = ['success' => 1, 'data' => $data];
            } else {
                $res = ['success' => 0, 'message' => 'Data tidak ditemukan'];
            }
        } catch (QueryException $e) {
            $res = ['success' => 0, 'message' => 'Ops tejadi kesalahan saat mengambil data'];
            Log::error('QueryException: ' . $e);
            Log::error('QueryException:' . $e);
            //throw $th
        } catch (Exception $e) {
            $res = ['success' => 0, 'message' => 'Ops terjadi kesalahan pada server'];
            Log::error('Exception: ' . $e);
        }
        return response()->json($res, $rescode);
    }
}
