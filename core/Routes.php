<?php
/**
 * @package Core
 * @subpackage Routes
 * @version 2.0
 * @category Routes
 * @access public
 * @since 1.0
 * @license MIT
 * @author Samuel
 * o namespace é aonde a classe está localizada
 */
namespace Core; 

class Routes{
    /**
     * @var string $url
     * @access private
     * essa variavel vai ser usada dentro do metodo construtor
     */
    private string $url; 
    /**
     * @var string $urlController
     * @access private
     * essa variavel vai ser usada dentro do metodo construtor
     * ela vai receber a url do controller
     */
    private string $urlController;
    /**
     * @var string $urlMethod
     * @access private
     * vai chamar o metodo da classe que vai ser chamada
     * 
     */
    private string $urlMethod;
    
    /**
     * @var array $urlArray
     * @access private
     * essa variavel vai receber a url por conta do metodo explode, que vai quebrar a url e vai atribuir a url em um array, ou seja, cada parte da url vai ser um elemento do array
     */
    private array $urlArray;





/**
 * @method __construct()
 * @access public
 * @return void
 * esse metodo construtor, assim que a classe for instanciada, ele vai atribuir a url a variavel url.
 */
public function __construct(){
    
    
    /**
     * @var string $url
     * essa variavel vai receber a url que vem do metodo get, e vai ser filtrada com o filtro FILTER_DEFAULT(que é o filtro padrão)
     * se a url não estiver vazia, ele vai atribuir a url a variavel url, se não, ele vai atribuir a url home/index
     * Se a url estiver vazia, ele vai aparecer no teste : url vazia e vai mostrar a variavel url nao inicializada
     */

    if(!empty(filter_input(INPUT_GET, 'url', FILTER_DEFAULT))){
        $this->url = filter_input(INPUT_GET, 'url', FILTER_DEFAULT);
        /**
         * @var string $url
         * esse teste com o var_dump, vai mostrar a url que esta sendo recebida pelo metodo get
         * var_dump($this->url);
         */
        
        

        /**
         * explode('/', $this->url);
         * essa função vai quebrar a url, e vai atribuir a url em um array, e vai separar a url por barra
         */
        $this->urlArray = explode('/', $this->url);
        /**
         * @var string $urlController
         * essa variavel vai receber a url do controller
         * No caso deste var_dump, usar para testar a url, e ver se a url esta sendo quebrada e atribuida ao array
         */
        var_dump($this->urlArray);
        /**
         * @var string $urlController
         * nesse momento essa variavel vai receber a primeira parte da url, que é o controller que vai ser chamado
         * no urlMethod, ele vai receber o metodo que vai ser chamado e que está na segunda parte da url
         */
       
         /**
          * Nessa verificação, ele vai verificar se a urlArray[0] e a urlArray[1] estão setadas, se estiverem setadas, ele vai atribuir a urlController a urlArray[0], e o urlMethod vai receber a urlArray[1]

          */
        if((isset($this->urlArray[0])) && (isset($this->urlArray[1]))){
            $this->urlController = $this->urlArray[0];
            $this->urlMethod = $this->urlArray[1];
        }else{
        
        /**
         * @var string $url
         * essa variavel vai receber a url home/index
         * No caso de vazia,ou seja, nao passar nenhum parametro na url, ele vai atribuir a url erro, ou seja, vai redirecionar para a pagina erro
         */
        $this->urlController = "erro";
        
        /**
         * @var string $urlMethod
         * essa variavel vai receber o metodo index
         */
        $this->urlMethod = "index";

    }

}else{
   
    $this->urlController = "home";
    $this->urlMethod = "index";

}
/**
 * @var string $urlController
 * esse teste vai mostrar a url controller
 * echo "url controller: {$this->urlController} e url method: {$this->urlMethod}";
 */



}

/**
 * @method load()
 * @access public
 * @return void
 * esse metodo vai carregar o controller
 */

public function load(){
    echo "Carregando...";   
}
    
    }



?>