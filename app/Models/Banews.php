<?PHP
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Banews extends Model 
{
    //資料表名稱
    protected $table = 'news';

    //主鍵名稱
    protected $promaryKey = 'id';

    //可變動欄位
    protected $fillable = [
      'cover',
      'releases',
      'content',
      'sort',
      'assort',
      'title',
      'tinymce',
    ];
    
}
?>

