<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

use App\Http\Requests;
use Validator;

class SiswaController extends Controller
{
    //
    public function index()
    {
        $siswa_list = Siswa::orderBy('nisn', 'asc') -> paginate(5);
        $jumlah_siswa = Siswa::count();
        return view('siswa.index', compact('siswa_list', 'jumlah_siswa'));
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        $input = $request -> all();
        $validator = Validator::make($input, ['nisn' => 'required | string | size:4 | unique: siswa, nisn',
            'nama_siswa' => 'required | string | max: 30',
            'tanggal_lahir' => 'required | date',
            'jenis_kelamin' => 'required | in: L, P',]);
        if($validator -> fails())
        {
            return redirect('siswa/create') -> withInput() -> withErrors($validator);
        }
        $siswa = Siswa::create($input);
        return redirect('siswa');
    }

    public function show($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('siswa.show', compact('siswa'));
    }

    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('siswa.edit', compact('siswa'));
    }

    public function update($id, Request $request)
    {
        $siswa = Siswa::findOrFail($id);
        $input = $request -> all();
        $validator = Validator::make($input, [
            'nisn' => 'required | string | size:4 | unique: siswa, nisn,' . $request -> input('id'),
            'nama_siswa' => 'required | string | max:30',
            'tanggal_lahir' => 'required | date',
            'jenis_kelamin' => 'required | in: L,P',
        ]);
        if ($validator -> fails()) {
            return redirect('siswa/' . $id . '/edit') -> withInput() -> withErrors($validator);
        }

        $siswa -> update($request -> all());
        return redirect('siswa');
    }


    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa -> delete();
        return redirect('siswa');
    }

    public function tesCollection()
    {
        $collection = Siswa::all();
        $collection = $collection -> where('nisn', '1005');
        return $collection;
    }

    public function getNamaSiswaAttribute($nama_siswa)
    {
        return strtolower($nama_siswa);
    }

    public function dateMutator()
    {
        $siswa = Siswa::findOrFail(1);
        $str = 'Tanggal Lahir: ' .
            $siswa -> tanggal_lahir -> format('d-m-Y') . '<br>' .
            'Ulang tahun ke-30 akan jatuh pada tanggal: ' .
            '<strong>' . 
            $siswa -> tanggal_lahir ->addYears(30) -> format ('d-m-Y')
            .'</strong>';
        return $str;
    }
}
