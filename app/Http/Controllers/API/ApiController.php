<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\APIResource;
use App\Models\apiDB;
use App\Models\bondDB;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function payouts($id)
    {
        return new APIResource(apiDB::find($id));
    }

    public function bonds(Request $request, $id)
    {
        bondDB::insert(['bond_id' => $request->bond, 'sale_date' => date('Y-m-d', strtotime('now')), 'bond_count' => $request->count]);
        return new APIResource(apiDB::with('bond')->find($id));
    }

    public function orders($id)
    {
        $db = apiDB::with('bond')->find($id);
        $data = new APIResource($db);
        $data = json_decode(json_encode($data),true);
        $dates = $data['dates'];
        $sale = $data['bond'][0];
        $payouts = array("payouts" => []);

        foreach ($dates as $date) {
            $count_days = (strtotime($date)-strtotime($sale['date']))/strtotime('1 day', 0);
            $amount = ($db->nominal_value/(100*$db->per))/($db->per_period*$count_days*$sale['count']);
            array_push($payouts["payouts"], ["date" => $date, "amount" => $amount]);
        }
        return $payouts;
    }
}
