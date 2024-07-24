<?php
// This file declares an Angular module which can be autoloaded
// in CiviCRM. See also:
// \https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_angularModules/n
return [
  'js' => [
    'ang/crmRegister.js',
    'ang/crmRegister/*.js',
    'ang/crmRegister/*/*.js',
  ],
  'css' => [
    'ang/crmRegister.css',
  ],
  'partials' => [
    'ang/crmRegister',
  ],
  'requires' => [
    'crmUi',
    'crmUtil',
    'ngRoute',
  ],
  'settings' => [],
];
