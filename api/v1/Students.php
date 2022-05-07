<!-- <?php
require __DIR__ . '/twilio-php-main/src/Twilio/autoload.php';
use Twilio\Rest\Client;

class Students
{
    public function read($resource_id, $params = '')
    {
        try {

            $db_name     = 'covid_master';
            $db_user     = 'covid_admin';
            $db_password = 'P@ssw0rd';
            $db_host     = 'localhost';

            $pdo = new PDO('mysql:host=' . $db_host . '; dbname=' . $db_name, $db_user, $db_password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

            $data = [];

            $sql  = "select *
                    from products
                    ";

            if (!empty($resource_id)) {

                $sql .= " where product_id = :product_id";
                $data['product_id'] = $resource_id;
            } else {

                $filter = '';

                if (isset($params['product_name'])) {
                    $filter .= " and product_name = :product_name";
                    $data['product_name'] = $params['product_name'];
                }

                $sql .= " where product_id > 0 $filter";
            }

            $stmt = $pdo->prepare($sql);
            $stmt->execute($data);

            $products = [];

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $products[] = $row;
            }
            
            $response = [];

            $response['data'] =  $products;
            

            if (!empty($resource_id)) {
                 $response['data'] = array_shift($response['data']);
            }

            return json_encode($response, JSON_PRETTY_PRINT);
        } catch (Exception $ex) {
            $error = [];
            $error['message'] = $ex->getMessage();

            return $error;
        }
    }
} 
