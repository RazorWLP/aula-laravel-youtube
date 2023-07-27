<?php

namespace App\DTO\Supports;

use App\Http\Requests\StoreUpdateSupport;

class  UpdateSupportDTO{
    public function __construct(
        public string $id,
        public string $subject,
        public string $status,
        public string $body,
    ){
        
    }

    public static function makeFromRequest(StoreUpdateSupport $request){
        return new self(
            $request->id,
            $request->subject,
           'a',
            $request->body,
        );
    }
}