<?php

namespace App\Http\Controllers;
use Goutte\Client;

class ScraperController extends Controller
{
    private $data = array();

    public function scraper()
    {
        $client = new Client;

        $page = $client->request('GET', 'https://github.com/Felipeerick');

        $page->filter(".vcard-details")->each(function($item)
        {
            $this->data[$item->filter('.p-label')->text()] = $item->filter('.Link--primary')->text();
        });

        /* echo $page->filter(".vcard-details")->text(); */

        return $this->data;
     
    }
}
