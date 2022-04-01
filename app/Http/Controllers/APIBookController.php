<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use Illuminate\Http\Request;

class APIBookController extends Controller
{
    public function DeleteBukuAPI($id){
        $BookDelete = Book::find($id);
        $BookDelete->delete();
        return 'Data berhasil didelete';
    }

    public function showFormAPI(Request $request){
        // Query Builder
        // Elonguent
        $book = Book::create([
            'nama' => $request->nama,
            'penulis' => $request->penulis,
            'harga' => $request->harga,
            'stock' => $request->stock,
            'user_id' => 1,
            'image' => $request->image
        ]);
        $category = Category::whereIn('category_name', $request->category)->get();
        $book->category()->attach($category);
        return response()->json([
            'message' => "Data berhasil dimasukkan",
            'data' => $book
        ]);
    }

    public function ViewAllAPI(){
        $books = Book::all();
        return response()->json([
            'data' => $books
        ]);
    }

    public function ShowUpdateAPI(Request $request, $id){
        $BookUpdate = Book::where('id', '=', $id)->first();

        $BookUpdate->update([
            'nama' => $request->nama,
            'penulis' => $request->penulis,
            'harga' => $request->harga,
            'stock' => $request->stock
        ]);
        return response()->json([
            'message' => "Data berhasil diupdate",
            'data' => $BookUpdate
        ]);
    }
}
