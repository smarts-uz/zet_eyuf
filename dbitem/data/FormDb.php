<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */

namespace zetsoft\dbitem\data;


use Faker\Generator;
use phpDocumentor\Reflection\Types\Boolean;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;

class FormDb extends Form
{


    public $length = 255;




    #region AutoSave


    /**
     * @var
     * Event For Column
     */
    public $event;

    /**
     * @var bool
     * Generate or not generate
     */
    public $auto = false;
    public $autoWhenEmpty = false;


    /**
     * @var
     *
     * Auto Generate
     * you can pass for $autoValue:
     * - you can give string with columns nameOn and it will replace columns nameOn
     *          for ex. '{title} - {user_ids} / {user_ids}'
     * - you can give your callable function for generating name
     *          for ex.   static function (ShopOrder $order) {
     * return $order->contact_name . ', ' . $order->contact_phone;
     * };
     */

    public $autoValue;

    #endregion


    #region DataBase


    /**
     * @var bool
     * Wheather write only difference of this column to Transaction table
     */
    public $diff = false;
    public $indexSearch = false;

    /**
     * @var string
     *
     *
     */
    public $historyTarget = ALLData::historyTarget['column'];


    #endregion


    #region Faker

    /**
     * @var bool
     * turn on or off $faker generation
     */
    public bool $faker = false;

