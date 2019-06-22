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
    private $tileSet = Array();    //  Final outcome of each tile
    //protected $map = Array();    //   Rows/Columns of the map

    public function __construct(string $file)
    {


        //Generate map array based off of file

        $handle = fopen($file, "r");
        //$file = file_get_contents($file_name, true );
        /*
        $json = json_decode($file, true);
        if( $json !== NULL || $json !== false)
            $this -> mapArray = $json;
        */

        if ($handle) {
            $i = 0;
            while (($buffer = fgets($handle,4096)) !== false) {


                //Currently in the map file's contents
                $row = explode(",", $buffer);


                foreach ($row as $tile) {
                    //This is each individual tile within each row
                    //echo $tile;
                    $this -> mapArray[$i][] = $tile;
                }

                $i++;
            }
            if (!feof($handle)) {
                throw new Exception("Error: unexpected fgets() fail");
            }
            fclose($handle);
        }


        $this->tileSet = $this->generateMap($this -> mapArray);
        //var_dump($this ->tileSet);
        if($this->tileSet == null)
        {
            throw new Exception("Unexpected error generating map");
        }


    }

    protected function generateMap(array $mapset) : array {

        //Generate map based on the mapArray
        $map = Array();
        $i = 0;//cols
        $j = 0; //rows
        //var_dump($mapset);
        foreach($mapset as $row)
        {
            //Current row in the mapArray

            foreach($row as $tile)
            {
                //Current tile in the mapArray

                //$this -> map[$i][] = "<img src=\"".$imageLoc."/".$tile.".png\" />";
                if ($tile !== 0) { // 0 => empty tile
                    $map[$i][] = <<<JS
                    
                    ctx.drawImage(img,// image
                                  ($tile - 1) * img.width,//sourcex
                                  0,              //sourcey
                                  img.width,     // source width
                                  img.width,     // source height
                                  $i * img.width,  // target x
                                  $j * img.width, // target y
                                  img.width,     // target width
                                  img.width  // target height 
                                  );

JS;
                }
                $j++;
            }

            $i++;
        }

        return $map;
    }

    public function showMap(string $imageLoc, string $contextId) {

        //Show the map
        $mapJS = <<<JS
        var img = new Image(); 
        img.src = "$imageLoc";
        var ctx = document.getElementById('$contextId').getContext('2d');
        
JS;
        if($this->tileSet != null)
        {


            $i = 0;

            foreach($this->tileSet as $row)
            {
                //Current row in the tileSet

                foreach($row as $tile)
                {
                    //Current tile in the tileSet

                    $mapJS .= $tile;
                }

                $i++;
            }

        }else{
            throw new Exception("Tileset is empty.");
        }
        return $mapJS;
    }


}