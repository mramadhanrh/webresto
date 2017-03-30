<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KokiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['koki'] = \App\Koki::all();
        return view('koki.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $data['kelas'] = \App\Kelas::all();
        // return view('koki.form')->with($data);
        return view('koki.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $rules = [
        'nama_lengkap' => 'required|max:100',
        'jenis_kelamin' => 'required',
        'alamat' => 'required',
        'no_telp' => 'required',
        'foto' => 'required|mimes:jpeg,png|max:512'
      ];

      $this->validate($request, $rules);

      $input = $request->all(); // Mengambil semua inputan

//      if($request->hasFile('foto') && $request->file('foto')->isValid()){
//        $filename = $request->file('foto')->getClientOriginalExtension();
//        $request->file('foto')->storeAs('', $filename);
//        $input['foto'] = $filename;
//      }

        if($request->hasFile('foto'))
        {
            $foto = $request->file('foto');
            $ext = $foto->getClientOriginalExtension();

            if($request->file('foto')->isValid())
            {
                $foto_name = date('YmdHis').".$ext";
                $upload_path = 'uploads';
                $request->file('foto')->move($upload_path,$foto_name);
                $input['foto'] = $foto_name;
            }
        }

      $status = \App\Koki::create($input);
      if($status){
        return redirect('koki')->with('success', 'Data berhasil ditambahkan');
      }else{
        return redirect('koki/add')->with('error', 'Data gagal ditambahkan');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $rules = [
        'nama_lengkap' => 'required|max:100',
        'jenis_kelamin' => 'required',
        'alamat' => 'required',
        'no_telp' => 'required',
        'foto' => 'required|mimes:jpeg,png|max:512'
      ];

      $this->validate($request, $rules);

      $input = $request->all(); // Mengambil semua inputan
      $result = \App\Koki::where('id_koki', $id)->first();

      if($request->hasFile('foto') && $request->file('foto')->isValid()){
        $filename = $request->file('foto')->getClientOriginalExtension();
        $request->file('foto')->storeAs('', $filename);
        $input['foto'] = $filename;
      }

      $status = $result->update($input);

      $data['edit'] = true;
      $data['result'] = \App\Koki::where('id_koki', $id)->first();
      return view('koki.form')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $input = $request->all(); // Mengambil semua inputan

      $status = \App\Koki::where('id_koki', $id)->first()->update($input);
      if($status){
        return redirect('koki')->with('success', 'Data berhasil diubah');
      }else{
        return redirect('koki/' . $id .'/edit')->with('error', 'Data gagal diubah');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $status = \App\Koki::where('id_koki', $id);
      $status->delete();
      if($status){
          return redirect('koki')->with('success', 'Data berhasil dihapus');
      }else{
          return redirect('koki')->with('error', 'Data gagal dihapus');
      }
    }
}
