<?php
	class User{
		private $host="localhost";
		private $felhasznalonev="root";
		private $jelszo="";
		private $abNev="pizzahot";
		private $kapcsolat;
		
		//Gergo
		//konstuktor
		public function __construct() {	
		
		$this->kapcsolat = new mysql(
			$this->host,
			$this->felhasznaloNev,
			$this->jelszo,
			$this->adatbazis
		);
	
		//ékezetes betűk
		$this->kapcsolat->query("SET NAMES UTF8");
		}

		public function reg_felhasznalo($nev, $email, $jelszo){
			//jelszó titkosítása
			$jelszo = md5($jelszo);
			//lekérdezem a felhasznalo adatai alapján, létezik-e már?
			$select1="SELECT * FROM felhasznalo WHERE nev='$nev' OR email='$email'";
			//ha nem, felveszem/beszúrom a táblába az adatait; szerkesztő lesz alapból, és a bejelentkezett mező 0
			if ($felhasznalonev) {
				# code...
			}
			$felhasznalonev=$this->kapcsolat->querry($select1);
				//visszatérek a lekérdezés eredményével (sikerült-e beszúrni)
			//különben hamis
		}

		
		public function bejelentkezes($emailNev, $jelszo){
			//jelszó titkosítása
			//lekérdezés: email vagy nev a megadott érték
			//ha már létezik, 
				//állítsuk be a login kulcsot a sessionben igazra,
				//hozzuk létre a felhAzon kulcsú sessiont,
					//segítség:  $result->fetch_array(MYSQLI_ASSOC);
				//módosítsuk a bejelentkezést 1-re! térjünk vissza igazzal!
			//különben hamissal térjünk vissza!
    	}

    	
    	public function get_nev($felhAzon){
    		//felhAzon alapján név visszaadása
			//$result->fetch_array(MYSQLI_ASSOC);
    	}
		
		public function adminE($felhAzon){
    		//lekérdezés
    	}

	    public function kijelentkezes() {
			$felhAzon = $_SESSION['felhAzon'];
			//módosítsd a bejelentkezett mezőt 0-ra!
	        //állítsd a session login kulcsát hamisra!
	        //állítsd le a sessiont!
	    }
		
		public function aktivok(){
			//lekérdezés
		}
		
		public function megjelenit_aktivok($matrix){
			//listázza az eredményt
		}

	}
?>