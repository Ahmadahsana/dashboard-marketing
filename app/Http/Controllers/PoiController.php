<?php

namespace App\Http\Controllers;

use App\Models\Oracle_Database;
use Illuminate\Http\Request;

class PoiController extends Controller
{
    public function poi()
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

        return $gas;


        return collect($gas)->sortDesc()->take(20);
    }
}
