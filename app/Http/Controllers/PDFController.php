<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDFMerger;

class PDFController extends Controller
{
    public function index()
    {
        return view('mergePDF');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'filenames' => 'required',
            'filenames.*' => 'mimes:pdf'
        ]);

        if($request->hasFile('filenames')) {
            $files = $request->file('filenames');
            $pdf = PDFMerger::init();

            foreach ($files as $file) {
                $pdf->addPDF($file->getPathname(), 'all');
            }

            $fileName = time() . '.pdf';
            $path = 'pdf' . DIRECTORY_SEPARATOR . $fileName;

            $pdf->merge();
            $pdf->save(public_path($path));
        }

        return response()->download(public_path($path));
    }
}
