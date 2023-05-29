<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Klasemen;

class KlasemenController extends Controller
{
    public function index()
    {
        $klasemen = Klasemen::orderBy('poin', 'desc')->orderBy('sg', 'desc')->paginate(20);
        return view('welcome', ['klasemens' => $klasemen]);
    }

    public function tambahKlub(Request $request)
    {
        $this->validate($request,[
            'namaklub' => 'required',
            'kota' => 'required'
    	]);

        Klasemen::create([
            'klub' => $request->namaklub,
            'kota' => $request->kota,
            'ma' => 0,
            'me' => 0,
            's' => 0,
            'k' => 0,
            'gm' => 0,
            'gk' => 0,
            'sg' => 0,
            'poin' => 0
    	]);

    	return redirect()->back();
    }

    public function editSkor(Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
            'namaklub1' => 'required',
            'namaklub2' => 'required',
            'skorklub1' => 'required',
            'skorklub2' => 'required'
    	]);

        if ($request->namaklub1 == $request->namaklub2) {
            return redirect()->back();
        }

        $klub1 = Klasemen::where('klub', $request->namaklub1)->get();
        $klub2 = Klasemen::where('klub', $request->namaklub2)->get();

        // dd($klub1->all());
        $klub1 = Klasemen::find($klub1[0]->id);
        $klub2 = Klasemen::find($klub2[0]->id);

        if ($request->skorklub1 > $request->skorklub2) {
            // $klub1
            $klub1->klub = $klub1->klub;
            $klub1->kota = $klub1->kota;
            $klub1->ma = $klub1->ma + 1;
            $klub1->me = $klub1->me + 1;
            $klub1->s = $klub1->s;
            $klub1->k = $klub1->k;
            $klub1->gm = $klub1->gm + $request->skorklub1;
            $klub1->gk = $klub1->gk + $request->skorklub2;
            $klub1->sg = $klub1->sg + $request->skorklub1 - $request->skorklub2;
            $klub1->poin = $klub1->poin + 3;

            // $klub2
            $klub2->klub = $klub2->klub;
            $klub2->kota = $klub2->kota;
            $klub2->ma = $klub2->ma + 1;
            $klub2->me = $klub2->me;
            $klub2->s = $klub2->s;
            $klub2->k = $klub2->k + 1;
            $klub2->gm = $klub2->gm + $request->skorklub2;
            $klub2->gk = $klub2->gk + $request->skorklub1;
            $klub2->sg = $klub2->sg + $request->skorklub2 - $request->skorklub1;
            $klub2->poin = $klub2->poin;

        } elseif ($request->skorklub1 < $request->skorklub2) {
            // $klub2
            $klub2->klub = $klub2->klub;
            $klub2->kota = $klub2->kota;
            $klub2->ma = $klub2->ma + 1;
            $klub2->me = $klub2->me + 1;
            $klub2->s = $klub2->s;
            $klub2->k = $klub2->k;
            $klub2->gm = $klub2->gm + $request->skorklub2;
            $klub2->gk = $klub2->gk + $request->skorklub1;
            $klub2->sg = $klub2->sg + $request->skorklub2 - $request->skorklub1;
            $klub2->poin = $klub2->poin + 3;

            // $klub1
            $klub1->klub = $klub1->klub;
            $klub1->kota = $klub1->kota;
            $klub1->ma = $klub1->ma + 1;
            $klub1->me = $klub1->me;
            $klub1->s = $klub1->s;
            $klub1->k = $klub1->k + 1;
            $klub1->gm = $klub1->gm + $request->skorklub1;
            $klub1->gk = $klub1->gk + $request->skorklub2;
            $klub1->sg = $klub1->sg + $request->skorklub1 - $request->skorklub2;
            $klub1->poin = $klub1->poin;

        } else {
            // $klub1
            $klub1->klub = $klub1->klub;
            $klub1->kota = $klub1->kota;
            $klub1->ma = $klub1->ma + 1;
            $klub1->me = $klub1->me;
            $klub1->s = $klub1->s + 1;
            $klub1->k = $klub1->k;
            $klub1->gm = $klub1->gm + $request->skorklub1;
            $klub1->gk = $klub1->gk + $request->skorklub2;
            $klub1->sg = $klub1->sg + $request->skorklub1 - $request->skorklub2;
            $klub1->poin = $klub1->poin + 1;

            // $klub2
            $klub2->klub = $klub2->klub;
            $klub2->kota = $klub2->kota;
            $klub2->ma = $klub2->ma + 1;
            $klub2->me = $klub2->me;
            $klub2->s = $klub2->s + 1;
            $klub2->k = $klub2->k;
            $klub2->gm = $klub2->gm + $request->skorklub2;
            $klub2->gk = $klub2->gk + $request->skorklub1;
            $klub2->sg = $klub2->sg + $request->skorklub2 - $request->skorklub1;
            $klub2->poin = $klub2->poin + 1;
        }
        $klub1->save();
        $klub2->save();

        return redirect()->back();
    }
}
