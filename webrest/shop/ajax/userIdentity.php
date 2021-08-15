<?php
/**
 * @author: AzimjonToirov
 *
 */

use zetsoft\system\kernels\ZView;

/** @var ZView $this */
return [
    'email' => $this->userIdentity()->email,
    'phone' => $this->userIdentity()->phone,
    'name' => $this->userIdentity()->name,
    'title' => $this->userIdentity()->title,
    'role' => $this->userRole(),
    'photo' => $this->userPhoto(),
    'isGuest' => $this->userIsGuest(),
];
