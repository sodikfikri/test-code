<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ProductAPIController extends Controller
{
    public function list_data(Request $request)
    {
        try {
            $data = DB::table('produk')->where('status', 'bisa dijual')->orderBy('id_produk', 'DESC')->get();
            if (count($data) == 0) {
                $response = [
                    'meta' => [
                        'code' => '404',
                        'message' => 'data not found'
                    ]
                ];
    
                return response()->json($response);
            }
            $response = [
                'meta' => [
                    'code' => '200',
                    'message' => 'get data has success full'
                ],
                'data' => $data
            ];
            return response()->json($response);
        } catch (\Throwable $e) {
            $response = [
                'meta' => [
                    'code' => '400',
                    'message' => (string) $e->getMessage()
                ]
            ];

            return response()->json($response);
        }
    }

    public function create_data(Request $request) 
    {
        try {
            $data = [
                'nama_produk'   => $request->nama_produk,
                'kategori'      => $request->kategori,
                'harga'         => $request->harga,
                'status'        => $request->status
            ];

            DB::table('produk')->insert($data);

            $response = [
                'meta' => [
                    'code' => '200',
                    'message' => 'add data has success full'
                ]
            ];
            return response()->json($response);

        } catch (\Throwable $e) {
            $response = [
                'meta' => [
                    'code' => '400',
                    'message' => (string) $e->getMessage()
                ]
            ];

            return response()->json($response);
        }
    }

    public function detail_data(Request $request)
    {
        try {
            $data = DB::table('produk')->where('id_produk', $request->id)->get();
            $response = [
                'meta' => [
                    'code' => '200',
                    'message' => 'get data has success full'
                ],
                'data' => $data[0]
            ];
            return response()->json($response);
        } catch (\Throwable $e) {
            $response = [
                'meta' => [
                    'code' => '400',
                    'message' => (string) $e->getMessage()
                ]
            ];

            return response()->json($response);
        }
    }

    public function update_data(Request $request)
    {
        try {
            $idx = $request->id;
            $data = [
                'nama_produk'   => $request->nama_produk,
                'kategori'      => $request->kategori,
                'harga'         => $request->harga,
                'status'        => $request->status
            ];

            DB::table('produk')->where('id_produk', $idx)->update($data);
            $response = [
                'meta' => [
                    'code' => '200',
                    'message' => 'update data has success full'
                ],
            ];
            return response()->json($response);
        } catch (\Throwable $e) {
            $response = [
                'meta' => [
                    'code' => '400',
                    'message' => (string) $e->getMessage()
                ]
            ];

            return response()->json($response);
        }
    }

    public function delete_data(Request $request)
    {
        try {
            DB::table('produk')->where('id_produk', $request->id)->delete();
            $response = [
                'meta' => [
                    'code' => '200',
                    'message' => 'delete data has success full'
                ],
            ];
            return response()->json($response);
        } catch (\Throwable $e) {
            $response = [
                'meta' => [
                    'code' => '400',
                    'message' => (string) $e->getMessage()
                ]
            ];

            return response()->json($response);
        }
    }
}
