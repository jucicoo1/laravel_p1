<?
declare(strict_types=1);

namespace App\Entity;

use Illuminate\Contracts\Auth\Authenticatable;

class User implements Authenticatable{
    private $id;
    private $apitoken;
    private $name;
    private $email;
    private $password;

    public function __construct(int $id, string $apitoken, string $name, string $email, string $password='')
    {
        $this->id = $id;
        $this->apitoken = $apitoken;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function getName(){
        return $this->name;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getAuthIdentifierName()
    {
        return 'user_id';
    }

    public function getAuthIdentifier()
    {
        return $this->id;
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getRememberToken()
    {
        return '';
    }

    public function setRememberToken($value)
    {
        
    }

    public function getRememberTokenName()
    {
        return '';
    }
}
?>