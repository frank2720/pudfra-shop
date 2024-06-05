<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InvoiceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "customerId"=>$this->customer_id,
            "amount"=> $this->amount,
            "status"=> $this->status,
            "billedDate"=> $this->billed_dated,
            "paidDate"=> $this->paid_dated
        ];
    }
}
