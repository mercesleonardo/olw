<?php

namespace App\Jobs;

use App\Mail\ExportMail;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendExportEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(protected string $filename,)
    {
        //
    }

    /**
     * Execute the job.
     *
     * This method is responsible for handling the export email job.
     * It sends an email to the specified recipient using the ExportMail class.
     *
     * @return void
     *
     * @throws \Exception If there is an error sending the email.
     *
     * @see \App\Mail\ExportMail
     */
    public function handle(): void
    {
        Mail::to('leo@teste.com')
            ->send(new ExportMail($this->filename));
    }
}