    /**
     * value for faker must be string or can be callable
     * string $name
     * method string name(string $gender = null)
     * property string $firstName
     * method string firstName(string $gender = null)
     * property string $firstNameMale
     * property string $firstNameFemale
     * property string $lastName
     * property string $title
     * method string title(string $gender = null)
     * property string $titleMale
     * property string $titleFemale
     *
     * property string $citySuffix
     * property string $streetSuffix
     * property string $buildingNumber
     * property string $city
     * property string $streetName
     * property string $streetAddress
     * property string $secondaryAddress
     * property string $postcode
     * property string $address
     * property string $state
     * property string $country
     * property float  $latitude
     * property float  $longitude
     *
     * property string $ean13
     * property string $ean8
     * property string $isbn13
     * property string $isbn10
     *
     * property string $phoneNumber
     * property string $e164PhoneNumber
     *
     * string $company
     * property string $companySuffix
     * property string $jobTitle
     *
     * property string $creditCardType
     * property string $creditCardNumber
     * method string creditCardNumber($type = null, $formatted = false, $separator = '-')
     * property \DateTime $creditCardExpirationDate
     * property string $creditCardExpirationDateString
     * property array $creditCardDetails
     * property string $bankAccountNumber
     * method string iban($countryCode = null, $prefix = '', $length = null)
     * property string $swiftBicNumber
     * property string $vat
     *
     * property string $word
     * property string|array $words
     * method string|array words($nb = 3, $asText = false)
     * method string word()
     * property string $sentence
     * method string sentence($nbWords = 6, $variableNbWords = true)
     * property string|array $sentences
     * method string|array sentences($nb = 3, $asText = false)
     * property string $paragraph
     * method string paragraph($nbSentences = 3, $variableNbSentences = true)
     * property string|array $paragraphs
     * method string|array paragraphs($nb = 3, $asText = false)
     * property string $text
     * method string text($maxNbChars = 200)
     *
     * method string realText($maxNbChars = 200, $indexSize = 2)
     *
     * property string $email
     * property string $safeEmail
     * property string $freeEmail
     * property string $companyEmail
     * property string $freeEmailDomain
     * property string $safeEmailDomain
     * property string $userName
     * property string $password
     * method string password($minLength = 6, $maxLength = 20)
     * property string $domainName
     * property string $domainWord
     * property string $tld
     * property string $url
     * property string $slug
     * method string slug($nbWords = 6, $variableNbWords = true)
     * property string $ipv4
     * property string $ipv6
     * property string $localIpv4
     * property string $macAddress
     *
     * property int       $unixTime
     * property \DateTime $dateTime
     * property \DateTime $dateTimeAD
     * property string    $iso8601
     * property \DateTime $dateTimeThisCentury
     * property \DateTime $dateTimeThisDecade
     * property \DateTime $dateTimeThisYear
     * property \DateTime $dateTimeThisMonth
     * property string    $amPm
     * property string    $dayOfMonth
     * property string    $dayOfWeek
     * property string    $month
     * property string    $monthName
     * property string    $year
     * property string    $century
     * property string    $timezone
     * method string amPm($max = 'now')
     * method string date($format = 'Y-m-d', $max = 'now')
     * method string dayOfMonth($max = 'now')
     * method string dayOfWeek($max = 'now')
     * method string iso8601($max = 'now')
     * method string month($max = 'now')
     * method string monthName($max = 'now')
     * method string time($format = 'H:i:s', $max = 'now')
     * method int unixTime($max = 'now')
     * method string year($max = 'now')
     * method \DateTime dateTime($max = 'now', $timezone = null)
     * method \DateTime dateTimeAd($max = 'now', $timezone = null)
     * method \DateTime dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = null)
     * method \DateTime dateTimeInInterval($date = '-30 years', $interval = '+5 days', $timezone = null)
     * method \DateTime dateTimeThisCentury($max = 'now', $timezone = null)
     * method \DateTime dateTimeThisDecade($max = 'now', $timezone = null)
     * method \DateTime dateTimeThisYear($max = 'now', $timezone = null)
     * method \DateTime dateTimeThisMonth($max = 'now', $timezone = null)
     *
     * property string $md5
     * property string $sha1
     * property string $sha256
     * property string $locale
     * property string $countryCode
     * property string $countryISOAlpha3
     * property string $languageCode
     * property string $currencyCode
     * property boolean $boolean
     * method boolean boolean($chanceOfGettingTrue = 50)
     *
     * property int    $randomDigit
     * property int    $randomDigitNot
     * property int    $randomDigitNotNull
     * property string $randomLetter
     * property string $randomAscii
     * method int randomNumber($nbDigits = null, $strict = false)
     * method int|string|null randomKey(array $array = array())
     * method int numberBetween($min = 0, $max = 2147483647)
     * method float randomFloat($nbMaxDecimals = null, $min = 0, $max = null)
     * method mixed randomElement(array $array = array('a', 'b', 'c'))
     * method array randomElements(array $array = array('a', 'b', 'c'), $count = 1, $allowDuplicates = false)
     * method array|string shuffle($arg = '')
     * method array shuffleArray(array $array = array())
     * method string shuffleString($string = '', $encoding = 'UTF-8')
     * method string numerify($string = '###')
     * method string lexify($string = '????')
     * method string bothify($string = '## ??')
     * method string asciify($string = '****')
     * method string regexify($regex = '')
     * method string toLower($string = '')
     * method string toUpper($string = '')
     * method Generator optional($weight = 0.5, $default = null)
     * method Generator unique($reset = false, $maxRetries = 10000)
     * method Generator valid($validator = null, $maxRetries = 10000)
     * method mixed passthrough($passthrough)
     *
     * method integer biasedNumberBetween($min = 0, $max = 100, $function = 'sqrt')
     *
     * property string $macProcessor
     * property string $linuxProcessor
     * property string $userAgent
     * property string $chrome
     * property string $firefox
     * property string $safari
     * property string $opera
     * property string $internetExplorer
     * property string $windowsPlatformToken
     * property string $macPlatformToken
     * property string $linuxPlatformToken
     *
     * property string $uuid
     *
     * property string $mimeType
     * property string $fileExtension
     * method string file($sourceDirectory = '/tmp', $targetDirectory = '/tmp', $fullPath = true)
     *
     * method string imageUrl($width = 640, $height = 480, $category = null, $randomize = true, $word = null, $gray = false)
     * method string image($dir = null, $width = 640, $height = 480, $category = null, $fullPath = true, $randomize = true, $word = null)
     *
     * property string $hexColor
     * property string $safeHexColor
     * property string $rgbColor
     * property array $rgbColorAsArray
     * property string $rgbCssColor
     * property string $safeColorName
     * property string $colorName
     *
     * method string randomHtml($maxDepth = 4, $maxWidth = 4)
     *
     */
    public $fakerValue = null;
    /**
     * @var int
     * how many values to get from array randomElements($array, $fakerCount)
     */
    public int $fakerCount = 1;

    public $fakerArgumets;
    #endregion



    /**
     *
     * SQL Data
     */
    public $check = null;
    public $defaultExpression = null;
    public $append = null;

    /**
     *
     * Migration
     */

    public $notNull = false;
    public $unsigned = false;


    /**
     *
     * Index
     */
    public $index = false;
    public $noSearch = false;
    public $indexUnique = false;


    /**
     *
     * Keys
     */
    public $isPKey = false;
    public $fkCreate = false;



    public static function column()
    {
        return ZArrayHelper::merge(parent::column(), [

            'title' => function (Form $column) {

                $column->title = Az::l('Описание');
                $column->showForm = false;

                return $column;
            },

        ]);
    }


 
    public function __construct()
    {
        parent::__construct();

        if ($this->indexUnique)
            $this->index = true;


    }


}
