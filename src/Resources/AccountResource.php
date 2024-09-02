<?php

namespace SabatinoMasala\Replicate\Resources;

use SabatinoMasala\Replicate\Requests\GetAccountRequest;

class AccountResource extends Resource
{
    public function get()
    {
        return $this->connector->send(new GetAccountRequest);
    }
  
}
