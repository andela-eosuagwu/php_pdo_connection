<?php

namespace Emeka\Newsletter\Database;

class ConnectDataBase
{
    public function fetchData ( $table )
    {

         $db_connection = new \PDO('pgsql:host=localhost;dbname=news', 'postgres', 'Olanicmi2013');
        if ( ! $db_connection )
        {
            echo "Error : Unable to open database\n";
        }
        $data = $db_connection->query("SELECT * FROM $table");
        foreach ($data as $row)
        {
            return $row;
        }

    }


}

