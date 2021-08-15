<?php

namespace zetsoft\service\smart;

use Faker;
use yii\helpers\ArrayHelper;
use yii\helpers\Inflector;
use zetsoft\dbitem\core\NormServiceItem;
use zetsoft\dbitem\data\ALLApp;
use zetsoft\dbitem\data\ConfigDB;
use zetsoft\dbitem\data\Form;
use zetsoft\dbitem\data\FormDb;
use zetsoft\dbitem\data\Settings;
use zetsoft\models\test\TestDep;
use zetsoft\models\test\Test3;
use zetsoft\models\test\Test5;
use zetsoft\models\test\TestD;
use zetsoft\system\actives\ZActiveRecord;
use zetsoft\system\actives\ZModel;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\helpers\ZFileHelper;
use zetsoft\system\helpers\ZInflector;
use zetsoft\system\helpers\ZStringHelper;
use zetsoft\system\kernels\ZFrame;
use zetsoft\system\module\Models;

class ZFaker extends ZFrame
{
    public $locale = 'ru_RU';
    public const name = 'name';
    public const firstName = 'firstName';
    public const firstNameMale = 'firstNameMale';
    public const firstNameFemale = 'firstNameFemale';
    public const lastName = 'lastName';
    public const title = 'title';
    public const titleMale = 'titleMale';
    public const titleFemale = 'titleFemale';
    public const citySuffix = 'citySuffix';
    public const streetSuffix = 'streetSuffix';
    public const buildingNumber = 'buildingNumber';
    public const city = 'city';
    public const streetName = 'streetName';
    public const streetAddress = 'streetAddress';
    public const secondaryAddress = 'secondaryAddress';
    public const postcode = 'postcode';
    public const address = 'address';
    public const state = 'state';
    public const country = 'country';
    public const latitude = 'latitude';
    public const longitude = 'longitude';
    public const ean13 = 'ean13';
    public const ean8 = 'ean8';
    public const isbn13 = 'isbn13';
    public const isbn10 = 'isbn10';
    public const phoneNumber = 'phoneNumber';
    public const e164PhoneNumber = 'e164PhoneNumber';
    public const company = 'company';
    public const companySuffix = 'companySuffix';
    public const jobTitle = 'jobTitle';
    public const creditCardType = 'creditCardType';
    public const creditCardNumber = 'creditCardNumber';
    public const creditCardExpirationDate = 'creditCardExpirationDate';
    public const creditCardExpirationDateString = 'creditCardExpirationDateString';
    public const creditCardDetails = 'creditCardDetails';
    public const bankAccountNumber = 'bankAccountNumber';
    public const swiftBicNumber = 'swiftBicNumber';
    public const vat = 'vat';
    public const word = 'word';
    public const words = 'words';
    public const sentence = 'sentence';
    public const sentences = 'sentences';
    public const paragraph = 'paragraph';
    public const paragraphs = 'paragraphs';
    public const text = 'text';
    public const email = 'email';
    public const safeEmail = 'safeEmail';
    public const freeEmail = 'freeEmail';
    public const companyEmail = 'companyEmail';
    public const freeEmailDomain = 'freeEmailDomain';
    public const safeEmailDomain = 'safeEmailDomain';
    public const userName = 'userName';
    public const password = 'password';
    public const domainName = 'domain';
    public const domainWord = 'domainWord';
    public const tld = 'tld';
    public const url = 'url';
    public const slug = 'slug';
    public const ipv4 = 'ipv4';
    public const ipv6 = 'ipv6';
    public const localIpv4 = 'localIpv4';
    public const macAddress = 'macAddress';
    public const unixTime = 'unixTime';
    public const dateTime = 'dateTime';
    public const dateTimeAD = 'dateTimeAD';
    public const iso8601 = 'iso8601';
    public const dateTimeThisCentury = 'dateTimeThisCentury';
    public const dateTimeThisDecade = 'dateTimeThisDecade';
    public const dateTimeThisYear = 'dateTimeThisYear';
    public const dateTimeThisMonth = 'dateTimeThisMonth';
    public const amPm = 'amPm';
    public const dayOfMonth = 'dayOfMonth';
    public const dayOfWeek = 'dayOfWeek';
    public const month = 'month';
    public const monthName = 'monthName';
    public const year = 'year';
    public const century = 'century';
    public const timezone = 'timezone';
    public const md5 = 'md5';
    public const sha1 = 'sha1';
    public const sha256 = 'sha256';
    public const locale = 'locale';
    public const countryCode = 'countryCode';
    public const countryISOAlpha3 = 'countryISOAlpha3';
    public const languageCode = 'languageCode';
    public const currencyCode = 'currencyCode';
    public const boolean = 'boolean';
    public const randomDigit = 'randomDigit';
    public const randomDigitNot = 'randomDigitNot';
    public const randomDigitNotNull = 'randomDigitNotNull';
    public const randomLetter = 'randomLetter';
    public const randomAscii = 'randomAscii';
    public const macProcessor = 'macProcessor';
    public const linuxProcessor = 'linuxProcessor';
    public const userAgent = 'userAgent';
    public const chrome = 'chrome';
    public const firefox = 'firefox';
    public const safari = 'safari';
    public const opera = 'opera';
    public const internetExplorer = 'internetExplorer';
    public const windowsPlatformToken = 'windowsPlatformToken';
    public const macPlatformToken = 'macPlatformToken';
    public const linuxPlatformToken = 'linuxPlatformToken';
    public const uuid = 'uuid';
    public const mimeType = 'mimeType';
    public const fileExtension = 'fileExtension';
    public const hexColor = 'hexColor';
    public const safeHexColor = 'safeHexColor';
    public const rgbColor = 'rgbColor';
    public const rgbColorAsArray = 'rgbColorAsArray';
    public const rgbCssColor = 'rgbCssColor';
    public const safeColorName = 'safeColorName';
    public const colorName = 'colorName';
    public const image = 'image';

