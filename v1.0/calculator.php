<?php
    if($_SERVER['REQUEST_METHOD'] == 'GET') {
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $operator = $_GET['operation'];
		// $headers = apache_request_headers();
		// var_dump($headers);
	
		// $token = $headers['Authorization'];
	
		// if ($token !== 'Basic ') {
			// http_response_code(401);
			// exit();
		// }
		
        if ($operator === "+" || $operator === "-" || $operator === "*" || $operator === "/" || $operator === "**"){
            $n1 = floatval($num1);
            $n2 = floatval($num2);
            
            $result = Null;
            switch($operator){
                case "+":
                    $result = $n1 + $n2;
                    break;
                case "-":
                    $result = $n1 - $n2;
                    break;
                case "*":
                    $result = $n1 * $n2;
                    break;
                case "/":
                    $result = $n1 / $n2;
                    break;
                case "**":
                    $result = $n1 ** $n2;
                    break;
            }
            
            if ($result !== Null){
                echo $result;
            } else {
                http_response_code(500);
            }
			
        }else {
            http_response_code(400);
            exit();
        }
        
    } else if ($_SERVER['REQUEST_METHOD'] == 'HEAD') {
        exit();
    }else {
        http_response_code(405);
        exit();
    }
?>