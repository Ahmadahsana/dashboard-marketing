<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oracle_Database extends Model
{
    // use HasFactory;
    private static $username = "app_report";
    private static $password = "reportwks";
    private static $database = "oraworkshop"; /// database or service
    private static $host = "192.168.16.7";

    private static $dbConnect;


    public static function get($query = NULL)
    {
        if (self::cek_koneksi()) {
            if ($query != NULL || $query != '') {
                $query = oci_parse(self::$dbConnect, $query);
                oci_execute($query);


                $rows = array();
                while ($r = oci_fetch_assoc($query)) {
                    $rows[] = $r;
                }

                oci_close(self::$dbConnect); // close setelah query

                $rows = json_encode($rows, JSON_NUMERIC_CHECK);
                $rows = json_decode($rows);
                $rows = (array) $rows;
                return $rows;
            } else {
                return '';
            }
        }
    }

    private static function cek_koneksi()
    {
        self::$dbConnect = oci_connect(self::$username, self::$password, "//" . self::$host . "/" . self::$database . "");

        if (self::$dbConnect) {
            return TRUE;
        } else {
            echo '<h1 style="color:red;">No Database Connection</h1>';
            die;
        }
    }
}
