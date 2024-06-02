<?php
namespace App\Filters\V1;

use App\Filters\ApiFilter;
use Illuminate\Http\Request;


class InvoiceFilter extends ApiFilter  {

    protected $allowed_fields = [
        "amount"=> ['eq','gt','lt','gte','lte'],
        "status"=> ['eq'],
        "billedDated"=>['eq','gt','lt','gte','lte'],
        "paidDated"=> ['eq','gt','lt','gte','lte']
    ];

    protected $columMap = [
        'billedDated' => 'billed_dated',
        'paidDated' => 'paid_dated'
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
