<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Kelurahan
 * 
 * @property int $ID_KELURAHAN
 * @property int $ID_KECAMATAN
 * @property string $NAMA_KELURAHAN
 * @property string $KODEPOS
 * 
 * @property Kecamatan $kecamatan
 * @property Collection|Customer[] $customers
 *
 * @package App\Models
 */
class Kelurahan extends Model
{
	protected $table = 'kelurahan';
	protected $primaryKey = 'ID_KELURAHAN';
	public $timestamps = false;

	protected $casts = [
		'ID_KECAMATAN' => 'int'
	];

	protected $fillable = [
		'ID_KECAMATAN',
		'NAMA_KELURAHAN',
		'KODEPOS'
	];

	public function kecamatan()
	{
		return $this->belongsTo(Kecamatan::class, 'ID_KECAMATAN');
	}

	public function customers()
	{
		return $this->hasMany(Customer::class, 'ID_KELURAHAN');
	}
}
