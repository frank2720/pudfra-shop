<?php
namespace App\Filters;

use Illuminate\Http\Request;

class ApiFilter{
    protected $allowed_fields = [];

    protected $columMap = [];

    protected $operatorMap = []; 

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