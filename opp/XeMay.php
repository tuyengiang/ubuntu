<?php 
	class XeMay{
		//properties thuoc tinh
		var $banhxe;
		var $tocdo;
		var $mauxe;
		var $hangsx;
		//khoi tao

		function __construct($banhxe=2,$tocdo=60,$mauxe="",$hangsx=""){
			//tham so mac dinh
			$this->banhxe=$banhxe;
			$this->tocdo=$tocdo;
			$this->mauxe=$mauxe;
			$this->hangsx=$hangsx;
		}


		//phuong thuc - method
		function gettocdo(){
			return $this->tocdo;
		}
		function settocdo($tocdo){
			$this->tocdo=$tocdo;
		}

		function getmauxe(){
			return $this->mauxe;
		}
		function setmauxe($mauxe){
			$this->mauxe=$mauxe;
		}

		function gethangsx(){
			return $this->mauxe;
		}
		function sethangsx($hangsx){
			$this->hangsx=$hangsx;
		}

		function getbanhxe(){
			return $this->banhxe;
		}
		function setmauxe($banhxe){
			$this->banhxe=$banhxe;
		}
	}



	//tesst


	$xeMay
 	
