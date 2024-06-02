<?php
namespace App\Filters\V1;

use App\Filters\ApiFilter;
use Illuminate\Http\Request;


class CustomerFilter extends ApiFilter  {

    protected $allowed_fields = [
        "name"=> ['eq'],
        "type"=> ['eq'],
        "address"=> ['eq'],
        "city"=> ['eq'],
        "state"=> ['eq'],
        "postalCode"=> ['eq','gt','lt','gte','lte']
    ];

    protected $columMap = [
        'postalCode' => 'postal_code',
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
