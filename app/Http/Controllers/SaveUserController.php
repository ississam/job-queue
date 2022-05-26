<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\AddDataInBdd;
use Illuminate\Foundation\Bus\DispatchesJobs;
use App\Models\Tbl;
use Illuminate\Support\Facades\Bus;

class SaveUserController extends Controller
{
    public function save(Request $request){
        // $colors = collect(['orange', 'blue', 'green', 'red', 'yellow', 'purple']);

        // $colors = collect(['orange', 'blue', 'green', 'red', 'yellow', 'purple', 'orange', 'blue', 'green', 'red', 'yellow', 'purple', 'orange', 'blue', 'green', 'red', 'yellow', 'purple']);
        // $colors = collect(['account_id' => 1, 'product' => 'Desk'], ['account_id' => 2, 'product' => 'Desk'], ['account_id' => 3, 'product' => 'Desk'], ['account_id' => 1, 'product' => 'Desk'], ['account_id' => 1, 'product' => 'Desk'], ['account_id' => 1, 'product' => 'Desk'], ['account_id' => 1, 'product' => 'Desk'], ['account_id' => 1, 'product' => 'Desk'], ['account_id' => 1, 'product' => 'Desk'], ['account_id' => 1, 'product' => 'Desk'], ['account_id' => 1, 'product' => 'Desk'], ['account_id' => 1, 'product' => 'Desk'], ['account_id' => 1, 'product' => 'Desk'], ['account_id' => 1, 'product' => 'Desk'], ['account_id' => 1, 'product' => 'Desk'], ['account_id' => 1, 'product' => 'Desk'], ['account_id' => 1, 'product' => 'Desk'], ['account_id' => 1, 'product' => 'Desk'], ['account_id' => 1, 'product' => 'Desk'], ['account_id' => 1, 'product' => 'Desk'], ['account_id' => 1, 'product' => 'Desk'], ['account_id' => 1, 'product' => 'Desk'], ['account_id' => 1, 'product' => 'Desk'], ['account_id' => 1, 'product' => 'Desk'], ['account_id' => 1, 'product' => 'Desk'], ['account_id' => 1, 'product' => 'Desk'], ['account_id' => 1, 'product' => 'Desk'], ['account_id' => 1, 'product' => 'Desk'], ['account_id' => 1, 'product' => 'Desk'], ['account_id' => 1, 'product' => 'Desk']);
        $colors = collect([
            'account_id' => 1, 'account_id' => 1, 'account_id' => 1, 'account_id' => 1, 'account_id' => 2, 'account_id' => 2, 'account_id' => 1, 'account_id' => 1,
            'account_id' => 10, 'account_id' => 1, 'account_id' => 1, 'account_id' => 1, 'account_id' => 1, 'account_id' => 1, 'account_id' => 1, 'account_id' => 1,
            'account_id' => 100, 'account_id' => 1, 'account_id' => 1, 'account_id' => 1, 'account_id' => 1, 'account_id' => 1, 'account_id' => 1, 'account_id' => 1,
            'account_id' => 122, 'account_id' => 1, 'account_id' => 1, 'account_id' => 1, 'account_id' => 1, 'account_id' => 1, 'account_id' => 1, 'account_id' => 1,
            'account_id' => 143, 'account_id' => 1, 'account_id' => 1, 'account_id' => 1, 'account_id' => 1, 'account_id' => 1, 'account_id' => 1, 'account_id' => 1,
            'account_id' => 12, 'account_id' => 1, 'account_id' => 1, 'account_id' => 1, 'account_id' => 1, 'account_id' => 1, 'account_id' => 1, 'account_id' => 1
        ]);

        $sent_data = Tbl::chunk(2, function($items){
        // dd($items);
            AddDataInBdd::dispatch($items);
            
        });
        
        return 'Saved succes';

    }
}
