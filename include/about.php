<?php
/*
 *  Copyright (C) 2020 Nazmul Islam
 *
 *  This program is free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
session_start();
// hide all error
error_reporting(0);
if (!isset($_SESSION["mikhmon"])) {
  header("Location:../admin.php?id=login");
} else {
}
?>
<style>
.iFWrapper {
	position: relative;
	padding-bottom: 56.25%; /* 16:9 */
	padding-top: 25px;
	height: 0;
}
.iFWrapper iframe {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
  height: 100%;
  border :none;
}
</style>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3><i class="fa fa-info-circle"></i> About</h3>
      </div>
      <div class="card-body">
        <h3>CLOUD NETWORK V<?= $_SESSION['v']; ?></h3>
<p>
  This application is dedicated to hotspot entrepreneurs wherever you are. I wish you more success.
</p>
<p>
  <ul>
    <li>
      Author : Nazmul Islam
    </li>
    <li>
      API Class : <a href="https://github.com/BenMenking/routeros-api">routeros-api</a>
    </li>
    <li>
      Website : <a href="https://nazmulislam.xyz">nazmulislam.xyz</a>
    </li>
    <li>
      Facebook : <a href="https://fb.com/nazmul.islam.it">fb.com/nazmul.islam.it</a>
    </li>
  </ul>
</p>
<p>
  Thank you to everyone who has supported the development of CLOUD NETWORK.
</p>
<div>
    <i>Copyright &copy; <i> 2020 Nazmul Islam</i></i>
</div>
</div>
</div>
</div>
</div>
