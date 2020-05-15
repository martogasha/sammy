<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    protected $fillable=[
        'table_personName','table_email','table_personPhone','table_tableNo','table_desc','table_person','table_date'
    ];
}
