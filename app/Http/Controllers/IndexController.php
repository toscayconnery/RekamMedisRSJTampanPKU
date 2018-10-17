<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\SqlServer\SqlServerPdo;
use PDO;

class IndexController extends Controller
{


    public function get_index()
    {
        // try {
        //     $pdo = new PDO('mysql:host=127.0.0.1;dbname=med2', 'root', '');
        //     $statement = $pdo->prepare('select * from pasien_server_2');
        //     $statement->execute();
        //     $this->data['pasien_server_2'] = $statement->fetchAll(PDO::FETCH_OBJ);
        // }
        // catch(PDOException $e)
        // {
        //     die('Could not connect to database');
        // }
        // try {
        //     include "TestFileInclude.php";
        // }
        // catch(Exception $e)
        // {
        //     dd("error");
        // }
        $berhasil_tersambung = False;
        include __DIR__."\..\..\ManualConnection\ManualMySQLConnection.php";

        if($berhasil_tersambung) {
            $statement = $pdo->prepare('select * from pasien_server_2');
            $statement->execute();
            $this->data['pasien_server_2'] = $statement->fetchAll(PDO::FETCH_OBJ);
        }

        $this->data['pasien'] = DB::table('pasien')
        						->join('rincian_pasien', 'rincian_pasien.no_rm', '=', 'pasien.no_rm')
        						->get();

    	return view('index', $this->data);

    }
}
