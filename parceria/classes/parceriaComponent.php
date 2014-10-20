<?php
class parceriaComponent extends classes\Component\Component{
public function listParceiros($model, $it){
        echo "<ul id='empresa_empresa_principais' class='list-style:none'>";
            $nome = $it['dsimagem'];
            $image  = $this->getImage($nome);
            $link   = $it['dslink'];
            echo "<li class='col-xs-3 l_parceiros'>";
                echo "<a href='$link'  target='_blank'>$image</a>";
            echo "</li>";
        echo "</ul>";
    }
    
    public function getImage($nome){
        if(is_array($nome)){
            if(!isset($nome['dsnome'])){return "";}
            $nome = $nome['codcvm'];
        }
        $url = URL_IMAGENS."parceria/$nome";
        return "<img src='$url'>";
    }
}
?>