<?php

declare(strict_types=1);

namespace Reader;

class FileReader
{
    /**
     * Iš public/files surenkami visi failų pavadiimai
     * @return array masyvas su failų pavadinimais
     */
    public static function getFilesNames(): array
    {
        // pasiimami visi failų pavadinimai iš nudodytos direktorijos
        $fileNames = scandir(__DIR__ . '/../public/files');
        
        // Nufiltruojma "." ir "..", nes jie atėjo, kaip direktorijų pavadinimai
        $fileNames = array_diff($fileNames, array('.', '..'));

        return $fileNames;
    }

    /**
     * Gaunami pasirinkto failo duomenys bei apdorojami pagal priklausomai nuofailo plėtinio
     * @param string gaunamas pasirinkto failo pavadinimas
     * @return array tiek sėkmės, tiek nesėkmės atveju gaunamas masyvas
     */
    public static function getFileData(string $fileName): array
    {
        $data = file_get_contents('./../public/files/' . $fileName);

        // funkcija skirta CSV duomenų failo apdorojimui
        function csv(string $data): array {

            $lines = explode( "\n", $data);
            $headers = str_getcsv( array_shift( $lines ) );
            $data = array();
            foreach ( $lines as $line ) {
                
                $row = array();
                
                foreach ( str_getcsv( $line ) as $key => $field )
                $row[ $headers[ $key ] ] = $field;
                
            $row = array_filter( $row );

            $csvData[] = $row;
           }
           return $csvData;
        }

        //priklausomai nuo pasirinkto failo yra pasirenkamas failo apdorojimo būdas
        $data = match (substr($fileName, -4)) {
            '.xml' => json_decode(json_encode(simplexml_load_string($data)), true),
            '.csv' => csv($data),
            'json' => json_decode($data, true),
            default => ['Failo formatas netinkamas, prašome pakoreguoti failo plėtinį'],
        };
        return $data;
    }
}

?>