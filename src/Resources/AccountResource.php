<?php

namespace SabatinoMasala\Replicate\Resources;

use SabatinoMasala\Replicate\Requests\GetAccountRequest;

class AccountResource extends Resource
{
    public function account()
    {
        return $this->connector->send(new GetAccountRequest);
    }
  
}
