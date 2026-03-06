<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class RecipeController extends Controller
{
    /**
     * Menampilkan daftar resep (dengan fitur Search).
     */
    public function index(Request $request)
    {
        // 1. Mulai Query
        $query = Recipe::query();

        // 2. Logika Search: Jika ada input 'search', filter berdasarkan nama_resep
        if ($request->filled('search')) {
            $query->where('nama_resep', 'LIKE', '%' . $request->search . '%');
        }

        // 3. Ambil data terbaru
        $recipes = $query->latest()->get();

        // 4. Kirim ke View
        return view('recipes.index', compact('recipes'));
    }

    /**
     * Fitur Like: Menambah jumlah like +1.
     */
    public function like($id)
    {
        $recipe = Recipe::findOrFail($id); 
        $recipe->likes += 1;
        $recipe->save();

        return back();
    }

    /**
     * Form tambah resep.
     */
    public function create()
    {
        return view('recipes.create');
    }

    /**
     * Simpan resep baru ke database.
     */
    public function store(Request $request)
    {
        // 1. Validasi
        $request->validate([
            'nama_resep' => 'required',
            'deskripsi'  => 'required',
            'foto'       => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $fileName = null;

        // 2. Logika Simpan Foto (Penyimpanan ke storage/app/public/recipes)
        if($request->hasFile('foto')){
            $file = $request->file('foto');
            // Menyimpan file secara otomatis dengan nama unik
            $path = $file->store('recipes', 'public');
            // Mengambil nama file saja untuk disimpan di kolom 'foto' database
            $fileName = basename($path);
        }

        // 3. Simpan data ke Database
        Recipe::create([
            'nama_resep' => $request->nama_resep,
            'deskripsi'  => $request->deskripsi,
            'foto'       => $fileName,
            'likes'      => 0 
        ]);

        return redirect('/recipes')->with('success', 'Resep berhasil ditambahkan!');
    }

    /**
     * Tampilkan detail resep.
     */
    public function show($id)
    {
        $recipe = Recipe::findOrFail($id);
        return view('recipes.show', compact('recipe'));
    }
}