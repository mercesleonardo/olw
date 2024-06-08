<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use Inertia\Inertia;
use App\Models\Export;
use App\Jobs\ExportJob;
use App\Mail\ExportMail;
use App\Exports\BeerExport;
use App\Jobs\SendExportEmailJob;
use App\Jobs\StoreExportDataJob;
use App\Services\PunkapiService;
use App\Http\Requests\BeerRequest;
use App\Jobs\StorageExportDataJob;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class BeerController extends Controller
{
    public function index(BeerRequest $request, PunkapiService $service)
    {
        $filters = $request->validated();
        $beers = $service->getBeers(...$filters);
        $meals = Meal::all();

        return Inertia::render('Beers', [
            'beers' => $beers,
            'meals' => $meals,
            'filters' => $filters
        ]);
    }

    public function export(BeerRequest $request, PunkapiService $service)
    {
        $filename = 'cervejas-encontradas-' . now()->format('Y-m-d - H:i') . '.xlsx';

        ExportJob::withChain([
            new SendExportEmailJob($filename),
            new StoreExportDataJob(auth()->user(), $filename)
        ])->dispatch($request->validated(), $filename);


        return 'relatório criado';
    }
}
