<?php

namespace App\DataTransferObject;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Spatie\LaravelData\Attributes\MapOutputName;
use Spatie\LaravelData\Data;

class UserData extends Data
{
    public function __construct(
        public string $first_name,
        public readonly string $last_name,
        public readonly string $email,
        public readonly string $phone,
        public readonly ?string $password,
        public readonly ?Carbon $email_verified_at,
        public readonly ?Carbon $created_at,
        public readonly ?Carbon $updated_at
    ) {
    }
}
