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
            $tipo = substr($product,0,$posicao);
            $tamanho = substr($product,$posicao+1);
            if (in_array($tipo, $produto)) {
                if (in_array($tamanho, $produto[$tipo])) {
                    $produto[$tipo][$tamanho]++;
                } else{
                    $produto[$tipo][$tamanho] = 1;
                }            
            } else {
                $produto[$tipo] = $tamanho;
                if (in_array($tamanho, $produto[$tipo])) {
                    $produto[$tipo][$tamanho]++;
                } else{
                    $produto[$tipo][$tamanho] = 1;
                }
                
            }
           
                   
        }  

            
        return [];
    }
}