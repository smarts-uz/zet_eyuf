<?php ?><?php
/* You may add your copyright here and it will be added to every encoded file.
   Format the copyright string as PHP comments like below */

/* Copyright (c) by MyCompany */

/* Also you may add your custom error handler which is added UNENCODED to every encoded file. */
if (!function_exists('my_error_handler')) {
   function my_error_handler($code, $message) {
       /* This is a sample of the error handler you may use to catch SourceGuardian errors
          such as IP or domain lock violation, expiring the license etc.
          Add this my_error_handler function name to the 'Custom error handlers' list on the
          'Lock' window in your SourceGuardian project. Please refer to 'Custom errors handling'
          section in 'Locking options' in the user manual for further information. */
       echo sprintf("Something goes wrong. Error code %s. ", $code);
       echo "Please contact <a href='myname@mycompany.com'>myname@mycompany.com</a>";
   }
}

/* Or you may add custom PHP code and it will be added UNENCODED to every encoded file. */
if (!function_exists('function_added_to_every_file')) {
   function function_added_to_every_file() {
       /* This is a sample of the function which is added as-is to every encoded file */
   }
}
?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m')); ?><?php
   echo "It looks like you did not install the loader. ";
   echo "Please contact <a href='myname@mycompany.com'>myname@mycompany.com</a>";
?><?php
exit();}}return sg_load('A42E80F110DF3131AAQAAAAXAAAABIgAAACABAAAAAAAAAD/PSqF62U2A3gErJxQLWjyqOEZ244r9nfA8c7PDqLj0b7G7T/Jbg8d4So4cPGAlu7Vmz94nCPcaMg6OLEGb6cSM+eKXh0am/5qDMjfxicj7wmlUjjw9bpCaxvb40yszgXhl4WQAECvIH/zJt2UnuXxwedxUXUZvGDbRPjs9hjozzV6tUCHP/8NTEkAAAD4AQAAOpJOgMPzf2Xk8MmpPlVBIFdgVuLL7E11b8+Z25/STOWE7PfplZ/a/Ia2n8aw/RHd4gWqYJfUPgQRloIoiob8XIf6DohBMdwHT+SR9i/E5AwseSC1ylJh5VcyjAM4FWCMH3xQwWkgcwxMLQMuBBhQG/YapfTNBOHhl2TZnbwMdXzBIyoesh7ocP4Tp6RQ7uqACGxPUzS7j3qdQP0syrGEF2rhjdx0z+X58OlhkQAJwLU9gu3bd2l66NqAtaSip3TN7fCJUvBLYSVzikbv4DNeO5ZNQAJ3AjWD0s6OdBrUsJg9EYwk8l3JpOxgwlRl4IQB8umD7Y89tRb7yiCd+/wuR5Pe7nhKIzYA/tbYlhPueGPLV+G4qQKnmBMSFZ/TkdOxZwvcOkJZLC/K4w943MNu16e0mJMhSFgg1UBvbmbV1u5Iw05A0s9NxEeeT3R6K/HVZGiofQKeSWw1hMMiwNadogRQ038GlzRIpzpCfc7P77FVOWOyKAZ0mIQJSq5Dl0YgRiC4mbUJZ/Fba7NeVCLQ3gVJARfSPbK8XLKBl7Ao46RbBsWv9O5LZB6h6gcu6XBQMy40PumRZU6LmaXMhhdV/Ja+XHOorcUU3EtVweC0jLf7+uN+0Ileb4SLGwxkW052TvOsiJa/U8kqEsBSVdtWC4GK0vHYHA1gSgAAANgBAAAjvR2E60/zOAlPE0Aw4v7AbSgGSFmVcJkCGF4gXA5zhRcQKxljucLjIf0hTIGmhKzQjGihzZIDomgQjyfUMASrYlcCkDGJ4ETVJ2bwDPB7JeiExYu+TkXkwFABv7MlW8xijS9Lo4b2MxqC4vTWEkp5KfozRRuKSsuyuuiR6Ar625KM1+Nwwi6mEDwBgAPZRDliesKv+UfqOh3n7UlKLWNVpE/D31tiKkLpXYZebry/NpZrokL5bno3MTf7mD9lZB+RR4ISP8zLOH3sKBhPJLKN7sDDT4a15YB7A6i/h6vOmLHuHIvEZofhh6agW5VHKOXTp0RHeNtjb8HehhgLevYGu2gWPovDsAzgFySktLPIb1/4y2bgbwIdIXbA0a6Hpgu/DdHCwPozgc8BATrTpeQHIRexJqDKspzNn7iHGwxg+I/2LzOLPJPQlBV+58hFiC54t7X0jYwz+QpH2nddu171CI7Tt64IeQgOm+ZeDaYXMFYVaCzdx92dXZ7pK9g0SwWk/xZFsVotY5mZ2PmzJ6/POd/swSArduH4tUiZ5jVKu8YvWOIbdC3DOIdd/BICHZrzkE7Bt3DQijPwYYEjI22tgXJRKHQHRj4ULs18zSdHBK1oPEhqYBPEAAAAAA==');
