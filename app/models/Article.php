<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{   
    /**
     * 与模型关联的数据表
     *
     * @var string
     */
    protected $table = 'article';

    /**
     * 该模型是否被自动维护时间戳
     * 
     * @var bool
     */
    public $timestamps = true;
    
    /**
     * 模型的日期字段保存格式。
     *
     * @var string
     */
    protected $dateFormat = 'U';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * 可以被批量赋值的属性。
     *
     * @var array
     */
    protected $fillable = ['cid','title','author','is_top','is_hot','keywords','description','fabulous','status','created_at','updated_at'];

    /** 
     * 
     */
    public static function findAll() {
         return  Article::all();
    }

    /** 
     * 
     */
    public static function findWhereAll($id)
    {
         return Article::select('*')->where('id',$id)->get();
    }

}   