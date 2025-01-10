<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\HasilAnalisisTiktok;
use App\Http\Requests\StoreHasilAnalisisTiktokRequest;
use App\Http\Requests\UpdateHasilAnalisisTiktokRequest;
use App\Models\Tiktok;

class HasilAnalisisTiktokController extends Controller
{
    public function downloadPdf()
    {
        $downloadPdf = Carbon::now();

        $pdf = Pdf::loadView("accesspoint.user.hasil_pdf");

        // return $pdf->download("oneget-".$downloadPdf.".pdf");
        return $pdf->stream();
    }

    public function getRange($id)
    {
        $data = Tiktok::find($id)->get();
        $accessToken = $data->access_token;

        $startDate = date("2023-11-26");
        $endDate = date("2023-11-27");

        $data = HasilAnalisisTiktok::whereDate('created_at', ">=", $startDate)->whereDate("created_at", "<=", $endDate)->get();

        dd($data);
    }
}
