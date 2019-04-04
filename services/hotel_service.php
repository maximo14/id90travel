<?php
require '../../vendor/autoload.php';
require '../../models/hotel_builder.php';
use GuzzleHttp\Client;

class HotelService
{
    public function __construct()
    { }

    public function getHotels($destination, $checkin_date, $checkout_date, $guest, $page = 1)
    {
        $client = new Client([
            'base_uri' => 'https://beta.id90travel.com/api/v1/hotels.json',
            'timeout'  => 15.0,
        ]);
        $response = $client->request('GET', "", [
            'query' => [
                'guests[]' => $guest,
                'checkin' => $checkin_date,
                'checkout' => $checkout_date,
                'destination' => $destination,
                'rooms' => 1,
                'sort_criteria' => 'Overall',
                'sort_order' => 'desc',
                'per_page' => '25',
                'page' => $page,
                'currency' => 'USD'
            ]
        ]);
        if ($response->getStatusCode() == '200') {
            $body = $response->getBody();
            $decode = json_decode($body);
            $hotels = $decode->hotels;
            $array_hotel = array();
            foreach ($hotels as $value) {
                $hotel_builder = new HotelBuilder();
                $hotel = $hotel_builder->setId($value->id)
                              ->setName($value->name)
                              ->setTotal($value->total)
                              ->setImage($value->image)
                              ->setDescription($value->description)
                              ->setCity($value->location->city)
                              ->setCountry($value->location->country)
                              ->setLocationDescription($value->location->description)
                              ->build();
                array_push($array_hotel,$hotel);
            }
            return $array_hotel;                 
        }
    }
}
