<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use PhpOffice\PhpSpreadsheet\Spreadhseet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;
use App\Models\Forwardkey;
use App\Imports\ForwardkeyImport;

class ForwardkeyController extends Controller
{
    public function page(Request $request) {
        // Halaman untuk upload file
        $directory = 'forwardkey';
        $files = Storage::files($directory);
        $data['files'] = $files;
        if($data['files'] !== '') { // Jika file forwardkey ada
        }
        return view('fk.page', $data);
    }

    public function check(Request $request) {
        $inputFilename = 'forwardkey/forwardkey.xlsx';
        $reader = IOFactory::load($inputFilename);
        $sheet = $reader->getSheet(1);
        ini_set('memory_limit', '2048M');
        $trip_origins = array();
        $trip_origins[0] = array(
            'Indonesia/ID' => $sheet->getCell('C41')->getValue(), 
            'Australia/AU' => $sheet->getCell('D41')->getValue(),
            'South Korea/KR' => $sheet->getCell('E41')->getValue(),
            'Japan/JP' => $sheet->getCell('F41')->getValue(),
            'Netherlands/NL' => $sheet->getCell('G41')->getValue(),
            'U.S.A./US' => $sheet->getCell('H41')->getValue(),
            'China/CN' => $sheet->getCell('I41')->getValue(),
            'United Kingdom/GB' => $sheet->getCell('J41')->getValue(),
            'Singapore/SG' => $sheet->getCell('K41')->getValue(),
            'Saudi Arabia/SA' => $sheet->getCell('L41')->getValue(),
            'Russia/RU' => $sheet->getCell('M41')->getValue(),
            'Germany/DE' => $sheet->getCell('N41')->getValue(),
            'Malaysia/MY' => $sheet->getCell('O41')->getValue(),
            'Taiwan/TW' => $sheet->getCell('P41')->getValue(),
            'France/FR' => $sheet->getCell('Q41')->getValue(),
            'Others' => $sheet->getCell('R41')->getValue()
        );

        $trip_origins[1] = array(
            'Indonesia/ID' => $sheet->getCell('C42')->getValue(), 
            'Australia/AU' => $sheet->getCell('D42')->getValue(),
            'South Korea/KR' => $sheet->getCell('E42')->getValue(),
            'Japan/JP' => $sheet->getCell('F42')->getValue(),
            'Netherlands/NL' => $sheet->getCell('G42')->getValue(),
            'U.S.A./US' => $sheet->getCell('H42')->getValue(),
            'China/CN' => $sheet->getCell('I42')->getValue(),
            'United Kingdom/GB' => $sheet->getCell('J42')->getValue(),
            'Singapore/SG' => $sheet->getCell('K42')->getValue(),
            'Saudi Arabia/SA' => $sheet->getCell('L42')->getValue(),
            'Russia/RU' => $sheet->getCell('M42')->getValue(),
            'Germany/DE' => $sheet->getCell('N42')->getValue(),
            'Malaysia/MY' => $sheet->getCell('O42')->getValue(),
            'Taiwan/TW' => $sheet->getCell('P42')->getValue(),
            'France/FR' => $sheet->getCell('Q42')->getValue(),
            'Others' => $sheet->getCell('R42')->getValue()
        );

        $trip_origins[2] = array(
            'Indonesia/ID' => $sheet->getCell('C193')->getValue(), 
            'Australia/AU' => $sheet->getCell('D193')->getValue(),
            'South Korea/KR' => $sheet->getCell('E193')->getValue(),
            'Japan/JP' => $sheet->getCell('F193')->getValue(),
            'Netherlands/NL' => $sheet->getCell('G193')->getValue(),
            'U.S.A./US' => $sheet->getCell('H193')->getValue(),
            'China/CN' => $sheet->getCell('I193')->getValue(),
            'United Kingdom/GB' => $sheet->getCell('J193')->getValue(),
            'Singapore/SG' => $sheet->getCell('K193')->getValue(),
            'Saudi Arabia/SA' => $sheet->getCell('L193')->getValue(),
            'Russia/RU' => $sheet->getCell('M193')->getValue(),
            'Germany/DE' => $sheet->getCell('N193')->getValue(),
            'Malaysia/MY' => $sheet->getCell('O193')->getValue(),
            'Taiwan/TW' => $sheet->getCell('P193')->getValue(),
            'France/FR' => $sheet->getCell('Q193')->getValue(),
            'Others' => $sheet->getCell('R193')->getValue()
        );

        $trip_origins[3] = array(
            'Indonesia/ID' => $sheet->getCell('C194')->getValue(), 
            'Australia/AU' => $sheet->getCell('D194')->getValue(),
            'South Korea/KR' => $sheet->getCell('E194')->getValue(),
            'Japan/JP' => $sheet->getCell('F194')->getValue(),
            'Netherlands/NL' => $sheet->getCell('G194')->getValue(),
            'U.S.A./US' => $sheet->getCell('H194')->getValue(),
            'China/CN' => $sheet->getCell('I194')->getValue(),
            'United Kingdom/GB' => $sheet->getCell('J194')->getValue(),
            'Singapore/SG' => $sheet->getCell('K194')->getValue(),
            'Saudi Arabia/SA' => $sheet->getCell('L194')->getValue(),
            'Russia/RU' => $sheet->getCell('M194')->getValue(),
            'Germany/DE' => $sheet->getCell('N194')->getValue(),
            'Malaysia/MY' => $sheet->getCell('O194')->getValue(),
            'Taiwan/TW' => $sheet->getCell('P194')->getValue(),
            'France/FR' => $sheet->getCell('Q194')->getValue(),
            'Others' => $sheet->getCell('R194')->getValue()
        );

        $trip_origins[4] = array(
            'Indonesia/ID' => $sheet->getCell('C195')->getValue(), 
            'Australia/AU' => $sheet->getCell('D195')->getValue(),
            'South Korea/KR' => $sheet->getCell('E195')->getValue(),
            'Japan/JP' => $sheet->getCell('F195')->getValue(),
            'Netherlands/NL' => $sheet->getCell('G195')->getValue(),
            'U.S.A./US' => $sheet->getCell('H195')->getValue(),
            'China/CN' => $sheet->getCell('I195')->getValue(),
            'United Kingdom/GB' => $sheet->getCell('J195')->getValue(),
            'Singapore/SG' => $sheet->getCell('K195')->getValue(),
            'Saudi Arabia/SA' => $sheet->getCell('L195')->getValue(),
            'Russia/RU' => $sheet->getCell('M195')->getValue(),
            'Germany/DE' => $sheet->getCell('N195')->getValue(),
            'Malaysia/MY' => $sheet->getCell('O195')->getValue(),
            'Taiwan/TW' => $sheet->getCell('P195')->getValue(),
            'France/FR' => $sheet->getCell('Q195')->getValue(),
            'Others' => $sheet->getCell('R195')->getValue()
        );

        $trip_origins[5] = array(
            'Indonesia/ID' => $sheet->getCell('C196')->getValue(), 
            'Australia/AU' => $sheet->getCell('D196')->getValue(),
            'South Korea/KR' => $sheet->getCell('E196')->getValue(),
            'Japan/JP' => $sheet->getCell('F196')->getValue(),
            'Netherlands/NL' => $sheet->getCell('G196')->getValue(),
            'U.S.A./US' => $sheet->getCell('H196')->getValue(),
            'China/CN' => $sheet->getCell('I196')->getValue(),
            'United Kingdom/GB' => $sheet->getCell('J196')->getValue(),
            'Singapore/SG' => $sheet->getCell('K196')->getValue(),
            'Saudi Arabia/SA' => $sheet->getCell('L196')->getValue(),
            'Russia/RU' => $sheet->getCell('M196')->getValue(),
            'Germany/DE' => $sheet->getCell('N196')->getValue(),
            'Malaysia/MY' => $sheet->getCell('O196')->getValue(),
            'Taiwan/TW' => $sheet->getCell('P196')->getValue(),
            'France/FR' => $sheet->getCell('Q196')->getValue(),
            'Others' => $sheet->getCell('R196')->getValue()
        );

        $trip_origins[6] = array(
            'Indonesia/ID' => $sheet->getCell('C201')->getValue(), 
            'Australia/AU' => $sheet->getCell('D201')->getValue(),
            'South Korea/KR' => $sheet->getCell('E201')->getValue(),
            'Japan/JP' => $sheet->getCell('F201')->getValue(),
            'Netherlands/NL' => $sheet->getCell('G201')->getValue(),
            'U.S.A./US' => $sheet->getCell('H201')->getValue(),
            'China/CN' => $sheet->getCell('I201')->getValue(),
            'United Kingdom/GB' => $sheet->getCell('J201')->getValue(),
            'Singapore/SG' => $sheet->getCell('K201')->getValue(),
            'Saudi Arabia/SA' => $sheet->getCell('L201')->getValue(),
            'Russia/RU' => $sheet->getCell('M201')->getValue(),
            'Germany/DE' => $sheet->getCell('N201')->getValue(),
            'Malaysia/MY' => $sheet->getCell('O201')->getValue(),
            'Taiwan/TW' => $sheet->getCell('P201')->getValue(),
            'France/FR' => $sheet->getCell('Q201')->getValue(),
            'Others' => $sheet->getCell('R201')->getValue()
        );

        $trip_origins[7] = array(
            'Indonesia/ID' => $sheet->getCell('C202')->getValue(), 
            'Australia/AU' => $sheet->getCell('D202')->getValue(),
            'South Korea/KR' => $sheet->getCell('E202')->getValue(),
            'Japan/JP' => $sheet->getCell('F202')->getValue(),
            'Netherlands/NL' => $sheet->getCell('G202')->getValue(),
            'U.S.A./US' => $sheet->getCell('H202')->getValue(),
            'China/CN' => $sheet->getCell('I202')->getValue(),
            'United Kingdom/GB' => $sheet->getCell('J202')->getValue(),
            'Singapore/SG' => $sheet->getCell('K202')->getValue(),
            'Saudi Arabia/SA' => $sheet->getCell('L202')->getValue(),
            'Russia/RU' => $sheet->getCell('M202')->getValue(),
            'Germany/DE' => $sheet->getCell('N202')->getValue(),
            'Malaysia/MY' => $sheet->getCell('O202')->getValue(),
            'Taiwan/TW' => $sheet->getCell('P202')->getValue(),
            'France/FR' => $sheet->getCell('Q202')->getValue(),
            'Others' => $sheet->getCell('R202')->getValue()
        );

        $trip_origins[8] = array(
            'Indonesia/ID' => $sheet->getCell('C203')->getValue(), 
            'Australia/AU' => $sheet->getCell('D203')->getValue(),
            'South Korea/KR' => $sheet->getCell('E203')->getValue(),
            'Japan/JP' => $sheet->getCell('F203')->getValue(),
            'Netherlands/NL' => $sheet->getCell('G203')->getValue(),
            'U.S.A./US' => $sheet->getCell('H203')->getValue(),
            'China/CN' => $sheet->getCell('I203')->getValue(),
            'United Kingdom/GB' => $sheet->getCell('J203')->getValue(),
            'Singapore/SG' => $sheet->getCell('K203')->getValue(),
            'Saudi Arabia/SA' => $sheet->getCell('L203')->getValue(),
            'Russia/RU' => $sheet->getCell('M203')->getValue(),
            'Germany/DE' => $sheet->getCell('N203')->getValue(),
            'Malaysia/MY' => $sheet->getCell('O203')->getValue(),
            'Taiwan/TW' => $sheet->getCell('P203')->getValue(),
            'France/FR' => $sheet->getCell('Q203')->getValue(),
            'Others' => $sheet->getCell('R203')->getValue()
        );

        $trip_origins[9] = array(
            'Indonesia/ID' => $sheet->getCell('C204')->getValue(), 
            'Australia/AU' => $sheet->getCell('D204')->getValue(),
            'South Korea/KR' => $sheet->getCell('E204')->getValue(),
            'Japan/JP' => $sheet->getCell('F204')->getValue(),
            'Netherlands/NL' => $sheet->getCell('G204')->getValue(),
            'U.S.A./US' => $sheet->getCell('H204')->getValue(),
            'China/CN' => $sheet->getCell('I204')->getValue(),
            'United Kingdom/GB' => $sheet->getCell('J204')->getValue(),
            'Singapore/SG' => $sheet->getCell('K204')->getValue(),
            'Saudi Arabia/SA' => $sheet->getCell('L204')->getValue(),
            'Russia/RU' => $sheet->getCell('M204')->getValue(),
            'Germany/DE' => $sheet->getCell('N204')->getValue(),
            'Malaysia/MY' => $sheet->getCell('O204')->getValue(),
            'Taiwan/TW' => $sheet->getCell('P204')->getValue(),
            'France/FR' => $sheet->getCell('Q204')->getValue(),
            'Others' => $sheet->getCell('R204')->getValue()
        );

        return response()->json($trip_origins);
    }

    public function diagram(Request $request) {
        return view('fk.diagram');
    }

    public function input(Request $request) {
        // Upload file
        $this->validate($request, [
            'forwardkey' => 'required'
        ]);

        $file = $request->file('forwardkey');

        $upload_path = 'forwardkey';
        $file->storeAs($upload_path, 'forwardkey.xlsx');
        // Baca file yang di upload
        return redirect()->back();
        // Hasil baca file ubah ke json
    }
}
