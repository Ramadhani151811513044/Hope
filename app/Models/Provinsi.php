<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Provinsi
 * 
 * @property int $ID_PROVINSI
 * @property string $NAMA_PROVINSI
 * 
 * @property Collection|Kotum[] $kota
 *
 * @package App\Models
 */
class Provinsi extends Model
{
	protected $table = 'provinsi';
	protected $primaryKey = 'ID_PROVINSI';
	public $timestamps = false;

	protected $fillable = [
		'NAMA_PROVINSI'
	];

	public function kota()
	{
		return $this->hasMany(Kota::class, 'ID_PROVINSI');
	}
}
