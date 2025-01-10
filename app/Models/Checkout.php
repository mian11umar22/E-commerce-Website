<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    public $timestamps = false;
    protected $table = 'checkouts';

    protected $fillable = [
        'FirstName',
        'lastName',
        'Email',
        'Phone',
        'Address',
        'city',
        'State',
        'ZipCode',
        'CardName',
        'CardNumber',
        'ExpiryDate',
        'CVV',];
}
