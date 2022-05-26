<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SaveUser implements ShouldQueue
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
        $this->items = $items;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // Logique d'ecrirure
        $data = [];
       dd('handle job ok');
        foreach($this->items->ids as $id){
            
            $data[]=[
                'user_id' => $id,
                'offer_title' => $this->request->offer_title
            ];
        
        }

        Model::isert($data);
    }
}
