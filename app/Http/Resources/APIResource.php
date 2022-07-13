<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\BondResource;

class APIResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $dates = array();
        switch ($this->per_period) {
            case 360:
                $period = (12/$this->pay_period)*30;
                break;
            case 364:
                $period = 364/$this->pay_period;
                break;
            case 365:
                $period = 12/$this->pay_period;
                break;
        }

        for ($day = (int)strtotime($this->emission_date); $day < (int)strtotime($this->last_cycle_date); $day++){ 
            $day = (int)strtotime(date("Y-m-d", $day)." +$period day");
            $dl = date("l", $day);
            $dl = strtolower($dl);
            if($dl == "saturday" ){
                (int)strtotime(date("Y-m-d", $day)." +2 day");
            }else if($dl == "sunday"){
                (int)strtotime(date("Y-m-d", $day)." +1 day");
            }
            array_push($dates, date("Y-m-d", $day));
        }

        return [
            'id' => $this->id,
            'dates' => $dates,
            'bond' => BondResource::collection($this->bond)
        ];
    }
}
