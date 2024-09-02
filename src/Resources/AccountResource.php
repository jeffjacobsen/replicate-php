<?php

namespace SabatinoMasala\Replicate\Resources;

use SabatinoMasala\Replicate\Requests\CancelTrainingRequest;
use SabatinoMasala\Replicate\Requests\CreateDreamboothTrainingRequest;
use SabatinoMasala\Replicate\Requests\GetAllTrainingsRequest;
use SabatinoMasala\Replicate\Requests\GetDreamboothRequest;
use SabatinoMasala\Replicate\Requests\GetTrainingRequest;

class AccountResource extends Resource
{
    public function account()
    {
        return $this->connector->send(new AccountRequest);
    }
  
}
