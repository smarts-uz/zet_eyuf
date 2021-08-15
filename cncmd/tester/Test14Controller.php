<?php
/**
 *
 * Author:  Umid Muminov
 * Created: 28.07.2020 14:15
 */

namespace zetsoft\cncmd\tester;

use zetsoft\dbitem\App\eyuf\AutoDialItem;
use zetsoft\models\App\eyuf\db3\CxpanelUsers;
use zetsoft\models\App\eyuf\db3\Devices;
use zetsoft\models\App\eyuf\db3\Sip;
use zetsoft\models\App\eyuf\db3\Users;
use zetsoft\system\control\ZControlCmd;
use zetsoft\system\Az;

class Test14Controller extends ZControlCmd
{
    public function actionRun(){
        //Az::$app->acme->test->test();
        //Az::$app->payer->uzcard->createUserCardTest();
        $result =Az::$app->tests->test2->StartParser(
            [
                'url'=>[
//                    Page 1
                    "https://www.php.net/manual/en/intro-whatis.php",
                    "https://www.php.net/manual/en/tutorial.firstpage.php",
                    "https://www.php.net/manual/en/tutorial.useful.php",
                    "https://www.php.net/manual/en/tutorial.forms.php",
//                    Page 2
                    "https://www.php.net/manual/en/language.basic-syntax.phptags.php",
                    "https://www.php.net/manual/en/language.basic-syntax.phpmode.php",
                    "https://www.php.net/manual/en/language.basic-syntax.instruction-separation.php",
//                    "https://www.php.net/manual/en/language.basic-syntax.comments.php",
////                    Page 3
//                    "https://www.php.net/manual/en/language.types.intro.php",
//                    "https://www.php.net/manual/en/language.types.boolean.php",
//                    "https://www.php.net/manual/en/language.types.integer.php",
//                    "https://www.php.net/manual/en/language.types.float.php",
////                    Page 4
//                    "https://www.php.net/manual/en/language.types.string.php",
//                    "https://www.php.net/manual/en/language.types.numeric-strings.php",
//                    "https://www.php.net/manual/en/language.types.array.php",
//                    "https://www.php.net/manual/en/language.types.iterable.php",
////                    Page 5
//                    "https://www.php.net/manual/en/language.types.object.php",
//                    "https://www.php.net/manual/en/language.types.resource.php",
//                    "https://www.php.net/manual/en/language.types.null.php",
//                    "https://www.php.net/manual/en/language.types.callable.php",
////                    Page 6
//                    "https://www.php.net/manual/en/language.types.declarations.php",
//                    "https://www.php.net/manual/en/language.types.type-juggling.php",
//                    "https://www.php.net/manual/en/language.variables.basics.php",
//                    "https://www.php.net/manual/en/language.variables.scope.php",
////                    Page 7
//                    "https://www.php.net/manual/en/language.variables.variable.php",
//                    "https://www.php.net/manual/en/language.variables.external.php",
//                    "https://www.php.net/manual/en/language.constants.php",
//                    "https://www.php.net/manual/en/language.expressions.php",
////                    Page 8
//                    "https://www.php.net/manual/en/language.operators.precedence.php",
//                    "https://www.php.net/manual/en/language.operators.arithmetic.php",
//                    "https://www.php.net/manual/en/language.operators.assignment.php",
//                    "https://www.php.net/manual/en/language.operators.bitwise.php",
////                    Page 9
//                    "https://www.php.net/manual/en/language.operators.comparison.php",
//                    "https://www.php.net/manual/en/language.operators.execution.php",
//                    "https://www.php.net/manual/en/language.operators.increment.php",
//                    "https://www.php.net/manual/en/language.operators.logical.php",
////                    Page 10
//                    "https://www.php.net/manual/en/language.operators.string.php",
//                    "https://www.php.net/manual/en/language.operators.array.php",
//                    "https://www.php.net/manual/en/language.operators.type.php",
//                    "https://www.php.net/manual/en/faq.databases.php",
////                    Page 11
//                    "https://www.php.net/manual/en/faq.using.php",
//                    "https://www.php.net/manual/en/faq.html.php",
//                    "https://www.php.net/manual/en/faq.misc.php",
//                    "https://www.php.net/manual/en/features.http-auth.php",
////                    Page 12
//                    "https://www.php.net/manual/en/features.cookies.php",
//                    "https://www.php.net/manual/en/features.sessions.php",
//                    "https://www.php.net/manual/en/features.xforms.php",
//                    "https://www.php.net/manual/en/features.file-upload.php",
////                    Page 13
//                    "https://www.php.net/manual/en/features.remote-files.php",
//                    "https://www.php.net/manual/en/features.connection-handling.php",
//                    "https://www.php.net/manual/en/features.persistent-connections.php",
//                    "https://www.php.net/manual/en/features.commandline.php",
////                    Page 14
//                    "https://www.php.net/manual/en/features.gc.php",
//                    "https://www.php.net/manual/en/features.dtrace.php",
//                    "https://www.php.net/manual/en/function.abs.php",
//                    "https://www.php.net/manual/en/function.base-convert.php"
                ],
                'type'=>[
//                    page 1
                    'Basic/PHP',
                    'Basic/PHP',
                    'Basic/PHP',
                    'Basic/PHP',
//                    page 2
                    'Basic/PHP',
                    'Basic/PHP',
                    'Basic/PHP',
                ],
                'header'=>[
//                    page 1
                    ["div[class=example]>p>strong"],
                    ["div[class=example]>p>strong"],
                    ["div[class=example]>p>strong"],
                    ["div[class=example]>p>strong"],
//                    page 2
                    ["div[class=example]>p>strong"],
                    ["div[class=example]>p>strong"],
                    ["div[class=example]>p>strong"],

                ],
                'code'=>[
//                    page 1
                            ["div.example-contents>div.phpcode>code>span"],
                            ["div.example-contents>div.phpcode>code>span"],
                            ["div.example-contents>div.phpcode>code>span"],
                            ["div.example-contents>div.phpcode>code>span"],
//                    page 2
                            ["div.example-contents>div.phpcode>code>span"],
                            ["div.example-contents>div.phpcode>code>span"],
                            ["div.example-contents>div.phpcode>code>span"],

                ],
                'dir'=>[
//                    page 1
                            ["div[class=info]>h1.title]"],
                            ["div[class=info]>h1.title]"],
                            ["div[class=info]>h1.title]"],
                            ["div[class=info]>h1.title]"],
//                    page 2
                            ["div[id=language.basic-syntax.phptags]>h2.title]"],
                            ["div[id=language.basic-syntax.phpmode]>h2.title]"],
                            ["div[id=language.basic-syntax.instruction-separation]>h2.title]"],

                    ]
            ]
        );
    }
}
