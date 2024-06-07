<?php

namespace App\Http\Controllers;

use App\Models\Export;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ExportController extends Controller
{
    /**
     * This function is responsible for handling the index action of the ExportController.
     * It does not perform any specific operations but can be used to display a list of exports or any other relevant data.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exports = Export::paginate(15);
    }

    /**
     * Delete the specified export from storage.
     *
     * @param  \App\Models\Export  $export
     * @return \Illuminate\Http\Response
     *
     * @throws \Exception
     */
    public function destroy(Export $export)
    {
        Storage::delete($export->file_name);
        $export->delete();

        return 'Delete';
    }
}
