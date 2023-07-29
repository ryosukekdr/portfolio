<?php

namespace App\Http\Controllers;

use App\Models\Itemlist;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;

class CsvDownloadController extends Controller
{
    public function downloadCsv()
    {
        $itemlists = Itemlist::select('id','item','note')->get();
        //dd($itemlists->id);
        //$array = [$itemlists->id, $itemlists->item, $itemlists->note];
        $csvHeader = ['No.', 'アイテム', '役立ちポイント'];
        //unset($itemlists['created_at']);
        //unset($itemlists['updated_at']);
        //unset($blogs['image_path']);
        //dd($blogs);
        $csvData = $itemlists->toArray();
        mb_convert_variables('SJIS-win', 'UTF-8', $csvHeader,$csvData);  //文字化け防止策

        $response = new StreamedResponse(function () use ($csvHeader, $csvData) {
            $handle = fopen('php://output', 'w');
            //fwrite($stream, pack('C*', 0xEF, 0xBB, 0xBF));
            fputcsv($handle, $csvHeader);

            foreach ($csvData as $row) {
                fputcsv($handle, $row);
            }

            fclose($handle);
        }, 200, [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="item.csv"',
        ]);

        return $response;
    }
}
