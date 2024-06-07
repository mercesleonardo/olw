<?php

namespace App\Http\Controllers;

use App\Models\Export;
use App\Mail\ExportMail;
use App\Exports\BeerExport;
use App\Services\PunkapiService;
use App\Http\Requests\BeerRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;

class BeerController extends Controller
{
    public function index(BeerRequest $request, PunkapiService $service)
    {
        return $service->getBeers(...$request->validated());
    }

    public function export(BeerRequest $request, PunkapiService $service)
    {
        $beers = $service->getBeers(...$request->validated());

        $filteredBeers = collect($beers)->map(function ($value, $key) {
            return collect($value)->only(['name', 'tagline', 'first_brewed', 'description'])->toArray();
        })->toArray();

        $filename = 'cervejas-encontradas-' . now()->format('Y-m-d - H:i') . '.xlsx';

        Excel::store(
            new BeerExport($filteredBeers),
            $filename,
            's3'
        );

        Mail::to('leo@teste.com')->send(new ExportMail($filename));

        Export::create([
            'file_name' => $filename,
            'user_id' => Auth::user()->id
        ]);

        return 'relatório criado';
    }
}
