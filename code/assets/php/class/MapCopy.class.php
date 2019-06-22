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
class MapCopy
{

    protected $mapArray = Array(); // Reading of the map file's
    //private $tileSet = Array();    //  Final outcome of each tile
    //protected $map = Array();    //   Rows/Columns of the map

    public function __construct(string $file)
    {


        //Generate map array based off of file
        if(($csv = file($file)) !== false)
            $this ->mapArray = array_map('str_getcsv', $csv);
        else
            throw new Exception("Error while loading the file");


    }

    private function getTile(int $col, int $row) {
        return $this -> mapArray[$col][$row];
}
/*
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
*/
    public function showMap(string $imageLoc, string $contextId)
    {

        //Show the map
        $cols = count($this -> mapArray);
        $rows = $this -> mapArray[0][0];
        $mapJS = <<<JS
            
            var img = new Image();
            img.src = "$imageLoc";
            var ctx = document.getElementById('$contextId').getContext('2d');
            for (var c = 0; c < {$cols}; c++) {
                for (var r = 0; r < {$rows}; r++) {
                    var tile = {$this -> getTile(c, r)};
                    if (tile !== 0) { // 0 => empty tile
                            ctx.drawImage(
                                            img, // image
                                            (tile - 1) * map.tsize, // source x
                                            0, // source y
                                            map.tsize, // source width
                                            map.tsize, // source height
                                            c * map.tsize,  // target x
                                            r * map.tsize, // target y
                                            map.tsize, // target width
                                            map.tsize // target height
                                           );
                    }
                }
            }
            JS;


        return $mapJS;
    }
}

