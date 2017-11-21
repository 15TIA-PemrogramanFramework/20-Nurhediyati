<?php  if ( ! defined("BASEPATH")) exit("No direct script access allowed");
	function generate_sidemenu()
	{
		return '<li>
		<a href="'.site_url('home').'">
		<i class="fa fa-home"></i> Home</a>
		</li><li>
		<a href="'.site_url('mahasiswa').'">
		<i class="fa fa-user"></i> Mahasiswa</a>
		</li>';
	}