<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Santris;
use App\Models\Daful;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

class DafulController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formAction = "/daful";
        return view("daful", compact("formAction"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $santri = Santris::where("no_pendaftaran", $request->no_pendaftaran)->first();
        $santri2 = $santri->update(['no_wa' => $request->no_wa]);
        $queries = DB::getQueryLog();
        // $santri->update(["no_wa"=> $request->no_wa]);
        // $existing_daful = Daful::find($santri->id)
        // ->where("verifikasi_akta_kelahiran", 1)
        // ->where("verifikasi_kk", 1)
        // ->where("verifikasi_skl", 1)
        // ->where("verifikasi_bukti_transfer", 1)
        // ->where("verifikasi_foto", 1);

        // if ($existing_daful) {
        //     return back()->with('success', 'Daftar ulang telah diverifikasi');
        // } else {
        $daful = Daful::create(["id_santris" => $santri->id]);

        // $this->validate($request, [
        //     'akta_kelahiran' => 'required|mimes:jpeg,jpg,png',
        //     'kartu_keluarga' => 'required|mimes:jpeg,jpg,png',
        //     'skl' => 'required|mimes:jpeg,jpg,png',
        //     'bukti_transfer' => 'required|mimes:jpeg,jpg,png',
        //     'foto' => 'required|mimes:jpeg,jpg,png',
        // ]);

        if ($request->hasFile('akta_kelahiran')) {
            $daful->akta_kelahiran = $santri->nama_lengkap . time() . '-' . $request->file('akta_kelahiran')->getClientOriginalName();
            $request->file('akta_kelahiran')->move('uploads', $daful->akta_kelahiran);
            $daful->save();
        }
        if ($request->hasFile('kartu_keluarga')) {
            $daful->kartu_keluarga = $santri->nama_lengkap . time() . '-' . $request->file('kartu_keluarga')->getClientOriginalName();
            $request->file('kartu_keluarga')->move('uploads', $daful->kartu_keluarga);
            $daful->save();
        }
        if ($request->hasFile('skl')) {
            $daful->skl = $santri->nama_lengkap . time() . '-' . $request->file('skl')->getClientOriginalName();
            $request->file('skl')->move('uploads', $daful->skl);
            $daful->save();
        }
        if ($request->hasFile('bukti_transfer')) {
            $daful->bukti_transfer = $santri->nama_lengkap . time() . '-' . $request->file('bukti_transfer')->getClientOriginalName();
            $request->file('bukti_transfer')->move('uploads', $daful->bukti_transfer);
            $daful->save();
        }
        if ($request->hasFile('foto')) {
            $daful->foto = $santri->nama_lengkap . time() . '-' . $request->file('foto')->getClientOriginalName();
            $request->file('foto')->move('uploads', $daful->foto);
            $daful->save();
        }
        // }

        // return response($queries);
        return back()->with('success', 'Success create daftar ulang');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $daful = Daful::where("id_santris", $id)->orderBy("updated_at", "desc")->first();
        $santri = Santris::find($id);
        if (!$daful) {
            return back()->with("error", $santri->nama_lengkap . " belum melakukan daftar ulang");
        } else {
        $formAction = "/admin/daful/" . $daful->id;
        return view('Admin.show_daful', compact('daful', 'formAction'));
        };
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $daful = Daful::find($id)->update($request->all());
        return back()->with('success', 'Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function downloadImage(string $imagePath){
        return Response::download(public_path('uploads/'.$imagePath));
        // return Response::download('/home/u346878522/domains/smaubp-tahfidz.sch.id/public_html/uploads/'.$imagePath);
    }
}
