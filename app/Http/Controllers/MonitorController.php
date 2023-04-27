<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Bast;
use App\Models\Inquiry;
use App\Models\Katalog;
use App\Models\Sales_task;
use Illuminate\Http\Request;
use App\Models\Oracle_Database;

class MonitorController extends Controller
{
    public function index()
    {
        $query = "SELECT
        tph.NO_POI,
        tpd.JNS_PROSES ,
        tph.DELTIME ,
        tpd.NAMA_BARANG,
        tbo.NO_ORDER,
        SUBSTR(tph.NO_POI, 12, 3 ) AS jenis
        --tph.TGL_POI 
        FROM TBL_POI_HEADER tph
        INNER JOIN TBL_POI_DETAIL tpd ON tph.NO_POI = tpd.NO_POI 
        INNER JOIN TBL_MASTER_CUSTOMER_SUPLIER tmcs ON tph.KODE = tmcs.KODE
        LEFT JOIN TBL_BUKU_ORDER tbo ON tbo.NO_POI = tph.NO_POI AND tbo.NO_ITEM_POI = tpd.NO_ITEM AND tbo.BATAL = 'N'
        WHERE tph.JNS_PO =1 AND tph.BATAL = 'N' AND (SYSDATE - tph.TGL_POI ) < 365 AND SUBSTR(tph.NO_POI, 12, 3 ) in('POS', 'POI') AND tpd.JNS_PROSES = 'P'
        ORDER BY tph.TGL_POI DESC, tph.NO_POI DESC, tpd.NO_ITEM  ";

        // $query = "SELECT
        // tph.NO_POI,
        // tpd.JNS_PROSES ,
        // tph.DELTIME ,
        // tpd.NAMA_BARANG,
        // SUBSTR(tph.NO_POI, 12, 3 ) AS jenis
        // --tph.TGL_POI 
        // FROM TBL_POI_HEADER tph
        // INNER JOIN TBL_POI_DETAIL tpd ON tph.NO_POI = tpd.NO_POI AND tpd.NO_ITEM = 1
        // INNER JOIN TBL_MASTER_CUSTOMER_SUPLIER tmcs ON tph.KODE = tmcs.KODE
        // WHERE tph.JNS_PO =1 AND tph.BATAL = 'N' AND (SYSDATE - tph.TGL_POI ) < 365 AND SUBSTR(tph.NO_POI, 12, 3 ) in('POS', 'POI')";

        $gas = Oracle_Database::get($query);


        $data_poi = collect($gas)->take(20);
        // dd($data_poi);

        $data_katalog = Katalog::all();

        $data_inquiry = Inquiry::all();

        $data_sales = Sales_task::all();

        $data_bast = Bast::all();

        $deltime = $data_poi->pluck('DELTIME');

        $dataWithSelisih = $deltime->map(function ($item) {
            // Menghitung selisih tanggal
            $selisih = Carbon::parse($item)->diffInDays(Carbon::now());

            return $selisih;
        });

        $poi_telat = $dataWithSelisih->filter(function ($telat) {
            return $telat <= 14;
        });

        // dd($poi_telat);
        // dd($dataWithSelisih);

        return view('monitor.monitor', [
            'list_katalog' => $data_katalog,
            'list_inquiry' => $data_inquiry,
            'list_task' => $data_sales,
            'list_bast' => $data_bast,
            'list_poi' => $data_poi,
            'selisih_poi' => $dataWithSelisih,
            'poi_telat' => $poi_telat
        ]);
    }
}
