<?php
/**
 * Created by PhpStorm.
 * User: olea0001
 * Date: 21/06/19
 * Time: 09:19
 */

/**
 * Map Reader Class
 *  Used to generate and display RPG style maps
 */
class Map
{

    protected $mapArray = Array(); // Reading of the map file's
    public $tileSet = Array();    //  Final outcome of each tile
    protected $map = Array();    //   Rows/Columns of the map

    public function __construct(string $file, $imageLocation)
    {


        //Generate map array based off of file

        $handle = @fopen($file, "r");
        //$file = file_get_contents($file_name, true );
        /*
        $json = json_decode($file, true);
        if( $json !== NULL || $json !== false)
            $this -> mapArray = $json;
        */

        if ($handle) {
            $i = 0;
            while (($buffer = fgets($handle)) !== false) {


                //Currently in the map file's contents
                $row = explode(",", $buffer);


                foreach ($row as $tile) {
                    //This is each individual tile within each row

                    $this -> mapArray[$i][] = $tile;
                }

                $i++;
            }
            if (!feof($handle)) {
                throw new Exception("Error: unexpected fgets() fail");
            }
            fclose($handle);
        }


        $this->tileSet = $this->generateMap($this -> mapArray, $imageLocation);

        if($this->tileSet == null)
        {
            throw new Exception("Unexpected error generating map");
        }

    }

    protected function generateMap(array $mapset, string $imageLoc) : array {

        //Generate map based on the mapArray

        $i = 0;

        foreach($mapset as $row)
        {
            //Current row in the mapArray

            foreach($row as $tile)
            {
                //Current tile in the mapArray

                //$this -> map[$i][] = "<img src=\"".$imageLoc."/".$tile.".png\" />";
                $this -> map[$i][] = <<<JS
                $("#main");
JS;

            }

            $i++;
        }

        return $map;
    }

    public function showMap() {

        //Show the map

        if($this->tileSet != null)
        {


            $i = 0;

            foreach($this->tileSet as $row)
            {
                //Current row in the tileSet

                foreach($row as $tile)
                {
                    //Current tile in the tileSet

                    print $tile;
                }

                print "<br />";

                $i++;
            }

        }else{
            throw new Exception("Tileset is empty.");
        }
    }


}