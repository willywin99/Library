<?php

namespace App\Http\Controllers;

use App\Library;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Library::all();
        return response()->json([
            'status' => 'success',
            'statuscode' => 200,
            'data' => $books
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = new Library();
        $book->judul = $request->judul;
        $book->jumlah_halaman = $request->jumlah_halaman;
        $book->tanggal_terbit = $request->tanggal_terbit;
        $book->ISBN = $request->ISBN;
        $book->bahasa = $request->bahasa;
        $book->penerbit = $request->penerbit;
        $book->deskripsi = $request->deskripsi;
        $book->save();
        return response()->json([
            'status' => 'success',
            'statuscode' => 200,
            'data' => 'Buku berhasil ditambahkan'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function show(Library $library, $id)
    {
        $book = Library::find($id);
        return response()->json([
            'status' => 'success',
            'statuscode' => 200,
            'data' => $book
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Library $library, $id)
    {
        $book = Library::find($id);
        $book->judul = $request->judul;
        $book->jumlah_halaman = $request->jumlah_halaman;
        $book->tanggal_terbit = $request->tanggal_terbit;
        $book->ISBN = $request->ISBN;
        $book->bahasa = $request->bahasa;
        $book->penerbit = $request->penerbit;
        $book->deskripsi = $request->deskripsi;
        $book->save();
        return response()->json([
            'status' => 'success',
            'statuscode' => 200,
            'data' => 'Buku berhasil diubah'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function destroy(Library $library, $id)
    {
        $book = Library::find($id);
        $book->delete();
        return response()->json([
            'status' => 'success',
            'statuscode' => 200,
            'data' => 'Buku berhasil dihapus'
        ], 200);
    }
}
