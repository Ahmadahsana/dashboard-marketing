<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use App\Models\Katalog;
use Illuminate\Http\Request;
use App\Models\Oracle_Database;
use App\Models\Sales_task;

class MonitorController extends Controller
{
    public function index()
    {
        $query = "SELECT
        tph.NO_POI,
        --tmcs.NAMA AS NAMA_CUS,
        tph.DELTIME , 
        tpd.NAMA_BARANG,
        SUBSTR(tph.NO_POI, 12, 3 ) AS jenis
        --tph.TGL_POI 
        FROM TBL_POI_HEADER tph
        INNER JOIN TBL_POI_DETAIL tpd ON tph.NO_POI = tpd.NO_POI AND tpd.NO_ITEM = 1 
        INNER JOIN TBL_MASTER_CUSTOMER_SUPLIER tmcs ON tph.KODE = tmcs.KODE 
        WHERE tph.JNS_PO =1 AND tph.BATAL = 'N' AND (SYSDATE - tph.TGL_POI ) < 365 AND SUBSTR(tph.NO_POI, 12, 3 ) in('POS', 'POI')";

        $gas = Oracle_Database::get($query);

        $data_poi = collect($gas)->sortDesc()->take(20);

        $data_katalog = Katalog::all();

        $data_inquiry = Inquiry::all();

        $data_sales = Sales_task::all();

        return view('monitor.monitor', [
            'list_poi' => $data_poi,
            'list_katalog' => $data_katalog,
            'list_inquiry' => $data_inquiry,
            'list_task' => $data_sales
        ]);
    }
}
