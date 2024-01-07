<?

declare(strict_types=1);

namespace App\DataAccess;

use Illuminate\Database\DatabaseManager;

class BookDataAccessObject{
    /** @var DatabaseManager */
    protected $db;

    /** @var string */
    protected $table = 'books';
    public function __construct(DatabaseManager $db)
    {
        $this->db = $db;
    }

    public function find($id){
        $query = $this->db->connection()->table($this->table);
        $result = \Illuminate\Support\Facades\DB::table('books')
        ->select('id', 'name as title')
        ->leftJoin('authors', 'books.author_id', '=', 'authors.id')
        ->leftJoin('publishers', 'books.publisher_id', '=', 'publishers.id')
        ->where('created_at', '>=', '2024-01-01')
        ->orderBy('id')
        ->limit(10)
        ->get();
    }
}
?>
