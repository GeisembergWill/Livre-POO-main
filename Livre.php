<?php
Class Livre{
        private string $_titre;
        private  $_nbreDePages;
        private  $_anneeDeParution;
        private int$_prix;

       


        public function __construct($titre,$nbreDePages,$anneeDeParution,$prix){
        $this->_titre = $titre;
        $this->_nbreDePages = $nbreDePages;
        $this->_anneeDeParution = $anneeDeParution;
        $this->_prix = $prix;
}

        public function getTitre(){
        return $this->_titre;
}
        public function setTitre($titre){
        $this->_titre=$titre;
}
      
        public function getNbreDePages(){
        return  $this->_nbreDePages;
}
        public function setNbreDePages($nbreDePages){
        $this->_nbreDePages=$nbreDePages;
}
         
        public function getAnneeDeParution(){
        return $this->_anneeDeParution;
}
        public function setAnneeDeParution($anneeDeParution){
        $this->_anneeDeParution=$anneeDeParution;
}

        public function _getPrix(){
        return $this->_prix;
}
        public function setPrix($prix){
        $this->_prix=$Prix;
}
        
        public function __toString(){
        return "$this->_titre($this->_anneeDeParution) : $this->_nbreDePages pages /$this->_prix € <br>";
            
}
}
        
