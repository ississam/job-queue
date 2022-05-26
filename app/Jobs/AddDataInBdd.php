<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Tblqueed;

class AddDataInBdd implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

   public $items;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($items)
    {

        $data = [];
        foreach ($items as $item) {
            $data[] = [
                'num' => $item['num'],
            ];
        }
        dd($data);
        $this->items = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Tblqueed::insert($this->items);
    }
}
