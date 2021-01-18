<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Petani extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'petani';
    protected $fillable = [
        'ID_PETANI','ID_KELURAHAN','NAMA_PETANI','NAMA_PERUSAHAAN','ALAMAT_PETANI', 'EMAIL_PETANI', 'NOHP_PETANI',
    ];

    
	public function kelurahan()
	{
		return $this->belongsTo(Kelurahan::class, 'ID_KELURAHAN');
    }
    
   
	protected $primaryKey = 'ID_PETANI';
	public $incrementing = false;
	public $timestamps = false;
}
