<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\HasilAnalisisFacebook;
use App\Http\Requests\StoreHasilAnalisisFacebookRequest;
use App\Http\Requests\UpdateHasilAnalisisFacebookRequest;

class HasilAnalisisFacebookController extends Controller
{
    public function downloadPdf()
    {
        $downloadPdf = Carbon::now();

        $pdf = Pdf::loadView("accesspoint.user.hasil_pdf");

        // return $pdf->download("oneget-".$downloadPdf.".pdf");
        return $pdf->stream();
    }

    public function getRange()
    {
        $startDate = date("2023-11-26");
        $endDate = date("2023-11-27");

        $data = HasilAnalisisFacebook::whereDate('created_at', ">=", $startDate)->whereDate("created_at", "<=", $endDate)->get();

        dd($data);
    }
}
