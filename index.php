<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ProjetoFinal</title>
    </head>
    <body>
        <pre>
        <?php
        // Codigo Principal
        require_once 'Video.php';
        require_once 'Garfanhoto.php';
        require_once 'Vizualizacao.php';
        $v[0] = new Video("Aula 1 de POO");
        $v[1] = new Video("Aula 12 de PHP");
        $v[2] = new Video("Aula 13 Curso em Video");
        
        $g[0] = new Garfanhoto("Jubileu", 22, "M", "Juba");
        $g[1] = new Garfanhoto("Creusa", 12, "F", "Creuzita");
         
        $vis[0] = new Vizualizacao($g[0], $v[2]);
        $vis[1] = new Vizualizacao($g[0], $v[1]);
        
        $vis[0]->avaliar();
        $vis[1]->avaliarPorc(85);
        
        print_r($vis);
        abstract class pai {
  public function herdado() {
   $this->sobrescrito();
  }
  protected function sobrescrito() {
   echo 'pai';
  }
}
class filha extends pai {
  protected function sobrescrito() {
   echo 'filha';
  }
}
$teste = new filha();
$teste->herdado();
        
        ?>
        </pre>
    </body>
</html>
