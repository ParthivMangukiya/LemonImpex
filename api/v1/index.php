<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \Firebase\JWT\JWT as JWT;

//including the required files
require_once '../../data/config.php';
require '../../vendor/autoload.php';

$app = new \Slim\App();

$secret = 'mynameiskhan';

$app->add(new \Tuupola\Middleware\JwtAuthentication([
    "path" => "/admin", /* or ["/api", "/admin"] */
    "ignore" => "/admin/login",
    "attribute" => "decoded_token_data",
    "secret" => $secret,
    "algorithm" => ["HS256"],
    "error" => function ($response, $arguments) {
        $data["status"] = "error";
        $data["message"] = $arguments["message"];
        return $response
            ->withHeader("Content-Type", "application/json")
            ->write(json_encode($data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT));
    }
]));

$container = $app->getContainer();

$container->get('settings')['displayErrorDetails'] = true;

$app->get('/hello', function (Request $request, Response $response) {
   $response->getBody()->write("Hello");
    return $response;
});

function writeResponse($request,$response,$data,$status_code){
    $response = $response->withHeader('Content-type', 'application/json');
    $response = $response->withJson($data,$status_code);
    return $response;
}


$app->get('/events', function (Request $request, Response $response) use(&$db) {
    $eventHelper = new EventHelper($db);
    $result = $eventHelper->getEvents();
    $data = [];
    if(!$result['error']) {
        $data['data'] = $result['data'];
    }
    if($data != NULL){
        $response = writeResponse($request, $response, $data, 200);
    }else{
        $response = writeResponse($request, $response, $data, 204);
    }
    return $response;
});

$app->post('/admin/login', function (Request $request, Response $response) use(&$db) {

    $parsedBody = $request->getParsedBody();
    
    $email = getValueOrDefault('email',$parsedBody, "");
    $password = getValueOrDefault('password',$parsedBody, "");

    $adminHelper = new AdminHelper($db);
    $result = $adminHelper->getAdminByEmail($email);
    
    $user = $result['data'];
    $data = [];
    if(!$result['error']) {
        $passwordAdmin = $user[Admin::COL_PASSWORD];
        error_log($passwordAdmin);
        if($passwordAdmin == $password) {
            $token = JWT::encode([ 'username' => $user[Admin::COL_NAME], 'email' => $user[Admin::COL_EMAIL] ], $settings['jwt']['secret'], "HS256");
            $data['token'] = $token;
        } else {
            $data['error'] = true;
        }
    } else {
        $data['error'] = true;
    }
    if($data != NULL){
        $response = writeResponse($request, $response, $data, 200);
    }else{
        $response = writeResponse($request, $response, $data, 204);
    }
    return $response;
});


// $app->post('/diamond-bag/saved-searches/query', function (Request $request, Response $response)  use(&$db) {

//     $data = array();

//     $parsedBody = $request->getParsedBody();
//     $data["items"] = array();
//     $data["resultCount"] = null;
//     $response = writeResponse($request, $response, $data, 200);

//     return $response;
// });

$app->post('/product-details-query', function (Request $request, Response $response) use($db) {

});

$app->post('/product-compare-query', function (Request $request, Response $response) use($db) {

});


