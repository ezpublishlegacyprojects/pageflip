<?php
/**
 * EzPageflip extension for eZ Publish
 * Written by Bartek Olewiñski <bartman300@gmail.com>
 * Copyright (C) 2011. Bartek Olewiñski.  All rights reserved.
 * http://www.bartman3000.com
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; version 2 of the License.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA.
 */

class PageFlipInfo
{
    static function info()
    {
        return array(
            'Name' => "PageFlip extension for eZ Publish",
            'Version' => "1.0",
            'Author' => "<a href='http://www.bartman3000.com'>Bartek Olewiñski</a>",
            'Copyright' => "Copyright (C) 2011 Bartek Olewiñski",
            'License' => "GNU General Public License v2.0",
            'Includes the following third-party software' => array( 'Name' => 'Dynamic Page Flip',
                                                                    'Version' => '2',
                                                                    'Copyright' => 'Copyright (c) 2006 Brett Tackaberry'
                                                                    'License' => 'General Public License',
                                                                    'For more information' => 'http://76design.ca/pageflip' ),
            'Includes the following third-party software (2)' => array( 'Name' => 'SWFObject',
            								'Version' => "2.2",
                                                                        'License' => 'The MIT License',
                                                                        'For more information' => 'http://code.google.com/p/swfobject'   
                                                                              )
        );
    }
}
?>
