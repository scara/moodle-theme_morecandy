<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Theme Morecandy upgrade.
 *
 * @package    theme_morecandy
 * @copyright  2015 LazyDaisy.uk
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Theme_more upgrade function.
 *
 * @param  int $oldversion The version we upgrade from.
 * @return bool
 */
function xmldb_theme_morecandy_upgrade($oldversion) {
    global $CFG;

    if ($oldversion < 2015030502) {

        // Set the default settings as they might already be set.
        set_config('sidewayheadercolor', '#336699', 'theme_morecandy');

        upgrade_plugin_savepoint(true, 2015030502, 'theme', 'morecandy');
    }

    // Moodle v2.9.0 release upgrade line.
    // Put any upgrade step following this.

    return true;
}