    /**
     * Run faker for Model(s)
     */
    public function run()
    {
        $faker = Faker\Factory::create($this->locale);
        $fakerCount = $this->paramGet('smartFakerCount');
        if (!$fakerCount)
            $fakerCount = 1;
        if ($this->paramGet('smartClass')) {
            $models = $this->paramGet('smartClass');
        } else {
            $models = Az::$app->smart->migra->scan();
        }
        foreach ($models as $className) {
            if (!class_exists($className))
                $model = $this->bootFull($className);
            for ($i = 0; $i < $fakerCount; $i++) {
                $object = new $model();
                $columns = $object->columns;
                /** @var FormDb $column */
                foreach ($columns as $key => $column) {
                    if ($column->faker) {
                        if ($column->fakerValue) {
                            /*
                             * if column rule has validatorUnique
                             */
                            unique:
                            switch (true) {
                                case $column->fakerValue instanceof \Closure:
                                    $val = $column->fakerValue;
                                    $name = $val();
                                    if (is_array($name)) {
                                        if ($column->dbType === dbTypeJson || $column->dbType === dbTypeJsonb) {
                                            $value = $faker->randomElements($name, $column->fakerCount);
                                        } else {
                                            $value = $faker->randomElement($name);
                                        }
                                    } else {
                                        $value = $faker->$name;
                                    }
                                    break;
                                case is_array($column->fakerValue):
                                    if ($column->dbType === dbTypeJson || $column->dbType === dbTypeJsonb) {
                                        $value = $faker->randomElements($column->fakerValue, $column->fakerCount);
                                    } else {
                                        $value = $faker->randomElement($column->fakerValue);
                                    }
                                    break;
                                default:
                                    $val = $column->fakerValue;
                                    if ($column->fakerArgumets)
                                        $value = $faker->$val($column->fakerArgumets);
                                    else
                                        $value = $faker->$val;
                            }
                            if (is_array($column->rules)) {
                                if (ZArrayHelper::isIn(validatorUnique, $column->rules)) {
                                    if ($model::find()->where([$key => $value])->exists()) {
                                        goto unique;
                                    }
                                }
                            } else if (is_string($column->rules)) {
                                if ($column->rules === validatorUnique) {
                                    if ($model::find()->where([$key => $value])->exists()) {
                                        goto unique;
                                    }
                                }
                            }
                            $object->$key = $value;
                        }
                    }
                }
                $object->save();
            }
        }
    }
}
