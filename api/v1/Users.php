<?php

class Products
{
    public function read($resource_id, $params = '')
    {
        try {

            $db_name     = 'DemoDBSMS';
            $db_user     = 'anokh';
            $db_password = 'P@ssw0rd';
            $db_host     = 'localhost';

            $pdo = new PDO('mysql:host=' . $db_host . '; dbname=' . $db_name, $db_user, $db_password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

            $data = [];

            $sql  = "select *
                    from todo_list
                    ";

            if (!empty($resource_id)) {

                $sql .= " where id = :id";
                $data['id'] = $resource_id;

            } else {

                $filter = '';

                if (isset($params['product_name']) ) {
                    $filter .=" and product_name = :product_name";
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

        } catch (PDOException $ex) {
                $error = [];
                $error['message'] = $ex->getMessage();

                return $error;
        }
    }
}