<?php
/*
    WISPBill a PHP based ISP billing platform
    Copyright (C) 2015  Turtles2

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU Affero General Public License as published
    by the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU Affero General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.

	@turtles2 on ubiquiti community, DSLReports and Netonix 
 */
require_once('./session.php');
require_once('./fileloader.php');
$_SESSION['exitcode'] = '';
$_SESSION['exitcodev2'] = '';
$_SESSION['errorcode'] = '';
$_SESSION['id'] = '';
$_SESSION['id2'] = '';
$_SESSION['id3'] = '';
$_SESSION['email'] = '';
$_SESSION['errorcode'] ='';
echo'<br><a href="dashbored.php">Dashboard</a></br>';
echo'<br><a href="drawcova.php">Draw Coverage</a></br>'; // in dask
echo'<br><a href="mapleads.php">Map Leads</a></br>'; // In Dash
echo'<br><a href="mapsites.php">Map Sites</a></br>'; // IN Dash
echo'<br><a href="mapcov.php">Map Coverage</a></br>'; // In dash
echo"<br><a href='mapcus.php'>Map Customer's</a></br>"; //In Dash
echo'<br><a href="createdevice.php">Add a Device to Inventory</a></br>'; // In Dash
echo'<br><a href="createadminuser.php">Create Admin User</a></br>';
echo'<br><a href="deleteadminuser.php">Delete Admin User</a></br>';
echo'<br><a href="createcontact.php">Create a Contact</a></br>'; // In Dash
echo'<br><a href="createcontactnote.php">Create a Note about a Contact</a></br>'; // In dash
echo'<br><a href="viewcontact.php">View Contacts</a></br>'; // In Dash
echo'<br><a href="viewcontactnotes.php">View Contacts Notes</a></br>';//In dash
echo'<br><a href="createsite.php">Create a Site</a></br>'; // IN Dash
echo'<br><a href="createplan.php">Create a Service Plan</a></br>'; // In dash
echo"<br><a href='billcustomer.php'>Change a Customer's Billing Information</a></br>"; // In Dash
echo"<br><a href='emailcustomer.php'>Change a Customer's Email</a></br>"; // In Dash
echo"<br><a href='phonecustomer.php'>Change a Customer's Phone Number</a></br>"; // In Dash
echo"<br><a href='viewcustomer.php'>View Customer's</a></br>"; // In Dash
echo'<br><a href="viewplan.php">View Service Plans</a></br>'; // In Dash
echo'<br><a href="createlead.php">Create a Lead</a></br>'; // In Dash
echo'<br><a href="convertleadin.php">Convert Lead to An Install</a></br>'; // In Dash
echo'<br><a href="convertlead.php">Convert Lead to An Account</a></br>'; // In Dash
echo'<br><a href="setbill.php">Set up Billing</a></br>'; // In Dash
echo'<br><a href="linkcusdevice.php">Link a Device to A Customer</a></br>'; // In Dash
echo'<br><a href="logout.php">Log Out</a></br>'; // In Dash
echo'<br><h1>Anything after this will not work without radius</h1></br>';

echo'<br><a href="deletecustomer.php">Delete a Customer</a></br>'; // In Dash
echo"<br><a href='changecusser.php'>Change a Customer's Service Plan</a></br>"; // In Dash
echo"<br><a href='ipcustomer.php'>Give a Customer a Static IP Address</a></br>"; // In Dash
echo"<br><a href='ipview.php'>View Static IP Assignments </a></br>"; // In Dash
echo"<br><a href='ipdelete.php'>Delete Static IP Assignments </a></br>";
echo"<br><a href='speedplan.php'>Change a Service Plan's Speed</a></br>"; // in dash
echo'<br><a href="deleteplan.php">Delete Service a Plan</a></br>'; // in dash

echo'<br><h1>These need librenms</h1></br>';
echo'<br><a href="linkdevice.php">Link a Device to LibreNMS</a></br>';
echo'<br><a href="configsite.php">Configure a Site</a></br>';

?>