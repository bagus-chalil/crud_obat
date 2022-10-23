<?php

namespace App\Http\Controllers;
use Carbon\Carbon;

use App\Models\Obat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ObatController extends Controller
{

    public function index()
    {
        return view('page.index');
    }

    public function create()
    {
        $obat= Obat::all();
        return view('page.data',compact('obat'));
    }

    public function store(Request $request){  
        $this->validate($request,[
            'nama_obat' => 'required|max:255',
            'diproduksi' => 'required|max:255',
            'tgl_pembuatan' => 'required|max:255',
            'tgl_kadaluarsa' => 'required|max:255',
        ]);
        $obat = new Obat();
        $obat->nama_obat = $request->input('nama_obat');
        $obat->dibuat = $request->input('diproduksi');
        $obat->tgl_pembuatan = Carbon::parse($request->input('tgl_pembuatan'))->toDateString();
        $obat->tgl_kadaluarsa = Carbon::parse($request->input('tgl_kadaluarsa'))->toDateString();
        $obat->created_by = $request->input('created_user');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = $request->input('nama_obat').'-'.time().'.'.$extention;
            $file->move(public_path('image_obat'), $filename);
            $obat->image = $filename;
        }
        $obat->updated_at = time();
        $obat->save();
        return redirect('/data')->with('success','Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $data =Obat::find($id);

        return view('page.edit_obat', compact('data'));
    }

    public function update(Request $request, $id){  
        $obat = Obat::find($id);
        $obat->nama_obat = $request->input('edit_nama_obat');
        $obat->dibuat = $request->input('edit_diproduksi');
        $obat->tgl_pembuatan = Carbon::parse($request->input('edit_tgl_pembuatan'))->toDateString();
        $obat->tgl_kadaluarsa = Carbon::parse($request->input('edit_tgl_kadaluarsa'))->toDateString();
        $obat->created_by = $request->input('edit_created_user');
        if ($request->hasFile('image')) {

            $old_image_destination= 'image_obat/'.$request->input('image1');
            if (File::exists($old_image_destination)) 
            {
                File::delete($old_image_destination);
            }

            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = $request->input('edit_nama_obat').'-'.time().'.'.$extention;
            $file->move(public_path('image_obat'), $filename);
            $obat->image = $filename;
        }
        $obat->updated_at = time();
    
        $obat->update();
        
        
        return redirect('/data')->with('success','Data berhasil Diupate!');
    }

    public function destroy($id)
    {   
        $data =Obat::find($id);
        $old_image_destination= 'image_obat/'.$data->image;
            if (File::exists($old_image_destination)) 
            {
                File::delete($old_image_destination);
            }
      
            $data->delete();
            return redirect('/data')->with('success','Data berhasil dihapus!');
       
    }
}
