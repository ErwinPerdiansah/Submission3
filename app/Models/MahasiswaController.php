use App\Models\Mahasiswa; 
use Illuminate\Http\Request; 

class MahasiswaController extends Controller { 
    
    // Method-method lainnya 

    public function store(Request $request) { 

        // Validasi data jika diperlukan 
        $request->validate([ 
            'nama' => 'required|string|max:255', 
            'alamat' => 'required|string|max:255', 
            'tanggal_lahir' => 'required|date'
        ]);
        
        // Simpan data ke dalam database 
        Mahasiswa::create([ 
            'nama' => $request->input('nama'), 
            'alamat' => $request->input('alamat'), 
            'tanggal_lahir' => $request->input('tanggal_lahir'), 
        ]); 

        // Redirect kembali ke halaman index atau halaman lainnya jika diperlukan 
        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil disimpan.');
    }
}