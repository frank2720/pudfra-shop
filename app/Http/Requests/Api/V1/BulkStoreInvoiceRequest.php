<?php

namespace App\Http\Requests\Api\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class BulkStoreInvoiceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "*.customerId"=> ['required','integer'],
            "*.amount"=> ['required','numeric'],
            "*.status"=> ['required',Rule::in(['Billed','Paid','Void','billed','paid','void'])],
            "*.billedDate"=> ['required','date_format:Y-m-d H:i:s'],
            "*.paidDate"=> ['date_format:Y-m-d H:i:s','nullable']
        ];
    }

    protected function prepareForValidation()
    {
        $data=[];
        foreach ($this->toArray() as $obj)
        {
            $obj['customer_id'] = $obj['customerId'] ?? null;
            $obj['billed_dated'] = $obj['billedDate'] ?? null;
            $obj['paid_dated'] = $obj['paidDate'] ?? null;

            $data[] = $obj;
        }

        $this->merge($data);
    }
}
