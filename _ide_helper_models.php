<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * @property int $id
 * @property string $code
 * @property int $resident_id
 * @property int $report_category_id
 * @property string $title
 * @property string $description
 * @property string $image
 * @property string $latitude
 * @property string $longitude
 * @property string $address
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\ReportCategory|null $category
 * @property-read \App\Models\Resident|null $resident
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ReportStatus> $statuses
 * @property-read int|null $statuses_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereReportCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereResidentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Report withoutTrashed()
 */
	class Report extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $image
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportCategory onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportCategory whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportCategory whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportCategory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportCategory withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportCategory withoutTrashed()
 */
	class ReportCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $report_id
 * @property string|null $image
 * @property string $status
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Report|null $report
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportStatus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportStatus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportStatus onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportStatus query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportStatus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportStatus whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportStatus whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportStatus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportStatus whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportStatus whereReportId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportStatus whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportStatus whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportStatus withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ReportStatus withoutTrashed()
 */
	class ReportStatus extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property string $avatar
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Resident newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Resident newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Resident onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Resident query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Resident whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Resident whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Resident whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Resident whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Resident whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Resident whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Resident withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Resident withoutTrashed()
 */
	class Resident extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read \App\Models\Resident|null $resident
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Role> $roles
 * @property-read int|null $roles_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User permission($permissions, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User role($roles, $guard = null, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User withoutPermission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User withoutRole($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User withoutTrashed()
 */
	class User extends \Eloquent {}
}

