<?php

return [
    'backup' => [
        'title' => 'menu.backup',
        'route-name' => 'backup',
        'sub_menu' => [
            [
                'title' => 'menu.schedules',
                'route-name' => 'backup.schedules',
                'permissions' => [
                    [
                        'key' => 'backup.schedules.save',
                        'label' => 'buttons.save'
                    ],
                    [
                        'key' => 'backup.schedules.delete',
                        'label' => 'schedules.btdelete'
                    ]
                ]
            ],
            [
                'title' => 'menu.devices',
                'route-name' => 'backup.devices',
                'permissions' => [
                    [
                        'key' => 'backup.devices.save',
                        'label' => 'buttons.save'
                    ],
                    [
                        'key' => 'backup.devices.delete',
                        'label' => 'devices.btdelete'
                    ],
                    [
                        'key' => 'backup.devices.run',
                        'label' => 'devices.btbackup'
                    ],
                    [
                        'key' => 'backup.devices.download',
                        'label' => 'devices.btdownload'
                    ],
                    [
                        'key' => 'backup.devices.deletefiles',
                        'label' => 'devices.deletefile'
                    ],
                    [
                        'key' => 'backup.devices.deleteerrors',
                        'label' => 'devices.deleteerrors'
                    ]
                ]
            ],
            [
                'title' => 'menu.logs',
                'route-name' => 'backup.logs'
            ],
            [
                'title' => 'menu.storage',
                'route-name' => 'backup.storage'
            ]
        ]
    ],
    /*
    'tools' => [
        'title' => 'menu.tools',
        'route-name' => 'tools',
        'sub_menu' => [
            [
                'title' => 'menu.ip_calculator',
                'route-name' => 'tools.ipcalc'
            ],
            [
                'title' => 'menu.ping',
                'route-name' => 'tools.ping'
            ],
            [
                'title' => 'menu.nslookup',
                'route-name' => 'tools.nslookup'
            ],
            [
                'title' => 'menu.traceroute',
                'route-name' => 'tools.traceroute'
            ]
        ]
    ],
    */
    'settings' => [
        'title' => 'menu.generalsettings',
        'route-name' => 'settings',
        'sub_menu' => [
            [
                'title' => 'menu.settings',
                'route-name' => 'settings.settings'
            ],
            [
                'title' => 'menu.accounts',
                'route-name' => 'settings.accounts',
                'permissions' => [
                    [
                        'key' => 'settings.accounts.save',
                        'label' => 'buttons.save'
                    ],
                    [
                        'key' => 'settings.accounts.delete',
                        'label' => 'accounts.btdelete'
                    ]
                ]
            ],
            [
                'title' => 'menu.profiles',
                'route-name' => 'settings.profiles',
                'permissions' => [
                    [
                        'key' => 'settings.profiles.save',
                        'label' => 'buttons.save'
                    ],
                    [
                        'key' => 'settings.profiles.delete',
                        'label' => 'profiles.btdelete'
                    ]
                ]
            ],
            [
                'title' => 'menu.tags',
                'route-name' => 'settings.tags',
                'permissions' => [
                    [
                        'key' => 'settings.tags.save',
                        'label' => 'buttons.save'
                    ],
                    [
                        'key' => 'settings.tags.delete',
                        'label' => 'tags.btdelete'
                    ]
                ]
            ],
            [
                'title' => 'menu.pops',
                'route-name' => 'settings.pops',
                'permissions' => [
                    [
                        'key' => 'settings.pops.save',
                        'label' => 'buttons.save'
                    ],
                    [
                        'key' => 'settings.pops.delete',
                        'label' => 'pops.btdelete'
                    ]
                ]
            ],
            [
                'title' => 'menu.license',
                'route-name' => 'settings.license',
                'permissions' => [
                    [
                        'key' => 'settings.license.activaterenew',
                        'label' => 'buttons.validateLicense'
                    ],
                    [
                        'key' => 'settings.license.delete',
                        'label' => 'buttons.removeLicense'
                    ]
                ]
            ]
            //[
            //    'title' => 'menu.update',
            //    'route-name' => 'settings.update'
            //]
        ]
    ]
];
