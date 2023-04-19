<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Contacts extends Model
{
    use HasFactory;

    public static function getBySlug(string $slug)
    {
        $page = DB::table('pages')
            ->select('title', 'content')
            ->where('slug', $slug)
            ->first();

        return $page;
    }
}
