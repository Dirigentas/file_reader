<?php

declare(strict_types=1);

namespace Reader\Controllers;

use Reader\App;
use Reader\FileReader;

class FileReadController
{
    /** 
     * Atvaizduojami visi projekte public/files direktorijoje esantys failų pavadinimai
     * @return string view metodas
     */
    public function index(): string
    {
        $fileNames = FileReader::getFilesNames();

        return App::view('choose', $fileNames);

    }

    /**
     * Atvaizduojami pasirinkto failo duomenys PHP asociatyviniame masyve
     * @param string pasirinkto failo pavadinimas
     * @return string view metodas pasirinkto failo duomenų atvaizdavimui
     */
    public function show(string $fileName): string
    {
        $fileData = FileReader::getFileData($fileName);

        return App::view('show', $fileData, $fileName);
    }
}

?>