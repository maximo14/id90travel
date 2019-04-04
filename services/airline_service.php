<?php
require '../../vendor/autoload.php';
require '../../models/airline_builder.php';
use GuzzleHttp\Client;

class ArilineService
{
    public function __construct()
    { }

    public function getAllAirlines()
    {
        $client = new Client([
            'base_uri' => 'https://beta.id90travel.com/airlines',
            'timeout'  => 15.0,
        ]);
        $response = $client->request('GET');
        if ($response->getStatusCode() == '200') {
            $body = $response->getBody();
            $airlines = json_decode($body);
            $array_airlines = array();           
            foreach ($airlines as $value) {
                $builder = new AirlineBuilder();
                $aux = $builder->id($value->id)
                    ->name($value->name)
                    ->code($value->code)
                    ->signInAvailable($value->sign_in_available)
                    ->signUpAvailable($value->sign_up_available)
                    ->displayName($value->display_name)
                    ->isCommercial($value->is_commercial)
                    ->employeeNumberRequired($value->employee_number_required)
                    ->partner($value->partner)
                    ->lang($value->lang)
                    ->currency($value->currency)
                   ->emailDomains($value->email_domains)
                   ->build();
                array_push($array_airlines,$aux);                       
            }
            return $array_airlines;
        }
    }
}
