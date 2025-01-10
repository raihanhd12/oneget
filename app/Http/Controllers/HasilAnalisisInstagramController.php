<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\HasilAnalisisInstagram;
use App\Http\Requests\StoreHasilAnalisisInstagramRequest;
use App\Http\Requests\UpdateHasilAnalisisInstagramRequest;

class HasilAnalisisInstagramController extends Controller
{
    public function downloadPdf()
    {
        $downloadPdf = Carbon::now();

        $pdf = Pdf::loadView("accesspoint.user.hasil_pdf");

        // return $pdf->download("oneget-".$downloadPdf.".pdf");
        return $pdf->stream();
    }

    public function getRange(Request $request)
    {
        $startDate = date("2023-11-26");
        $endDate = date("2023-11-27");

        $data = HasilAnalisisInstagram::whereDate('created_at', ">=", $startDate)->whereDate("created_at", "<=", $endDate)->get();

        dd($data);
    }
}
