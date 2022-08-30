<?php
namespace Jhonycreativo\Creative;
use Illuminate\Support\Collection;
class Utility
{
    public function GroupAndSum($list = null,$param=null,$param2=null){
        $data = collect($list);
        $data = $data->groupBy($param)->map(function ($item) use ($param2)  {
            if ($item->count() > 1) {
                $item = $item->slice(0, 1)->map(function($subItem) use ($item,$param2) {
                    $subItem[$param2] = $item->sum($param2);

                    return $subItem;
                });
            }

            return $item;
        })
        ->flatten(1);
        return $data;
    }
}