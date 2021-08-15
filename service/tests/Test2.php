<?php


namespace zetsoft\service\tests;
require Root.'/vendors/parser/html/vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Shared\OLE\PPS\Root;
use QL\QueryList;
use Facebook\WebDriver\Exception\UnsupportedOperationException;
use zetsoft\models\shop\ShopOrder;
use zetsoft\service\inputs\Fileinput;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\helpers\ZFileHelper;
use zetsoft\system\kernels\ZFrame;
use function Spatie\SslCertificate\length;

class Test2 extends ZFrame
{
    /**
     * @var QueryList
     */
/********ROlES***********
 *      URL
 *      HEADER ROLE => FILE NAME
 *      CODE ROLE
 *      DIR NAME ROLE
 *
 * */
    public $parser;
    public $gloFileName=[];
//  Save php file url
    const PATH_URL = Root."/upload/PARSER/";
//    URL
    public $url=[];
//    HEADER ROLE
    public $headerRole=[];
//    CODE ROLE
    public $codeRole=[];
//    DIR NAME ROLE
    public $dirNameRole = [];

//    START TO PARSING
    public function StartParser($sends){
//      array put start
        $this->url=$sends['url'];
        $this->gloFileName=$sends['type'];
        $this->headerRole=$sends['header'];
        $this->codeRole=$sends['code'];
        $this->dirNameRole=$sends['dir'];
//      array put finish
        foreach ($this->url as $url){
            echo "///////////////";
            echo $url;
            $dirName = "";
            $headerName="";
            $phpCode="";
            $keyUrl = array_search($url,$this->url);
            $this->parser = QueryList::get($url);
////            get header
        foreach ($this->headerRole[$keyUrl] as $header){
                $headerName = $this->parser->find($header)->text();
                var_dump($headerName);
            }
////        explode headers text to array
//        $headerArray = explode("\n",$headerName);
////            get code
//        foreach ($this->codeRole[$keyUrl] as $code){
//                $phpCode = $this->parser->find($code)->text();
//                $phpCode =  str_replace(" "," ",$phpCode);
//                $phpCode =  str_replace("<?php","<?php ",$phpCode);
//            }
////            get dir filename
//        foreach ($this->dirNameRole[$keyUrl] as $dir){
//                $fileName = $this->parser->find($dir)->text();
//                $dirName = self::PATH_URL.$this->gloFileName[$keyUrl]."/".$fileName."/";
//            }
////        fix string to array and fix header add code blog
//        $check = 1;
//        $last="";
//        foreach ($headerArray as $val) {
//            if ($check == 2) {
//                    $first = $last;
//                    $last = $val;
//                    $code = $this->get_string_between($phpCode, $first, $last);
//                    $code = trim(preg_replace('/\s+/', ' ', $code));
//                    $check = 1;
//                    $filePhpName = $first;
//            } else {
//                    $last = $val;
//                    $filePhpName= $last;
//                    $code = trim(preg_replace('/\s+/', ' ', $phpCode));
//                    $code = str_replace($last, "", $code);
//                }
//            $check++;
////            create directory and write
//
//            $headerName = $filePhpName;
//            if( is_dir($dirName) === false )
//            {
//                ZFileHelper::createDirectory($dirName);
//            }
//
//            $file = $dirName.$headerName.'.php';
//            $innerCode = "$code\n";
//            file_put_contents($file, $innerCode);
//
//                }
            }
        }
    public function get_string_between($string, $start, $end){
        $string = ' ' . $string;
        $ini = strpos($string, $start);
        if ($ini == 0) return '';
        $ini += strlen($start);
        $len = strpos($string, $end, $ini) - $ini;
        return substr($string, $ini, $len);
    }
}