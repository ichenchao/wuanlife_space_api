<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/14
 * Time: 23:52
 */

namespace App\Models\Articles;


use Illuminate\Database\Eloquent\Model;

class UsersArticlesCount extends Model
{
    protected $table = 'users_articles_count';
    protected $primaryKey = 'user_id';
    public $timestamps = false;

    /**
     * 查询作者写的文章总数
     * @param $user_id
     * @return mixed
     */
    public static function ArticlesNum($user_id)
    {
        return self::where('user_id',$user_id) -> value('count');
    }
}
