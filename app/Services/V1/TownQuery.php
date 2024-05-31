<?php
namespace App\Services\V1;

use Illuminate\Http\Request;

class TownQuery{
    protected $allowed_fields = [
        "town"=> ['eq'],
        "latitude"=> ['eq','gt','lt','gte','lte'],
        "longitude"=> ['eq','gt','lt','gte','lte'],
        "state"=> ['eq'],
        "country"=> ['eq'],
        "adminName"=> ['eq']
    ];

    protected $columMap = [
        'adminName' => 'admin_name',
    ];

    protected $operatorMap = [
        'eq'=>'=',
        'gt'=> '>',
        'gte'=> '>=',
        'lt'=> '<',
        'lte'=> '<='
    ]; 

    public function transform(Request $request)
    {
        $eloQuery = [];

        foreach ($this->allowed_fields as $field => $operators) {
            $query = $request->query($field);
            
            if(!isset($query)){
                continue;
            }

            $column = $this->columMap[$field] ?? $field;

            foreach ($operators as $operator) {
                if(isset($query[$operator])){
                    $eloQuery[] = [$column, $this->operatorMap[$operator],$query[$operator]];
                }
            }
        }

        return $eloQuery;
    }
}