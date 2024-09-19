<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberType extends Model
{
    use HasFactory;

    static public function getMemberType()
    {
        return self::select('member_types.*')

            ->where('member_types.status', '=', 'Show')
            ->orderBy('member_types.id', 'desc')
            ->paginate(20);
    }

    static public function getSingle($id)
    {

        return self::find($id);
    }
}