$app->post('/angular-diamond-result', function (Request $request, Response $response) use(&$db) {
    $queries = $request->getParsedBody();
    $diamondHelper = new DiamondHelper($db);
    $data = [];
    $price_low = $queries['priceMin'];
    $price_high = $queries['priceMax'];
    $carat_low = $queries['caratMin'];
    $carat_high = $queries['caratMax'];
    $color_low = $queries['colorMin'];
    $color_high = $queries['colorMax'];
    $shape = $queries['shapeList'];
    $cut_low = $queries['cutMin'];
    $cut_high = $queries['cutMax'];
    $clarity_low = $queries['clarityMin'];
    $clarity_high = $queries['clarityMax'];
    $page = $queries['pager'];
    $colors = [];
    $clarities = [];
    $cuts = [];
    
    if(!is_null($clarity_low) && !is_null($clarity_high)) {
        $clarities = DiamondHelper::getValuesBetween(Diamond::clarities,$clarity_low,$clarity_high);
    }

    if(!is_null($color_low) && !is_null($color_high)) {
        $colors = DiamondHelper::getValuesBetween(Diamond::colors,$color_low,$color_high);
    }

    if(!is_null($cut_low) && !is_null($cut_high)) {
        $cuts = DiamondHelper::getValuesBetween(Diamond::cuts,$cut_low,$cut_high);
    }

    $result = $diamondHelper->getDiamondsWithFilter($shape,$cuts,$colors,$clarities,$carat_low,$carat_high,$price_low,$price_high,$page);
    $count = $diamondHelper->getDiamondCountWithFilter($shape,$cuts,$colors,$clarities,$carat_low,$carat_high,$price_low,$price_high,$page);


    if(!$result['error']) {
        $data['diamond_count'] = $count;
        $data['diamond'] = [];
        $data['imgOnly'] = $queries['imgOnly'];
        $data['view'] = getValueOrDefault('view',$queries,'list');
        foreach($result['data'] as $diamond){
            $in = array();
            $in['nid'] = $diamond[Diamond::COL_ID];
            $in['shape'] = $diamond[Diamond::COL_SHAPE];
            $in['cut'] = $diamond[Diamond::COL_CUT];
            $in['depth'] = $diamond[Diamond::COL_DEPTH];
            $in['clarity'] = $diamond[Diamond::COL_CLARITY];
            $in['carat'] = $diamond[Diamond::COL_CARAT];
            $in['bank_price'] = $diamond[Diamond::COL_PRICE];
            $in['price'] = $diamond[Diamond::COL_PRICE];
            $in['color'] = $diamond[Diamond::COL_COLOR];
            $in['table'] = $diamond[Diamond::COL_TABLE];
            
            array_push($data['diamond'],$in);
        }
    }
    if($data != NULL){
        $response = writeResponse($request, $response, $data, 200);
    }else{
        $response = writeResponse($request, $response, $data, 204);
    }
    return $response;
});



$app->get('/diamonds', function (Request $request, Response $response) use(&$db) {
    $queries = $request->getQueryParams();
    $diamondHelper = new DiamondHelper($db);
    $price_low = $queries['price_low'];
    $price_high = $queries['price_high'];
    $carat_low = $queries['carat_low'];
    $carat_high = $queries['carat_high'];
    $color_low = $queries['color_low'];
    $color_high = $queries['color_high'];
    $shape = $queries['shape'];
    $cut_low = $queries['cut_low'];
    $cut_high = $queries['cut_high'];
    $clarity_low = $queries['clarity_low'];
    $clarity_high = $queries['clarity_high'];
    $colors = [];
    $clarities = [];
    $cuts = [];
        
        if(!is_null($clarity_low) && !is_null($clarity_high)) {
            $clarities = DiamondHelper::getValuesBetween(Diamond::clarities,$clarity_low,$clarity_high);
        }

        if(!is_null($color_low) && !is_null($color_high)) {
            $colors = DiamondHelper::getValuesBetween(Diamond::colors,$color_low,$color_high);
        }

        if(!is_null($cut_low) && !is_null($cut_high)) {
            $cuts = DiamondHelper::getValuesBetween(Diamond::cuts,$cut_low,$cut_high);
        }

        $result = $diamondHelper->getDiamondsWithFilter($shape,$cuts,$colors,$clarities,$carat_low,$carat_high,$price_low,$price_high);


    $data = [];
    if(!$result['error']) {
        $data['data'] = $result['data'];
    }
    if($data != NULL){
        $response = writeResponse($request, $response, $data, 200);
    }else{
        $response = writeResponse($request, $response, $data, 204);
    }
    return $response;
});

$app->post('/contact_us', function (Request $request, Response $response)  use(&$db) {

    $data = array();

    $parsedBody = $request->getParsedBody();
    
    $name = getValueOrDefault('name',$parsedBody, "");
    $email = getValueOrDefault('email',$parsedBody, "");
    $mobile = getValueOrDefault('mobile',$parsedBody, "");
    $message = getValueOrDefault('message',$parsedBody, "");

    $contactusHelper = new ContactUsHelper($db);    

    $res = $contactusHelper->createContactUsQuery($name,$mobile, $email, $message);

    if ($res['error'] == 0) {
        $id = $res['id'];
        $data["error"] = false;
        $data["message"] = "Query successfully inserted";
        $response = writeResponse($request, $response, $data, 201);
    } else if ($res['error'] == 1) {
        $data["error"] = true;
        $data["message"] = $res['message'];
        $response = writeResponse($request, $response, $data, 500);
    }
    return $response;
});

function getValueOrDefault($key,$array,$default){
    return array_key_exists($key,$array) ? $array[$key] : $default;
}

function authorization($request,$response,$next){
    
}

$app->run();


