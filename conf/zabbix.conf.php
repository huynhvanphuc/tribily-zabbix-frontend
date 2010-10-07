<?php
/*
** ZABBIX
** Copyright (C) 2000-2010 SIA Zabbix
**
** This program is free software; you can redistribute it and/or modify
** it under the terms of the GNU General Public License as published by
** the Free Software Foundation; either version 2 of the License, or
** (at your option) any later version.
**
** This program is distributed in the hope that it will be useful,
** but WITHOUT ANY WARRANTY; without even the implied warranty of
** MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
** GNU General Public License for more details.
**
** You should have received a copy of the GNU General Public License
** along with this program; if not, write to the Free Software
** Foundation, Inc., 675 Mass Ave, Cambridge, MA 02139, USA.
**/

global $DB;

$DB["TYPE"]		= 'MYSQL';
$DB["SERVER"]		= '127.0.0.1';
$DB["PORT"]		= '8889';
$DB["DATABASE"]		= 'zabbix';
$DB["USER"]		= 'root';
$DB["PASSWORD"]		= 'root';
$ZBX_SERVER		= 'localhost';
$ZBX_SERVER_PORT	= '10051';

$IMAGE_FORMAT_DEFAULT	= IMAGE_FORMAT_PNG;
?>
