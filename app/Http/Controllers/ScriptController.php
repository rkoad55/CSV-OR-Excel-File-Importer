<?php

namespace App\Http\Controllers;

use App\Imports\CommodityImport;
use App\Imports\esgCurrencyImport;
use App\Imports\esgDataImport;
use App\Imports\esgPattrenImport;
use App\Imports\esgWeightImport;
use App\Imports\VehicleImport;
use App\Models\CommodityModel as Commodity;
use Goutte\Client;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ScriptController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function esgweightForm()
    {
        return view('esg_weight');
    }

    public function esgweightPost(Request $request)
    {

        $request->validate([
            'import_file' => 'required',
        ]);
        $path = $request->file('import_file')->getRealPath();

        $csv = Excel::import(new esgWeightImport(), $path);
        echo "Done";

    }

    public function commodityForm()
    {
        return view('commodity');
    }

    public function dateUpdate(Request $request)
    {
        $data = Commodity::select('id', 'date')->get()->toArray();
        foreach ($data as $key => $value) {
            $datewith9 = explode("-", $value['date']);
            // dd($datewith9[2]);
            if (strlen($datewith9[2]) != '4') {
                // $digit = substr($datewith9[2], 0, 1);
                // if ($digit == '9') {
                $obj = Commodity::find($value['id']);
                $obj->date = $datewith9[0] . '-' . $datewith9[1] . '-20' . $datewith9[2];
                $obj->save();
                // }
            }
        }
    }

    public function esgCurrencyForm()
    {
        return view('esg_currency');
    }

    public function esgCurrencyPost(Request $request)
    {

        $request->validate([
            'import_file' => 'required',
        ]);
        $path = $request->file('import_file')->getRealPath();

        $csv = Excel::import(new esgCurrencyImport(), $path);
        echo "Done";

    }

    public function esgCodeUpdateForm()
    {
        return view('esg_code_update');
    }

    public function esgCodeUpdatePost(Request $request)
    {

        $request->validate([
            'import_file' => 'required',
        ]);
        $path = $request->file('import_file')->getRealPath();
        $handle = fopen($path, "r");
        $i = 0;
        // dd(fgetcsv($handle, 1000, ","));
        while (($filesop = fgetcsv($handle, 1000, ",")) !== false) {

            dd(trim($filesop[0]), trim($filesop[1]));
            $excel[$i] = $filesop[0];
            $excel[$i] = $filesop[1];
            $i++;
        }
        // dd($excel);
        /* $category = $excel[4];
        $category_id = $excel[3];
        $name = $excel[1];
        $name_id = $excel[0];
        /* $csv = Excel::import(new esgPattrenImport(), $path);
         */
        echo "Done";

    }

    public function esgDataForm()
    {
        return view('esg_data');
    }

    public function esgDataPost(Request $request)
    {

        $request->validate([
            'import_file' => 'required',
        ]);
        $path = $request->file('import_file')->getRealPath();

        $csv = Excel::import(new esgDataImport(), $path);
        echo "Done";

    }

    public function esgForm()
    {
        return view('esg');
    }

    public function esgPost(Request $request)
    {

        $request->validate([
            'import_file' => 'required',
        ]);
        $path = $request->file('import_file')->getRealPath();
        /* $handle = fopen($path, "r");
        $i = 0;
        // dd(fgetcsv($handle, 1000, ","));
        while (($filesop = fgetcsv($handle, 1000, ",")) !== false) {
        if ($i == 8) {
        break;
        }
        $excel[$i] = $filesop[0];
        $excel[$i] = $filesop[1];
        $i++;
        } */
        // dd($excel);
        /* $category = $excel[4];
        $category_id = $excel[3];
        $name = $excel[1];
        $name_id = $excel[0]; */
        $csv = Excel::import(new esgPattrenImport(), $path);
        echo "Done";

    }

    public function commodityPost(Request $request)
    {

        $request->validate([
            'import_file' => 'required',
        ]);
        $path = $request->file('import_file')->getRealPath();
        $handle = fopen($path, "r");
        $i = 0;
        // dd(fgetcsv($handle, 1000, ","));
        while (($filesop = fgetcsv($handle, 1000, ",")) !== false) {
            if ($i == 8) {
                break;
            }
            $excel[$i] = $filesop[0];
            $excel[$i] = $filesop[1];
            $i++;
        }
        // dd($excel);
        $category = $excel[4];
        $category_id = $excel[3];
        $name = $excel[1];
        $name_id = $excel[0];
        $csv = Excel::import(new CommodityImport($category_id, $name_id, $category, $name), $path);
        echo $name_id . " Done";

    }

    public function getData()
    {
        // Initialize a file URL to the variable
        $url = 'https://contribute.geeksforgeeks.org/wp-content/uploads/gfg-40.png';
        $file_name = 'gfg-40.png';
        $file_url = $url;
        header('Content-Type: application/octet-stream');
        header("Content-Transfer-Encoding: Binary");
        header("Content-disposition: attachment; filename=\"" . $file_name . "\"");
        readfile($file_url);
        exit;

    }
    public function getData1()
    {
        $client = new Client();

        $data = array(
            'date' => '12/11/2015',
            'date2' => '12/11/2020',
        );
        $query = http_build_query($data);
        $options = array(
            'http' => array(
                'header' => "Content-Type: application/x-www-form-urlencoded\r\n" .
                "Content-Length: " . strlen($query) . "\r\n" .
                "User-Agent:MyAgent/1.0\r\n",
                'method' => "POST",
                'content' => $query,
            ),
        );
        $context = stream_context_create($options);
        $html = file_get_html('https://www.nccpl.com.pk/en/market-information/fipi-lipi/fipi-sector-wise', false, $context);
        $rowData = array();
        foreach ($html->find('tr') as $row) {
            $data_row = array();
            foreach ($row->find('td') as $cell) {
                $data_row[] = $cell->plaintext;
            }
            $rowData[] = $data_row;
        }
        dd($rowData);

    }

    public function vehicleForm()
    {
        return view('vehicle');
    }

    public function vehiclePost(Request $request)
    {

        $request->validate([
            'import_file' => 'required',
        ]);
        $path = $request->file('import_file')->getRealPath();
        $handle = fopen($path, "r");
        $i = 0;
        // dd(fgetcsv($handle, 1000, ","));
        while (($filesop = fgetcsv($handle, 1000, ",")) !== false) {
            // dd($filesop);
            if ($i == 4) {
                break;
            }
            $excel['row_' . $i][$filesop[0]] = $filesop[1];
            $i++;
        }
        // dd($excel);
        $type_id = $excel['row_0']['type_id'];
        $company_id = $excel['row_1']['company_id'];
        $brand_id = $excel['row_2']['brand_id'];
        $vehicle_id = $excel['row_3']['vehicle_id'];

        $csv = Excel::import(new VehicleImport($type_id, $company_id, $brand_id, $vehicle_id), $path);
        echo " Done<br/> <a href='" . url('/vehicle') . "'>Back</a>";

    }

}
