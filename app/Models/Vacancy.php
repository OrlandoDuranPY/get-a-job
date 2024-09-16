<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Vacancy
 * 
 * @property int $id
 * @property int $company_id
 * @property int $job_types
 * @property string $title
 * @property string $slug
 * @property string $description
 * @property string $salary
 * @property string $address
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Company $company
 * @property JobType $job_type
 *
 * @package App\Models
 */
class Vacancy extends Model
{
	use SoftDeletes;
	protected $table = 'vacancies';

	protected $casts = [
		'company_id' => 'int',
		'job_types' => 'int'
	];

	protected $fillable = [
		'company_id',
		'job_types',
		'title',
		'slug',
		'description',
		'salary',
		'address'
	];

	public function company()
	{
		return $this->belongsTo(Company::class);
	}

	public function job_type()
	{
		return $this->belongsTo(JobType::class, 'job_types');
	}
}
