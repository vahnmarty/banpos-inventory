<?php
namespace Vahnmarty\BanposInventory\Controllers;

use Illuminate\Http\Request;
use Vahnmarty\BanposInventory\Inspire;

class InspirationController
{
    public function __invoke(Inspire $inspire) {
        $quote = $inspire->justDoIt();

        return view('banpos-inventory::index', compact('quote'));
    }
}