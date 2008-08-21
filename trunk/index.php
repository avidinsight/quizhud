<?php
//////////
// QuizHUD entry-point. Re-directs to the regular browser pages.
// Author: Peter R. Bloomfield
//
//
// GPL:
//
// This program is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
// 
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
// 
// You should have received a copy of the GNU General Public License
// along with this program.  If not, see <http://www.gnu.org/licenses/>.
//////////

require_once('config.php');
require_once('lib.php');

// It would be nice if we could redirect depending on whether or not we detect
//  the access coming from the quizHUD device in SL.
// Unfortunately, it does not seem to be possible at this time.
$url = QUIZHUD_WWW_ROOT.'/browser/index.php';
header('Location: '.$url);
exit('You should have been re-directed to this address: '.$url);

?>
