<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $jsonPath = APPPATH . 'Data/homepage.json';
        $homepage = $this->loadHomepageData($jsonPath);

        return view('home', [
            'page' => $homepage,
        ]);
    }

    /**
     * @return array<string, mixed>
     */
    private function loadHomepageData(string $jsonPath): array
    {
        if (! is_file($jsonPath)) {
            return [];
        }

        $json = file_get_contents($jsonPath);
        if ($json === false) {
            return [];
        }

        $data = json_decode($json, true);
        return is_array($data) ? $data : [];
    }
}
