<?php
namespace App;

class ProductStructure
{
    const products = [
        "preto-PP",
        "preto-M",
        "preto-G",
        "preto-GG",
        "preto-GG",
        "branco-PP",
        "branco-G",
        "vermelho-M",
        "azul-XG",
        "azul-XG",
        "azul-XG",
        "azul-P"
    ];

    public function make(): array
    {
                    
        $produto = array();
        foreach (products as $key => $product) {
            $posicao = strpos($product,'-'); 
            $cor = substr($product,0,$posicao); // Captura a cor da roupa (preto, branco, etc)
            $tipo = substr($product,$posicao+1); // Captura o tipo da roupa (PP, GG, etc)
            if (array_key_exists($cor, $produto)) {
                if (array_key_exists($tipo, $produto[$cor])) {
                    ++$produto[$cor][$tipo];
                } else{
                    $produto[$cor][$tipo] = 1;
                }            
            } else {
                $produto[$cor][$tipo] = 1;                
            }            
		}
        return $produto;
    }  

            
        
    
}